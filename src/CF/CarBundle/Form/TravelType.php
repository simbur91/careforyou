<?php

namespace CF\CarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TravelType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('driverId')
            ->add('cityDeparture')
            ->add('cityFinish')
            ->add('placeFree')
            ->add('price')
            ->add('distance')
            ->add('itinary')
            ->add('usersId')
            ->add('commande')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CF\CarBundle\Entity\Travel'
        ));
    }
}
