<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180205224253 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE icon ADD adherents_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE icon ADD CONSTRAINT FK_659429DB15364D07 FOREIGN KEY (adherents_id) REFERENCES adherent (id)');
        $this->addSql('CREATE INDEX IDX_659429DB15364D07 ON icon (adherents_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE icon DROP FOREIGN KEY FK_659429DB15364D07');
        $this->addSql('DROP INDEX IDX_659429DB15364D07 ON icon');
        $this->addSql('ALTER TABLE icon DROP adherents_id');
    }
}
