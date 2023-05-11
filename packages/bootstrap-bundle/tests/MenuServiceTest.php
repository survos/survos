<?php

namespace Survos\BootstrapBundle\Tests;

use Knp\Menu\ItemInterface;
use PHPUnit\Framework\TestCase;
use Survos\BootstrapBundle\Service\MenuService;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MenuServiceTest extends TestCase
{
    public function testMenuItems()
    {
        $menuService = $this->mockMenuService();
        $item = $this->createMock(ItemInterface::class);

        $item = $menuService->addMenuItem($item, [
            'extras' => [],
            'id' => 'test-id',
            'route' => 'app_test',
            'external' => true,
            'label' => 'Test label',
            'description' => 'Test Description',
        ]);

        $this->assertInstanceOf(ItemInterface::class, $item);
    }

    public function testAuthMenuItems()
    {
        $menuService = $this->mockMenuService();

        $item = $this->createMock(ItemInterface::class);

        $item = $menuService->addAuthMenu($item, [
            'extras' => [],
            'id' => 'test-id',
            'route' => 'app_test',
            'external' => true,
            'label' => 'Test label',
            'description' => 'Test Description',
        ]);

        $this->assertInstanceOf(ItemInterface::class, $item);
    }

    protected function mockMenuService(): MenuService
    {
        return new MenuService($this->createMock(AuthorizationCheckerInterface::class));
    }
}
