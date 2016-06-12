<?php

namespace CF\CarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferencesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Users')
            ->add('animal')
            ->add('smoker')
            ->add('talker')
            ->add('musique')
            ->add('food')
            ->add('rayon')
            ->add('horaireAller', 'datetime')
            ->add('horaireRetour', 'datetime')
            ->add('confort')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CF\CarBundle\Entity\Preferences'
        ));
    }
}
