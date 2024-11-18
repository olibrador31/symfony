<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118185925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, clients VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE clients');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clients (id INT NOT NULL, nom VARCHAR(20) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, prenom VARCHAR(20) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, sexe CHAR(1) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, adresse VARCHAR(30) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, code_postal INT DEFAULT NULL, ville VARCHAR(20) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, commantaire TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE article');
    }
}
