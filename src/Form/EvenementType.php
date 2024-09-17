<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre')
            ->add('Date', null, [
                'widget' => 'single_text'
            ])
            ->add('Resume')
            ->add('Contenu')
            ->add('Validation')
            ->add('utilisateurs', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('utilisateurOrganisation', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
