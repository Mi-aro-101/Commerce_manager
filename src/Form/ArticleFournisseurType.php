<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\ArticleFournisseur;
use App\Entity\Fournisseur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleFournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fournisseur',EntityType::class, [
            'class' => Fournisseur::class,
            'choice_label' => 'des_fournisseur',
            ])
            ->add('article',EntityType::class, [
                'class' => Article::class,
                'choice_label' => 'des_article',
                ])
        ->add('prix_actuel')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ArticleFournisseur::class,
        ]);
    }
}
