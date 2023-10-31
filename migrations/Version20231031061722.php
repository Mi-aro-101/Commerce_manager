<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231031061722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE section_reponse DROP CONSTRAINT fk_8df113c8d823e37a');
        $this->addSql('DROP INDEX idx_8df113c8d823e37a');
        $this->addSql('ALTER TABLE section_reponse DROP section_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE section_reponse ADD section_id INT NOT NULL');
        $this->addSql('ALTER TABLE section_reponse ADD CONSTRAINT fk_8df113c8d823e37a FOREIGN KEY (section_id) REFERENCES section (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_8df113c8d823e37a ON section_reponse (section_id)');
    }
}
