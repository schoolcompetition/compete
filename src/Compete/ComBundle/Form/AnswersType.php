<?php

namespace Compete\ComBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnswersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('choice')
            ->add('rightanswer','checkbox', array('required' => false)) 
               
//            ->add('q')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Compete\ComBundle\Entity\Answers'
        ));
    }

    public function getName()
    {
        return 'compete_combundle_answerstype';
    }
}
