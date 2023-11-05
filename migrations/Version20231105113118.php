<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231105113118 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE heure_suplementaire_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE heure_suplementaire (id INT NOT NULL, employe_id INT NOT NULL, date DATE NOT NULL, duree TIME(0) WITHOUT TIME ZONE NOT NULL, statut INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A3B553C81B65292 ON heure_suplementaire (employe_id)');
        $this->addSql('ALTER TABLE heure_suplementaire ADD CONSTRAINT FK_A3B553C81B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE conge ALTER employe_id DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE heure_suplementaire_id_seq CASCADE');
        $this->addSql('ALTER TABLE heure_suplementaire DROP CONSTRAINT FK_A3B553C81B65292');
        $this->addSql('DROP TABLE heure_suplementaire');
        $this->addSql('ALTER TABLE conge ALTER employe_id SET NOT NULL');
    }
}
