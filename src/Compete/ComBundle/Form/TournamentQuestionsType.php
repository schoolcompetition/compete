<?php

namespace Compete\ComBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Compete\ComBundle\Form\AnswersType;
class TournamentQuestionsType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('subj')
                ->add('grade')
                ->add('question', 'textarea')
                //->add('approve', 'checkbox', array('required' => false, "mapped" => false))
              ->add('type', 'choice', array('choices' => array('empty_value' => 'Choose an option', 'radio' => 'MSQ with one answer', 'checkbox' => 'MSQ with multiple answers', 'text' => 'complete')))

//              ->add('isActive')
                
                ->add('answers', 'collection', array(
                   
                    'type' => new AnswersType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options' => array(
                        'required' => true,
                       
                        )))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Compete\ComBundle\Entity\TournamentQuestions'
        ));
    }

    public function getName() {
        return 'compete_combundle_tournamentquestionstype';
    }

}
