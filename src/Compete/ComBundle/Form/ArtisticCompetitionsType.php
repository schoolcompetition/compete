<?php

namespace Compete\ComBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArtisticCompetitionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pathes')
            ->add('user')
            ->add('compte')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Compete\ComBundle\Entity\ArtisticCompetitions'
        ));
    }

    public function getName()
    {
        return 'compete_combundle_artisticcompetitionstype';
    }
}
