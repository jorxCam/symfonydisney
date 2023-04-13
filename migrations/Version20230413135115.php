<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413135115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE propositions (id INT AUTO_INCREMENT NOT NULL, user_prop_id INT DEFAULT NULL, revise_id INT DEFAULT NULL, approuve_id INT DEFAULT NULL, date_approbation DATETIME DEFAULT NULL, date_revision DATETIME DEFAULT NULL, date_creation DATETIME NOT NULL, date_publication DATETIME DEFAULT NULL, INDEX IDX_E9AB028686BEE1B7 (user_prop_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE propositions ADD CONSTRAINT FK_E9AB028686BEE1B7 FOREIGN KEY (user_prop_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE articles ADD user_article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168D5F34070 FOREIGN KEY (user_article_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_BFDD3168D5F34070 ON articles (user_article_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE propositions DROP FOREIGN KEY FK_E9AB028686BEE1B7');
        $this->addSql('DROP TABLE propositions');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168D5F34070');
        $this->addSql('DROP INDEX IDX_BFDD3168D5F34070 ON articles');
        $this->addSql('ALTER TABLE articles DROP user_article_id');
    }
}
