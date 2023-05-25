SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

--
-- Database: `blog-do-rei`
--
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL,
    password TEXT NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE posts (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(256) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(256) NOT NULL,
    created_at DATE NOT NULL,
    author INT(11) NOT NULL,
    tag VARCHAR(256) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;


ALTER TABLE
    posts
ADD
    CONSTRAINT fk_author FOREIGN KEY (author) 
    REFERENCES users(id) 
    ON DELETE RESTRICT 
    ON UPDATE RESTRICT;