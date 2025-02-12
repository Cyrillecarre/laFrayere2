<?php

namespace App\Form;

use App\Entity\Medaille;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MedailleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('picture', FileType::class, [
            'label' => 'Photo (fichier image)',
            'mapped' => false,
            'required' => false,
        ])
        ->add('category',
        ChoiceType::class, [
            'choices' => [
                'Or' => 'Or',
                'Argent' => 'Argent',
                'Bronze' => 'Bronze',
            ],
            ])
            ->add('type', 
            ChoiceType::class, [
                'choices' => [
                    'Commune' => 'Commune',
                    'Miroir' => 'Miroir',
                    'Koï' => 'koï',
                    'Amour' => 'Amour',
                ],
                ])
            ->add('name')
            ->add('weight')
            ->add('date');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medaille::class,
        ]);
    }
}
