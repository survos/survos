<?php

namespace Survos\PixieBundle\Menu;

use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\BootstrapBundle\Service\MenuService;
use Survos\BootstrapBundle\Traits\KnpMenuHelperInterface;
use Survos\BootstrapBundle\Traits\KnpMenuHelperTrait;
use Survos\PixieBundle\Service\PixieService;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

// events are
/*
// #[AsEventListener(event: KnpMenuEvent::NAVBAR_MENU2)]
#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU, method: 'sidebarMenu')]
#[AsEventListener(event: KnpMenuEvent::PAGE_MENU, method: 'pageMenu')]
#[AsEventListener(event: KnpMenuEvent::FOOTER_MENU, method: 'footerMenu')]
#[AsEventListener(event: KnpMenuEvent::AUTH_MENU, method: 'appAuthMenu')]
*/

final class PixieMenu implements KnpMenuHelperInterface
{
    use KnpMenuHelperTrait;

    public function __construct(
        #[Autowire('%kernel.environment%')] protected string $env,
        private PixieService $pixieService,
        private ?MenuService $menuService=null,
        private ?Security $security=null,
        private ?AuthorizationCheckerInterface $authorizationChecker = null
    ) {
    }

    public function appAuthMenu(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $this->menuService->addAuthMenu($menu);
    }

//    #[AsEventListener(event: KnpMenuEvent::PAGE_MENU)]
    #[AsEventListener(event: KnpMenuEvent::NAVBAR_MENU)]
    public function pixiePageMenu(KnpMenuEvent $event): void
    {
        // there must be a pixie.  Messy, because this goes in app, need to add it to the config in pixie
        $menu = $event->getMenu();
        if (!$pixieCode = $event->getOption('pixieCode')) {
            return; // pixie  browse should be handled outside of this menu.
        }

        if (!$this->isGranted('ROLE_ADMIN')) {
            return;
        }
        $this->add($menu, 'pixie_browse_configs');

            $this->addHeading($menu, $pixieCode);
            foreach (['pixie_schema','flickr_slideshow'] as $pixieRoute) {
                $this->add($menu, $pixieRoute, ['pixieCode' => $pixieCode]);
            }
            // get from config? Or ?
            $this->addHeading($menu, '|');
            $kv = $this->pixieService->getStorageBox($pixieCode);

            $tableName = $event->getOption('tableName');
                $subMenu = $this->addSubmenu($menu, $tableName ?: "choose");
                $this->add($subMenu, 'pixie_overview', ['pixieCode' => $pixieCode]);
                foreach ($kv->getTableNames() as $tName) {
//                    $this->add($menu, 'pixie_meili_browse', ['tableName' => $tableName, 'pixieCode' => $pixieCode], label: $tableName);
                    $tableRp = ['tableName' => $tName, 'pixieCode' => $pixieCode];
                    $this->add($subMenu, 'pixie_meili_browse', $tableRp, label: $tName);
                }
//            } else {
//                $subMenu = $this->addSubmenu($menu, $tableName);
//            }
////                foreach ($kv->getTableNames() as $tableName) {
//                    assert($tableName);
//                    $tableRp = ['tableName' => $tableName, 'pixieCode' => $pixieCode];
//                    $this->add($subMenu, 'pixie_meili_browse', $tableRp, label: $tableName);
//                    // we have a table, so display the table name with a link back and the table-specific menu
//                    $this->add($menu, 'pixie_meili_browse', $tableRp, label: "Search $pixieCode:$tableName");
//                }
        if ($tableName) {
            if ($this->isGranted('ROLE_ADMIN')) {
                $this->add($menu, 'pixie_table', ['tableName' => $tableName, 'pixieCode' => $pixieCode], label: "Raw Overview");
                $this->add($menu, 'pixie_browse', ['tableName' => $tableName, 'pixieCode' => $pixieCode], label: "Raw Browse");
            }
                $subMenu  = $this->addSubmenu($menu, 'properties');
                foreach ($kv->getTable($tableName)->getProperties() as $property) {
                    $this->add($subMenu, 'pixie_show_property', [
                        'tableName' => $tableName,
                        'pixieCode' => $pixieCode,
                        'propertyCode' => $property->getCode(),
                    ], label: $property->getCode());
                }
        }

        if ($tableName && $this->isGranted('ROLE_ADMIN')) {
            $this->addHeading($menu, label: "Entity Breadcrumbs!");
            $tableRp = ['tableName' => $tableName, 'pixieCode' => $pixieCode];
            $this->add($menu, 'pixie_meili_browse', $tableRp, label: 'Search ' . $tableName);
            if ($key = $event->getOption('itemKey')) {
                $tableRp = ['tableName' => $tableName, 'pixieCode' => $pixieCode, 'key' => $key];
                $this->add($menu, 'pixie_show_record', $tableRp, label: $key);
            }

        }

    }

    #[AsEventListener(event: KnpMenuEvent::NAVBAR_MENU)]
    public function navbarMenu(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $options = $event->getOptions();
        return;

        // we could put the specific active pixie, and a link to all pixies.
        // use the velzon App pop-up for the tables

        //        $this->add($menu, 'app_homepage');
        // for nested menus, don't add a route, just a label, then use it for the argument to addMenuItem

        $nestedMenu = $this->addSubmenu($menu, 'PixieBundle');
        foreach (['bundles', 'javascript'] as $type) {
            // $this->addMenuItem($nestedMenu, ['route' => 'survos_base_credits', 'rp' => ['type' => $type], 'label' => ucfirst($type)]);
            $this->addMenuItem($nestedMenu, ['uri' => "#$type", 'label' => ucfirst($type)]);
        }
        $this->addHeading($menu, $event->getOption('pixieCode')?:'no-pixie');
    }
}
