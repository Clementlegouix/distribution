<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        elseif (0 === strpos($pathinfo, '/lo')) {
            // loadAdherent
            if ('/load' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdherentController::LoadAdherent',  '_route' => 'loadAdherent',);
            }

            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
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

        if (0 === strpos($pathinfo, '/icon')) {
            // icon
            if ('/icon' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\IconController::index',  '_route' => 'icon',);
            }

            // creerIcon
            if ('/icon/creer' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\IconController::Creer',  '_route' => 'creerIcon',);
            }

            // supprimerIcon
            if (0 === strpos($pathinfo, '/icon/supprimer') && preg_match('#^/icon/supprimer/(?P<icon>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerIcon')), array (  '_controller' => 'App\\Controller\\IconController::delAdherent',));
            }

        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // role
        if ('/role' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RoleController::index',  '_route' => 'role',);
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

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
