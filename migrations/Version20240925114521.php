<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240925114521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO `article` (`id`, `utilisateur_id`, `categorie_id`, `titre`, `date`, `resume`, `contenu`, `validation`) VALUES
(2, 2, 2, 'Senmout', '2024-09-24 10:00:00', 'Apprenez l\'histoire de cet intriguant personnage de l\'Epoque d\'Hatchespsout', 'Détails de sa vie', 1),
(3, 2, 1, 'Découverte d\'une tombe dans la vallée des reines', '2024-09-19 12:00:00', 'Une nouvelle tombe datant du nouvel Empire a été découverte', 'Informations', 1);");
        $this->addSql("INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Actualités'),
(2, 'Personnages'),
(3, 'Vie quotidienne');");


        $this->addSql("INSERT INTO `contact` (`id`, `utilisateur_id`, `email`, `objet`, `message`, `nom`, `prenom`, `date`) VALUES
(1, 6, 'kya0@hotmail.fr', 'Demande d\'informations', 'Bonjour, je souhaitais savoir si un évènement serait bientôt à Grenoble?', 'Pithion', 'Sara', '2024-10-07 08:20:56');");
        $this->addSql("INSERT INTO `evenement` (`id`, `utilisateur_organisation_id`, `titre`, `date`, `resume`, `contenu`, `validation`) VALUES
(2, 2, 'Conférence \"Découverte d\'un papyrus\"', '2024-10-07 08:25:38', 'Venez participer à la conférence de l\'Egyptologue Varien Julien', 'L\'évènement aura lieu le 24 octobre au centre Egyptologique de Paris', 0);");
        $this->addSql("INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`, `roles`) VALUES
(2, 'Pithion', 'Sara', 'kya0@hotmail.fr', '$2y$10\$GowSAefoSxrB8VDZpnWpie07oPOXB/SAC6jjX8enCxb2q7MMf91e.', '[\"ROLE_ADMIN\"]'),
(6, 'Dupond', 'Marie', 'marie@mail.fr', '$2y$13\$uXCR5wIxQGrAzls2Bij6nuFpFe3JbB6KGazPzvUQVA8c72TkM1kx.', '[]');");

        $this->addSql("INSERT INTO `utilisateur_evenement` (`utilisateur_id`, `evenement_id`) VALUES
(2, 2);");

}

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
      
    }
}
