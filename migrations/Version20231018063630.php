<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018063630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cv_candidat_note_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cv_candidat_note (id INT NOT NULL, utilisateur_id INT NOT NULL, cvrequirements_id INT NOT NULL, note DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3EC260FCFB88E14F ON cv_candidat_note (utilisateur_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3EC260FC9BDF2AF8 ON cv_candidat_note (cvrequirements_id)');
        $this->addSql('ALTER TABLE cv_candidat_note ADD CONSTRAINT FK_3EC260FCFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cv_candidat_note ADD CONSTRAINT FK_3EC260FC9BDF2AF8 FOREIGN KEY (cvrequirements_id) REFERENCES cvrequirements (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP INDEX uniq_55740642fb88e14f');
        $this->addSql('ALTER TABLE cvcandidat ALTER date_reponse DROP NOT NULL');
        $this->addSql('CREATE INDEX IDX_55740642FB88E14F ON cvcandidat (utilisateur_id)');
        $this->addSql('ALTER TABLE nationalite ALTER code_nationalite DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cv_candidat_note_id_seq CASCADE');
        $this->addSql('ALTER TABLE cv_candidat_note DROP CONSTRAINT FK_3EC260FCFB88E14F');
        $this->addSql('ALTER TABLE cv_candidat_note DROP CONSTRAINT FK_3EC260FC9BDF2AF8');
        $this->addSql('DROP TABLE cv_candidat_note');
        $this->addSql('ALTER TABLE nationalite ALTER code_nationalite SET NOT NULL');
        $this->addSql('DROP INDEX IDX_55740642FB88E14F');
        $this->addSql('ALTER TABLE cvcandidat ALTER date_reponse SET NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX uniq_55740642fb88e14f ON cvcandidat (utilisateur_id)');
    }
}
