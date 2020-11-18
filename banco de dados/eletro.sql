-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eletro`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`) VALUES
(0, 'Kleberson dos santos silva', 'esta acabando', '0000-00-00 00:00:00'),
(0, 'kleber', 'dddddssms', '2020-11-15 23:51:48'),
(0, 'kleber', 'dddddssms', '2020-11-15 23:59:02'),
(0, 'kleber', 'dddddssms', '2020-11-16 00:00:46'),
(0, 'kleber', 'dddddssms', '2020-11-16 00:01:55'),
(0, 'kleber', 'dddddssms', '2020-11-16 00:03:37'),
(0, 'kleberson santos silva', '1111111111111111111', '2020-11-16 04:23:07'),
(0, '', '', '2020-11-16 11:10:45'),
(0, '', '', '2020-11-16 11:11:01'),
(0, 'CLEUSA DOS SANTOS SILVA', 'novo comentario', '2020-11-16 11:11:20'),
(0, 'CLEUSA DOS SANTOS SILVA', 'novo comentario', '2020-11-16 11:14:19'),
(0, 'CLEUSA DOS SANTOS SILVA', 'novo comentario', '2020-11-16 11:15:12'),
(0, 'CLEUSA DOS SANTOS SILVA', 'novo comentario', '2020-11-16 11:15:52'),
(0, 'CLEUSA DOS SANTOS SILVA', 'novo comentario', '2020-11-16 11:17:38'),
(0, 'CLEUSA DOS SANTOS SILVA', 'novo comentario', '2020-11-16 11:29:10'),
(0, 'kleberson santos silva', 'iiiiiiiiiiiiiiiiiiiiiiiii', '2020-11-16 11:29:27'),
(0, 'kleberson santos silva', 'iiiiiiiiiiiiiiiiiiiiiiiii', '2020-11-16 11:30:35'),
(0, 'kleberson santos silva', 'iiiiiiiiiiiiiiiiiiiiiiiii', '2020-11-16 11:33:13'),
(0, 'kleberson santos silva', 'iiiiiiiiiiiiiiiiiiiiiiiii', '2020-11-16 11:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` float NOT NULL,
  `venda` float NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `descricao`, `preco`, `venda`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 6380.9, 5019, 'imagens/geladeira.jpeg'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 litros', 2069, 1910.9, 'imagens/geladeira2.jpeg'),
(3, 'geladeira', 'Geladeira Frost Free Consul Prata 340 litros', 2199.9, 2.069, 'imagens/ultimageladeirafim.jpg'),
(4, 'fogao', 'Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automatico', 609.8, 519.7, 'imagens/fogao5.jpeg'),
(5, 'fogao', 'Fogão de Piso 5 Bocas Eletrolux prata', 2100.4, 1995.7, 'imagens/fogao_definitivo_fim.jpg'),
(6, 'fogao', 'Fogão 4 Bocas Consul inoxcom mesa de vidro\r\n', 1299.9, 1129, 'imagens/fogao4.jpeg'),
(7, 'fogao', 'Fogão Brastemp 5 Bocas Cor Inox com Mesa de Vidro', 3150.9, 2.909, 'imagens/microondas7.jpeg'),
(8, 'microondas', 'Microondas 25l Espelho Philco 220v', 508.7, 464.53, 'imagens/microondas7.jpeg'),
(9, 'microondas', 'Microondas 20 litros Espelho Eletrolux 220v', 380.7, 320.53, 'imagens/microondas6.jpeg'),
(10, 'microondas', 'Microondas Consul 32 litros Inox 220v<', 580.9, 409.88, 'imagens/1_substituto_microondas.jpg'),
(11, 'microondas', 'Micro - ondas 30 litros Espelhado Consul inox 220v', 1.699, 1214.1, 'imagens/2_substituto_microondas.jpg'),
(12, 'lavaroupas', 'Lavadoura de Roupas Philco Inventer 12 kg', 1199.99, 990.9, 'imagens/maquina-lavar12.jpeg'),
(13, 'lavaroupas', 'Lavadoura de Roupas Brastemp tirânio Inventer 15 kg ', 2450.99, 2350.9, 'imagens/maquina_lavar_fim_brastemp_15.webp'),
(14, 'lavaroupas', 'Lavadora de Roupa Philco 12 Kg', 2300.5, 1950.6, 'imagens/1_substituto_maquina de lavar.jpg'),
(15, ' lava', 'Lavadoura de louças Eletrolux 12 Kg e 10 funções', 1095, 910.9, 'imagens/lava_lousa_ultimo.jpg'),
(16, ' lava', 'Lavadoura de louças Brastemp 8 Kg e 10funções', 1195, 1000.9, 'imagens/lava_losa_penultimo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
