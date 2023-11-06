<?php

namespace App\EventListener;

use App\Controller\CongressController;
use App\Controller\TermCrudController;
use App\Entity\Official;
use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\BootstrapBundle\Traits\KnpMenuHelperInterface;
use Survos\BootstrapBundle\Traits\KnpMenuHelperTrait;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'sidebarMenu')]
#[AsEventListener(event: KnpMenuEvent::PAGE_MENU_EVENT, method: 'pageMenu')]
#[AsEventListener(event: KnpMenuEvent::NAVBAR_MENU_EVENT, method: 'navbarMenu')]
final class AppMenuMenuEventListener implements KnpMenuHelperInterface
{
    use KnpMenuHelperTrait;

    // this should be optional, not sure we really need it here.
    public function __construct(private ?AuthorizationCheckerInterface $security = null)
    {
    }

    public function navbarMenu(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $options = $event->getOptions();

        foreach (['app_homepage','app_credit', 'app_simple','app_grid'] as $route) {
            $this->add($menu, $route);
        }
        // for nested menus, don't add a route, just a label, then use it for the argument to addMenuItem

        $nestedMenu = $this->addSubmenu($menu, 'Credits');

        foreach (['bundles', 'javascript'] as $type) {
            // $this->addMenuItem($nestedMenu, ['route' => 'survos_base_credits', 'rp' => ['type' => $type], 'label' => ucfirst($type)]);
            $this->addMenuItem($nestedMenu, ['uri' => "#$type", 'label' => ucfirst($type)]);
        }

        foreach ([CongressController::class,
//                     TermCrudController::class
                 ] as $controllerClass) {
            $controllerMenu = $this->addSubmenu($menu,
                label: (new \ReflectionClass($controllerClass))->getShortName());
            foreach (['grid','api_grid','simple_datatables',
//                         'index',
                         'new',
//                         'crud_index'
                     ] as $controllerRoute) {
                $this->add($controllerMenu, $controllerClass.'::'.$controllerRoute,
                    label: $controllerRoute);
            }

        }
    }

public function pageMenu(KnpMenuEvent $event): void
{
}

public function sidebarMenu(KnpMenuEvent $event): void
{
}
}
