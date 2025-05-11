<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250508215640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tables category, product, `order`, and order_item';
    }

    public function up(Schema $schema): void
    {
        // Create category table
        $this->addSql(<<<'SQL'
            CREATE TABLE category (
                id INT AUTO_INCREMENT NOT NULL,
                name VARCHAR(255) NOT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

        // Create product table
        $this->addSql(<<<'SQL'
            CREATE TABLE product (
                id INT AUTO_INCREMENT NOT NULL,
                name VARCHAR(255) NOT NULL,
                description LONGTEXT NOT NULL,
                price NUMERIC(10, 2) NOT NULL, -- Adjusted to 2 decimal places for currency
                image VARCHAR(255) NOT NULL,
                stock INT NOT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

        // Create order table (using backticks for reserved word)
        $this->addSql(<<<'SQL'
            CREATE TABLE `order` (
                id INT AUTO_INCREMENT NOT NULL,
                user_id INT NOT NULL,
                total FLOAT NOT NULL,
                PRIMARY KEY(id),
                FOREIGN KEY (user_id) REFERENCES user(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

        // Create order_item table
        $this->addSql(<<<'SQL'
            CREATE TABLE order_item (
                id INT AUTO_INCREMENT NOT NULL,
                order_id INT NOT NULL,
                product_id INT NOT NULL,
                quantity INT NOT NULL,
                PRIMARY KEY(id),
                FOREIGN KEY (order_id) REFERENCES `order`(id),
                FOREIGN KEY (product_id) REFERENCES product(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // Drop tables in reverse order to avoid foreign key constraints
        $this->addSql(<<<'SQL'
            DROP TABLE order_item
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE `order`
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE product
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE category
        SQL);
    }
}