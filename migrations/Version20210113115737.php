<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210113115737 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project ADD image_url VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE project DROP img_url');
        $this->addSql('ALTER TABLE project RENAME COLUMN reference TO url');
        $this->addSql('ALTER TABLE project RENAME COLUMN date_of_creation TO creation_date');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE project ADD reference VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE project ADD img_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project DROP url');
        $this->addSql('ALTER TABLE project DROP image_url');
        $this->addSql('ALTER TABLE project RENAME COLUMN creation_date TO date_of_creation');
    }
}
