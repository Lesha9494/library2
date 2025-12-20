<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251214184721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action_logs ADD book_id INT DEFAULT NULL, ADD reader_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE action_logs ADD CONSTRAINT FK_866E7D5216A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE action_logs ADD CONSTRAINT FK_866E7D521717D737 FOREIGN KEY (reader_id) REFERENCES reader (id)');
        $this->addSql('CREATE INDEX IDX_866E7D5216A2B381 ON action_logs (book_id)');
        $this->addSql('CREATE INDEX IDX_866E7D521717D737 ON action_logs (reader_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE action_logs DROP FOREIGN KEY FK_866E7D5216A2B381');
        $this->addSql('ALTER TABLE action_logs DROP FOREIGN KEY FK_866E7D521717D737');
        $this->addSql('DROP INDEX IDX_866E7D5216A2B381 ON action_logs');
        $this->addSql('DROP INDEX IDX_866E7D521717D737 ON action_logs');
        $this->addSql('ALTER TABLE action_logs DROP book_id, DROP reader_id');
    }
}
