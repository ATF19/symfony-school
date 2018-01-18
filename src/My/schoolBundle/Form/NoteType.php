<?php

namespace My\schoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NoteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, array(
              'choices'  => array(
                  'D' => 'DS',
                  'E' => 'Examen'
              )))
            ->add('semestre', ChoiceType::class, array(
              'choices'  => array(
                  '1' => 'Premiere',
                  '2' => 'Deuxieme',
              )))
            ->add('note')
            ->add('student', 'entity', array("class"=>"My\schoolBundle\Entity\Student"))
            ->add('matiere', 'entity', array("class"=>"My\schoolBundle\Entity\Matiere", "property"=>"libelle"))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\schoolBundle\Entity\Note'
        ));
    }
}
