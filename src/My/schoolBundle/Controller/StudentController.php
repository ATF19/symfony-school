<?php

namespace My\schoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use My\schoolBundle\Entity\Student;
use My\schoolBundle\Form\StudentType;
use My\schoolBundle\Entity\Classe;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StudentController extends Controller
{
    /**
     * @Route("/editClasse/{id}",name = "edit_classe")
     * @Route("/addClasse",name = "classe_new")
     */
    public function addClasseAction(Request $request, $id=null)
    {
        $message = "";
        $em = $this->getDoctrine()->getManager();
       if (isset($id))
       {
        // modification d'un acteur existant : on recherche ses données
        $classe = $em->find('MyschoolBundle:Classe', $id);
        if (!$classe)
        {
        $message='Aucune Classe trouvée';
        }
       }
       else
       {
        // ajout d'un nouvel acteur
        $classe = new Classe();
       }

 $f = $this->createFormBuilder($classe)
->add('libelle','text',array('label' => 'Libelle Classe : '))
->getForm();
 $f ->handleRequest($request);
    if ($f->isValid())
   {
         $em = $this->getDoctrine()->getManager();
            $em->persist($classe);
            $em->flush();

   }
   $em = $this->getDoctrine()->getManager();
     $classes = $em->getRepository('MyschoolBundle:classe')->findAll();

        return $this->render('MyschoolBundle:Student:add_classe.html.twig', array(
           'f' => $f->createView(),'cls' => $classes
        ));
    }

    /**
     * @Route("/listClasse",name = "classe_list")
     */
    public function listClasseAction()
    {
        $em = $this->getDoctrine()->getManager();
     $Classe = $em->getRepository('MyschoolBundle:Classe')->findAll();
        return $this->render('MyschoolBundle:Student:list_classe.html.twig', array(
           'enss' => $Classe
        ));
    }

    /**
     * @Route("/remClasse/{id}",name ="remove_classe")
     */
    public function removeClasseAction($id)
    {$em = $this->getDoctrine()->getManager();
$classe = $em->find('MyschoolBundle:Classe', $id);

 if (!$classe)
 {
 throw new NotFoundHttpException("Classe non trouvé");
 }

 $em->remove($classe);
 $em->flush();
 return new RedirectResponse($this->container->get('router')->generate('classe_list'));
    }


    /**
     * @Route("/editStudent/{id}",name = "edit_student")
     * @Route("/addStudent",name ="student_new")
     */
    public function addStudentAction(Request $request, $id=null)
    {
        $message="";
         $em = $this->getDoctrine()->getManager();
        if (isset($id))
        {
         // modification d'un acteur existant : on recherche ses données
         $Student = $em->find('MyschoolBundle:Student', $id);
         if (!$Student)
         {
         $message='Aucun Etudiant trouvé';
         }
        }
        else
        {
         $Student = new Student();
        }

        $form = $this->container->get('form.factory')->create(new StudentType(),
        $Student);
        $form ->handleRequest($request);
         if ($form->isValid())
        {
            $message="Ajout effectué avec succes";
            $em = $this->getDoctrine()->getManager();
            $Student->upload();
            $em->persist($Student);
            $em->flush();

        }
        return $this->render('MyschoolBundle:Student:add_student.html.twig', array(
            'f' => $form->createView(),
            'message' => $message,
        ));
    }

    /**
     * @Route("/listStudent",name = "student_list")
     */
    public function listStudentAction()
    {
        $em = $this->getDoctrine()->getManager();
     $students = $em->getRepository('MyschoolBundle:Student')->findAll();
        return $this->render('MyschoolBundle:Student:list_student.html.twig', array(
            'studs' => $students
        ));
    }


        /**
         * @Route("/rechStudent",name = "student_rech")
         * @Method({"GET", "POST"})
         */
        public function rechStudentAction(Request $request)
        {
            $nom = $request->query->get('nom');
           $em = $this->getDoctrine()->getManager();
           //$students = $em->getRepository('MyschoolBundle:Student')->findBy(array("nom" => $nom));
           $query = $em->createQuery("SELECT p FROM MyschoolBundle:Student p WHERE p.nom LIKE '%".$nom."%'");
            $students = $query->getResult();
            return $this->render('MyschoolBundle:Student:rech_student.html.twig', array(
                'studs' => $students
            ));
        }

    /**
     * @Route("/remStudent/{id}",name ="remove_student")
     */
    public function removeenseignantAction($id)
    {$em = $this->getDoctrine()->getManager();
$student = $em->find('MyschoolBundle:Student', $id);

 if (!$student)
 {
 throw new NotFoundHttpException("Etudiant non trouvé");
 }

 $em->remove($student);
 $em->flush();
 return new RedirectResponse($this->container->get('router')->generate('student_list'));
    }

}
