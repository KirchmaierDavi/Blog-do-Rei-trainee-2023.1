-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2023 às 02:31
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog-do-rei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_content`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `blog_content`
--

INSERT INTO `blog_content` (`id`, `about_us`, `memorium`, `logo_image`, `main_color`, `main_color_hover`, `secondary_color`, `secondary_color_hover`, `headers_colors`, `about_us_links_colors`) VALUES
(0, 'O Blog foi criado com o intuito de informar sobre o futebol pelo mundo e homenagear o eterno Rei Pelé.', 'Sua habilidade, conquistas e impacto no futebol são incomparáveis. Sua grandeza é uma inspiração para milhões de fãs ao redor do mundo. Agradecemos por seu incrível legado.', 'public/img/6487e82d686b1.png', '#d9b32b', '#008000', '#d9b328', '#60668f', '#c99e03', '#fdfeb4'),
(1, 'O Blog foi criado com o intuito de informar sobre o futebol pelo mundo e homenagear o eterno Rei Pelé.', 'Sua habilidade, conquistas e impacto no futebol são incomparáveis. Sua grandeza é uma inspiração para milhões de fãs ao redor do mundo. Agradecemos por seu incrível legado.', 'public/img/6487e82d686b1.png', '#d9b32b', '#008000', '#d9b328', '#60668f', '#c99e03', '#fdfeb4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `created_at` date NOT NULL,
  `author` int(11) NOT NULL,
  `tag` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `created_at`, `author`, `tag`) VALUES
(8, 'Santos cultua Pelé: “O homem que levou o nome do Alvinegro para o mundo”', 'Único clube no Brasil no qual Pelé atuou, o Santos emitiu uma nota, nesta quinta-feira, lamentando a morte do maior jogador de todos os tempos. O velório será na Vila Belmiro, mas o horário ainda não foi definido.\r\n\r\n\"O Santos FC lamenta profundamente o falecimento do melhor jogador de futebol de todos os tempos, o homem que levou o nome do Alvinegro Praiano para o mundo, nosso maior ídolo, que eternizou a camisa 10 e a transformou em obra de arte. Qualquer homenagem é pequena perto da grandeza de Edson Arantes do Nascimento, o nosso eterno Rei Pelé\", escreveu o comunicado.\r\n\r\nNa nota, o clube alvinegro aproveitou para contar um pouco a história do Rei do Futebol. \"O menino de Três Corações, o Dico para o seo Dondinho e para a Dona Celeste, o Bilé em homenagem ao ídolo de infância, o Gasolina quando pisou no campo da Vila Belmiro, que se transformou no maior. Os 1.116 jogos, os 1.091 gols, os 45 títulos com a camisa santista. Assim o mundo viu nascer, crescer e se tornar um atleta com números inigualáveis. Um homem que se foi, uma história que será contada por todos os tempos.\"\r\n\r\nO Santos decretou luto oficial de sete dias e a bandeira ficará hasteada à meio mastro. \"Nossos sentimentos à mãe dona Celeste, à esposa Márcia Aoki, filhos e netos e para todos os apaixonados pelo esporte, como nós, súditos do Rei, para sempre\", finalizou a nota.', 'https://media.gazetadopovo.com.br/sites/3/2022/12/29170606/0002050542078img_00788415_0_-NOr3me-960x540.jpeg', '2023-06-01', 11, ''),
(9, 'Quantas vezes Pelé ganhou a Copa do Mundo?', 'Ídolo brasileiro é o recordista em conquistas da Copa do Mundo.\r\n\r\nA morte de Edson Arantes do Nascimento, o Pelé, foi confirmada nesta quinta-feira, dia 29 de dezembro, pelo hospital Albert Einstein, em São Paulo. Ele lutava contra um tumor no intestino, descoberto em setembro de 2021. Ninguém conquistou mais títulos mundiais do que Edson Arantes do Nascimento. Maior ídolo do futebol brasileiro, \r\nPelé ganhou a Copa do Mundo três vezes e é recordista no quesito.\r\n\r\nPelé venceu a sua primeira Copa do Mundo aos 17 anos, na edição de 1958. Ele participou dos três primeiros títulos do Brasil, conquistados em 1958, 1962 e 1970, quando a Seleção ficou com a Taça Jules Rimet em definitivo.', 'https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt1cd63fceda2228f3/6243036bfd804671fee02d80/GettyImages-477427751_(1).jpg?auto=webp&format=pjpg&width=3840&quality=60', '2023-06-13', 13, ''),
(10, 'Tudo Sobre Pelé', 'Pelé é ex-jogador de futebol, considerado um dos maiores de todos os tempos. Começou a carreira nos campos na equipe infanto-juvenil do Bauru Atlético Clube, conhecido como Baquinho, time amador do interior do estado de São Paulo, na década de 1950. A habilidade chamou a atenção e ele foi aprovado após um teste no Santos com apenas 15 anos.\r\n\r\nTornou-se a principal estrela do Peixe, vencendo com goleadas logo nos primeiros jogos no time profissional. Maior artilheiro da história do clube, o levou à conquista da Copa Libertadores da América de 1962 e 1963. Fez sua estreia pela Seleção Brasileira no fim dos anos 1950, com 16 anos, é também nosso maior goleador, com 77 gols em 92 jogos, contribuindo para as vitórias na Copa do Mundo de 1958, 1962 e 1970.\r\n\r\nSua despedida dos campos foi em 1974, com vitória do Santos sobre o Ponte Preta, pelo Campeonato Paulista. Antes de se aposentar, entre 1975 e 1977, ele ainda defendeu o Cosmos, de Nova York. Mesmo após pendurar definitivamente as chuteiras, seguiu como uma das personalidades brasileiras mais reconhecidas em todo o mundo. Na década de 1990, foi nomeado ministro do esporte pelo então presidente Fernando Henrique Cardoso.\r\n\r\nÉ casado com a empresária Márcia Cibele Aoki, com quem começou a namorar em 2010. Sua vida íntima sempre foi vastamente explorada, a exemplo do namoro com a então modelo Xuxa Meneghel. Foi casado duas vezes: com Rosimeri Cholbi, com quem teve três filhos, Edinho, Jennifer e Kelly, entre os anos 1960 e 1970; e com a cantora gospel Assíria Nascimento, mãe dos gêmeos Joshua e Celeste, na década de 1990.', 'https://www.infomoney.com.br/wp-content/uploads/2022/12/Pele.jpg?quality=50&resize=1024%2C675&strip=all', '2023-06-19', 12, ''),
(11, 'Além de artilheiro, Pelé já atuou como goleiro quatro vezes', 'Em regras antigas, em caso de expulsão do goleiro, um jogador de linha era o substituto direto; Pelé chegou inclusive a treinar na posição junto da seleção brasileira.\r\n\r\nO Rei Pelé era conhecido mundialmente por ser o maior da história do futebol pelo talento dele com a bola nos pés. No entanto, em quatro ocasiões, ele chegou a jogar como goleiro.\r\n\r\nNa época, em caso de expulsão de goleiro ou lesão se possibilidade de substituição, um jogador de linha precisava ocupar a posição. Pelé era um ótimo goleiro e por muitas vezes treinou como tal na seleção brasileira.\r\n\r\nPelé jogou como goleiro quatro vezes: uma no Campeonato Paulista, outra na Taça Brasil e as outras duas em amistosos.\r\n\r\nForam ao todo 54 minutos jogados como goleiro, todos atuando pelo Santos — e Pelé nunca sofreu um gol.', 'https://midias.correiobraziliense.com.br/_midias/jpg/2022/12/30/675x450/1_mf0000003338i-27158860.jpg', '2023-06-19', 14, ''),
(12, 'Pelé completa 75 anos com uma vida ligada ao Vasco da Gama', 'Torcedor cruzmaltino desde a infância, quando dava os primeiros passos no esporte em Três Corações, Minas Gerais, Pelé recebeu o apelido vindo de um goleiro que atuava no time em que seu pai jogava. A equipe se chamava Vasco da Gama de São Lourenço (MG), em homenagem ao Gigante da Colina, e o arqueiro, ídolo de Pelé na época, tinha o apelido de Bilé. Porém, o jovem Edson não conseguia pronunciar o nome com exatidão e o chamava pelo apelido que acabou eternizado por ele no futuro. \r\n\r\nProfissional desde cedo, o aniversariante do dia, com apenas 16 anos, disputou três partidas representando o clube de São Januário, em um torneio amistoso no Maracanã, no ano de 1957. O grupo de atletas que entrou neste campeonato era composto por um combinado entre Vasco e Santos. Autor de cinco gols nestes duelos, Pelé foi convocado logo depois, pela primeira vez, para integrar a Seleção Brasileira. Aos 29 anos, o jogador marcou o seu milésimo gol na carreira em confronto contra o cruzmaltino no Maracanã, em 19 de novembro de 1969. Após marcar o tento, de pênalti, o craque vestiu a camisa vascaína com o número 1.000 às costas e comemorou com uma volta olímpica no gramado do estádio.\r\n\r\nEm reconhecimento ao histórico do Vasco da Gama na luta contra o preconceito, Edson Arantes do Nascimento declarou diversas vezes a gratidão e aplaudiu o esforço cruzmaltino em buscar sempre a igualdade no esporte. Entre outras frases, uma ficou eternizada pelo Rei: “O Vasco é o time que me abriu as portas para o mundo”.', 'https://vasco.com.br/wp-content/uploads/2020/10/20151023160802_717.jpg', '2023-06-20', 15, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(10, 'Miguel Sales', 'miguelsales@blogdorei.com', '12345678'),
(11, 'Davi Kirchmaier', 'davikirchmaier@blogdorei.com', 'davidavi'),
(12, 'Gabriel Domingos', 'gabrieldomingos@blogdorei.com', '87654321'),
(13, 'Rayssa Amaral', 'rayssaamaral@blogdorei.com', 'eurayssa'),
(14, 'Sara Ingrid', 'saraingrid@blogdorei.com', 'sarasara'),
(15, 'Saulo Surerus', 'saulosurerus@blogdorei.com', 'saulo123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `blog_content`
--
ALTER TABLE `blog_content`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_author` (`author`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blog_content`
--
ALTER TABLE `blog_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_author` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
