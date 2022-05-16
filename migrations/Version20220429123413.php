<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220429123413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE newsletters_users (newsletters_id INT NOT NULL, users_id INT NOT NULL, INDEX IDX_2CFC41D46480E3FB (newsletters_id), INDEX IDX_2CFC41D467B3B43D (users_id), PRIMARY KEY(newsletters_id, users_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE newsletters_users ADD CONSTRAINT FK_2CFC41D46480E3FB FOREIGN KEY (newsletters_id) REFERENCES newsletters (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE newsletters_users ADD CONSTRAINT FK_2CFC41D467B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE newsletters_users');
    }
}
