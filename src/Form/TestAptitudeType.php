<?php

namespace App\Form;

use App\Entity\SectionReponse;
use App\Entity\TestAptitude;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestAptitudeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cv_requirements', HiddenType::class, [
                'mapped' => false
            ])
            ->add('sections', CollectionType::class, [
                'entry_type' => SectionReponse::class,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,// this will call get/set of your entity
                'prototype' => true, // is needed coz there will be 2 prototypes
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestAptitude::class,
        ]);
    }
}
