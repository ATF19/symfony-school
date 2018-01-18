<?php

namespace My\schoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use My\schoolBundle\Entity\Specialite;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SpecialiteController extends Controller
{
    /**
     * @Route("/editSpecialite/{id}",name = "edit_specialite")
     * @Route("/Specialite_new",name = "Specialite_new")
     */
    public function addSpecialiteAction(Request $request, $id=null)
    {
      $message = "";
      $em = $this->getDoctrine()->getManager();
     if (isset($id))
     {
      // modification d'un acteur existant : on recherche ses données
      $Specialite = $em->find('MyschoolBundle:Specialite', $id);
      if (!$Specialite)
      {
      $message='Aucune Specialite trouvé';
      }
     }
     else
     {
      // ajout d'un nouvel acteur
      $Specialite = new Specialite();
     }

 $f = $this->createFormBuilder($Specialite)
->add('libelle','text',array('label' => 'Libelle Specialite : '))
->getForm();
 $f ->handleRequest($request);
    if ($f->isValid())
   {
         $em = $this->getDoctrine()->getManager();
            $em->persist($Specialite);
            $em->flush();

   }
   $em = $this->getDoctrine()->getManager();
     $classes = $em->getRepository('MyschoolBundle:Specialite')->findAll();
        return $this->render('MyschoolBundle:Specialite:add_specialite.html.twig', array(
            'f' => $f->createView(),'cls' => $classes
        ));
    }

    /**
     * @Route("/listSpecialite",name = "Specialite_list")
     */
    public function listSpecialiteAction()
    {
        $em = $this->getDoctrine()->getManager();
     $Classe = $em->getRepository('MyschoolBundle:Specialite')->findAll();
        return $this->render('MyschoolBundle:Specialite:list_specialite.html.twig', array(
            'enss' => $Classe
        ));
    }

    /**
     * @Route("/remSpecialite/{id}",name ="remove_specialite")
     */
    public function removeSpecialiteAction($id)
    {$em = $this->getDoctrine()->getManager();
$specialite = $em->find('MyschoolBundle:Specialite', $id);

 if (!$specialite)
 {
 throw new NotFoundHttpException("Specialite non trouvé");
 }

 $em->remove($specialite);
 $em->flush();
 return new RedirectResponse($this->container->get('router')->generate('Specialite_list'));
    }

    /**
     * @Route("/editSpecialite"{id}",name = "edit_specialite")
     * @Route("/addspecialite",name = "new_specialite")
     */

   /* public function editSpecialiteAction($id)
    {
        $message='';
 $em = $this->getDoctrine()->getManager();
if (isset($id))
{
 // modification d'un acteur existant : on recherche ses données
 $sepecialite = $em->find('MyschoolBundle:Specialite', $id);
 if (!$sepecialite)
 {
 $message='Aucun Enseignant trouvé';
 }
}
else
{
$Specialite = new Specialite();
 $f = $this->createFormBuilder($Specialite)
->add('libelle','text',array('label' => 'Libelle Specialite : '))
->getForm();
 $f ->handleRequest($request);
    if ($f->isValid())
   {
         $em = $this->getDoctrine()->getManager();
            $em->persist($Specialite);
            $em->flush();

if (isset($id))
 {
 $message='Enseignant modifié avec succès !';
 }
 else
 {
 $message='Enseignant ajouté avec succès !';
}}
    }
        return $this->render('MyschoolBundle:Specialite:edit_specialite.html.twig', array(
            'f' => $f->createView(),
 'message' => $message
        ));
    }
*/
}
