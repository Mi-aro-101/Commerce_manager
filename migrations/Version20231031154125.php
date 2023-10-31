<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231031154125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE test_candidat_note_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE test_candidat_note (id INT NOT NULL, test_resultat_id INT NOT NULL, note INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BE4893278D4D52E2 ON test_candidat_note (test_resultat_id)');
        $this->addSql('ALTER TABLE test_candidat_note ADD CONSTRAINT FK_BE4893278D4D52E2 FOREIGN KEY (test_resultat_id) REFERENCES test_resultat (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE test_candidat_note_id_seq CASCADE');
        $this->addSql('ALTER TABLE test_candidat_note DROP CONSTRAINT FK_BE4893278D4D52E2');
        $this->addSql('DROP TABLE test_candidat_note');
    }
}
