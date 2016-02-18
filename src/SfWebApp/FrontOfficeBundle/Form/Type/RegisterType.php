<?php
/**
 * Created by PhpStorm.
 * User: bachelor2
 * Date: 18/02/2016
 * Time: 12:44
 */
namespace SfWebApp\FrontOfficeBundle\Form\Type;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends RegistrationFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        $builder
            ->add('gender', 'text', array(
                'label' => 'profile.fields.gender',
                'translation_domain' => 'forms'
            ))
            ->add('firstname', 'text', array(
                'label' => 'profile.fields.firstname',
                'translation_domain' => 'forms'
            ))
            ->add('lastname', 'text', array(
                'label' => 'profile.fields.lastname',
                'translation_domain' => 'forms'
            ))
            ->add('address', 'text', array(
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
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Register')
        ));
    }

    public function getName()
    {
        return 'sf_web_app_fos_user_register';
    }
}