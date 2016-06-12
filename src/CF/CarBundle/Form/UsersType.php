<?php

namespace CF\CarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('email')
            ->add('emailsecu')
            ->add('tel')
            ->add('birthdate', 'date')
            ->add('password')
            ->add('admin')
            ->add('langage')
            ->add('sexe')
            ->add('driver')
            ->add('preferencesId')
            ->add('coordonnees')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CF\CarBundle\Entity\Users'
        ));
    }
}
