<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240204225329 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE immobilisation_permission_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE immobilisation_permission (id INT NOT NULL, immobilisation_id INT DEFAULT NULL, employe_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, etat INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_418BA4C8988E7A58 ON immobilisation_permission (immobilisation_id)');
        $this->addSql('CREATE INDEX IDX_418BA4C81B65292 ON immobilisation_permission (employe_id)');
        $this->addSql('ALTER TABLE immobilisation_permission ADD CONSTRAINT FK_418BA4C8988E7A58 FOREIGN KEY (immobilisation_id) REFERENCES immobilisation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE immobilisation_permission ADD CONSTRAINT FK_418BA4C81B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE immobilisation_permission_id_seq CASCADE');
        $this->addSql('ALTER TABLE immobilisation_permission DROP CONSTRAINT FK_418BA4C8988E7A58');
        $this->addSql('ALTER TABLE immobilisation_permission DROP CONSTRAINT FK_418BA4C81B65292');
        $this->addSql('DROP TABLE immobilisation_permission');
    }
}
