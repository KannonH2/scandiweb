-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23-Dez-2021 às 14:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE `book` (
  `SKU` text NOT NULL,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `ID_BOOK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`SKU`, `Name`, `Price`, `Weight`, `ID_BOOK`) VALUES
('1ifgoa832', 'Photoshop basics', 76, 2, 4),
('oavboa', 'oiansotgai', 512, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dvd`
--

CREATE TABLE `dvd` (
  `SKU` text NOT NULL,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Size` int(11) NOT NULL,
  `ID_DVD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dvd`
--

INSERT INTO `dvd` (`SKU`, `Name`, `Price`, `Size`, `ID_DVD`) VALUES
('2a5gf8521', 'Movie 3', 80, 906, 5),
('89', 'As incríveis aventuras de Alice no país das maravilhas', 96, 70, 7),
('1', '2', 3, 4, 8),
('52', 'aaa', 651, 600, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forniture`
--

CREATE TABLE `furniture` (
  `SKU` text NOT NULL,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Height` int(11) NOT NULL,
  `Width` int(11) NOT NULL,
  `Length` int(11) NOT NULL,
  `ID_FORNITURE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forniture`
--

INSERT INTO `furniture` (`SKU`, `Name`, `Price`, `Height`, `Width`, `Length`, `ID_FORNITURE`) VALUES
('2a5gf8521', 'aaa', 96630, 95, 10, 3, 4),
('afpmnm sdo', 'loabnsdoigansodn', 6516518, 9, 80, 7, 5),
('5', '6rty', 2421, 5, 6, 7, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID_BOOK`);

--
-- Índices para tabela `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`ID_DVD`);

--
-- Índices para tabela `forniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`ID_FORNITURE`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `book`
--
ALTER TABLE `book`
  MODIFY `ID_BOOK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `dvd`
--
ALTER TABLE `dvd`
  MODIFY `ID_DVD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `forniture`
--
ALTER TABLE `furniture`
  MODIFY `ID_FORNITURE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
