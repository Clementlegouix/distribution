<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'knp_menu.factory' shared service.

include_once $this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/Factory/ExtensionInterface.php';
include_once $this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/Integration/Symfony/RoutingExtension.php';
include_once $this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/FactoryInterface.php';
include_once $this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/MenuFactory.php';

$this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

$instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(($this->services['router'] ?? $this->getRouterService())), 0);

return $instance;
