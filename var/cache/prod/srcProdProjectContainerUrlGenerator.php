<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'adherent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\AdherentController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adherent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterPassage' => array (  0 =>   array (    0 => 'adherent',    1 => 'user',  ),  1 =>   array (    '_controller' => 'App\\Controller\\AdherentController::addPassage',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'user',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'adherent',    ),    2 =>     array (      0 => 'text',      1 => '/adherent/ajouterPassage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerPassage' => array (  0 =>   array (    0 => 'passage',  ),  1 =>   array (    '_controller' => 'App\\Controller\\AdherentController::delPassage',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'passage',    ),    1 =>     array (      0 => 'text',      1 => '/adherent/supprimerPassage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimeradherent' => array (  0 =>   array (    0 => 'adherent',  ),  1 =>   array (    '_controller' => 'App\\Controller\\AdherentController::delAdherent',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'adherent',    ),    1 =>     array (      0 => 'text',      1 => '/adherent/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creerAdherent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\AdherentController::CreerAdherent',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adherent/creer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'VoirAdherent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\AdherentController::VoirAdherent',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/adherent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'role' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\RoleController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/role',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'benevoles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/benevoles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'desactiverbenevoles' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::desactiverbenevoles',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/benevoles/desactiverbenevoles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'activerbenevoles' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserController::activerbenevoles',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/benevoles/activerbenevoles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'easyadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
