<?php

namespace App\Form;

use App\Entity\PosteOne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use function PHPSTORM_META\map;

class PosteOneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', HiddenType::class, [
                    'data' => 'Poste 1',
            ])
            ->add('start', DateTimeType::class, [
                'date_widget' => 'single_text',
                'time_widget' => 'text',
                'data' => (new \DateTime('today 14:00')),
            ])
            ->add('end', DateTimeType::class, [
                'date_widget' => 'single_text',
                'time_widget' => 'text',
                'data' => (new \DateTime('today 11:00')),
            ])
            ->add('numberOfFishers', ChoiceType::class, [
                'label' => 'Nombre de pêcheurs',
                'choices' => [
                    '2' => 2,
                ],
                'data' => 2,
                'mapped' => false,
            ])
            ->add('pellets45', ChoiceType::class, [
                'label' => 'Pellet 45% protéines',
                'choices' => [
                    '0' => 0,

                    '──── 2kg ────' => 'separator_2kg',
                    '2kg 4mm 5€' => 204,
                    '2kg 5mm 5€' => 205,
                    '2kg 6mm 5€' => 206,
                    '2kg 8mm 5€' => 208,
                    '2kg 11mm 5€' => 211,

                    '──── 5kg ────' => 'separator_5kg',
                    '5kg 4mm 12.5€' => 504,
                    '5kg 5mm 12.5€' => 505,
                    '5kg 6mm 12.5€' => 506,
                    '5kg 8mm 12.5€' => 508,
                    '5kg 11mm 12.5€' => 511,

                    '──── 10kg ────' => 'separator_10kg',
                    '10kg 4mm 20€' => 1004,
                    '10kg 5mm 20€' => 1005,
                    '10kg 6mm 20€' => 1006,
                    '10kg 8mm 20€' => 1008,
                    '10kg 11mm 20€' => 1011,

                    '──── 25kg ────' => 'separator_25kg',
                    '25kg 4mm 46€' => 2504,
                    '25kg 5mm 46€' => 2505,
                    '25kg 6mm 46€' => 2506,
                    '25kg 8mm 46€' => 2508,
                    '25kg 11mm 46€' => 2511,
                ],
                'data' => 0,
                'mapped' => false,
                'attr' => [
                    'class' => 'large-font-select'
                ],
                'choice_attr' => function($choice, $key, $value) {
                    $attrs = ['class' => ''];
                    // Désactiver uniquement les séparateurs (valeurs string)
                    if (is_string($value) && strpos($value, 'separator_') === 0) {
                        $attrs['disabled'] = 'disabled';
                        $attrs['class'] .= ' option-separator';
                    } else {
                        // Appliquer les classes via le libellé ($key), pas via la valeur (entier)
                        if (strpos($key, '2kg') !== false) $attrs['class'] .= ' option-2kg';
                        if (strpos($key, '5kg') !== false) $attrs['class'] .= ' option-5kg';
                        if (strpos($key, '10kg') !== false) $attrs['class'] .= ' option-10kg';
                        if (strpos($key, '25kg') !== false) $attrs['class'] .= ' option-25kg';
                    }
                    return $attrs;
                },
            ])
            ->add('pellets35', ChoiceType::class, [
                'label' => 'Pellet 35% protéines',
                'choices' => [
                    '0' => 0,

                    '──── 2kg ────' => 'separator_2kg',
                    '2kg 4mm 5€' => 204,
                    '2kg 5mm 5€' => 205,
                    '2kg 6mm 5€' => 206,
                    '2kg 8mm 5€' => 208,
                    '2kg 11mm 5€' => 211,

                    '──── 5kg ────' => 'separator_5kg',
                    '5kg 4mm 10€' => 504,
                    '5kg 5mm 10€' => 505,
                    '5kg 6mm 10€' => 506,
                    '5kg 8mm 10€' => 508,
                    '5kg 11mm 10€' => 511,

                    '──── 10kg ────' => 'separator_10kg',
                    '10kg 4mm 18€' => 1004,
                    '10kg 5mm 18€' => 1005,
                    '10kg 6mm 18€' => 1006,
                    '10kg 8mm 18€' => 1008,
                    '10kg 11mm 18€' => 1011,

                    '──── 25kg ────' => 'separator_25kg',
                    '25kg 4mm 42€' => 2504,
                    '25kg 5mm 42€' => 2505,
                    '25kg 6mm 42€' => 2506,
                    '25kg 8mm 42€' => 2508,
                    '25kg 11mm 42€' => 2511,
                ],
                'data' => 0,
                'mapped' => false,
                'attr' => [
                    'class' => 'large-font-select'
                ],
                'choice_attr' => function($choice, $key, $value) {
                    $attrs = ['class' => ''];
                    // Désactiver uniquement les séparateurs (valeurs string)
                    if (is_string($value) && strpos($value, 'separator_') === 0) {
                        $attrs['disabled'] = 'disabled';
                        $attrs['class'] .= ' option-separator';
                    } else {
                        // Ajouter des classes en fonction du poids via le libellé ($key)
                        if (strpos($key, '2kg') !== false) $attrs['class'] .= ' option-2kg';
                        if (strpos($key, '5kg') !== false) $attrs['class'] .= ' option-5kg';
                        if (strpos($key, '10kg') !== false) $attrs['class'] .= ' option-10kg';
                        if (strpos($key, '25kg') !== false) $attrs['class'] .= ' option-25kg';
                    }

                    return $attrs;
                },
            ])
            
            ->add('background_color', HiddenType::class, [
                'data' => '#FF7F00',
            ])
            ->add('action', HiddenType::class, [
                'mapped' => false,
            ])
            ->add('email', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'exemple@email.com',
                ],
                'constraints' => [
                    new Email([
                        'message' => 'L\'adresse email "{{ value }}" n\'est pas valide.',
                    ]),
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => '0612345678',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Le format du numéro doit être 0612345678',
                    ]),
                ],
            ])
            ->add('giftCode', TextType::class, [
                'required' => false,
                'mapped' => false,
                'attr' => ['placeholder' => 'Entrez un code cadeau'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PosteOne::class,
        ]);
    }
}
