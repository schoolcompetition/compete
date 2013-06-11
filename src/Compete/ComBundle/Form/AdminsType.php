<?php

namespace Compete\ComBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class AdminsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('picture','file')
            ->add('email')
            ->add('password')
            ->add('password')
//            ->add('reported')
//            ->add('role')
//            ->add('code')
//            ->add('school')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Compete\ComBundle\Entity\Users'
        ));
    }

    public function getName()
    {
        return 'compete_combundle_userstype';
    }
}
