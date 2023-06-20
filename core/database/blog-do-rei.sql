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

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'Miguel', 'miguel@gmail.com', '12345678');

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

CREATE TABLE `blog_content` (
  `id` int(11) NOT NULL,
  `about_us` varchar(256) NOT NULL,
  `memorium` varchar(256) NOT NULL,
  `logo_image` varchar(255) DEFAULT NULL,
  `main_color` varchar(30) DEFAULT NULL,
  `main_color_hover` varchar(15) DEFAULT NULL,
  `secondary_color` varchar(30) DEFAULT NULL,
  `secondary_color_hover` varchar(15) DEFAULT NULL,
  `headers_colors` varchar(15) DEFAULT NULL,
  `about_us_links_colors` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `blog_content` (`id`, `about_us`, `memorium`, `logo_image`, `main_color`, `main_color_hover`, `secondary_color`, `secondary_color_hover`, `headers_colors`, `about_us_links_colors`) VALUES
(1, 'Somos uma comunidade que ama futebol e dedicada a fazer posts relacionados ao esporte mais amado do mundo', 'Sua habilidade, conquistas e impacto no futebol são incomparáveis. Sua grandeza é uma inspiração para milhões de fãs ao redor do mundo. Agradecemos por seu incrível legado.', 'public/img/6487e82d686b1.png', '#d9b32b', '#008000', '#d9b328', '#60668f', '#c99e03', '#fdfeb4');


ALTER TABLE `blog_content`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `blog_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;