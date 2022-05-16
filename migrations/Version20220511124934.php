<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220511124934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users_categories DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE users_categories ADD PRIMARY KEY (users_id, categories_id)');
        $this->addSql('ALTER TABLE users_categories RENAME INDEX idx_1080b0a467b3b43d TO IDX_ED98E9FC67B3B43D');
        $this->addSql('ALTER TABLE users_categories RENAME INDEX idx_1080b0a4a21214b7 TO IDX_ED98E9FCA21214B7');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin');
        $this->addSql('ALTER TABLE users_categories DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE users_categories ADD PRIMARY KEY (categories_id, users_id)');
        $this->addSql('ALTER TABLE users_categories RENAME INDEX idx_ed98e9fca21214b7 TO IDX_1080B0A4A21214B7');
        $this->addSql('ALTER TABLE users_categories RENAME INDEX idx_ed98e9fc67b3b43d TO IDX_1080B0A467B3B43D');
    }
}
