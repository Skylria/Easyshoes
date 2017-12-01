-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2017 at 12:21 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3284797_login`
--
CREATE DATABASE IF NOT EXISTS `id3284797_login` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id3284797_login`;

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
  `categoria` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Cadastro_produtos`
--

INSERT INTO `Cadastro_produtos` (`codigo`, `cor`, `marca`, `numero`, `setor`, `quantidade`, `preco`, `categoria`) VALUES
(2, 'Verde', 'Hawaianas', 40, '32', 292, 20, '0'),
(6, 'Preto', 'Maybelline', 38, '44', 20, 150, 'sapato_social'),
(7, 'Verde', 'Hawaianas', 37, '33', 49, 40, 'sandalia');

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
(30, '30/11/2017', '20:27:18', '', 'Branco', 'Adidas', 38, 30, 1, 210);

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
(17, 'a', 8, 8, 'bruna@gmail.com', '1111-11-11', 'a', '1', '', 'funcionario'),
(18, 'Bruna Rafaella de Oliveira Neves', 2147483647, 2147483647, 'brubs@gmail.com', '2000-04-11', 'brubs', '123', '', 'funcionario'),
(19, 'MILENA LINS', 2147483647, 2147483647, 'micelly@live.com', '2017-11-06', 'MILE', '123', 'a9a2fe32e6d8a53c8abc2eb6f6ddba034fceb504.jpg', 'funcionario');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'sapato');

-- --------------------------------------------------------

--
-- Table structure for table `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `usuario` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cadastro_produtos`
--
ALTER TABLE `Cadastro_produtos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `categoria_fk` (`categoria`) USING BTREE;

--
-- Indexes for table `Vendas`
--
ALTER TABLE `Vendas`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_fk` (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cadastro_produtos`
--
ALTER TABLE `Cadastro_produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Vendas`
--
ALTER TABLE `Vendas`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
