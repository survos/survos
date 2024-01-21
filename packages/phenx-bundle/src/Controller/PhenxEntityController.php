<?php

namespace PhenxBundle\Controller;

use PhenxBundle\Entity\Domain;
use PhenxBundle\Entity\Measure;
use PhenxBundle\Entity\PhenxEntity;
use PhenxBundle\Entity\PhenxProtocol;
use PhenxBundle\Entity\Variable;
use PhenxBundle\Form\SearchPhenxQuestionsForm;
use Posse\SurveyBundle\Controller\PosseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Phenxentity controller.
 *
 * @Route("phenxentity")
 */
class PhenxEntityController extends PosseController
{
    /**
     * Lists all phenxEntity entities.
     *
     * @Route("/", name="phenx_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $q = $request->get('q');
        $em = $this->getDoctrine()->getManager();

        $phenxEntities = $em->getRepository('PhenxBundle:PhenxEntity')->findBy([], ['phenxId'=>'ASC'], 200);

        return
            $this->render('@Phenx/PhenxEntity/domains.html.twig', array(
            'phenxEntities' => $phenxEntities,
                'q' => $q
        ));
    }

    /**
     * Search Phenx Variables
     *
     * @Route("/show_question", name="phenx_question_show")
     * @Method("GET")
     */
    public function showQuestionAction(Request $request)
    {

    }

    /**
     * Search Phenx Variables
     *
     * @Route("/search_questions/{moduleCode}", name="phenx_search_by_question")
     * @Method("GET")
     */
    public function searchAction(Request $request, $moduleCode)
    {
        $em = $this->getDoctrine()->getManager('phenx');
        $module = $this->getModule($request, true, $moduleCode);

        $defaults = ['q' => null];
        $form = $this->createForm(SearchPhenxQuestionsForm::class, $defaults);
        $form->handleRequest($request);
        $service = $this->get('phenx.import');

        $qb = $em->getRepository(Variable::class)->createQueryBuilder('v');
        if ($form->isValid() && $form->isSubmitted()) {
            $queryBuilder = $this->get('petkopara_multi_search.builder')->searchForm($qb, $form->get('q'));
            return $this->render('@Phenx/PhenxEntity/variables.html.twig', [
                'form' => $form->createView(),
                'phenxService' => $service,
                'module' => $module,
                'variables' => $queryBuilder->setMaxResults(10)->getQuery()->getResult()
            ]);
        }

        return
            $this->render('@Phenx/PhenxEntity/variables.html.twig', array(
                'form' => $form->createView(),
                'phenxService' => $service,
                'module' => $module,
                'variables' => $qb->setMaxResults(20)->getQuery()->getResult()
            ));
    }


    /**
     * Finds and displays a phenxEntity entity.
     *
     * @Route("/domain/{phenxId}", name="phenx_domain_show")
     * @Method("GET")
     */
    public function showDomainAction(Request $request, Domain $phenxEntity)
    {

        return $this->render('@Phenx/PhenxEntity/' . $request->get('_route') . '.html.twig', array(
            'd' => $phenxEntity,
            'phenxService' => $this->container->get('phenx.import') // for the router
        ));
    }

    /**
     * Finds and displays a phenxEntity entity.
     *
     * @Route("/measure/{phenxId}", name="phenx_measure_show")
     * @Route("/{phenxId}", name="phenx_show")
     * @Method("GET")
     */
    public function showMeasureAction(Request $request, Measure $phenxEntity)
    {

        return $this->render('@Phenx/PhenxEntity/' . $request->get('_route') . '.html.twig', array(
            'd' => $phenxEntity,
            'phenxService' => $this->container->get('phenx.import') // for the router
        ));
    }

    /**
     * Finds and displays a phenxEntity entity.
     *
     * @Route("/protocol/{phenxId}", name="phenx_protocol_show")
     * @Method("GET")
     */
    public function showPhenxProtocolAction(Request $request, PhenxProtocol $phenxEntity)
    {

        return $this->render('@Phenx/PhenxEntity/' . $request->get('_route') . '.html.twig',
            array(
            'd' => $phenxEntity,
            'phenxService' => $this->container->get('phenx.import') // for the router
        ));
    }

    /**
     * @Route("/json/{phenxId}.{_format}", name="phenx_protocol_json")
     */
    public function jsonAction(Request $request, PhenxProtocol $protocol, $_format = 'json')
    {
        $service = $this->container->get('phenx.import');
        // $protocol = ProtocolQuery::create()->findPk($protocolId);
        if (!$survey = $service->protocolToSurvey($protocol)) {
            throw new \Exception("Cannot load from protocol");
        }
        // $survey->setPhenxProtocolId($id);

        $taskService = $this->container->get('posse.survey.task_manager');

        return new JsonResponse($taskService->renderSurvey($survey));
    }

}
