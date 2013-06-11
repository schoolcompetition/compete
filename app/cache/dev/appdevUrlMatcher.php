<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // compete_selectrole
        if ($pathinfo === '/role') {
            return array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::roleAction',  '_route' => 'compete_selectrole',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // compete_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::loginAction',  '_route' => 'compete_login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // compete_authenticate
        if ($pathinfo === '/auth') {
            return array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::authenticateAction',  '_route' => 'compete_authenticate',);
        }

        // compete_selectreg
        if ($pathinfo === '/reg') {
            return array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::registerAction',  '_route' => 'compete_selectreg',);
        }

        // compete_com_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'compete_com_homepage')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/users')) {
            // users
            if (rtrim($pathinfo, '/') === '/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'users');
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::indexAction',  '_route' => 'users',);
            }

            // users_show
            if (preg_match('#^/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::showAction',));
            }

            // users_new
            if (0 === strpos($pathinfo, '/users/new') && preg_match('#^/users/new/(?P<role>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_new')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::newAction',));
            }

            // users_create
            if (0 === strpos($pathinfo, '/users/create') && preg_match('#^/users/create/(?P<role>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_users_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_create')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::createAction',));
            }
            not_users_create:

            // users_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::editAction',));
            }

            // users_update
            if (preg_match('#^/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_users_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::updateAction',));
            }
            not_users_update:

            // users_delete
            if (preg_match('#^/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_users_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\UsersController::deleteAction',));
            }
            not_users_delete:

        }

        if (0 === strpos($pathinfo, '/tournamentquestions')) {
            // tournamentquestions
            if (rtrim($pathinfo, '/') === '/tournamentquestions') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tournamentquestions');
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::indexAction',  '_route' => 'tournamentquestions',);
            }

            // tournamentquestions_show
            if (preg_match('#^/tournamentquestions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamentquestions_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::showAction',));
            }

            // tournamentquestions_new
            if ($pathinfo === '/tournamentquestions/new') {
                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::newAction',  '_route' => 'tournamentquestions_new',);
            }

            // tournamentquestions_create
            if ($pathinfo === '/tournamentquestions/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tournamentquestions_create;
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::createAction',  '_route' => 'tournamentquestions_create',);
            }
            not_tournamentquestions_create:

            // tournamentquestions_edit
            if (preg_match('#^/tournamentquestions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamentquestions_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::editAction',));
            }

            // tournamentquestions_update
            if (preg_match('#^/tournamentquestions/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tournamentquestions_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamentquestions_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::updateAction',));
            }
            not_tournamentquestions_update:

            // tournamentquestions_delete
            if (preg_match('#^/tournamentquestions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tournamentquestions_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamentquestions_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::deleteAction',));
            }
            not_tournamentquestions_delete:

            // tournamentquestions_unapproved
            if ($pathinfo === '/tournamentquestions/listunapproved') {
                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::listunapprovedAction',  '_route' => 'tournamentquestions_unapproved',);
            }

            // tournamentquestions_approve
            if (preg_match('#^/tournamentquestions/(?P<id>[^/]++)/approve$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamentquestions_approve')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::approveAction',));
            }

            // tournamentquestions_approveupdate
            if (preg_match('#^/tournamentquestions/(?P<id>[^/]++)/approveupdate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamentquestions_approveupdate')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\TournamentQuestionsController::approveupdateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/schools')) {
            // schools
            if (rtrim($pathinfo, '/') === '/schools') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'schools');
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::indexAction',  '_route' => 'schools',);
            }

            // schools_show
            if (preg_match('#^/schools/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'schools_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::showAction',));
            }

            // schools_new
            if ($pathinfo === '/schools/new') {
                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::newAction',  '_route' => 'schools_new',);
            }

            // schools_create
            if ($pathinfo === '/schools/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_schools_create;
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::createAction',  '_route' => 'schools_create',);
            }
            not_schools_create:

            // schools_edit
            if (preg_match('#^/schools/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'schools_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::editAction',));
            }

            // schools_update
            if (preg_match('#^/schools/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_schools_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'schools_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::updateAction',));
            }
            not_schools_update:

            // schools_delete
            if (preg_match('#^/schools/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_schools_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'schools_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::deleteAction',));
            }
            not_schools_delete:

        }

        if (0 === strpos($pathinfo, '/competitions')) {
            // competitions
            if (rtrim($pathinfo, '/') === '/competitions') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'competitions');
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::indexAction',  '_route' => 'competitions',);
            }

            // competitions_show
            if (preg_match('#^/competitions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competitions_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::showAction',));
            }

            // competitions_new
            if ($pathinfo === '/competitions/new') {
                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::newAction',  '_route' => 'competitions_new',);
            }

            // competitions_create
            if ($pathinfo === '/competitions/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_competitions_create;
                }

                return array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::createAction',  '_route' => 'competitions_create',);
            }
            not_competitions_create:

            // competitions_edit
            if (preg_match('#^/competitions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competitions_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::editAction',));
            }

            // competitions_update
            if (preg_match('#^/competitions/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_competitions_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competitions_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::updateAction',));
            }
            not_competitions_update:

            // competitions_delete
            if (preg_match('#^/competitions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_competitions_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competitions_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\CompetitionsController::deleteAction',));
            }
            not_competitions_delete:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/artisticcompetitions')) {
                // artisticcompetitions
                if (rtrim($pathinfo, '/') === '/artisticcompetitions') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'artisticcompetitions');
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::indexAction',  '_route' => 'artisticcompetitions',);
                }

                // artisticcompetitions_show
                if (preg_match('#^/artisticcompetitions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artisticcompetitions_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::showAction',));
                }

                // artisticcompetitions_new
                if ($pathinfo === '/artisticcompetitions/new') {
                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::newAction',  '_route' => 'artisticcompetitions_new',);
                }

                // artisticcompetitions_create
                if ($pathinfo === '/artisticcompetitions/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_artisticcompetitions_create;
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::createAction',  '_route' => 'artisticcompetitions_create',);
                }
                not_artisticcompetitions_create:

                // artisticcompetitions_edit
                if (preg_match('#^/artisticcompetitions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artisticcompetitions_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::editAction',));
                }

                // artisticcompetitions_update
                if (preg_match('#^/artisticcompetitions/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_artisticcompetitions_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artisticcompetitions_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::updateAction',));
                }
                not_artisticcompetitions_update:

                // artisticcompetitions_delete
                if (preg_match('#^/artisticcompetitions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_artisticcompetitions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'artisticcompetitions_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\ArtisticCompetitionsController::deleteAction',));
                }
                not_artisticcompetitions_delete:

            }

            if (0 === strpos($pathinfo, '/answers')) {
                // answers
                if (rtrim($pathinfo, '/') === '/answers') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'answers');
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::indexAction',  '_route' => 'answers',);
                }

                // answers_show
                if (preg_match('#^/answers/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'answers_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::showAction',));
                }

                // answers_new
                if ($pathinfo === '/answers/new') {
                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::newAction',  '_route' => 'answers_new',);
                }

                // answers_create
                if ($pathinfo === '/answers/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_answers_create;
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::createAction',  '_route' => 'answers_create',);
                }
                not_answers_create:

                // answers_edit
                if (preg_match('#^/answers/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'answers_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::editAction',));
                }

                // answers_update
                if (preg_match('#^/answers/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_answers_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'answers_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::updateAction',));
                }
                not_answers_update:

                // answers_delete
                if (preg_match('#^/answers/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_answers_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'answers_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\AnswersController::deleteAction',));
                }
                not_answers_delete:

            }

        }

        if (0 === strpos($pathinfo, '/study')) {
            if (0 === strpos($pathinfo, '/studyquestions')) {
                // studyquestions
                if (rtrim($pathinfo, '/') === '/studyquestions') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'studyquestions');
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::indexAction',  '_route' => 'studyquestions',);
                }

                // studyquestions_show
                if (preg_match('#^/studyquestions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyquestions_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::showAction',));
                }

                if (0 === strpos($pathinfo, '/studyquestions/new')) {
                    // studyquestions_new
                    if ($pathinfo === '/studyquestions/new') {
                        return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::newAction',  '_route' => 'studyquestions_new',);
                    }

                    // studyquestions_newSearch
                    if ($pathinfo === '/studyquestions/news') {
                        return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::newSearchAction',  '_route' => 'studyquestions_newSearch',);
                    }

                }

                // studyquestions_search
                if ($pathinfo === '/studyquestions/search') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_studyquestions_search;
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\SchoolsController::searchAction',  '_route' => 'studyquestions_search',);
                }
                not_studyquestions_search:

                // studyquestions_result
                if ($pathinfo === '/studyquestions/result') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_studyquestions_result;
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::resultAction',  '_route' => 'studyquestions_result',);
                }
                not_studyquestions_result:

                // studyquestions_create
                if ($pathinfo === '/studyquestions/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_studyquestions_create;
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::createAction',  '_route' => 'studyquestions_create',);
                }
                not_studyquestions_create:

                // studyquestions_edit
                if (preg_match('#^/studyquestions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyquestions_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::editAction',));
                }

                // studyquestions_update
                if (preg_match('#^/studyquestions/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_studyquestions_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyquestions_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::updateAction',));
                }
                not_studyquestions_update:

                // studyquestions_delete
                if (preg_match('#^/studyquestions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_studyquestions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyquestions_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyQuestionsController::deleteAction',));
                }
                not_studyquestions_delete:

            }

            if (0 === strpos($pathinfo, '/studyanswers')) {
                // studyanswers
                if (rtrim($pathinfo, '/') === '/studyanswers') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'studyanswers');
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::indexAction',  '_route' => 'studyanswers',);
                }

                // studyanswers_show
                if (preg_match('#^/studyanswers/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyanswers_show')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::showAction',));
                }

                // studyanswers_new
                if ($pathinfo === '/studyanswers/new') {
                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::newAction',  '_route' => 'studyanswers_new',);
                }

                // studyanswers_create
                if ($pathinfo === '/studyanswers/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_studyanswers_create;
                    }

                    return array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::createAction',  '_route' => 'studyanswers_create',);
                }
                not_studyanswers_create:

                // studyanswers_edit
                if (preg_match('#^/studyanswers/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyanswers_edit')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::editAction',));
                }

                // studyanswers_update
                if (preg_match('#^/studyanswers/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_studyanswers_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyanswers_update')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::updateAction',));
                }
                not_studyanswers_update:

                // studyanswers_delete
                if (preg_match('#^/studyanswers/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_studyanswers_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyanswers_delete')), array (  '_controller' => 'Compete\\ComBundle\\Controller\\StudyAnswersController::deleteAction',));
                }
                not_studyanswers_delete:

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
