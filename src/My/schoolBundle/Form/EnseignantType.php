<?php

namespace My\schoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnseignantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('label' => 'Nom :  '))
            ->add('prenom','text',array('label' => 'Prénom  :  '))
            ->add('date', 'date',array('label' => 'Date Naissance :  '))
            ->add('lieu','text',array('label' => 'Lieu de Naissance :  '))
            ->add('adresse','text',array('label' => 'Adresse :  '))
            ->add('tel','text',array('label' => 'Téléphone :  '))
            ->add('email','text',array('label' => 'Email :  '))
            ->add('cin','text',array('label' => 'Cin :  '))
            ->add('datecin', 'date',array('label' => 'Date CIN :  '))
            ->add('obs','text',array('label' => 'Observation :  '))
            ->add('genre','choice',array('choices'=>array('M'=>'Masculin','F'=>'Feminin')),array('label'=>'Genre : '))
            ->add('Specialite','entity',array("class"=>"My\schoolBundle\Entity\Specialite",
             "property"=>"libelle"))
            ->add('file')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\schoolBundle\Entity\Enseignant'
        ));
    }
}
