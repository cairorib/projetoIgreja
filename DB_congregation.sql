-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2020 às 13:44
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `congregation`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `banco` varchar(100) DEFAULT NULL,
  `conta` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `agencia` varchar(100) DEFAULT NULL,
  `iban` varchar(100) DEFAULT NULL,
  `swift` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `donate`
--

INSERT INTO `donate` (`id`, `banco`, `conta`, `tipo`, `agencia`, `iban`, `swift`) VALUES
(2, 'novo banco', 'conta nova', 'POUPANÇA', 'agencia nova', 'iban novo', 'swift novo'),
(3, 'bradesco UPDATE', 'UPDATEUPDATEUPDATE', 'CONTA CORRENTE', 'UPDATE', 'UPDATEUPDATEUPDATE inbbn', 'swift 222UPDATEUPDATE'),
(5, 'caixa', 'caixa conta', 'POUPANÇA', 'caixa agendcia', 'iban caixa', 'iban agencia'),
(6, 'inter', 'inter conta', 'POUPANÇA', 'inter agencia', 'inter iban', 'inter swift'),
(7, 'bradesco', '123', 'CONTA CORRENTE', '222', 'ewqwewqeqw', 'agora agora switd'),
(8, 'bradesco', '123', 'CONTA CORRENTE', '222', 'ewqwewqeqw', 'agora agora switd'),
(10, 'conta de hj2', '12312313', 'CONTA CORRENTE', 'conta de hj', 'iban da conta de hj', 'swift da conta de hj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `hour` varchar(20) DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `complement` varchar(255) DEFAULT NULL,
  `cep` varchar(100) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `meeting`
--

INSERT INTO `meeting` (`id`, `title`, `description`, `day`, `hour`, `local`, `complement`, `cep`, `tel`) VALUES
(1, 'reunicao exemplo', 'reuniao exemplo descricao', 'DOMINGO', '12:42', 'endereco da reuniao exemplo', 'complemento da reuniao exemplo', 'cep da reuniao exemplo', '1111111111111111111111'),
(4, 'reuniao ok update', 'description update ok', 'DOMINGO', '12:43', 'rua wwwww', 'complement reuniao', 'cep reuniooooooooo', '11111111111111119999'),
(5, 'reuniao 2', 'description', 'TERÇA-FEIRA', '21:00', 'rua wwwww', 'complement reuniao', 'cep reuniooooooooo', '11111111111111119999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `midias`
--

CREATE TABLE `midias` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `midias`
--

INSERT INTO `midias` (`id`, `title`, `description`, `data`) VALUES
(1, 'teste', 'teste teste teste teste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste testeteste teste teste', '121212'),
(4, 'teste', 'teste1', 'www.teste.com'),
(9, 'instagram', 'audio de pregação evangelística', 'www.audiodapregacao.com'),
(10, 'instagram', 'audio de pregação evangelística', 'www.audiodapregacao.com'),
(11, 'teste', 'video yt', 'www,youtube.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT 'NULL',
  `surname` varchar(255) DEFAULT 'NULL',
  `date_of_birth` date DEFAULT NULL,
  `document_id` int(3) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `office_id` int(3) DEFAULT NULL,
  `permission_id` int(3) DEFAULT NULL,
  `address_id` int(3) DEFAULT NULL,
  `type_person_id` int(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `person`
--

INSERT INTO `person` (`id`, `name`, `password`, `surname`, `date_of_birth`, `document_id`, `content`, `office_id`, `permission_id`, `address_id`, `type_person_id`, `email`) VALUES
(19, 'cairo', 'teste123', 'ribeiro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cairorib@gmail.com'),
(20, 'cairo', 'teste123', 'ribeiro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cairorib@gmail.com'),
(27, 'cairo', 'aa1bf4646de67fd9086cf6c79007026c', 'ribeiro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cairorib@gmail.com'),
(28, 'cairo', 'aa1bf4646de67fd9086cf6c79007026c', 'silva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cairorib@gmail.com'),
(29, 'teste', 'f6fd1939bdf31481d27ac4344a2aab58', 'teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste@com.com'),
(31, 'geovaldo', 'aa1bf4646de67fd9086cf6c79007026c', 'barroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ebtadbr@gmail.com'),
(32, 'Rafaela', 'aa1bf4646de67fd9086cf6c79007026c', 'Ribeiro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rafinha@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `presentation`
--

INSERT INTO `presentation` (`id`, `title`, `description`, `data`) VALUES
(1, 'teste presentation update', 'update', '17/09/2020 às 13:41:41'),
(4, 'presentation test2', 'this is the presentation test2', '17/09/2020 às 13:45:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reflexao`
--

CREATE TABLE `reflexao` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reflexao`
--

INSERT INTO `reflexao` (`id`, `title`, `description`, `data`) VALUES
(13, 'Reflexão 11', 'Isaias -  Porque foste a fortaleza do pobre, e a fortaleza do necessitado, na sua angústia; refúgio contra a tempestade, e sombra contra o calor; porque o sopro dos opressores é como a tempestade contra o muro.  Isaías 25:4', '05/10/2020 às 21:14:27'),
(14, 'O SENHOR É BOM', 'DO SENHOR É A TERRA E A SUA PLENITUDE, O MUNDO E OS QUE NELE HABITAM', '04/09/2020'),
(16, 'ALELUIA', 'LOUVAI AO SENHOR PORQUE ELE É BOM, E A SUA MISERICÓRDIA DURA PARA SEMPRE!!!', '07/09/2020'),
(21, 'reflexao nova', 'reflexao nova agora', '16/09/2020 às 13:40:16'),
(24, 'Título para uma reflexão teste longa de vários caracteres', 'texto da nova reflexao', '15/10/2020 às 16:14:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `store`
--

INSERT INTO `store` (`id`, `title`, `description`, `data`) VALUES
(1, 'produto 1', 'livro', 'www.produto.com'),
(4, 'teste', 'qwewqewqewqewqe', 'https://www.instagram.com/tv/CE5OU8ellRU/'),
(5, 'novo produto', 'livro com dicionario', 'www.novoproduto.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `testimony`
--

INSERT INTO `testimony` (`id`, `title`, `description`, `data`) VALUES
(2, 'O SENHOR É BOM', 'Porque foste a fortaleza do pobre, e a fortaleza do necessitado, na sua angústia; refúgio contra a tempestade, e sombra contra o calor; porque o sopro dos opressores é como a tempestade contra o muro.  Isaías 25:4', '08/09/2020'),
(32, 'novo title 3', 'nova d', '16/09/2020 às 14:00:42'),
(41, 'teste', 'asasdada', '08/09/2020 às 21:37:37'),
(43, 'okokok', 'okokok', '08/09/2020 às 23:25:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `warning`
--

CREATE TABLE `warning` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `warning`
--

INSERT INTO `warning` (`id`, `title`, `description`, `data`) VALUES
(1, 'teste', 'Porque foste a fortaleza do pobre, e a fortaleza do necessitado, na sua angústia; refúgio contra a tempestade, e sombra contra o calor; porque o sopro dos opressores é como a tempestade contra o muro.  Isaías 25:4', '0000-00-00'),
(2, 'teste', 'Porque foste a fortaleza do pobre, e a fortaleza do necessitado, na sua angústia; refúgio contra a tempestade, e sombra contra o calor; porque o sopro dos opressores é como a tempestade contra o muro.  Isaías 25:4', '07/09/2020'),
(7, 'teste7', 'aviso corrigido', '16/09/2020'),
(12, 'aviso 1', 'aviso aaaa', '16/09/2020'),
(13, 'aviso novo', 'aviso novo', '16/09/2020'),
(15, 'aviso', 'exemplo 2', '16/09/2020'),
(17, 'aviso', 'exemplo 2', '16/09/2020 às 16:27:52'),
(19, 'aviso2', 'aviso teste2', '23/09/2020 às 17:33:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `midias`
--
ALTER TABLE `midias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reflexao`
--
ALTER TABLE `reflexao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `warning`
--
ALTER TABLE `warning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `midias`
--
ALTER TABLE `midias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `reflexao`
--
ALTER TABLE `reflexao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `warning`
--
ALTER TABLE `warning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
