<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425212149 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matiere ADD id_e_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matiere ADD CONSTRAINT FK_9014574A3F9CD80D FOREIGN KEY (id_e_id) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_9014574A3F9CD80D ON matiere (id_e_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matiere DROP FOREIGN KEY FK_9014574A3F9CD80D');
        $this->addSql('DROP INDEX IDX_9014574A3F9CD80D ON matiere');
        $this->addSql('ALTER TABLE matiere DROP id_e_id');
    }
}
