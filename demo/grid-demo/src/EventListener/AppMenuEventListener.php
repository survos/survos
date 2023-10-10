<?php

// listens for menu events for the "App" domain.

namespace App\EventListener;

use App\Service\SneatService;
use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\BootstrapBundle\Traits\KnpMenuHelperInterface;
use Survos\BootstrapBundle\Traits\KnpMenuHelperTrait;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'appSidebar', priority: 50)]
#[AsEventListener(event: KnpMenuEvent::NAVBAR_MENU_EVENT, method: 'onTopNavMenuEvent', priority: 50)]
#[AsEventListener(event: KnpMenuEvent::AUTH_MENU_EVENT, method: 'onAuthMenu', priority: 50)]
#[AsEventListener(event: KnpMenuEvent::class, method: 'onCustomEvent')]
#[AsEventListener(event: KnpMenuEvent::FOOTER_MENU_EVENT, method: 'onFooter')]
#[AsEventListener(event: 'foo', priority: 42)]
#[AsEventListener(event: 'bar', method: 'onBarEvent')]
final class AppMenuEventListener implements KnpMenuHelperInterface
{
    use KnpMenuHelperTrait;

    public function __construct(
        private AuthorizationCheckerInterface $security)
    {
    }

    public function onCustomEvent(KnpMenuEvent $event): void
    {
            dump($event->getOptions(), $event) && assert(false);
    }

    public function onAuthMenu(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $childOptions = [];
        if ($this->security->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $this->addMenuItem($menu, [
                    'route' => 'app_logout', 'label' => 'menu.logout', 'childOptions' => $childOptions]
            )->setLabelAttribute('icon', 'fas fa-sign-out-alt');
        } else {
            $menu->addChild(
                'login',
                ['route' => 'app_login', 'label' => 'menu.login', 'childOptions' => $childOptions]
            )->setLabelAttribute('icon', 'fas fa-sign-in-alt');

            try {
                $menu->addChild(
                    'register',
                    ['route' => 'app_register', 'label' => 'menu.register', 'childOptions' => $childOptions]
                )->setLabelAttribute('icon', 'fas fa-sign-in-alt');
            } catch (\Exception $exception) {
                // route is likely missing
            }
        }
    }


    public function appSidebar(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $this->addHeading($menu, 'Faker');
//        foreach ()

        $nestedMenu = $this->addMenuItem($menu, ['label' => 'Credits']);
        foreach (['bundles', 'javascript'] as $type) {
            // $this->addMenuItem($nestedMenu, ['route' => 'survos_base_credits', 'rp' => ['type' => $type], 'label' => ucfirst($type)]);
            $this->addMenuItem($nestedMenu, ['uri' => "#type" , 'label' => ucfirst($type)]);
        }




        // add the login/logout menu items.
        $this->authMenu($this->security, $menu);

    }


    public function onTopNavMenuEvent(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();

//        $this->addMenuItem($menu, ['route' => 'tzunghaor_settings_scope_search']);
        $this->addMenuItem($menu, ['route' => 'app_congress_index']);
        return;

        $this->addMenuItem($menu, array(
            'icon' => 'menu-icon tf-icons bx bx-home-circle',
            'label' => 'Dashboard',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'index',
                ),
        ));
        $this->addMenuItem($menu, array(
            'icon' => 'menu-icon tf-icons bx bx-home-circle',
            'label' => 'Debug Menu',
            'route' => 'app_menu',
            'rp' =>
                array(
                    'page' => 'index',
                ),
        ));
        $layoutsMenu = $this->addMenuItem($menu, array(
            'label' => 'Layouts',
            'icon' => 'menu-icon tf-icons bx bx-layout',
        ));
        $this->addMenuItem($layoutsMenu, array(
            'icon' => false,
            'label' => 'Without menu',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'layouts-without-menu',
                ),
        ));

        $this->addMenuItem($layoutsMenu, array(
            'icon' => false,
            'label' => 'Without navbar',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'layouts-without-navbar',
                ),
        ));
        $this->addMenuItem($layoutsMenu, array(
            'icon' => false,
            'label' => 'Container',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'layouts-container',
                ),
        ));
        $this->addMenuItem($layoutsMenu, array(
            'icon' => false,
            'label' => 'Fluid',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'layouts-fluid',
                ),
        ));
        $this->addMenuItem($layoutsMenu, array(
            'icon' => false,
            'label' => 'Blank',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'layouts-blank',
                ),
        ));
        $accountSettingsMenu = $this->addMenuItem($menu, array(
            'label' => 'Account Settings',
            'icon' => 'menu-icon tf-icons bx bx-dock-top',
        ));
        $this->addMenuItem($accountSettingsMenu, array(
            'icon' => false,
            'label' => 'Account',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'pages-account-settings-account',
                ),
        ));
        $this->addMenuItem($accountSettingsMenu, array(
            'icon' => false,
            'label' => 'Notifications',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'pages-account-settings-notifications',
                ),
        ));
        $this->addMenuItem($accountSettingsMenu, array(
            'icon' => false,
            'label' => 'Connections',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'pages-account-settings-connections',
                ),
        ));
        $authenticationsMenu = $this->addMenuItem($menu, array(
            'label' => 'Authentications',
            'icon' => 'menu-icon tf-icons bx bx-lock-open-alt',
        ));
        $this->addMenuItem($authenticationsMenu, array(
            'icon' => false,
            'label' => 'Login',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'auth-login-basic',
                ),
        ));
        $this->addMenuItem($authenticationsMenu, array(
            'icon' => false,
            'label' => 'Register',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'auth-register-basic',
                ),
        ));
        $this->addMenuItem($authenticationsMenu, array(
            'icon' => false,
            'label' => 'Forgot Password',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'auth-forgot-password-basic',
                ),
        ));
        $miscMenu = $this->addMenuItem($menu, array(
            'label' => 'Misc',
            'icon' => 'menu-icon tf-icons bx bx-cube-alt',
        ));
        $this->addMenuItem($miscMenu, array(
            'icon' => false,
            'label' => 'Error',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'pages-misc-error',
                ),
        ));
        $this->addMenuItem($miscMenu, array(
            'icon' => false,
            'label' => 'Under Maintenance',
            'route' => 'app_page',
            'rp' =>
                array(
                    'page' => 'pages-misc-under-maintenance',
                ),
        ));

    }

    public function onFoo(): void
    {
        // ...
    }

    public function onBarEvent(): void
    {
        // ...
    }

    public function onFooter(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $this->add($menu, route: 'app_congress_browse');
        $subMenu = $this->addMenuItem($menu, ['label' => 'Sneat Theme']);
        $this->addMenuItem($subMenu, ['label' => 'Support', 'uri' => 'https://github.com/themeselection/sneat-html-admin-template-free/issues', 'external' => true]);
        $this->addMenuItem($subMenu, ['label' => 'Documentation', 'uri' => 'https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/', 'external' => true]);

    }


}
