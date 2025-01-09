<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Entity\Project;
use App\Entity\Spreadsheet;
use App\Form\ContainerFormType;
use App\Form\ScreenFormType;
use App\Form\SpreadsheetType;
use App\Repository\ProfileRepository;
use App\Repository\ProjectRepository;
use App\Service\ImportService;
use App\Service\ImportXmlService;
use Doctrine\ORM\EntityManagerInterface;
use Survos\Providence\Model\Core;
use Survos\Providence\Model\SystemList;
use Survos\Providence\Services\ProfileService;
use Survos\Providence\XmlModel\ProfileMetaDataElement;
use Survos\Providence\XmlModel\ProfileScreen;
use Survos\Providence\XmlModel\ProfileUserInterface;

use Survos\Providence\XmlModel\XmlProfile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Yaml\Yaml;
use function Symfony\Component\String\u;

#[Route(path: '/profiles')]
class ProfileController extends AbstractController
{
    #[Route(path: '/browse', name: 'data_profiles')]
    #[Route(path: '/{projectId}/browse', name: 'project_data_profiles')]
    public function index(Request $request, ProfileService $profileService, ?Project $project = null): Response
    {
        $profiles = $profileService->getXmlProfiles();
        return $this->render('data_profile/index.html.twig', [
            'profiles' => $profiles,
            'project' => $project,
        ]);
    }

    #[Route(path: '/extract', name: 'profiles_extract')]
    public function extract(Request $request, ProfileService $profileService): Response
    {
        $profiles = $profileService->extractSystemTranslations();
        return $this->render('data_profile/index.html.twig', [
            'profiles' => $profiles,
        ]);
    }

    #[Route(path: '/data/simple_xml/{profileId}', name: 'profile_simple_xml')]
    public function detail(Profile $profile): Response
    {
        return $this->render('data_profile/detail.html.twig', [
            'profileRecord' => $profile,
            'profile' => $profile->getRawData(),
            'filename' => $profile->getFilename(),
        ]);
    }

    /**
     * @  Route("/data/profiles", name="data_profiles_xml")
     */
    public function profiles(Request $request, ProfileRepository $profileRepository, ProfileService $dataProfileService): Response
    {
        if ($request->get('reload')) {
            $dataProfileService->loadXml();
            return $this->redirectToRoute('data_profiles');
        }
        return $this->render('access/index.html.twig', [
            'profiles' => $profileRepository->findAll(),
            'code' => '',
        ]);
    }

    #[Route(path: '/xml/{profileId}_lists.{_format}', name: 'profile_lists')]
    public function xml_profile_lists(Request $request, Profile $profile, ProfileService $profileService, ?string $block = null, ?string $subBlock = null, $_format = 'html'): Response
    {
        $xmlProfile = $profileService->test($profile->getXml());
        return $this->render("data_profile/lists.html.twig", [
            'profile' => $xmlProfile,
        ]);
    }

    private function createSubForms(ProfileMetaDataElement $element, \App\XmlModel\Profile $xmlProfile, array &$forms)
    {
        // @todo: turn this into a form class so it can be repeated.  https://docstore.mik.ua/orelly/webprog/pcook/ch07_13.htm
        $form = $this->createFormBuilder($element);
        $form
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Create Task',
            ])
            ->getForm();

        $form = $this->createForm(ContainerFormType::class, $element, [
            'profile' => $xmlProfile,
        ]);
    }

    #[Route(path: '/export-yaml/{profileId}.{_format}', name: 'profile_export_yaml')]
    public function exportYaml(
        Request $request,
        XmlProfile $xmlProfile,
        ProfileService $profileService
    ) {
        $yaml = $profileService->asYaml($xmlProfile);
        $data = Yaml::parse($yaml);
        file_put_contents($fn = __DIR__ . './../../data/yaml/' . $xmlProfile->getProfileId() . '.yaml', $yaml);
        dd($fn, $data);
    }

    #[Route(path: '/import-xml/{projectId}/{profileId}.{_format}', name: 'profile_import')]
    public function import(
        Request $request,
        XmlProfile $xmlProfile,
        Project $project,
        ProjectRepository $projectRepository,
        ProfileService $profileService,
        EntityManagerInterface $entityManager,
        ImportService $importService,
        ImportXmlService $importXmlService,
        ?string $block = null,
        ?string $subBlock = null,
        $_format = 'html'
    ): Response {
        //        $profile = $this->profileService->loadXml($profileCode)[0];
        $importService->purge($project, false, true);
        $importService->setProject($project);
        $importXmlService
            ->setProject($project);
        $importXmlService
            ->importProfileXml($xmlProfile, $project);
        // we need to flush and reload for the relations set by setProject to work.

        $entityManager->flush();
        $entityManager->refresh($project);

        //        dd($project->getModuleConfigs()->count());
        //
        //        $profileService->loadXml($profile->getFilename());
        //        $importService->purge($project);
        //        //        $project = (new Project());
        //        $profileService->loadLabelsFromXml($profile->getXmlProfile());
        //        $importXmlService->importProfileXml($profile->getXmlProfile(), $project);
        //        //        dd($project->getAccessStatusCodes());
        //        // import XML profile in database Project (with users, lists, items, etc.)
        return $this->redirectToRoute('project_show', $project->getRP());
    }

    #[Route(path: '/yaml/export/{profileId}.{_format}', name: 'profile_export')]
    #[IsGranted('ROLE_ADMIN')]
    public function export_profile(
        Request $request,
        XmlProfile $xmlProfile,
        ProfileService $profileService,
        ?string $block = null,
        ?string $subBlock = null,
        $_format = 'html'
    ): Response {
        // these are the model cores.
        /** @var Core $core */
        //        foreach ($profileService->getCoreTypes() as $core)
        {
            //            $coreCode = $core->getCode();
            //            $listCode = $coreCode . '_types_list'; // $core->getTypesListCode();
            //            dd($profileService->getSystemList($listCode));
            // get the list.
            /**
             * @var  $code
             * @var SystemList $systemList
             */
            foreach ($profileService->getSystemLists() as $code => $systemList) {
                if (u($code)->endsWith('_label_types')) {
                } elseif (u($code)->endsWith('_types')) {
                    $types = $profileService->getSystemList($code);
                    // get the list elements from the profile

                    if ($systemList->getUsedBy()) {
                        $config[$systemList->getUsedBy()->getCode()] = [
                            'types' => $types,
                        ];
                    }
                }
            }
        }
        $yaml = $profileService->asYaml($xmlProfile);
        $data = Yaml::parse($yaml);
        file_put_contents($filename = __DIR__ . './../../data/yaml/' . $xmlProfile->getProfileId() . '.yaml', $yaml);

        $this->addFlash('notice', "Profile exported to YAML: " . $filename);
        return $this->redirectToRoute('profile_detail', $xmlProfile->getRp());
    }

    #[Route(path: '/xml/{profileId}.{_format}', name: 'profile_detail')]
    #[Route(path: '/xml_overview/{block}/{profileId}.{_format}', name: 'profile_block_overview')]
    #[Route(path: '/xml/{block}/{subBlock}/{profileId}.{_format}', name: 'profile_detail_block')]
//    #[IsGranted('ROLE_USER')]
    public function xml_profile(
        Request $request,
        //                                Profile $profile,
        XmlProfile $xmlProfile,
        ProfileService $profileService,
        ?string $block = null,
        ?string $subBlock = null,
        $_format = 'html'
    ): Response {
        //        $xmlProfile = $profileService->parseXml($xml = file_get_contents($profile->getFilename()));
        //        $profile->setXmlProfile($xmlProfile);
        //        if ($_format === 'xml') {
        //            return new Response($xml);
        //        }
        //        $xmlProfile = $profile->getXmlProfile();
        //        $xmlProfile = $profileService->parseXml($profile->getXml());
        // create the forms
        $forms = [];
        if ($block === 'relationshipTables') {
        }
        if (in_array($block, ['userInterfaces', 'userInterface'])) {
            // because forms can be nested and repeated, we need to create the Container forms first, so we can use them.
            foreach ($xmlProfile->getElements() as $element) {
                if ($element->isContainer()) {
                    //                    $this->createSubForm($element, $forms);
                    //                    dd($forms);
                }
            }

            /** @var ProfileUserInterface $userInterface */
            foreach ($xmlProfile->getUserInterfaces() as $userInterface) {
                /** @var ProfileScreen $screen */
                foreach ($userInterface->getScreens() as $screen) {
                    $screen->userInterface = $userInterface; // why isn't this automatically mapped?
                    $screenForm = $this->createForm(ScreenFormType::class, $screen, [
                        'profile' => $xmlProfile,
                    ]);
                    $screenForm->handleRequest($request);
                    //                    dd($screen);
                    $forms[$screen->getCode()] = $screenForm->createView();
                }
            }
        }
        //        dd($xmlProfile->relationshipTypes->getTables());
        return $this->render('xml/profile.html.twig', [
            'mdes' => $xmlProfile->getElementsByCode(),
            'code' => $xmlProfile->getFilename(),
            'profile' => $xmlProfile,
            'profileRecord' => null, // $profile,
            'subBlock' => $subBlock,
            'forms' => $forms,
            'block' => $block, // $request->get('_route')
        ]);
    }
}
