<?php

namespace Survos\PixieBundle\EventListener;

use Survos\PixieBundle\Service\SqliteService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

final class PixieControllerEventListener
{
    public function __construct(
        private RequestStack $requestStack,
        private EntityManagerInterface $pixieEntityManager,
        private SqliteService $sqliteService
    )
    {

    }
    #[AsEventListener(ControllerEvent::class)]
    public function onKernelController(ControllerEvent $event): void
    {
        $request = $this->requestStack->getCurrentRequest();
        $pixieCode =  $request->get('pixieCode');
        if ($pixieCode) {
            $this->sqliteService->getPixieEntityManager($pixieCode);
        }
        return;
        dd($request, $pixieCode);
        $controller = $event->getController();

        // when a controller class defines multiple action methods, the controller
        // is returned as [$controllerInstance, 'methodName']
        if (is_array($controller)) {
            $controller = $controller[0];
        }
        if ($controller instanceof TokenAuthenticatedController) {
            $request = $event->getRequest();
            $method = $event->getRequest()->getMethod();
            $token = $request->query->get('token');

            if ($method == 'POST' && !in_array($token, $this->tokens)) {
//                throw new AccessDeniedHttpException('This action needs a valid token!');
            }
        }
//        dd($event, $controller);
    }
}
