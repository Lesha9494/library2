<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251015142344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE action_log (id INT AUTO_INCREMENT NOT NULL, book_id INT NOT NULL, reader_id INT NOT NULL, action VARCHAR(255) NOT NULL, user VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_B2C5F68516A2B381 (book_id), INDEX IDX_B2C5F6851717D737 (reader_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE action_log ADD CONSTRAINT FK_B2C5F68516A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE action_log ADD CONSTRAINT FK_B2C5F6851717D737 FOREIGN KEY (reader_id) REFERENCES reader (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action_log DROP FOREIGN KEY FK_B2C5F68516A2B381');
        $this->addSql('ALTER TABLE action_log DROP FOREIGN KEY FK_B2C5F6851717D737');
        $this->addSql('DROP TABLE action_log');
    }
}
