<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.runtime.httpkernel' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';
include_once $this->targetDirs[2].'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';

return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\ServiceLocator(array('inline' => function () {
    return ($this->privates['fragment.renderer.inline'] ?? $this->load(__DIR__.'/getFragment_Renderer_InlineService.php'));
})), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), true));
