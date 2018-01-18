<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/classe')) {
                // classe_index
                if (rtrim($pathinfo, '/') === '/classe') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_classe_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'classe_index');
                    }

                    return array (  '_controller' => 'My\\schoolBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe_index',);
                }
                not_classe_index:

                // classe_show
                if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_classe_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'My\\schoolBundle\\Controller\\ClasseController::showAction',));
                }
                not_classe_show:

                // classe_edit
                if (preg_match('#^/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_classe_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'My\\schoolBundle\\Controller\\ClasseController::editAction',));
                }
                not_classe_edit:

                // classe_delete
                if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_classe_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'My\\schoolBundle\\Controller\\ClasseController::deleteAction',));
                }
                not_classe_delete:

            }

            if (0 === strpos($pathinfo, '/coefficient')) {
                // coefficient_index
                if (rtrim($pathinfo, '/') === '/coefficient') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coefficient_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'coefficient_index');
                    }

                    return array (  '_controller' => 'My\\schoolBundle\\Controller\\CoefficientController::indexAction',  '_route' => 'coefficient_index',);
                }
                not_coefficient_index:

                // coefficient_new
                if ($pathinfo === '/coefficient/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_coefficient_new;
                    }

                    return array (  '_controller' => 'My\\schoolBundle\\Controller\\CoefficientController::newAction',  '_route' => 'coefficient_new',);
                }
                not_coefficient_new:

                // coefficient_show
                if (preg_match('#^/coefficient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coefficient_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coefficient_show')), array (  '_controller' => 'My\\schoolBundle\\Controller\\CoefficientController::showAction',));
                }
                not_coefficient_show:

                // coefficient_edit
                if (preg_match('#^/coefficient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_coefficient_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coefficient_edit')), array (  '_controller' => 'My\\schoolBundle\\Controller\\CoefficientController::editAction',));
                }
                not_coefficient_edit:

                // coefficient_delete
                if (preg_match('#^/coefficient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_coefficient_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coefficient_delete')), array (  '_controller' => 'My\\schoolBundle\\Controller\\CoefficientController::deleteAction',));
                }
                not_coefficient_delete:

                // coefficient_delete1
                if (0 === strpos($pathinfo, '/coefficient/delete') && preg_match('#^/coefficient/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coefficient_delete1;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coefficient_delete1')), array (  '_controller' => 'My\\schoolBundle\\Controller\\CoefficientController::delete1Action',));
                }
                not_coefficient_delete1:

            }

        }

        // my_school_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_school_default_index');
            }

            return array (  '_controller' => 'My\\schoolBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_school_default_index',);
        }

        // my_school_enseignant_addenseignant
        if ($pathinfo === '/addenseignant') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\EnseignantController::addenseignantAction',  '_route' => 'my_school_enseignant_addenseignant',);
        }

        // edit_enseignant
        if (0 === strpos($pathinfo, '/editensegnant') && preg_match('#^/editensegnant(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_enseignant')), array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\EnseignantController::editenseignantAction',));
        }

        // new_enseignant
        if ($pathinfo === '/addEnseignant') {
            return array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\EnseignantController::editenseignantAction',  '_route' => 'new_enseignant',);
        }

        // remove_enseignant
        if (0 === strpos($pathinfo, '/remEnseignant') && preg_match('#^/remEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_enseignant')), array (  '_controller' => 'My\\schoolBundle\\Controller\\EnseignantController::removeenseignantAction',));
        }

        // list_enseignant
        if ($pathinfo === '/listenseignant') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\EnseignantController::listenseignantAction',  '_route' => 'list_enseignant',);
        }

        // enseignant_rech
        if ($pathinfo === '/rechEnseignant') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_enseignant_rech;
            }

            return array (  '_controller' => 'My\\schoolBundle\\Controller\\EnseignantController::rechEnseignantAction',  '_route' => 'enseignant_rech',);
        }
        not_enseignant_rech:

        if (0 === strpos($pathinfo, '/matiere')) {
            // matiere_index
            if (rtrim($pathinfo, '/') === '/matiere') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matiere_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matiere_index');
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere_index',);
            }
            not_matiere_index:

            // matiere_new
            if ($pathinfo === '/matiere/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_matiere_new;
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
            }
            not_matiere_new:

            // matiere_show
            if (preg_match('#^/matiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matiere_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_show')), array (  '_controller' => 'My\\schoolBundle\\Controller\\MatiereController::showAction',));
            }
            not_matiere_show:

            // matiere_edit
            if (preg_match('#^/matiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_matiere_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_edit')), array (  '_controller' => 'My\\schoolBundle\\Controller\\MatiereController::editAction',));
            }
            not_matiere_edit:

            // matiere_delete
            if (preg_match('#^/matiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_matiere_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'My\\schoolBundle\\Controller\\MatiereController::deleteAction',));
            }
            not_matiere_delete:

            // matiere_delete1
            if (0 === strpos($pathinfo, '/matiere/delete') && preg_match('#^/matiere/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matiere_delete1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete1')), array (  '_controller' => 'My\\schoolBundle\\Controller\\MatiereController::delete1Action',));
            }
            not_matiere_delete1:

        }

        if (0 === strpos($pathinfo, '/note')) {
            // note_index
            if (rtrim($pathinfo, '/') === '/note') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'note_index');
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\NoteController::indexAction',  '_route' => 'note_index',);
            }
            not_note_index:

            // note_new
            if ($pathinfo === '/note/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_note_new;
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\NoteController::newAction',  '_route' => 'note_new',);
            }
            not_note_new:

            // note_show
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_show')), array (  '_controller' => 'My\\schoolBundle\\Controller\\NoteController::showAction',));
            }
            not_note_show:

            // note_edit
            if (preg_match('#^/note/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_note_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_edit')), array (  '_controller' => 'My\\schoolBundle\\Controller\\NoteController::editAction',));
            }
            not_note_edit:

            // note_delete
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_note_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_delete')), array (  '_controller' => 'My\\schoolBundle\\Controller\\NoteController::deleteAction',));
            }
            not_note_delete:

        }

        // edit_specialite
        if (0 === strpos($pathinfo, '/editSpecialite') && preg_match('#^/editSpecialite(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_specialite')), array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\SpecialiteController::addSpecialiteAction',));
        }

        // Specialite_new
        if ($pathinfo === '/Specialite_new') {
            return array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\SpecialiteController::addSpecialiteAction',  '_route' => 'Specialite_new',);
        }

        // Specialite_list
        if ($pathinfo === '/listSpecialite') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\SpecialiteController::listSpecialiteAction',  '_route' => 'Specialite_list',);
        }

        // remove_specialite
        if (0 === strpos($pathinfo, '/remSpecialite') && preg_match('#^/remSpecialite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_specialite')), array (  '_controller' => 'My\\schoolBundle\\Controller\\SpecialiteController::removeSpecialiteAction',));
        }

        // edit_classe
        if (0 === strpos($pathinfo, '/editClasse') && preg_match('#^/editClasse(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_classe')), array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::addClasseAction',));
        }

        // classe_new
        if ($pathinfo === '/addClasse') {
            return array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::addClasseAction',  '_route' => 'classe_new',);
        }

        // classe_list
        if ($pathinfo === '/listClasse') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::listClasseAction',  '_route' => 'classe_list',);
        }

        // remove_classe
        if (0 === strpos($pathinfo, '/remClasse') && preg_match('#^/remClasse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_classe')), array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::removeClasseAction',));
        }

        // edit_student
        if (0 === strpos($pathinfo, '/editStudent') && preg_match('#^/editStudent(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_student')), array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::addStudentAction',));
        }

        // student_new
        if ($pathinfo === '/addStudent') {
            return array (  'id' => NULL,  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::addStudentAction',  '_route' => 'student_new',);
        }

        // student_list
        if ($pathinfo === '/listStudent') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::listStudentAction',  '_route' => 'student_list',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // student_rech
            if ($pathinfo === '/rechStudent') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_student_rech;
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::rechStudentAction',  '_route' => 'student_rech',);
            }
            not_student_rech:

            // remove_student
            if (0 === strpos($pathinfo, '/remStudent') && preg_match('#^/remStudent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_student')), array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::removeenseignantAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (0 === strpos($pathinfo, '/user/show') && preg_match('#^/user/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/user/log')) {
                // user_login
                if ($pathinfo === '/user/login') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_login;
                    }

                    return array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::loginAction',  '_route' => 'user_login',);
                }
                not_user_login:

                // user_logout
                if ($pathinfo === '/user/logout') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_logout;
                    }

                    return array (  '_controller' => 'My\\schoolBundle\\Controller\\UserController::logoutAction',  '_route' => 'user_logout',);
                }
                not_user_logout:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
