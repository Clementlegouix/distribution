<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheCacheWarmer.php';

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function (): \Twig\Environment {
    return ($this->services['twig'] ?? $this->getTwigService());
})))->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->load(__DIR__.'/getTemplating_FinderService.php')), array(($this->targetDirs[2].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL, ($this->targetDirs[2].'/templates') => NULL, ($this->targetDirs[2].'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL));
