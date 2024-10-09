<?php

namespace App\src\Tests\Unitaires\EvenementsTypeTest;

use App\Form\EvenementType;
use Symfony\Component\Form\Test\TypeTestCase;

class EvenementTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        // Simule les données que l'utilisateur pourrait soumettre dans le formulaire
        $formData = [
            'Titre' => 'Titre de l\'événement',
            'Date' => '2024-12-31',
            'Resume' => 'Ceci est un résumé',
            'Contenu' => 'Contenu de l\'événement',
        ];

        // Crée une instance du formulaire que je veux tester
        $form = $this->factory->create(EvenementType::class);

        // Soumet les données au formulaire
        $form->submit($formData);

        // Vérifie si le formulaire est valide après la soumission
        $this->assertTrue($form->isSynchronized());

        // Vérifie si les champs du formulaire sont bien créés
        $this->assertArrayHasKey('Titre', $form->all());
        $this->assertArrayHasKey('Date', $form->all());
        $this->assertArrayHasKey('Resume', $form->all());
        $this->assertArrayHasKey('Contenu', $form->all());

        // Vérifie les valeurs soumises et attendues
        $this->assertEquals('Titre de l\'événement', $form->get('Titre')->getData());
        $this->assertEquals('2024-12-31', $form->get('Date')->getData()->format('Y-m-d'));
        $this->assertEquals('Ceci est un résumé', $form->get('Resume')->getData());
        $this->assertEquals('Contenu de l\'événement', $form->get('Contenu')->getData());
    }
}
