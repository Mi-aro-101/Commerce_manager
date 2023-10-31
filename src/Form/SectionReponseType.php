<?php

namespace App\Form;

use App\Entity\ReponseSection;
use App\Entity\SectionReponse;
use PhpParser\Parser\Multiple;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionReponseType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        // $section = $options['section'];

        $builder
            ->add('reponse', EntityType::class, [
                'class' => ReponseSection::class,
                'expanded' => true,
                'multiple' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SectionReponse::class,
            'section' => []
        ]);
    }

    public function getReponses($sections)
    {
        $choices = [];

        foreach( $sections as $section ){
            $label = $section->getDesQuestion();
            $sectionChoices = [];
            foreach($section->getReponseSections() as $reponseSection){
                $sectionChoices[$reponseSection->getId()] = $reponseSection->getDesReponse();
            }
            $choices[$label] = $sectionChoices;
        }

        return $choices;
    }
}
