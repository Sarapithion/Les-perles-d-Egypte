<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setMethod("POST")
            ->add('Nom', TextType::class, [
                'constraints' =>[
                    new Assert\NotBlank(['message' => 'Le nom est obligatoire']),
                    new Assert\Length(['max' => 50]),
                ],
                ])
            
            ->add('Prenom', TextType::class,[
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prénom est obligatoire']),
                    new Assert\Length(['max' => 50]),
                ],
            ])
            ->add('Email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'email est obligatoire']),
                    new Assert\Email(['message' => 'Entrez un email valide']),
                    ],
                    ])
            ->add('Password',PasswordType::class,[
                "label" =>"Mot de passe",
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le mot de passe est obligatoire']),
                ],
            ])
                
            ->add('Password2', PasswordType::class,[
                "label" =>"Confirmer votre mot de passe",
            'mapped' => false,
            'constraints' => [
                new Assert\NotBlank(['message' => 'La confirmation du mot de passe est obligatoire']),
            ],
        ]);

           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
