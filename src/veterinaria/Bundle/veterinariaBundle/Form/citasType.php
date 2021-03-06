<?php

namespace veterinaria\Bundle\veterinariaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class citasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha', 'date')
            ->add('motivo')
            ->add('costo')
            ->add('cliente')
            ->add('mascota')
            ->add('mvz')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'veterinaria\Bundle\veterinariaBundle\Entity\citas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'veterinaria_bundle_veterinariabundle_citas';
    }
}
