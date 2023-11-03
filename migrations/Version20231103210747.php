<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231103210747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE employe_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE historique_salaire_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE employe (id INT NOT NULL, utilisateur_id INT NOT NULL, superieur_id INT DEFAULT NULL, date_embauche DATE NOT NULL, cnaps BOOLEAN NOT NULL, osti BOOLEAN NOT NULL, salaire NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F804D3B9FB88E14F ON employe (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_F804D3B986AF3011 ON employe (superieur_id)');
        $this->addSql('CREATE TABLE historique_salaire (id INT NOT NULL, date_changement DATE NOT NULL, montant NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE historique_salaire_employe (historique_salaire_id INT NOT NULL, employe_id INT NOT NULL, PRIMARY KEY(historique_salaire_id, employe_id))');
        $this->addSql('CREATE INDEX IDX_B7934335E2C7D68 ON historique_salaire_employe (historique_salaire_id)');
        $this->addSql('CREATE INDEX IDX_B7934331B65292 ON historique_salaire_employe (employe_id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B986AF3011 FOREIGN KEY (superieur_id) REFERENCES employe (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE historique_salaire_employe ADD CONSTRAINT FK_B7934335E2C7D68 FOREIGN KEY (historique_salaire_id) REFERENCES historique_salaire (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE historique_salaire_employe ADD CONSTRAINT FK_B7934331B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE employe_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE historique_salaire_id_seq CASCADE');
        $this->addSql('ALTER TABLE employe DROP CONSTRAINT FK_F804D3B9FB88E14F');
        $this->addSql('ALTER TABLE employe DROP CONSTRAINT FK_F804D3B986AF3011');
        $this->addSql('ALTER TABLE historique_salaire_employe DROP CONSTRAINT FK_B7934335E2C7D68');
        $this->addSql('ALTER TABLE historique_salaire_employe DROP CONSTRAINT FK_B7934331B65292');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE historique_salaire');
        $this->addSql('DROP TABLE historique_salaire_employe');
    }
}
