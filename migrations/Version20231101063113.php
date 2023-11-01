<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231101063113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cv_candidat_note ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cv_candidat_note ADD CONSTRAINT FK_3EC260FCFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3EC260FCFB88E14F ON cv_candidat_note (utilisateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cv_candidat_note DROP CONSTRAINT FK_3EC260FCFB88E14F');
        $this->addSql('DROP INDEX IDX_3EC260FCFB88E14F');
        $this->addSql('ALTER TABLE cv_candidat_note DROP utilisateur_id');
    }
}
