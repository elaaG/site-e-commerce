ALTER TABLE product CHANGE image image VARCHAR(255) DEFAULT NULL;
ALTER TABLE `admin` CHANGE roles roles JSON NOT NULL, CHANGE first_name first_name VARCHAR(100) DEFAULT NULL, CHANGE last_name last_name VARCHAR(100) DEFAULT NULL;
ALTER TABLE user CHANGE roles roles JSON NOT NULL;
ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)';
