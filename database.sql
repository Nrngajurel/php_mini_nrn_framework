create database if not exists `test`;
use `test`;
CREATE TABLE `users` (`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,`name` VARCHAR(50) NOT NULL,`email` VARCHAR(50) NOT NULL,`password` VARCHAR(50) NOT NULL,`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP);