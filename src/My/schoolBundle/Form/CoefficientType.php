<?php

namespace My\schoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoefficientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coef')
            ->add('Matiere','entity',array("class"=>"My\schoolBundle\Entity\Matiere",
             "property"=>"libelle"))
             ->add('Classe','entity',array("class"=>"My\schoolBundle\Entity\Classe",
              "property"=>"libelle"))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\schoolBundle\Entity\Coefficient'
        ));
    }
}
