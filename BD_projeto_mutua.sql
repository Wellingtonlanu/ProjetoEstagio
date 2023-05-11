-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Maio-2023 às 21:01
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_mutua`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuidade`
--

CREATE TABLE `anuidade` (
  `id_anuidade` int(11) NOT NULL,
  `ano` int(11) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `id_associado` int(11) DEFAULT NULL,
  `status_anuidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `anuidade`
--

INSERT INTO `anuidade` (`id_anuidade`, `ano`, `valor`, `id_associado`, `status_anuidade`) VALUES
(1, 2022, 195.5, 1, 1),
(2, 2020, 300, 2, 1),
(3, 2021, 250, 3, 1),
(4, 2019, 240, 4, 1),
(5, 2023, 360, 5, 1),
(7, 2010, 100, 6, 0),
(8, 2022, 125.5, 14, 0),
(10, 2022, 400.5, 16, 0),
(11, 2022, 210.5, 17, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `associados`
--

CREATE TABLE `associados` (
  `id_associado` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` int(12) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `associados`
--

INSERT INTO `associados` (`id_associado`, `nome`, `email`, `telefone`, `status`) VALUES
(1, 'Wellington', 'aaa@gmail.com', 214748364, 1),
(2, 'lanu', 'bbb@gmail.com', 2147483647, 1),
(3, 'Guilherme', 'ccc@gmail.com', 2147483647, 0),
(4, 'Daniel', 'ddd@gmail.com', 789789345, 1),
(5, 'Maurilio', 'eee@gmail.com', 2147483647, 1),
(6, 'José', 'fff@gmail.com', 2147483647, 1),
(14, 'Edson', 'eed@gmail.com', 2147483647, 1),
(16, 'Miguel', 'Miguel@gmail.com', 2147483647, 1),
(17, 'Arthur', 'arthur@gmail.com', 2147483647, 1),
(18, 'Reginaldo', 'reginaldo@gmail.com', 2147483647, 1),
(19, 'Lucas', 'lucas@gmail.com', 2147483647, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cep` int(11) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `id_associado` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `endereco`, `bairro`, `cep`, `uf`, `id_associado`, `status`) VALUES
(1, 'csg 5', 'Taguatinga Sul', 82374524, 'DF', 3, 1),
(2, 'qna 47', 'Taguatinga Norte', 4363452, 'DF', 5, 1),
(4, 'arniqueiras', 'Aguas claras', 43457, 'DF', 1, 1),
(5, 'concessionárias', 'Aguas claras', 456542523, 'DF', 2, 1),
(6, 'ermida dom bosco', 'Lago sul', 456542523, 'DF', 4, 1),
(8, 'Quadra 105', 'Aguas claras', 2147483647, 'DF', 14, 1),
(10, 'qna 47', 'Taguatinga Norte', 4363452, 'DF', 6, 0),
(11, 'SBN Quadra 02', ' PLANO PILOTO', 71565, 'DF', 16, 0),
(12, 'SHIS QI 11', 'Lago sul', 56465123, 'DF', 17, 0),
(13, 'rua 20', 'aguas claras', 50, 'DF', 18, 0),
(14, 'rua 20', 'Aguas claras', 50, 'DF', 19, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_associado`
--

CREATE TABLE `tipo_associado` (
  `id_tipo_associado` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `id_associado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tipo_associado`
--

INSERT INTO `tipo_associado` (`id_tipo_associado`, `nome`, `id_associado`) VALUES
(1, 'estagiário', 1),
(2, 'engenheiro', 2),
(3, 'analista', 3),
(4, 'funcionário', 4),
(5, 'infra', 6),
(6, 'dev', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuidade`
--
ALTER TABLE `anuidade`
  ADD PRIMARY KEY (`id_anuidade`),
  ADD KEY `anuidade_ibfk_1` (`id_associado`);

--
-- Índices para tabela `associados`
--
ALTER TABLE `associados`
  ADD PRIMARY KEY (`id_associado`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `enderecos_ibfk_1` (`id_associado`);

--
-- Índices para tabela `tipo_associado`
--
ALTER TABLE `tipo_associado`
  ADD PRIMARY KEY (`id_tipo_associado`),
  ADD KEY `id_associado` (`id_associado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuidade`
--
ALTER TABLE `anuidade`
  MODIFY `id_anuidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `associados`
--
ALTER TABLE `associados`
  MODIFY `id_associado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tipo_associado`
--
ALTER TABLE `tipo_associado`
  MODIFY `id_tipo_associado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anuidade`
--
ALTER TABLE `anuidade`
  ADD CONSTRAINT `anuidade_ibfk_1` FOREIGN KEY (`id_associado`) REFERENCES `associados` (`id_associado`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`id_associado`) REFERENCES `associados` (`id_associado`) ON DELETE NO ACTION;

--
-- Limitadores para a tabela `tipo_associado`
--
ALTER TABLE `tipo_associado`
  ADD CONSTRAINT `tipo_associado_ibfk_1` FOREIGN KEY (`id_associado`) REFERENCES `associados` (`id_associado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
