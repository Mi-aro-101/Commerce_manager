<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231009143226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE reponse_section_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE section_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE test_aptitude_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE reponse_section (id INT NOT NULL, section_id INT NOT NULL, des_reponse VARCHAR(200) NOT NULL, is_true BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A47405D6D823E37A ON reponse_section (section_id)');
        $this->addSql('CREATE TABLE section (id INT NOT NULL, test_aptitude_id INT NOT NULL, des_question VARCHAR(200) NOT NULL, coef_section INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2D737AEF8B834DAF ON section (test_aptitude_id)');
        $this->addSql('CREATE TABLE test_aptitude (id INT NOT NULL, cv_requirements_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8ED758DE11DD0168 ON test_aptitude (cv_requirements_id)');
        $this->addSql('ALTER TABLE reponse_section ADD CONSTRAINT FK_A47405D6D823E37A FOREIGN KEY (section_id) REFERENCES section (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF8B834DAF FOREIGN KEY (test_aptitude_id) REFERENCES test_aptitude (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE test_aptitude ADD CONSTRAINT FK_8ED758DE11DD0168 FOREIGN KEY (cv_requirements_id) REFERENCES cvrequirements (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE reponse_section_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE section_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE test_aptitude_id_seq CASCADE');
        $this->addSql('ALTER TABLE reponse_section DROP CONSTRAINT FK_A47405D6D823E37A');
        $this->addSql('ALTER TABLE section DROP CONSTRAINT FK_2D737AEF8B834DAF');
        $this->addSql('ALTER TABLE test_aptitude DROP CONSTRAINT FK_8ED758DE11DD0168');
        $this->addSql('DROP TABLE reponse_section');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE test_aptitude');
    }
}
