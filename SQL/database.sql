DROP DATABASE IF EXISTS `database`;
CREATE DATABASE `database`;
USE `database`;

CREATE TABLE customer (
    customer_id INT(4) NOT NULL AUTO_INCREMENT,
    nama VARCHAR(255),
    phone VARCHAR(10) NOT NULL,
    type_service VARCHAR(255),
    date_time DATETIME,
    PRIMARY KEY (customer_id)
);

ALTER TABLE customer AUTO_INCREMENT = 1;
