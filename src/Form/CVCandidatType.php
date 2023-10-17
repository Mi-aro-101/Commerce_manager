<?php

namespace App\Form;

use App\Entity\CVCandidat;
use App\Entity\CVRequirements;
use App\Entity\Utilisateur;
use App\Entity\Domaine;
use App\Entity\Diplome;
use App\Entity\Experience;
use App\Entity\Matrimoniale;
use App\Entity\Nationalite;
use App\Entity\Sexe;
use App\Entity\Adresse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CVCandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_depot',DateType::class,array('label' => false))
            // ->add('date_reponse',DateType::class,array('label' => false))
            // ->add('statue',HiddenType::class,array())
            // ->add('cvrequirements',HiddenType::class,[])
            // ->add('utilisateur',EntityType::class,[
            //     'class' => Utilisateur::class
            // ])
            ->add('domaine',EntityType::class, [
                'class' => Domaine::class,
                'choice_label' => 'des_domaine'
            ])
            ->add('diplome',EntityType::class,[
                'class' => Diplome::class,
                'choice_label' => 'des_diplome'
            ])
            ->add('experience',EntityType::class, [
                'class' => Experience::class,
                'choice_label' => 'des_xp'
            ])
            ->add('sexe',EntityType::class, [
                'class' => Sexe::class,
                'choice_label' => 'des_sexe'
            ])
            ->add('nationalite',EntityType::class, [
                'class' => Nationalite::class,
                'choice_label' => 'des_nationalite'
            ])
            ->add('adresse',EntityType::class, [
                'class' => Adresse::class,
                'choice_label' => 'des_adresse'
            ])
            ->add('matrimoniale',EntityType::class, [
                'class' => Matrimoniale::class,
                'choice_label' => 'des_matrimoniale'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CVCandidat::class,
        ]);
    }
}
