<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240204163340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE bon_commance_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE bon_livraison_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE bon_livraison (id INT NOT NULL, bon_commande_id INT NOT NULL, date_livraison DATE NOT NULL, bon_reception_ref VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_31A531A4B4B54061 ON bon_livraison (bon_commande_id)');
        $this->addSql('ALTER TABLE bon_livraison ADD CONSTRAINT FK_31A531A4B4B54061 FOREIGN KEY (bon_commande_id) REFERENCES bon_commande (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE bon_livraison_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE bon_commance_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE bon_livraison DROP CONSTRAINT FK_31A531A4B4B54061');
        $this->addSql('DROP TABLE bon_livraison');
    }
}
