<?php

namespace SfWebApp\FrontOfficeBundle\Form\Type;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends ProfileFormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', 'choice', array(
                'label' => 'profile.fields.gender',
                'translation_domain' => 'forms',
                'choices' => array(
                    'm' => 'M.',
                    'f' => 'Mme'
                )
            ))
            ->add('firstname', 'text', array(
                'label' => 'profile.fields.firstname',
                'translation_domain' => 'forms'
            ))
            ->add('lastname', 'text', array(
                'label' => 'profile.fields.lastname',
                'translation_domain' => 'forms'
            ))
            ->add('address', 'textarea', array(
                'label' => 'profile.fields.address',
                'translation_domain' => 'forms'
            ))
            ->add('zip_code', 'text', array(
                'label' => 'profile.fields.zip_code',
                'translation_domain' => 'forms'
            ))
            ->add('city', 'text', array(
                'label' => 'profile.fields.city',
                'translation_domain' => 'forms'
            ))
            ->add('country', 'text', array(
                'label' => 'profile.fields.country',
                'translation_domain' => 'forms'
            ))
            ->add('phone', 'text', array(
                'label' => 'profile.fields.phone',
                'translation_domain' => 'forms'
            ))
            ->add('email', 'email', array(
                'label' => 'profile.fields.email',
                'translation_domain' => 'forms'
            ))
            ->add('plainPassword', 'repeated', array(
                'first_options'  => array(
                    'label' => 'profile.fields.password_first'
                ),
                'second_options' => array(
                    'label' => 'profile.fields.password_second'
                ),
                'required' => false,
                'translation_domain' => 'forms'
            ))
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Account')
        ));
    }

    public function getName()
    {
        return 'sf_web_app_fos_user_profile';
    }
}