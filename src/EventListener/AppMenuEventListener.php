<?php

namespace App\EventListener;

use App\Model\Package;
use App\Service\PackageService;
use Knp\Menu\ItemInterface;
use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\BootstrapBundle\Menu\MenuBuilder;
use Survos\BootstrapBundle\Traits\KnpMenuHelperInterface;
use Survos\BootstrapBundle\Traits\KnpMenuHelperTrait;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'onMenuEvent')]

final class AppMenuEventListener implements KnpMenuHelperInterface
{
    use KnpMenuHelperTrait;

    public function __construct(
        private PackageService $packageService,
        private ?AuthorizationCheckerInterface $security=null)
    {
    }

    public function onMenuEvent(KnpMenuEvent $event): void
    {
        $menu = $event->getMenu();
        $options = $event->getOptions();

        $this->addMenuItem($menu, ['route' => 'app_homepage']);
        // for nested menus, don't add a route, just a label, then use it for the argument to addMenuItem
        $nestedMenu = $this->addMenuItem($menu, ['label' => 'Credits']);
        foreach (['bundles', 'javascript'] as $type) {
            // $this->addMenuItem($nestedMenu, ['route' => 'survos_base_credits', 'rp' => ['type' => $type], 'label' => ucfirst($type)]);
            $this->addMenuItem($nestedMenu, ['uri' => "#$type" , 'label' => ucfirst($type)]);
        }

        $this->addHeading($menu, "Bundles");
        /** @var Package $package */
        foreach ($this->packageService->getPackages() as $package) {
            $this->add($menu, 'app_package', rp: ['packageCode' => $package->getPackageCode()]);
        }
        $this->add($menu, uri: 'https://github.com/survos/survos', label: "Survos Bundles", external: true);

        $this->addHeading($menu, "External Links");
        $this->add($menu, uri: 'https://github.com/survos/survos', label: "Survos Bundles", external: true);

    }

    /*
    * @return array The event names to listen to
    */
    public static function getSubscribedEvents()
    {
        return [
            KnpMenuEvent::MENU_EVENT => 'onMenuEvent',
        ];
    }
}
