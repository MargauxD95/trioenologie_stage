<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919082230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carousel (id INT AUTO_INCREMENT NOT NULL, page VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carousel_picture (carousel_id INT NOT NULL, picture_id INT NOT NULL, position INT DEFAULT NULL, INDEX IDX_74749AA7C1CE5B98 (carousel_id), INDEX IDX_74749AA7EE45BDBF (picture_id), PRIMARY KEY(carousel_id, picture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_visible TINYINT(1) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery_picture (gallery_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_2EA10EA14E7AF8F (gallery_id), INDEX IDX_2EA10EA1EE45BDBF (picture_id), PRIMARY KEY(gallery_id, picture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carousel_picture ADD CONSTRAINT FK_74749AA7C1CE5B98 FOREIGN KEY (carousel_id) REFERENCES carousel (id)');
        $this->addSql('ALTER TABLE carousel_picture ADD CONSTRAINT FK_74749AA7EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE gallery_picture ADD CONSTRAINT FK_2EA10EA14E7AF8F FOREIGN KEY (gallery_id) REFERENCES gallery (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gallery_picture ADD CONSTRAINT FK_2EA10EA1EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE picture ADD name VARCHAR(255) DEFAULT NULL, ADD picture_file_h200 VARCHAR(255) DEFAULT NULL, ADD picture_file_h400 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carousel_picture DROP FOREIGN KEY FK_74749AA7C1CE5B98');
        $this->addSql('ALTER TABLE carousel_picture DROP FOREIGN KEY FK_74749AA7EE45BDBF');
        $this->addSql('ALTER TABLE gallery_picture DROP FOREIGN KEY FK_2EA10EA14E7AF8F');
        $this->addSql('ALTER TABLE gallery_picture DROP FOREIGN KEY FK_2EA10EA1EE45BDBF');
        $this->addSql('DROP TABLE carousel');
        $this->addSql('DROP TABLE carousel_picture');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('DROP TABLE gallery_picture');
        $this->addSql('ALTER TABLE picture DROP name, DROP picture_file_h200, DROP picture_file_h400');
    }
}
