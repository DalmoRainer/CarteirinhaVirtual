-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jan-2021 às 14:57
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carteirinhaf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastraralunos`
--

CREATE TABLE `cadastraralunos` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `matricula` int(9) NOT NULL,
  `idade` int(3) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `endereco` varchar(90) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `sala` varchar(60) NOT NULL,
  `curso` varchar(90) NOT NULL,
  `dataano` int(4) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastraralunos`
--

INSERT INTO `cadastraralunos` (`id`, `usuario`, `matricula`, `idade`, `sexo`, `endereco`, `telefone`, `sala`, `curso`, `dataano`, `data`, `foto`) VALUES
(17, 'Dalmo Nolasco Dantas Rainer', 1, 20, 'masculino', 'Bairro Betânia, rua Bonança, número 231', '(31) 98304-2790', 'TII116M', 'Técnico Informática', 2021, '2021-01-18 13:00:03', 0x66666438663531316334356665343134363163333633623238643266396235392e6a7067);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastraralunos`
--
ALTER TABLE `cadastraralunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastraralunos`
--
ALTER TABLE `cadastraralunos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
