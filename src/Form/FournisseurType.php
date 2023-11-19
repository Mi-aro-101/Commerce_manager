<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\ModePaiment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('des_fournisseur')
            ->add('mode_paiment',EntityType::class, [
                'class' => ModePaiment::class,
                'choice_label' => 'des_mode_paiment',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
