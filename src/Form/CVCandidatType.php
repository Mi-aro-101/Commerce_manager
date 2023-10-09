<?php

namespace App\Form;

use App\Entity\CVCandidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CVCandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_depot')
            ->add('date_reponse')
            ->add('statue')
            ->add('cvrequirements')
            ->add('utilisateur')
            ->add('domaine')
            ->add('diplome')
            ->add('experience')
            ->add('sexe')
            ->add('nationalite')
            ->add('adresse')
            ->add('Matrimoniale')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CVCandidat::class,
        ]);
    }
}
