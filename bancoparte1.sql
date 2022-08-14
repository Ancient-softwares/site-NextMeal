-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jul-2022 às 16:13
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrestaurante`
--

CREATE DATABASE tcc;
USE tcc;

CREATE TABLE `tbrestaurante` (
  `idRestaurante` int(11) NOT NULL,
  `nomeRestaurante` varchar(100) NOT NULL,
  `telRestaurante` int(10) NOT NULL,
  `cepRestaurante` char(8) NOT NULL,
  `ruaRestaurante` varchar(100) NOT NULL,
  `numRestaurante` varchar(5) NOT NULL,
  `bairroRestaurante` varchar(50) NOT NULL,
  senhaRestaurante varchar(60) NOT NULL,
  `cidadeRestaurante` varchar(30) NOT NULL
  , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbrestaurante`
--
-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `cpfUsuario` char(11) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(200) NOT NULL,
  `celUsuario` char(13) DEFAULT NULL
  , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbrestaurante`
--
ALTER TABLE `tbrestaurante`
  ADD PRIMARY KEY (`idRestaurante`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbrestaurante`
--
ALTER TABLE `tbrestaurante`
  MODIFY `idRestaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE tbMesa(
  idMesa INT PRIMARY KEY AUTO_INCREMENT
  , quantAcento INT(11)
  , statusMesa BOOLEAN
  , numMesa INT(11)
  , idRestaurante INT
  , FOREIGN KEY (idRestaurante) REFERENCES tbrestaurante(idRestaurante)
  , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);