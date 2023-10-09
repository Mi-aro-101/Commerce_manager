<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\CVRequirements;
use App\Entity\Diplome;
use App\Entity\Service;
use App\Entity\Domaine;
use App\Entity\Experience;
use App\Entity\Matrimoniale;
use App\Entity\Nationalite;
use App\Entity\Sexe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CVRequirementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_envoie',DateType::class,array('label' => false))
            ->add('date_fin',DateType::class,array('label' => false))
            ->add('poste_description',null,array())
            ->add('coef_diplome',null,array())
            ->add('coef_xp',null,array())
            ->add('coef_adresse',null,array())
            ->add('coef_sexe',null,array())
            ->add('coef_nationalite',null,array())
            ->add('coef_matrimoniale',null,array())
            ->add('service',EntityType::class, [
                'class' => Service::class,
                'choice_label' => 'des_service'
            ])
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
            'data_class' => CVRequirements::class,
        ]);
    }
}
