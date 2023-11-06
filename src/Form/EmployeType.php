<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_embauche')
            ->add('cnaps')
            ->add('osti')
            ->add('salaire')
            ->add('service',EntityType::class,[
                'class' => Service::class,
                'choice_label' => 'des_service'
                ])
            ->add('poste')
            ->add('statut',ChoiceType::class,[
                'choices' => [
                    'Essai' => 5,
                    'Embauché' => 10
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
