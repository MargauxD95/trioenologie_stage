<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220921082525 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', intro LONGTEXT DEFAULT NULL, content LONGTEXT NOT NULL, author VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_picture (article_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_FB090B3E7294869C (article_id), INDEX IDX_FB090B3EEE45BDBF (picture_id), PRIMARY KEY(article_id, picture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carousel (id INT AUTO_INCREMENT NOT NULL, page VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carousel_picture (carousel_id INT NOT NULL, picture_id INT NOT NULL, position INT DEFAULT NULL, INDEX IDX_74749AA7C1CE5B98 (carousel_id), INDEX IDX_74749AA7EE45BDBF (picture_id), PRIMARY KEY(carousel_id, picture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bg_color VARCHAR(7) DEFAULT NULL, bd_color VARCHAR(7) DEFAULT NULL, text_color VARCHAR(7) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_visible TINYINT(1) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery_picture (gallery_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_2EA10EA14E7AF8F (gallery_id), INDEX IDX_2EA10EA1EE45BDBF (picture_id), PRIMARY KEY(gallery_id, picture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occasion (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, max_parts INT DEFAULT NULL, min_parts INT DEFAULT NULL, INDEX IDX_8A66DCE512469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE occasion_picture (occasion_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_E03BA8B44034998F (occasion_id), INDEX IDX_E03BA8B4EE45BDBF (picture_id), PRIMARY KEY(occasion_id, picture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, alt_text VARCHAR(255) DEFAULT NULL, picture_file VARCHAR(255) NOT NULL, width VARCHAR(10) DEFAULT NULL, height VARCHAR(10) DEFAULT NULL, legend VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, picture_file_h200 VARCHAR(255) DEFAULT NULL, picture_file_h400 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, status_id INT DEFAULT NULL, last_name VARCHAR(180) DEFAULT NULL, first_name VARCHAR(180) DEFAULT NULL, phone_number VARCHAR(10) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, address2 VARCHAR(255) DEFAULT NULL, zipcode VARCHAR(5) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8157AA0FA76ED395 (user_id), INDEX IDX_8157AA0F6BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_picture ADD CONSTRAINT FK_FB090B3E7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_picture ADD CONSTRAINT FK_FB090B3EEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE carousel_picture ADD CONSTRAINT FK_74749AA7C1CE5B98 FOREIGN KEY (carousel_id) REFERENCES carousel (id)');
        $this->addSql('ALTER TABLE carousel_picture ADD CONSTRAINT FK_74749AA7EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE gallery_picture ADD CONSTRAINT FK_2EA10EA14E7AF8F FOREIGN KEY (gallery_id) REFERENCES gallery (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gallery_picture ADD CONSTRAINT FK_2EA10EA1EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE occasion ADD CONSTRAINT FK_8A66DCE512469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE occasion_picture ADD CONSTRAINT FK_E03BA8B44034998F FOREIGN KEY (occasion_id) REFERENCES occasion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE occasion_picture ADD CONSTRAINT FK_E03BA8B4EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0F6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_picture DROP FOREIGN KEY FK_FB090B3E7294869C');
        $this->addSql('ALTER TABLE article_picture DROP FOREIGN KEY FK_FB090B3EEE45BDBF');
        $this->addSql('ALTER TABLE carousel_picture DROP FOREIGN KEY FK_74749AA7C1CE5B98');
        $this->addSql('ALTER TABLE carousel_picture DROP FOREIGN KEY FK_74749AA7EE45BDBF');
        $this->addSql('ALTER TABLE gallery_picture DROP FOREIGN KEY FK_2EA10EA14E7AF8F');
        $this->addSql('ALTER TABLE gallery_picture DROP FOREIGN KEY FK_2EA10EA1EE45BDBF');
        $this->addSql('ALTER TABLE occasion DROP FOREIGN KEY FK_8A66DCE512469DE2');
        $this->addSql('ALTER TABLE occasion_picture DROP FOREIGN KEY FK_E03BA8B44034998F');
        $this->addSql('ALTER TABLE occasion_picture DROP FOREIGN KEY FK_E03BA8B4EE45BDBF');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0FA76ED395');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0F6BF700BD');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_picture');
        $this->addSql('DROP TABLE carousel');
        $this->addSql('DROP TABLE carousel_picture');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('DROP TABLE gallery_picture');
        $this->addSql('DROP TABLE occasion');
        $this->addSql('DROP TABLE occasion_picture');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
