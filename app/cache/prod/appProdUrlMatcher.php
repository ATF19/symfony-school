<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // my_school_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_school_default_index');
            }

            return array (  '_controller' => 'My\\schoolBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_school_default_index',);
        }

        // my_school_student_addclasse
        if ($pathinfo === '/addClasse') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::addClasseAction',  '_route' => 'my_school_student_addclasse',);
        }

        // my_school_student_listclasse
        if ($pathinfo === '/listClasse') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::listClasseAction',  '_route' => 'my_school_student_listclasse',);
        }

        // my_school_student_addstudent
        if ($pathinfo === '/addStudent') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::addStudentAction',  '_route' => 'my_school_student_addstudent',);
        }

        // my_school_student_liststudent
        if ($pathinfo === '/listStudent') {
            return array (  '_controller' => 'My\\schoolBundle\\Controller\\StudentController::listStudentAction',  '_route' => 'my_school_student_liststudent',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
