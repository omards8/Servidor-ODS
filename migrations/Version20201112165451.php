<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112165451 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moviles (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) NOT NULL, procesador VARCHAR(50) NOT NULL, pantalla VARCHAR(20) NOT NULL, camara VARCHAR(20) NOT NULL, bateria INT NOT NULL, conectividad VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pcs (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(30) NOT NULL, procesador VARCHAR(20) NOT NULL, pantalla VARCHAR(20) NOT NULL, camara VARCHAR(20) NOT NULL, bateria INT NOT NULL, conectividad VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tablets (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(30) NOT NULL, procesador VARCHAR(30) NOT NULL, pantalla VARCHAR(20) NOT NULL, camara VARCHAR(20) NOT NULL, bateria INT NOT NULL, conectividad VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE moviles');
        $this->addSql('DROP TABLE pcs');
        $this->addSql('DROP TABLE tablets');
    }
}
