<?php

namespace My\schoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
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
            ->add('date','date',array('label' => 'Date Naissance :  '))
            ->add('lieu','text',array('label' => 'Lieu de Naissance :  '))
            ->add('genre','choice',array('choices'=>array('M'=>'Masculin','F'=>'Feminin')),array('label'=>'Genre : '))
            ->add('adresse','text',array('label' => 'Adresse :  '))
            ->add('nomTuteur','text',array('label' => 'Nom du Tuteur :  '))
            ->add('profition','text',array('label' => 'Profession Tuteur :  '))
            ->add('tel','text',array('label' => 'Téléphone :  '))
            ->add('email','text',array('label' => 'Email :  '))
            ->add('obs','text',array('label' => 'Observation :  '))
            ->add('Classe','entity',array("class"=>"My\schoolBundle\Entity\Classe", "property"=>"libelle"))
            ->add('file')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\schoolBundle\Entity\Student'
        ));
    }
}
