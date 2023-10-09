<?php

namespace App\Form;

use App\Entity\Section;
use App\Form\ReponseSectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('des_question',TextareaType::class,[])
            ->add('coef_section',TextareaType::class,[])
            ->add('reponseSections',CollectionType::class, [
                'entry_type' => ReponseSectionType::class,
                'allow_add' => true,
                'by_reference' => false
            ])
            // ->add('reponseSections',null,[])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Section::class,
        ]);
    }
}
