<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.menu_provider.lazy' shared service.

include_once $this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/LazyProvider.php';

return $this->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(array('main' => array(0 => function () {
    return ($this->privates['app.menu_builder'] ?? $this->load(__DIR__.'/getApp_MenuBuilderService.php'));
}, 1 => 'createMainMenu')));
