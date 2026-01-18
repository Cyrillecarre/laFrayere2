<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class AdminReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('poste', ChoiceType::class, [
                'label' => 'Poste',
                'mapped' => false,
                'constraints' => [new NotBlank()],
                'choices' => [
                    'Poste 1' => 'one',
                    'Poste 2' => 'two',
                    'Poste 3' => 'three',
                    'Poste 4' => 'four',
                ],
            ])
            ->add('start', DateType::class, [
                'label' => "Arrivée",
                'widget' => 'single_text',
                'data' => (new \DateTime('today')),
                'constraints' => [new NotBlank()],
            ])
            ->add('end', DateType::class, [
                'label' => 'Départ',
                'widget' => 'single_text',
                'data' => (new \DateTime('tomorrow')),
                'constraints' => [new NotBlank()],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank(),
                    new Email(['message' => 'Adresse email invalide.']),
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Téléphone',
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Le format du numéro doit être 0612345678',
                    ]),
                ],
            ]);
    }
}
