<?php

namespace Compete\ComBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SchoolsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('city')
            ->add('country')
            ->add('password')
            ->add('password')
            ->add('picture','file')
            ->add('email')
            ->add('website')
//            ->add('reported')
            ->add('legalPaperScan','file')
//            ->add('isActive')
//            ->add('admin')
      
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Compete\ComBundle\Entity\Schools'
        ));
    }

    public function getName()
    {
        return 'compete_combundle_schoolstype';
    }
}
