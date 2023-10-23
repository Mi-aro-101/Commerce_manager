<?php

namespace App\Form;

use App\Entity\TestResultat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestResultatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_envoie')
            // ->add('date_reponse')
            // ->add('statut')
            // ->add('test_aptitude')
            // ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestResultat::class,
        ]);
    }
}
