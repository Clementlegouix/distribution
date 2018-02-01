<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/adherent')) {
            // adherent
            if ('/adherent' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdherentController::index',  '_route' => 'adherent',);
            }

            // ajouterPassage
            if (0 === strpos($pathinfo, '/adherent/ajouterPassage') && preg_match('#^/adherent/ajouterPassage/(?P<adherent>[^/]++)/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterPassage')), array (  '_controller' => 'App\\Controller\\AdherentController::addPassage',));
            }

            if (0 === strpos($pathinfo, '/adherent/supprimer')) {
                // supprimerPassage
                if (0 === strpos($pathinfo, '/adherent/supprimerPassage') && preg_match('#^/adherent/supprimerPassage/(?P<passage>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerPassage')), array (  '_controller' => 'App\\Controller\\AdherentController::delPassage',));
                }

                // supprimeradherent
                if (preg_match('#^/adherent/supprimer/(?P<adherent>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimeradherent')), array (  '_controller' => 'App\\Controller\\AdherentController::delAdherent',));
                }

            }

            // creerAdherent
            if ('/adherent/creer' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdherentController::CreerAdherent',  '_route' => 'creerAdherent',);
            }

            // editerAdherent
            if (0 === strpos($pathinfo, '/adherent/editer') && preg_match('#^/adherent/editer/(?P<adherent>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editerAdherent')), array (  '_controller' => 'App\\Controller\\AdherentController::EditAdherent',));
            }

            // VoirAdherent
            if (preg_match('#^/adherent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'VoirAdherent')), array (  '_controller' => 'App\\Controller\\AdherentController::VoirAdherent',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'easyadmin'));
                }

                return $ret;
            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::index',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // role
        if ('/role' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RoleController::index',  '_route' => 'role',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/benevoles')) {
            // benevoles
            if ('/benevoles' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'benevoles',);
            }

            // desactiverbenevoles
            if (0 === strpos($pathinfo, '/benevoles/desactiverbenevoles') && preg_match('#^/benevoles/desactiverbenevoles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'desactiverbenevoles')), array (  '_controller' => 'App\\Controller\\UserController::desactiverbenevoles',));
            }

            // activerbenevoles
            if (0 === strpos($pathinfo, '/benevoles/activerbenevoles') && preg_match('#^/benevoles/activerbenevoles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activerbenevoles')), array (  '_controller' => 'App\\Controller\\UserController::activerbenevoles',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
