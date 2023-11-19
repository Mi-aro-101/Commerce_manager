<?php

namespace App\Form;

use App\Entity\TestResultat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestResultatType extends AbstractType
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager =$entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        // $sections = $options['sections'];

        $builder
            ->add('date_envoie')
        ;
        //     foreach($sections as $section){
        //         $builder
        //             ->add('sectionReponses', CollectionType::class, [
        //                 'entry_type' => SectionReponse::class,
        //                 'entry_options' => [
        //                     'section' => $section
        //                 ],
        //                 'allow_add' => true,
        //                 'by_reference' => false
        //             ])
        //         ;
        //     }
        // ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestResultat::class,
            'sections' => []
        ]);
    }
}
