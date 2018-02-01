<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserChecker.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/UserAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/DaoAuthenticationProvider.php';

return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['security.user.provider.concrete.our_db_provider'] ?? $this->load(__DIR__.'/getSecurity_User_Provider_Concrete_OurDbProviderService.php')), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->load(__DIR__.'/getSecurity_EncoderFactory_GenericService.php')), true);
