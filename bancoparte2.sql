-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2022 às 21:22
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `we`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbavaliacao`
--

CREATE TABLE `tbavaliacao` (
  `idAvalicao` int(11) NOT NULL,
  `notaAvaliacao` int(5) DEFAULT NULL,
  `descAvaliacao` varchar(200) DEFAULT NULL,
  `dtAvaliação` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(300) NOT NULL,
  `cpfCliente` char(14) NOT NULL,
  `celCliente` char(13) DEFAULT NULL,
  `senhaCliente` varchar(20) DEFAULT NULL,
  `fotoCliente` blob DEFAULT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `cepCliente` char(9) NOT NULL,
  `ruaCliente` varchar(100) NOT NULL,
  `numCasa` varchar(5) NOT NULL,
  `bairroCliente` varchar(100) NOT NULL,
  `cidadeCliente` varchar(100) NOT NULL,
  `estadoCliente` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmesa`
--

CREATE TABLE `tbmesa` (
  `idMesa` int(11) NOT NULL,
  `quantAcentosMesa` int(11) NOT NULL,
  `statusMesa` tinyint(1) NOT NULL,
  `numMesa` int(11) NOT NULL,
  `idRestaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmesareserva`
--

CREATE TABLE `tbmesareserva` (
  `idReservaMesa` int(11) NOT NULL,
  `idMesa` int(11) NOT NULL,
  `idReserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprato`
--

CREATE TABLE `tbprato` (
  `idPrato` int(11) NOT NULL,
  `valorPrato` double NOT NULL,
  `ingredientesPrato` varchar(40) NOT NULL,
  `fotoPrato` blob DEFAULT NULL,
  `idTipoPrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbreserva`
--

CREATE TABLE `tbreserva` (
  `idReserva` int(11) NOT NULL,
  `dataReserva` date NOT NULL,
  `horaReserva` time NOT NULL,
  `numPessoas` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idRestaurante` int(11) NOT NULL,
  `idStatusReserva` int(11) NOT NULL,
  `idAvaliacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrestaurante`
--

CREATE TABLE `tbrestaurante` (
  `idRestaurante` int(11) NOT NULL,
  `nomeRestaurante` varchar(300) NOT NULL,
  `cpfRestaurante` char(14) NOT NULL,
  `telRestaurante` char(13) DEFAULT NULL,
  `senhaRestaurante` varchar(20) DEFAULT NULL,
  `fotoRestaurante` blob DEFAULT NULL,
  `emailRestaurante` varchar(100) NOT NULL,
  `cepRestaurante` char(9) NOT NULL,
  `ruaRestaurante` varchar(100) NOT NULL,
  `numRestaurante` varchar(5) NOT NULL,
  `bairroRestaurante` varchar(100) NOT NULL,
  `cidadeRestaurante` varchar(100) NOT NULL,
  `estadoRestaurante` varchar(40) DEFAULT NULL,
  `capMaximaRestaurante` int(11) NOT NULL,
  `idTipoRestaurante` int(11) NOT NULL,
  `idPrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbstatusreserva`
--

CREATE TABLE `tbstatusreserva` (
  `idStatusReserva` int(11) NOT NULL,
  `statusReserva` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipoprato`
--

CREATE TABLE `tbtipoprato` (
  `idTipoPrato` int(11) NOT NULL,
  `tipoPrato` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtiporestaurante`
--

CREATE TABLE `tbtiporestaurante` (
  `idTipoRestaurante` int(11) NOT NULL,
  `tipoRestaurante` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD PRIMARY KEY (`idAvalicao`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbmesa`
--
ALTER TABLE `tbmesa`
  ADD PRIMARY KEY (`idMesa`),
  ADD KEY `idRestaurante` (`idRestaurante`);

--
-- Índices para tabela `tbmesareserva`
--
ALTER TABLE `tbmesareserva`
  ADD PRIMARY KEY (`idReservaMesa`),
  ADD KEY `idReserva` (`idReserva`),
  ADD KEY `idMesa` (`idMesa`);

--
-- Índices para tabela `tbprato`
--
ALTER TABLE `tbprato`
  ADD PRIMARY KEY (`idPrato`),
  ADD KEY `idTipoPrato` (`idTipoPrato`);

--
-- Índices para tabela `tbreserva`
--
ALTER TABLE `tbreserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idRestaurante` (`idRestaurante`),
  ADD KEY `idStatusReserva` (`idStatusReserva`),
  ADD KEY `idAvaliacao` (`idAvaliacao`);

--
-- Índices para tabela `tbrestaurante`
--
ALTER TABLE `tbrestaurante`
  ADD PRIMARY KEY (`idRestaurante`) USING BTREE,
  ADD KEY `idPrato` (`idPrato`) USING BTREE,
  ADD KEY `idTipoRestaurante` (`idTipoRestaurante`);

--
-- Índices para tabela `tbstatusreserva`
--
ALTER TABLE `tbstatusreserva`
  ADD PRIMARY KEY (`idStatusReserva`);

--
-- Índices para tabela `tbtipoprato`
--
ALTER TABLE `tbtipoprato`
  ADD PRIMARY KEY (`idTipoPrato`);

--
-- Índices para tabela `tbtiporestaurante`
--
ALTER TABLE `tbtiporestaurante`
  ADD PRIMARY KEY (`idTipoRestaurante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  MODIFY `idAvalicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmesa`
--
ALTER TABLE `tbmesa`
  MODIFY `idMesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmesareserva`
--
ALTER TABLE `tbmesareserva`
  MODIFY `idReservaMesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbprato`
--
ALTER TABLE `tbprato`
  MODIFY `idPrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbreserva`
--
ALTER TABLE `tbreserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbrestaurante`
--
ALTER TABLE `tbrestaurante`
  MODIFY `idRestaurante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbstatusreserva`
--
ALTER TABLE `tbstatusreserva`
  MODIFY `idStatusReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipoprato`
--
ALTER TABLE `tbtipoprato`
  MODIFY `idTipoPrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtiporestaurante`
--
ALTER TABLE `tbtiporestaurante`
  MODIFY `idTipoRestaurante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbmesa`
--
ALTER TABLE `tbmesa`
  ADD CONSTRAINT `tbmesa_ibfk_1` FOREIGN KEY (`idRestaurante`) REFERENCES `tbrestaurante` (`idRestaurante`);

--
-- Limitadores para a tabela `tbmesareserva`
--
ALTER TABLE `tbmesareserva`
  ADD CONSTRAINT `tbmesareserva_ibfk_1` FOREIGN KEY (`idReserva`) REFERENCES `tbreserva` (`idReserva`),
  ADD CONSTRAINT `tbmesareserva_ibfk_2` FOREIGN KEY (`idMesa`) REFERENCES `tbmesa` (`idMesa`);

--
-- Limitadores para a tabela `tbprato`
--
ALTER TABLE `tbprato`
  ADD CONSTRAINT `tbprato_ibfk_1` FOREIGN KEY (`idTipoPrato`) REFERENCES `tbtipoprato` (`idTipoPrato`);

--
-- Limitadores para a tabela `tbreserva`
--
ALTER TABLE `tbreserva`
  ADD CONSTRAINT `tbreserva_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `tbreserva_ibfk_2` FOREIGN KEY (`idRestaurante`) REFERENCES `tbrestaurante` (`idRestaurante`),
  ADD CONSTRAINT `tbreserva_ibfk_3` FOREIGN KEY (`idStatusReserva`) REFERENCES `tbstatusreserva` (`idStatusReserva`);

--
-- Limitadores para a tabela `tbrestaurante`
--
ALTER TABLE `tbrestaurante`
  ADD CONSTRAINT `tbrestaurante_ibfk_1` FOREIGN KEY (`idPrato`) REFERENCES `tbprato` (`idPrato`),
  ADD CONSTRAINT `tbrestaurante_ibfk_2` FOREIGN KEY (`idTipoRestaurante`) REFERENCES `tbtiporestaurante` (`idTipoRestaurante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
