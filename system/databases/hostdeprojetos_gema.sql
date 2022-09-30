-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30-Set-2022 às 12:13
-- Versão do servidor: 10.3.36-MariaDB-cll-lve
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hostdeprojetos_gema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_eventos` int(11) NOT NULL,
  `id_tipo_eventos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `assunto` varchar(300) NOT NULL,
  `financimento` varchar(50) NOT NULL,
  `inicio` datetime(6) NOT NULL,
  `termino` datetime(6) NOT NULL,
  `equipamentos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_eventos`
--

CREATE TABLE `sub_eventos` (
  `id_sub_eventos` int(11) NOT NULL,
  `id_super_eventos` int(11) NOT NULL,
  `id_eventos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `super_eventos`
--

CREATE TABLE `super_eventos` (
  `id_super_eventos` int(11) NOT NULL,
  `super_eventos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `inicio` datetime(6) NOT NULL,
  `termino` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_eventos`
--

CREATE TABLE `tipo_eventos` (
  `id_tipo_eventos` int(11) NOT NULL,
  `tipo_eventos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Administrador'),
(2, 'Comum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `prontuario` varchar(9) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `corpo_academico` varchar(10) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_tipo_usuario`, `nome`, `prontuario`, `senha`, `corpo_academico`) VALUES
(1, 1, 'Felipe', '12345', '1234567', 'Docente'),
(2, 2, '', '', '', ''),
(3, 2, 'Jenny', 'GU3006158', '123456', 'Discente'),
(4, 2, 'Juliana', '135535465', '12345', 'Docente'),
(5, 2, 'Juliana', '135535465', '12345', 'Docente'),
(6, 2, 'Robson', 'gu080032', 'ifsp@123', 'Docente'),
(7, 2, 'Joel', '000001', 'joelzinho', 'Docente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_eventos`);

--
-- Índices para tabela `sub_eventos`
--
ALTER TABLE `sub_eventos`
  ADD PRIMARY KEY (`id_sub_eventos`);

--
-- Índices para tabela `super_eventos`
--
ALTER TABLE `super_eventos`
  ADD PRIMARY KEY (`id_super_eventos`);

--
-- Índices para tabela `tipo_eventos`
--
ALTER TABLE `tipo_eventos`
  ADD PRIMARY KEY (`id_tipo_eventos`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `foreignkey_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_eventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `super_eventos`
--
ALTER TABLE `super_eventos`
  MODIFY `id_super_eventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_eventos`
--
ALTER TABLE `tipo_eventos`
  MODIFY `id_tipo_eventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `foreignkey_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
