CREATE DATABASE tw;

CREATE USER 'php'@'localhost' IDENTIFIED BY 'php';
GRANT ALL PRIVILEGES ON * . * TO 'php'@'localhost';


CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `tw`.`users` (`username`, `password`) VALUES ('admin', 'admin');




