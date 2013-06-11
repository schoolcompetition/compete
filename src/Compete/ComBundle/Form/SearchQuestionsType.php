<?php

namespace Compete\ComBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchQuestionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('question','textarea')
            ->add('user')
           // ->add('grade','choice',array('choices'=>array(0=>'All grades')))
           ->add('grade')
            ->add('subject')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Compete\ComBundle\Entity\StudyQuestions'
        ));
    }

    public function getName()
    {
        return 'compete_combundle_studyquestionstype';
    }
}
