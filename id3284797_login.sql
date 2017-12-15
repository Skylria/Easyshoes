-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2017 at 06:07 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3284797_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro`
--

CREATE TABLE `cadastro` (
  `U_id` int(11) NOT NULL,
  `U_NOME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `U_CPF` int(11) NOT NULL,
  `U_TELEFONE` int(11) NOT NULL,
  `U_EMAIL` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `U_NASCIMENTO` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `U_LOGIN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `U_SENHA` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `U_Foto` text COLLATE utf8_unicode_ci NOT NULL,
  `U_CARGO` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cadastro`
--

INSERT INTO `cadastro` (`U_id`, `U_NOME`, `U_CPF`, `U_TELEFONE`, `U_EMAIL`, `U_NASCIMENTO`, `U_LOGIN`, `U_SENHA`, `U_Foto`, `U_CARGO`) VALUES
(17, 'a', 8, 8, 'bruna@gmail.com', '1111-11-11', 'a', '1', '318e09e831b6bce7945643872cdbe4cbf0ca8c1f.jpg', 'adm'),
(18, 'Bruna Rafaella de Oliveira Neves', 2147483647, 2147483647, 'brubs@gmail.com', '2000-04-11', 'brubs', '123', '993733bd6b67d1506d41666469ac2367535bf4be.png', 'adm'),
(19, 'MILENA LINS', 2147483647, 2147483647, 'micelly@live.com', '2017-11-06', 'MILE', '123', 'a9a2fe32e6d8a53c8abc2eb6f6ddba034fceb504.jpg', 'gerente'),
(20, 'alexandre', 2147483647, 2147483647, 'alexandre@gmail.com', '3123-09-12', 'alexandre', '123', '06d202a6c137baef5475425dd50ff727e5803852.jpg', 'funcionario'),
(21, 'Bruna Rafaella', 1234567899, 2147483647, 'bruna@dan.com', '2000-04-11', 'br', '123', 'd0cce4c3db79d3e19a2ed8cc48cb4b2fe8cf1af5.jpg', 'funcionario'),
(22, 'MILENA LINS', 2147483647, 0, 'milennab7@gmail.com', '2017-12-16', 'lila', 'AMARETUDO', '', 'funcionario'),
(23, 'Nany', 21345, 12345, 'a@g.c', '1111-11-11', 'nany', '123', 'a3f1e4f44df5d317dd15f41b07ae0a54b0413d68.jpg', 'funcionario'),
(24, 'aa', 5252353, 352353, 's@dhhd', '2017-12-18', 'w', '123', '', 'funcionario'),
(25, 'SHIRLEIDE', 2147483647, 0, 'shirleidesilva@gamil', '2017-12-26', 'shirley', 'aulaqlegal', '', 'funcionario'),
(26, 'teste', 32145678, 234356789, 'a@gmail.com', '0456-03-12', 'teste', '123', '', 'NAO DEFINIDO'),
(27, 'Magno', 994449, 83452, 'sport@campeao', '2017-12-08', 'magrao', '1987', '', 'funcionario'),
(28, 'Davi Guaraná', 2147483647, 987923837, 'daviguarana20@gmail.', '1997-09-03', 'davi', '123', '', 'gerente'),
(29, 'seu ze', 2147483647, 0, 'ded@dwd.com', '9999-09-09', 'seu ze', '123', '', 'NAO DEFINIDO');

-- --------------------------------------------------------

--
-- Table structure for table `Cadastro_produtos`
--

CREATE TABLE `Cadastro_produtos` (
  `codigo` int(11) NOT NULL,
  `cor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `marca` text COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(2) NOT NULL,
  `setor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` int(10) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Cadastro_produtos`
--

INSERT INTO `Cadastro_produtos` (`codigo`, `cor`, `marca`, `numero`, `setor`, `quantidade`, `preco`, `id_cat`) VALUES
(18, 'Rosa', 'Moleca', 35, '25', 495, 259, 2),
(23, 'laranja e ', 'Borabora', 56, 'calçados', 20, 6500, 6),
(24, 'Preta', 'Havaina', 39, '&lt;script', 20, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome_cat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nome_cat`) VALUES
(1, 'Calçado_Feminino: Sandália'),
(2, 'Calçado_Feminino: Sapatilha'),
(3, 'Calçado_Feminino: Tênis'),
(4, 'Calçado_Feminino: Bota'),
(5, 'Calçado_Feminino: Salto'),
(6, 'Calçado_Feminino: Rasteirinha'),
(7, 'Calçado_Feminino: Peep Toes'),
(8, 'Calçado_Feminino: Scarpins'),
(9, 'Calçado_Masculino: Chuteira'),
(10, 'Calçado_Masculino: Tênis'),
(11, 'Calçado_Masculino: Sapato_Social'),
(12, 'Calçado_Masculino: Bota'),
(13, 'Calçado_Masculino: Mocassim'),
(14, 'Calçado_Masculino: Alpargata'),
(15, 'Calçado_Masculino: Sandália'),
(16, 'Calçado_Masculino: Sapato_Casual'),
(17, 'Calçado_Infantil: Bota'),
(18, 'Calçado_Infantil: Sandália'),
(19, 'Calçado_Infantil: Chuteira'),
(20, 'Calçado_Infantil: Tênis'),
(21, 'Calçado_Infantil: Crocs'),
(22, 'Calçado_Infantil: Galocha'),
(23, 'Calçado_Infantil: Mocassim'),
(24, 'Calçado_Infantil: Pantufa'),
(25, 'Calçado_Infantil: Sneakers');

-- --------------------------------------------------------

--
-- Table structure for table `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `data` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `hora` time NOT NULL,
  `usuario` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mensagem`
--

INSERT INTO `mensagem` (`id`, `data`, `hora`, `usuario`, `texto`) VALUES
(2, '2017-12-01', '10:40:00', 'mili', 'Nossa meus parabéns , gostei muito deste site facilitará  meu trabalho :D'),
(3, '2017-12-01', '13:00:00', 'bea', 'Uhuuuuuuuuuuuuuuu'),
(4, '0000-00-00', '13:49:52', 'id3284797_easys', 'dsfsdfdsfdfds'),
(5, '0000-00-00', '13:51:25', 'brubs', 'asdsadsa'),
(6, '01/12/2017', '13:59:38', 'brubs', 'rgdfgfdgfd'),
(7, '01/12/2017', '14:16:26', 'brubs', 'oiiii'),
(8, '01/12/2017', '14:23:57', 'brubs', 'd'),
(9, '01/12/2017', '14:28:43', 'brubs', 'dgfggf'),
(10, '01/12/2017', '15:02:01', 'brubs', 'oii'),
(11, '01/12/2017', '15:51:40', 'brubs', 'olá sou a bruna'),
(12, '07/12/2017', '12:59:51', 'brubs', 'olá'),
(13, '14/12/2017', '15:24:25', 'brubs', 'YAGO PREGUIÇA'),
(14, '15/12/2017', '12:56:47', 'nany', 'oiiii'),
(15, '15/12/2017', '12:57:17', 'nany', 'oi, muito bom!'),
(16, '15/12/2017', '12:57:53', 'nany', 'NOTA 10'),
(17, '15/12/2017', '13:00:39', 'nany', 'Maravilhoso!'),
(18, '15/12/2017', '14:10:24', 'davi', 'Mude meu usuário seu misera');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `USER_NOME` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USER_CIDADE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USER_TELEFONE` int(11) NOT NULL,
  `USER_CNPJ` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGRADOURO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `USER_CARGO` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `USER_LOGIN` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USER_SENHA` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`USER_NOME`, `USER_CIDADE`, `USER_TELEFONE`, `USER_CNPJ`, `USER_LOGRADOURO`, `USER_EMAIL`, `USER_CARGO`, `USER_LOGIN`, `USER_SENHA`) VALUES
('a', 'dasdas', 43543534, 'asdasdasd', 'asdad', 'asdasdasd@gmail.com', '', 'adsdasd', 'asdadsadas');

-- --------------------------------------------------------

--
-- Table structure for table `Vendas`
--

CREATE TABLE `Vendas` (
  `v_id` int(11) NOT NULL,
  `v_data` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `v_hora` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `v_vendedor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `p_cor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `p_marca` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `p_numero` int(11) NOT NULL,
  `p_setor` int(11) NOT NULL,
  `p_quantidade` int(11) NOT NULL,
  `p_preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Vendas`
--

INSERT INTO `Vendas` (`v_id`, `v_data`, `v_hora`, `v_vendedor`, `p_cor`, `p_marca`, `p_numero`, `p_setor`, `p_quantidade`, `p_preco`) VALUES
(7, '16/11/2017 ', '', 'bea', 'Branco', 'Adidas', 38, 30, 1, 210),
(10, '15/11/2017', '23:05:31', 'bea', 'Branco', 'Adidas', 38, 30, 1, 210),
(11, '15/11/2017', '23:42:30', 'dolly', 'Verde', 'Hawaianas', 40, 32, 1, 20),
(12, '16/11/2017', '14:04:15', 'bea', 'Branco', 'Adidas', 38, 30, 1, 210),
(13, '16/11/2017', '14:05:14', 'bea', 'Verde', 'Hawaianas', 40, 32, 1, 20),
(14, '16/11/2017', '13:09:46', 'bea', 'Verde com ', 'Havaiana', 33, 7, 1, 400),
(15, '16/11/2017', '13:12:43', 'bea', 'Verde', 'Hawaianas', 40, 32, 1, 20),
(16, '16/11/2017', '13:16:21', 'alexandre', 'Branco', 'Adidas', 38, 30, 1, 210),
(17, '17/11/2017', '13:11:35', 'bea', 'Branco', 'Adidas', 38, 30, 1, 210),
(18, '17/11/2017', '14:10:45', 'bea', 'Branco', 'Adidas', 38, 30, 1, 210),
(19, '17/11/2017', '18:56:46', 'and', 'Branco', 'Adidas', 38, 30, 1, 210),
(20, '21/11/2017', '19:40:55', 'a', 'Branco', 'Adidas', 38, 30, 1, 210),
(21, '27/11/2017', '16:35:21', 'brubs', 'Branco', 'Adidas', 38, 30, 5, 210),
(22, '27/11/2017', '16:35:22', 'brubs', 'Branco', 'Adidas', 38, 30, 5, 210),
(23, '27/11/2017', '16:35:22', 'brubs', 'Branco', 'Adidas', 38, 30, 5, 210),
(24, '27/11/2017', '16:35:24', 'brubs', 'Branco', 'Adidas', 38, 30, 5, 210),
(25, '27/11/2017', '16:36:20', 'brubs', 'Branco', 'Adidas', 38, 30, 5, 210),
(26, '27/11/2017', '16:36:23', 'brubs', 'Branco', 'Adidas', 38, 30, 4, 210),
(27, '29/11/2017', '21:04:22', 'a', 'Branco', 'Adidas', 38, 30, 3, 210),
(28, '30/11/2017', '20:27:10', '', 'Verde', 'Hawaianas', 40, 32, 293, 20),
(29, '30/11/2017', '20:27:14', '', 'Branco', 'Adidas', 38, 30, 2, 210),
(30, '30/11/2017', '20:27:18', '', 'Branco', 'Adidas', 38, 30, 1, 210),
(31, '01/12/2017', '13:30:22', 'brubs', 'Verde', 'Hawaianas', 40, 32, 292, 20),
(32, '01/12/2017', '13:31:04', 'brubs', 'Verde', 'Hawaianas', 37, 33, 49, 40),
(33, '01/12/2017', '13:32:54', 'brubs', 'Verde', 'Hawaianas', 40, 32, 1, 20),
(34, '01/12/2017', '13:43:27', 'brubs', 'UH', 'D', 1, 1, 1, 1),
(35, '01/12/2017', '13:46:17', 'brubs', '7', 'oiu\'', 8, 6, 1, 21),
(36, '01/12/2017', '13:46:20', 'brubs', '98', 'UJNH', 0, 98, 1, 987),
(37, '01/12/2017', '13:46:24', 'brubs', '98', 'UHIUH', 90, 8, 1, 98),
(38, '01/12/2017', '16:01:54', 'alexandre', 'azul', 'Melissa', 37, 12, 1, 50),
(39, '01/12/2017', '16:02:01', 'alexandre', 'azul', 'Melissa', 37, 12, 1, 50),
(40, '07/12/2017', '13:03:09', 'brubs', 'azul', 'Melissa', 37, 12, 1, 50),
(41, '07/12/2017', '18:37:54', 'brubs', 'Rosa', 'Moleca', 35, 25, 1, 259),
(42, '14/12/2017', '10:59:41', 'brubs', 'Rosa', 'Moleca', 35, 25, 1, 259),
(43, '14/12/2017', '14:20:14', 'brubs', 'hgff', '8ioi989i', 45, 6, 1, 43),
(44, '14/12/2017', '15:22:55', 'brubs', 'Rosa', 'Moleca', 35, 25, 1, 259),
(45, '14/12/2017', '15:22:57', 'brubs', 'Rosa', 'Moleca', 35, 25, 1, 259),
(46, '14/12/2017', '15:27:19', 'brubs', 'SD', 'SADSAD', 44, 33, 1, 32),
(47, '14/12/2017', '15:27:21', 'brubs', 'SD', 'SADSAD', 44, 33, 1, 32),
(48, '14/12/2017', '15:27:24', 'brubs', 'hgff', '8ioi989i', 45, 6, 1, 43),
(49, '15/12/2017', '12:26:36', 'nany', 'Rosa', 'Moleca', 35, 25, 1, 259);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `Cadastro_produtos`
--
ALTER TABLE `Cadastro_produtos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `id_cat_fk` (`id_cat`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USER_LOGIN`);

--
-- Indexes for table `Vendas`
--
ALTER TABLE `Vendas`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Cadastro_produtos`
--
ALTER TABLE `Cadastro_produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Vendas`
--
ALTER TABLE `Vendas`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cadastro_produtos`
--
ALTER TABLE `Cadastro_produtos`
  ADD CONSTRAINT `id_cat_fk` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
