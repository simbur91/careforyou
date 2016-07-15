<?php

namespace CF\CarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\LanguageType;

class RegisterType extends AbstractType
{
/**
* @param FormBuilderInterface $builder
* @param array $options
*/
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
        $builder
               ->add('email', EmailType::class)
               ->add('login', TextType::class)
               ->add('tel', TextType::class)
               ->add('birthdate', DateType::class, array(
                   'label' => 'Date de naissance',
                   'widget' => 'single_text',
                   'input' => 'datetime',
                   'format' => 'dd/MM/yyyy'
                   )
               )
               ->add('langage', ChoiceType::class, array(
                 'choices' => array(
                     'English' => 'en',
                     'Français' => 'fr',
                     'Nederlands' => 'nl',
                     'Spanish' => 'en',
                     'Other' => 'other'
                 ),
                 'preferred_choices' => array('fr', 'nl')
               ))
               ->add('sexe', ChoiceType::class, array(
                       'choices' => array(
                           'homme' => 'Homme',
                           'femme' => 'Femme'
                       ),
                       'multiple' => false,
                       'expanded' => true,
                       'required' => true,
                    )
                    )
               ->add('password', RepeatedType::class, array(
                       'type' => PasswordType::class,
                       'first_options'  => array('label' => 'Password'),
                       'second_options' => array('label' => 'Repeat Password'),
                    )
                    );
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