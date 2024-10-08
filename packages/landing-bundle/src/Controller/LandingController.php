<?php

namespace Survos\LandingBundle\Controller;

use App\Entity\ApiToken;
use App\Entity\LoginToken;
use App\Entity\User;
use App\Form\ForgotPasswNordFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Survos\LandingBundle\Form\ChangePasswordFormType;
use Survos\LandingBundle\LandingService;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Texts\SVGText;
use SVG\SVG;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class LandingController extends AbstractController
{

    public function __construct(private LandingService $landingService)
    {
    }

    /**
     * @Route("/", name="app_homepage")
     */
    public function landing(Request $request)
    {
        return $this->render("@SurvosLanding/landing.html.twig", [
        ]);
    }

    /**
     * @Route("/logo", name="app_logo")
     */
    public function logo(Request $request)
    {
        $image = new SVG(100, 100);
        $doc = $image->getDocument();

// circle with radius 20 and green border, center at (50, 50)
        $doc->addChild(
            (new SVGCircle(50, 50, 20))
                ->setStyle('fill', 'none')
                ->setStyle('stroke', '#0F0')
                ->setStyle('stroke-width', '2px')
        );

        $doc->addChild(
            (new SVGText('{Tn}', 33, 55))
            ->setStyle('text-size', '12px')
        );

        return new Response($image, 200, ['Content-Type' => 'image/svg+xml']);

// rasterize to a 200x200 image, i.e. the original SVG size scaled by 2.
// the background will be transparent by default.
        /*
        $rasterImage = $image->toRasterImage(200, 200);

        header('Content-Type: image/png');
        imagepng($rasterImage);
        */
    }

    /**
     * @Route("/profile", name="app_profile")
     */
    public function profile(Request $request)
    {
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }
        return $this->render('@SurvosLanding/profile.html.twig', [

            'user' => $this->getUser(),
            'oauthClients' => $this->landingService->getOauthClients(),
            'oauthClientKeys' => $this->landingService->getOauthClientKeys(),
            'change_password_form' => $form->createView()
        ]);

        return $this->render("@SurvosLanding/profile.html.twig", [
        ]);
    }

    /**
     * @Route("/typography", name="app_typography")
     */
    public function typography(Request $request)
    {
        return $this->render("@SurvosLanding/typography.html.twig", [
            'user' => $this->getUser()
        ]);
    }


    /**
     * @Route("/impersonate", name="redirect_to_impersonate")
     */
    public function impersonate(Request $request)
    {
        $id = $request->get('id');
        if (!$user = $this->entityManager->find(User::class, $id)) {
            return new NotFoundHttpException("Hmm, user $id wasn't found!");
        }

        $redirectUrl =$this->generateUrl('app_homepage', ['_switch_user' => $user->getEmail() ]);
        return new RedirectResponse($redirectUrl);
    }

//    #[\Symfony\Component\Routing\Attribute\Route('survos_')]
    public function bundles(Request $request)
    {
        // bad practice to inject the kernel.  Maybe read composer.json and composer.lock
        $json = file_get_contents('../composer.json');
        $lock = file_get_contents('../composer.lock');

        dd($json, $lock);
        return $this->render("@SurvosLanding/credits.html.twig", [
            'composerData' => json_decode($json, true),
        ]);
    }

    /**
     * @Route("/login-with-token", name="app_login_with_token")
     */
    public function loginWithToken(Request $request)
    {

        // the authenticator should catch this
    }

    /**
     * @Route("/change-password", name="app_change_password")
     */
    public function changePassword(Request $request)
    {

        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        return $this->render('@SurvosLanding/profile.html.twig', [
            'change_password_form' => $form->createView()
        ]);

        // the authenticator should catch this
    }

    private function getLoginMessage($email, $loginUrl) {
        $message = (new \Swift_Message('One Time Login'))
            ->setFrom('tacman@gmail.com')
            ->setTo($email)
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    '@SurvosLanding/email/forgot.html.twig',
                    ['email' => $email, 'url' => $loginUrl]
                ),
                'text/html'
            )

            // you can remove the following code if you don't define a text version for your emails
                /*
            ->addPart(
                $this->renderView(
                // templates/emails/registration.txt.twig
                    'emails/registration.txt.twig',
                    ['name' => $name]
                ),
                'text/plain'
            )
                */
        ;

        return $message;

    }

    /**
     * @Route("/one-time-login-request", name="app_one_time_login_request")
     */
    public function oneTimeLoginRequest(Request $request)
    {
        $form = $this->createForm(ForgotPasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // first, see if they have one
            $email = $form->get('email')->getData();
            if (!$user = $this->userProvider->loadUserByUsername($email)) {
                $this->addFlash('error', "Email $email not found");
                return $this->redirectToRoute('app_one_time_login_request');
            }

            if (!$oneTimeLogin = $this->entityManager->getRepository(LoginToken::class)->findOneBy(['user' => $user])) {
                $oneTimeLogin = new LoginToken($user);
                $this->entityManager->persist($oneTimeLogin);
                $this->entityManager->flush();
            }
            try {
            } catch (\Exception $e) {
            }

                $loginLink = $this->generateUrl('app_login_with_token', ['_one_time_token' => $oneTimeLogin->getToken()], UrlGeneratorInterface::ABSOLUTE_URL);
                $message = $this->getLoginMessage($email, $loginLink);
                $this->mailer->send($message);
            try {
            } catch (\Exception $exception) {
                // something's wrong with sending the message
            }
            $this->addFlash('notice', "Email sent to $email");

            return $this->redirectToRoute('app_one_time_login_request', [

            ]);
        }

        return $this->render("@SurvosLanding/forgot_password.html.twig", [
            'form' => $form->createView()
        ]);


    }

}
