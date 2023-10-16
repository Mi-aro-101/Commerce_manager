<?php

namespace App\Form;

use App\Entity\Section;
use App\Form\ReponseSectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('des_question',TextType::class,['label' => 'Question'])
            ->add('coef_section',null,['label' => 'Coeficient du section'])
            ->add('reponseSections',CollectionType::class, [
                'entry_type' => ReponseSectionType::class,
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
            'data_class' => Section::class,
        ]);
    }
}
