<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\DemandeDepartement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandeDepartementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
            ->add('date',DateType::class,array('label' => false))
            // ->add('statut')
            // ->add('service')
            ->add('article',EntityType::class,[
                'class' => Article::class,
                'choice_label' => 'des_article'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeDepartement::class,
        ]);
    }
}
