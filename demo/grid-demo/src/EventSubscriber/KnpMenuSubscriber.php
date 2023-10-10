<?php

namespace App\EventSubscriber;

use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\BootstrapBundle\Service\MenuService;
use Survos\BootstrapBundle\Traits\KnpMenuHelperTrait;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

class KnpMenuSubscriber implements EventSubscriberInterface
{
    use KnpMenuHelperTrait;

    public function __construct(private MenuService $menuService)
    {
    }

    // top of page content
    public function onKnpTopMenuEvent(KnpMenuEvent $event): void
    {
    }

    public function onNavbarMenuEvent(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $menuService = $this; // was $this->menuService;, but now everything is in the trait
        $this->add($menu, 'app_congress_index');
        $sub = $this->addSubmenu($menu, 'sub');

        $menuService->addMenuItem($sub, [
            'route' => 'app_congress_index',
            'label' => 'Congress (HTML)',
        ]);
        $menuService->addMenuItem($sub, [
            'route' => 'app_congress_browse',
            'label' => 'Congress (API)',
        ]);
        $sub = $menuService->addMenuItem($menu, [
            'label' => 'Admin',
        ]);
        $menuService->addMenuItem($sub, [
            'route' => 'api_doc',
            'label' => 'API',
        ]);

        // could create a new menu for auth
//        $menuService->addAuthMenu($menu);

//        $this->authMenu();
    }

    public static function getSubscribedEvents(): array
    {
        return [];
        return [
            KnpMenuEvent::PAGE_MENU_EVENT => 'onKnpTopMenuEvent',
            KnpMenuEvent::NAVBAR_MENU_EVENT => 'onNavbarMenuEvent',
            KnpMenuEvent::SIDEBAR_MENU_EVENT => 'onNavbarMenuEvent',
            // KnpTopMenuEvent::class => 'onKnpTopMenuEvent',
        ];
    }
}
