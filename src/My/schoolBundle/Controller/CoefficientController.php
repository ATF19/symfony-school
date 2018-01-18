<?php

namespace My\schoolBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use My\schoolBundle\Entity\Coefficient;
use My\schoolBundle\Form\CoefficientType;

/**
 * Coefficient controller.
 *
 * @Route("/coefficient")
 */
class CoefficientController extends Controller
{
    /**
     * Lists all Coefficient entities.
     *
     * @Route("/", name="coefficient_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $coefficients = $em->getRepository('MyschoolBundle:Coefficient')->findAll();
        return $this->render('coefficient/index.html.twig', array(
            'coefficients' => $coefficients,
        ));
    }

    /**
     * Creates a new Coefficient entity.
     *
     * @Route("/new", name="coefficient_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $coefficient = new Coefficient();
        $form = $this->createForm('My\schoolBundle\Form\CoefficientType', $coefficient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coefficient);
            $em->flush();

            return $this->redirectToRoute('coefficient_show', array('id' => $coefficient->getId()));
        }

        return $this->render('coefficient/new.html.twig', array(
            'coefficient' => $coefficient,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Coefficient entity.
     *
     * @Route("/{id}", name="coefficient_show")
     * @Method("GET")
     */
    public function showAction(Coefficient $coefficient)
    {
        $deleteForm = $this->createDeleteForm($coefficient);

        return $this->render('coefficient/show.html.twig', array(
            'coefficient' => $coefficient,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Coefficient entity.
     *
     * @Route("/{id}/edit", name="coefficient_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Coefficient $coefficient)
    {
        $deleteForm = $this->createDeleteForm($coefficient);
        $editForm = $this->createForm('My\schoolBundle\Form\CoefficientType', $coefficient);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coefficient);
            $em->flush();

            return $this->redirectToRoute('coefficient_edit', array('id' => $coefficient->getId()));
        }

        return $this->render('coefficient/edit.html.twig', array(
            'coefficient' => $coefficient,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Coefficient entity.
     *
     * @Route("/{id}", name="coefficient_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Coefficient $coefficient)
    {
        $form = $this->createDeleteForm($coefficient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coefficient);
            $em->flush();
        }

        return $this->redirectToRoute('coefficient_index');
    }

    /**
     * Creates a form to delete a Coefficient entity.
     *
     * @param Coefficient $coefficient The Coefficient entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Coefficient $coefficient)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coefficient_delete', array('id' => $coefficient->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Deletes a Coefficient entity.
     *
     * @Route("/delete/{id}", name="coefficient_delete1")
     * @Method("GET")
     */
    public function delete1Action(Request $request, $id)
    {
      $em = $this->getDoctrine()->getManager();
  $coefficient = $em->find('MyschoolBundle:Coefficient', $id);

   if (!$coefficient)
   {
   throw new NotFoundHttpException("Coefficient non trouvé");
   }

   $em->remove($coefficient);
   $em->flush();

        return $this->redirectToRoute('coefficient_index');
    }
}
