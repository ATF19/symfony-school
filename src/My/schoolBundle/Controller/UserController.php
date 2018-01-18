<?php

namespace My\schoolBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use My\schoolBundle\Entity\User;
use My\schoolBundle\Form\UserType;
use My\schoolBundle\Form\Loginype;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('MyschoolBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('My\schoolBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_index', array());
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/show/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('My\schoolBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     *
     * @Route("/login", name="user_login")
     * @Method("POST")
     */
    public function loginAction(Request $request)
    {
        /*$message = "";
        $user = new User();
        $form = $this->createForm('My\schoolBundle\Form\LoginType', $user);
        $login = $user->getLogin();
        $password = $user->getPassword();
        $user = $this->getDoctrine()->getRepository('MyschoolBundle:User')->findOneBy(array('login' => $login, 'password' => $password));
        if($user) {
          return $this->redirectToRoute('user_index');
        }
        else {
          $message = "Login ou mot de passe incorrect !";

        }
        return $this->render('user_login', array(
          'user'=>$user,
          'form'=>$form->createView(),
          'message'=>$message
        ));*/
        $login = $request->get('login');
        $password = $request->get('password');
        $rep = $this->getDoctrine()->getRepository('MyschoolBundle:User');
        $user = $rep->findOneBy(array('login' => $login, 'password' => $password));
        if($user) {
          $session = new Session();
          $session->set('login', $user->getLogin());
          return $this->redirectToRoute('student_list');
        }
        else {
          $message = "Login ou mot de passe incorrect !";
        }
        $user = new User();
        $form = $this->createForm('My\schoolBundle\Form\LoginType', $user);
        return $this->render('user/index.html.twig', array(
          'user'=>$user,
          'form'=>$form->createView(),
          'message'=>$message
        ));
    }

    /**
     * @Route("/logout", name="user_logout")
     * @Method("GET")
     */
    public function logoutAction(Request $request)
    {
      $session = $request->getSession();
      $session->invalidate();
      $user = new User();
      $form = $this->createForm('My\schoolBundle\Form\LoginType', $user);
      return $this->render('user/index.html.twig', array(
        'user'=>$user,
        'form'=>$form->createView()
      ));
    }
}
