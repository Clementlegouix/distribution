<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.result_cache_pool' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';

$this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('hmwVh6ZTfH', 0, ($this->targetDirs[0].'/pools'));

$instance->setLogger(($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

return $instance;
