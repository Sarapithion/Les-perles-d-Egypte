<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('Email', EmailType::class)
            ->add('Password',PasswordType::class, ["label" =>"Mot de passe"])
            ->add('Password2', PasswordType::class,["label" =>"Confirmer votre mot de passe",
            'mapped' => false
        ]);

            // ->add('Role')
            // ->add('Evenement', EntityType::class, [
                // 'class' => Evenement::class,
                // 'choice_label' => 'id',
                // 'multiple' => true,
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
