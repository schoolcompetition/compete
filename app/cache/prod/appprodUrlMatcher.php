<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Compete\\ComBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
