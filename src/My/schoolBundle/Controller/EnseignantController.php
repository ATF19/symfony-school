<?php

namespace My\schoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use My\schoolBundle\Entity\Enseignant;
use Symfony\Component\HttpFoundation\Request;
use My\schoolBundle\Form\EnseignantType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class EnseignantController extends Controller
{
    /**
     * @Route("/addenseignant")
     */
    public function addenseignantAction(Request $request)
    {
        $message="";
        $enseignant= new Enseignant();
        $f=$this->container->get('form.factory')->create(new EnseignantType(),
        $enseignant);
        $f ->handleRequest($request);
         if ($f->isValid())
        {
            $message="Ajout effectué avec succes";
            $em = $this->getDoctrine()->getManager();
            $enseignant->upload();
            $em->persist($enseignant);
            $em->flush();


        }
        return $this->render('MyschoolBundle:Enseignant:addenseignant.html.twig', array(
            "f"=>$f->createView(),
            "message"=>$message,
        ));
    }

    /**
     * @Route("/editensegnant/{id}",name = "edit_enseignant")
     * @Route("/addEnseignant",name = "new_enseignant")
     */
    public function editenseignantAction(Request $request, $id = null)
    {        $message='';
 $em = $this->getDoctrine()->getManager();
if (isset($id))
{
 // modification d'un acteur existant : on recherche ses données
 $enseignant = $em->find('MyschoolBundle:Enseignant', $id);
 if (!$enseignant)
 {
 $message='Aucun Enseignant trouvé';
 }
}
else
{
 // ajout d'un nouvel acteur
 $enseignant = new Enseignant();
}
$form = $this->container->get('form.factory')->create(new EnseignantType(), $enseignant);
 $form ->handleRequest($request);
  if ($form->isValid())
    {
       $em = $this->getDoctrine()->getManager();
                   $enseignant->upload();
            $em->persist($enseignant);
            $em->flush();
if (isset($id))
 {
 $message='Enseignant modifié avec succès !';
 }
 else
 {
 $message='Enseignant ajouté avec succès !';
 }
    }
        return $this->render('MyschoolBundle:Enseignant:editenseignant.html.twig', array(
            'f' => $form->createView(),
 'message' => $message
        ));
    }

    /**
     * @Route("/remEnseignant/{id}",name ="remove_enseignant")
     */
    public function removeenseignantAction($id)
    {$em = $this->getDoctrine()->getManager();
$enseignant = $em->find('MyschoolBundle:Enseignant', $id);

 if (!$enseignant)
 {
 throw new NotFoundHttpException("Enseignant non trouvé");
 }

 $em->remove($enseignant);
 $em->flush();
 return new RedirectResponse($this->container->get('router')->generate('list_enseignant'));
    }
    /**
     * @Route("/listenseignant",name = "list_enseignant")
     */
    public function listenseignantAction()
    {
              $em = $this->getDoctrine()->getManager();
     $enseignants = $em->getRepository('MyschoolBundle:Enseignant')->findAll();

        return $this->render('MyschoolBundle:Enseignant:listenseignant.html.twig',
                array('enss' => $enseignants));

    }

    /**
     * @Route("/rechEnseignant",name = "enseignant_rech")
     * @Method({"GET", "POST"})
     */
    public function rechEnseignantAction(Request $request)
    {
        $nom = $request->query->get('nom');
        $em = $this->getDoctrine()->getManager();
     $enseignants = $em->getRepository('MyschoolBundle:Enseignant')->findBy(array("nom" => $nom));
        return $this->render('MyschoolBundle:Enseignant:rechenseignant.html.twig', array(
            'enss' => $enseignants
        ));
    }

}
