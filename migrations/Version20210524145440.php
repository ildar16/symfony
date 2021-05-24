<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210524145440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, short_description LONGTEXT NOT NULL, long_description LONGTEXT DEFAULT NULL, date DATE DEFAULT NULL, author VARCHAR(255) DEFAULT NULL, link_label VARCHAR(255) DEFAULT NULL, link_url VARCHAR(255) DEFAULT NULL, visible VARCHAR(255) DEFAULT NULL, image VARCHAR(255) NOT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projects (id INT AUTO_INCREMENT NOT NULL, program_name VARCHAR(255) NOT NULL, short_description VARCHAR(255) NOT NULL, long_description VARCHAR(255) NOT NULL, benefits VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, zipdcode VARCHAR(255) NOT NULL, latitude VARCHAR(255) DEFAULT NULL, longitude VARCHAR(255) DEFAULT NULL, project_developer VARCHAR(255) NOT NULL, architect VARCHAR(255) DEFAULT NULL, delivery VARCHAR(255) DEFAULT NULL, floor_area VARCHAR(255) DEFAULT NULL, nd_de_logements VARCHAR(255) DEFAULT NULL, images VARCHAR(255) DEFAULT NULL, brochure VARCHAR(255) DEFAULT NULL, document_label VARCHAR(255) DEFAULT NULL, description_label VARCHAR(255) DEFAULT NULL, film VARCHAR(255) DEFAULT NULL, visible VARCHAR(255) DEFAULT NULL, coming_soon VARCHAR(255) DEFAULT NULL, reference VARCHAR(255) DEFAULT NULL, salesman VARCHAR(255) DEFAULT NULL, link_label VARCHAR(255) DEFAULT NULL, link_url_saleman_site VARCHAR(255) DEFAULT NULL, created_at INT NOT NULL, updated_at INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE projects');
    }
}
