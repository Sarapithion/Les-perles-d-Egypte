<?php

namespace App\src\Tests\Unitaires\ArticleTypeTest;

use App\Form\ArticleType;
use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        /** @var Categorie&\PHPUnit\Framework\MockObject\MockObject */
        $categorieMock = $this->createMock(Categorie::class);
        $categorieMock->method('getId')->willReturn(1);
        $categorieMock->method('getNom')->willReturn('Test Category');

        $formData = [
            'Titre' => 'Test Article',
            'Date' => new \DateTime('2023-01-01'),
            'Resume' => 'Test Resume',
            'Contenu' => 'Test Content',
            'Categorie' => $categorieMock,
        ];

        $model = new Article();
        $form = $this->factory->create(ArticleType::class, $model);

        $expected = new Article();
        $expected->setTitre('Test Article');
        $expected->setDate(new \DateTime('2023-01-01'));
        $expected->setResume('Test Resume');
        $expected->setContenu('Test Content');
        $expected->setCategorie($categorieMock);

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($expected->getTitre(), $model->getTitre());
        $this->assertEquals($expected->getDate(), $model->getDate());
        $this->assertEquals($expected->getResume(), $model->getResume());
        $this->assertEquals($expected->getContenu(), $model->getContenu());
        $this->assertSame($expected->getCategorie(), $model->getCategorie());
    }

    public function testFormFields()
    {
        $form = $this->factory->create(ArticleType::class);

        $this->assertCount(5, $form);
        $this->assertTrue($form->has('Titre'));
        $this->assertTrue($form->has('Date'));
        $this->assertTrue($form->has('Resume'));
        $this->assertTrue($form->has('Contenu'));
        $this->assertTrue($form->has('Categorie'));

        $this->assertInstanceOf(TextType::class, $form->get('Titre')->getConfig()->getType()->getInnerType());
        $this->assertInstanceOf(DateTimeType::class, $form->get('Date')->getConfig()->getType()->getInnerType());
        $this->assertInstanceOf(TextType::class, $form->get('Resume')->getConfig()->getType()->getInnerType());
        $this->assertInstanceOf(TextareaType::class, $form->get('Contenu')->getConfig()->getType()->getInnerType());
        $this->assertInstanceOf(EntityType::class, $form->get('Categorie')->getConfig()->getType()->getInnerType());

        $dateOptions = $form->get('Date')->getConfig()->getOptions();
        $this->assertEquals('single_text', $dateOptions['widget']);

        $categorieOptions = $form->get('Categorie')->getConfig()->getOptions();
        $this->assertEquals(Categorie::class, $categorieOptions['class']);
        $this->assertEquals('nom', $categorieOptions['choice_label']);
    }
}
