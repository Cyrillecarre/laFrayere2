<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MultiResaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date d\'arrivée',
            ])
            ->add('end', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de départ',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('phoneNumber', TelType::class, [
                'label' => 'Numéro de téléphone',
            ])
            ->add('pellets', ChoiceType::class, [
                'label' => 'Nombre de sac de pellets',
                'choices' => [
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                ],
                'data' => 0,
                'mapped' => false,
            ])
            ->add('graines', ChoiceType::class, [
                'label' => 'Nombre de sac de graines (rupture)',
                'choices' => [
                    '0' => 0,
                ],
                'data' => 0,
                'mapped' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // Configurez ici les options du formulaire si nécessaire
    }
}
