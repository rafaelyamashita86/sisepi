-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2022 às 05:19
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sisepi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `id` int(11) NOT NULL,
  `matricula_func` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `id_epi` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entrega`
--

INSERT INTO `entrega` (`id`, `matricula_func`, `data`, `id_epi`, `quantidade`) VALUES
(10, 8, '2022-04-28 02:04:44', 4, 5),
(11, 8, '2022-04-28 03:04:50', 5, 1),
(12, 5, '2022-05-31 02:05:20', 3, 3),
(14, 3, '2022-06-05 13:31:33', 1, 2),
(15, 2, '2022-06-05 13:36:45', 3, 4),
(16, 5, '2022-06-16 13:49:25', 1, 2),
(17, 6, '2022-06-30 00:11:44', 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `epi`
--

CREATE TABLE `epi` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) CHARACTER SET utf8 NOT NULL,
  `numeroca` int(50) NOT NULL,
  `validadeca` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fornecedor` varchar(50) CHARACTER SET utf8 NOT NULL,
  `validadeepi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `quantidade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `epi`
--

INSERT INTO `epi` (`id`, `descricao`, `numeroca`, `validadeca`, `fornecedor`, `validadeepi`, `quantidade`) VALUES
(1, 'Luva látex Amarela P', 16312, '2026-02-18', 'Volk', '2023-12-06', 30),
(3, 'Avental de PVC branco', 40610, '2022-10-03', 'Prevmax', '2022-10-01', 20),
(4, 'Mascara N95', 45417, '2026-01-12', 'Descarpack', '2026-01-12', 50),
(5, 'Óculos de Proteção Cristal', 34082, '2024-05-16', 'Poli-Fer', '', 150),
(6, 'Protetor Auditivo tipo Concha', 14235, '2026-01-27', '3M', '2026-01-27', 45),
(7, 'Botina Bico PVC', 32807, '2024-07-27', 'UsaSafe', '2023-01-13', 150),
(8, 'CAPACETE 3M H-700 COM AJUSTE FÁCIL BRANCO – CLASSE A', 29637, '2026-01-21', '3M', '2024-06-27', 60),
(9, 'LUVA ANTIVIBRAÇÃO', 38257, '2025-03-07', 'Volk', '2024-09-25', 30),
(10, 'CINTO DE SEGURANÇA CADEIRINHA HÉRCULES HL005ST', 36654, '2024-11-28', 'Hercules', '2024-01-31', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cpf` varchar(50) CHARACTER SET utf8 NOT NULL,
  `data_nascimento` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sexo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(150) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `setor` varchar(50) CHARACTER SET utf8 NOT NULL,
  `funcao` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`matricula`, `nome`, `cpf`, `data_nascimento`, `sexo`, `endereco`, `telefone`, `setor`, `funcao`) VALUES
(1, 'Marcelo', '001.001.001.01', '1988-06-15', 'Masculino', 'rua 123', '1111-1111', '4', 'Auxiliar Administrativo'),
(2, 'Andressa', '002.002.002.02', '1989-07-29', 'Feminino', 'rua teste 3', '2222-2222', '4', 'Copeira'),
(3, 'Marcos', '003.003.003.03', '1980-08-30', 'Outro', 'rua 345', '3333-3333', '7', 'Eletricista'),
(4, 'Andre', '005.005.005.05', '2000-09-19', 'Masculino', 'av cinco', '445555-5555', '4', 'Almoxarife'),
(5, 'Stela', '004.004.004.04', '1994-10-03', 'Feminino', 'av quatro', '44 4444-4444', '4', 'Auxiliar de lavanderia'),
(6, 'Jose', '006.006.006.06', '1990-10-06', 'Masculino', 'rua teste 6', '44 6666-6666', '4', 'Pintor'),
(7, 'Milena', '007.007.007.07', '1965-03-23', 'Feminino', 'av sete', '44 7777-7777', '4', 'Auxiliar de RH'),
(8, 'rafael', '123456789', '1986-06-12', 'Masculino', 'rua cristovao colombo,154', '44984073353', '4', 'Administrador'),
(9, 'Eduardo', '456123789', '2001-09-24', 'Outro', 'Av. testando denovo', '44 7852-9874', '4', 'Auxiliar Administrativo'),
(10, 'Gabriel', '456789123', '2000-02-21', 'Masculino', 'Av. testando denovo', '44 7852-9874', '1', 'Suporte'),
(12, 'Helio ', '4862187636', '1974-05-22', 'Masculino', 'Av Maua, 1548', '44 8966-4521', '4', 'Suporte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `nome`) VALUES
(1, 'T.I Sistemas'),
(2, 'T.I Infraestrutura'),
(4, 'Administrativo'),
(5, 'Almoxarifado'),
(6, 'Lavanderia'),
(7, 'Manutenção'),
(8, 'Recursos Humanos'),
(9, 'Departamento Pessoal'),
(10, 'Contabilidade'),
(11, 'Higienização e Limpeza'),
(12, 'Pronto Atendimento Adulto'),
(13, 'Pronto Atendimento Infantil'),
(14, 'Uti Adulto'),
(15, 'Uti Neonatal'),
(16, 'Copa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `tipo`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'teste', 'teste', 'comum');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `epi`
--
ALTER TABLE `epi`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entrega`
--
ALTER TABLE `entrega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `epi`
--
ALTER TABLE `epi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
