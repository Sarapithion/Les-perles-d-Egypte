<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\SecurityBundle\Security as SecurityBundleSecurity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class ContactType extends AbstractType
{
    private $security;

    // Injecter le service de sécurité
    public function __construct(SecurityBundleSecurity $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Email')
            ->add('Objet')
            ->add('Message')
            ->add('Nom')
            ->add('Prenom')
            ->add('Date', null, [
                'widget' => 'single_text'
            ]);

        // Ajouter le champ utilisateur uniquement si l'utilisateur est admin ou modérateur
        if ($this->security->isGranted('ROLE_ADMIN') || $this->security->isGranted('ROLE_MODERATOR')) {
            $builder->add('utilisateur', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}