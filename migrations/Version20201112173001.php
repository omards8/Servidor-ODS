<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112173001 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE moviles ADD imagen VARCHAR(30) NOT NULL, ADD pcs VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pcs ADD imagen VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE tablets ADD imagen VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE moviles DROP imagen, DROP pcs');
        $this->addSql('ALTER TABLE pcs DROP imagen');
        $this->addSql('ALTER TABLE tablets DROP imagen');
    }
}
