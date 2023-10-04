<?php

namespace App\Form;

use App\Entity\Matrimoniale;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatrimonialeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('des_matrimoniale',null, ['label' => 'Situation matrimoniale: '])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matrimoniale::class,
        ]);
    }
}
