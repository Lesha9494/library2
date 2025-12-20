<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251211200958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE action_logs (id INT AUTO_INCREMENT NOT NULL, entity_type VARCHAR(50) NOT NULL, entity_id INT DEFAULT NULL, action VARCHAR(20) NOT NULL, old_data JSON DEFAULT NULL, new_data JSON DEFAULT NULL, description LONGTEXT DEFAULT NULL, ip_address VARCHAR(100) NOT NULL, user_agent VARCHAR(255) DEFAULT NULL, user_id INT DEFAULT NULL, username VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, INDEX idx_action_entity (entity_type, entity_id), INDEX idx_action_user (username), INDEX idx_action_created (created_at), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE action_log DROP FOREIGN KEY `FK_B2C5F68516A2B381`');
        $this->addSql('ALTER TABLE action_log DROP FOREIGN KEY `FK_B2C5F6851717D737`');
        $this->addSql('DROP TABLE action_log');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP INDEX UNIQ_CC3F893CE7927C74 ON reader');
        $this->addSql('ALTER TABLE reader DROP email, DROP password, DROP roles');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE action_log (id INT AUTO_INCREMENT NOT NULL, book_id INT NOT NULL, reader_id INT NOT NULL, action VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, user VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, INDEX IDX_B2C5F68516A2B381 (book_id), INDEX IDX_B2C5F6851717D737 (reader_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, headers LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, queue_name VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE action_log ADD CONSTRAINT `FK_B2C5F68516A2B381` FOREIGN KEY (book_id) REFERENCES book (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE action_log ADD CONSTRAINT `FK_B2C5F6851717D737` FOREIGN KEY (reader_id) REFERENCES reader (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE action_logs');
        $this->addSql('ALTER TABLE reader ADD email VARCHAR(180) NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD roles JSON NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CC3F893CE7927C74 ON reader (email)');
    }
}
