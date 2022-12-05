-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jan 26, 2021 as 12:04 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `oficinach`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemservico`
--

CREATE TABLE IF NOT EXISTS `ordemservico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(18) DEFAULT NULL,
  `rg` varchar(18) DEFAULT NULL,
  `cnpj` int(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `rua` varchar(60) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `quilometragem` int(10) DEFAULT NULL,
  `anofabricacao` int(10) DEFAULT NULL,
  `descricao1` varchar(50) DEFAULT NULL,
  `valor1` decimal(10,2) DEFAULT NULL,
  `descricao2` varchar(50) DEFAULT NULL,
  `valor2` decimal(10,2) DEFAULT NULL,
  `descricao3` varchar(50) DEFAULT NULL,
  `valor3` decimal(10,2) DEFAULT NULL,
  `descricao4` varchar(50) DEFAULT NULL,
  `valor4` decimal(10,2) DEFAULT NULL,
  `descricao5` varchar(50) DEFAULT NULL,
  `valor5` decimal(10,2) DEFAULT NULL,
  `descricao6` varchar(50) DEFAULT NULL,
  `valor6` decimal(10,2) DEFAULT NULL,
  `descricao7` varchar(50) DEFAULT NULL,
  `valor7` decimal(10,2) DEFAULT NULL,
  `descricao8` varchar(50) DEFAULT NULL,
  `valor8` decimal(10,2) DEFAULT NULL,
  `descricao9` varchar(50) DEFAULT NULL,
  `valor9` decimal(10,2) DEFAULT NULL,
  `descricao10` varchar(50) DEFAULT NULL,
  `valor10` decimal(10,2) DEFAULT NULL,
  `descricao11` varchar(50) DEFAULT NULL,
  `valor11` decimal(10,2) DEFAULT NULL,
  `descricao12` varchar(50) DEFAULT NULL,
  `valor12` decimal(10,2) DEFAULT NULL,
  `descricao13` varchar(50) DEFAULT NULL,
  `valor13` decimal(10,2) DEFAULT NULL,
  `descricao14` varchar(50) DEFAULT NULL,
  `valor14` decimal(10,2) DEFAULT NULL,
  `descricao15` varchar(50) DEFAULT NULL,
  `valor15` decimal(10,2) DEFAULT NULL,
  `descricao16` varchar(50) DEFAULT NULL,
  `valor16` decimal(10,2) DEFAULT NULL,
  `descricao17` varchar(50) DEFAULT NULL,
  `valor17` decimal(10,2) DEFAULT NULL,
  `descricao18` varchar(50) DEFAULT NULL,
  `valor18` decimal(10,2) DEFAULT NULL,
  `descricao19` varchar(50) DEFAULT NULL,
  `valor19` decimal(10,2) DEFAULT NULL,
  `descricao20` varchar(50) DEFAULT NULL,
  `valor20` decimal(10,2) DEFAULT NULL,
  `descricao21` varchar(50) DEFAULT NULL,
  `valor21` decimal(10,2) DEFAULT NULL,
  `descricao22` varchar(50) DEFAULT NULL,
  `valor22` decimal(10,2) DEFAULT NULL,
  `descricao23` varchar(50) DEFAULT NULL,
  `valor23` decimal(10,2) DEFAULT NULL,
  `descricao24` varchar(50) DEFAULT NULL,
  `valor24` decimal(10,2) DEFAULT NULL,
  `descricao25` varchar(50) DEFAULT NULL,
  `valor25` decimal(10,2) DEFAULT NULL,
  `funcionario` varchar(40) DEFAULT NULL,
  `valorpecas` decimal(10,2) DEFAULT NULL,
  `pagamento` varchar(20) DEFAULT NULL,
  `descricao` varchar(40) DEFAULT NULL,
  `valorservico` decimal(10,2) DEFAULT NULL,
  `dataatual` date DEFAULT NULL,
  `dataentrega` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `ordemservico`
--

INSERT INTO `ordemservico` (`id`, `nome`, `cpf`, `rg`, `cnpj`, `telefone`, `email`, `rua`, `numero`, `bairro`, `placa`, `marca`, `modelo`, `quilometragem`, `anofabricacao`, `descricao1`, `valor1`, `descricao2`, `valor2`, `descricao3`, `valor3`, `descricao4`, `valor4`, `descricao5`, `valor5`, `descricao6`, `valor6`, `descricao7`, `valor7`, `descricao8`, `valor8`, `descricao9`, `valor9`, `descricao10`, `valor10`, `descricao11`, `valor11`, `descricao12`, `valor12`, `descricao13`, `valor13`, `descricao14`, `valor14`, `descricao15`, `valor15`, `descricao16`, `valor16`, `descricao17`, `valor17`, `descricao18`, `valor18`, `descricao19`, `valor19`, `descricao20`, `valor20`, `descricao21`, `valor21`, `descricao22`, `valor22`, `descricao23`, `valor23`, `descricao24`, `valor24`, `descricao25`, `valor25`, `funcionario`, `valorpecas`, `pagamento`, `descricao`, `valorservico`, `dataatual`, `dataentrega`) VALUES
(26, 'CARLOS HENRIQUE RODRIGUES DE SOUSA', '111222333', '1111', 0, '8899999', 'carlosbv1@gmail.com', 'Rua Alvaro Fernandes', 28, 'MONTESE', 'HHH1111', 'chevrolet', 'CORSA', 87555, 2015, 'Amortecedor da suspensÃ£o DIANTEIRO', '400.00', 'Anel de pistÃ£o', '100.00', 'Bomba elÃ©trica de combustÃ­vel para motores do Ci', '50.00', 'BOZINA', '40.00', 'FAROL DE NEBLINA DIANTEIRO (2 LADOS)', '123.00', 'LÃ¢mpada para veÃ­culos automotivos', '44.00', 'Pino e anel de trava (retenÃ§Ã£o)', '150.00', 'PistÃ£o de liga leve de alumÃ­nio', '141.00', 'Baterias', '350.00', 'Terminal de direÃ§Ã£o', '1457.00', 'Barra de direÃ§Ã£o', '450.00', 'Barra de ligaÃ§Ã£o', '75.00', 'Terminal axial para veÃ­culos rodoviÃ¡rios automot', '45.00', 'Materiais de atrito para freios (lonas e pastilhas', '78.00', 'Rodas automotivas', '1500.00', 'Vidro de seguranÃ§a laminado de para-brisas', '500.00', 'Vidro de seguranÃ§a temperado', '700.00', 'FluÃ­do de freio', '56.00', 'Catalisador', '200.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', 'FELIPE', '6459.00', 'Pago', 'MÃƒO DE OBRA ', '750.00', '2021-01-24', '2021-01-25'),
(27, 'HORTÃŠNCIA', '111111111', '222', 0, '8899999', 'hortencialimabv@gmail.com', 'Rua', 28, 'ALTO', 'HHH333', 'FIAT', 'UNO', 125477, 2012, 'Amortecedor', '140.00', 'Anel', '2.00', 'Bomba', '35.00', 'Bronzina', '414.00', 'Buzina', '123.00', 'LÃ¢mpada', '44.00', 'Pino', '4141.00', 'PistÃ£o', '141.00', 'Baterias', '141.00', 'Terminal', '1457.00', 'Barra', '77.00', 'Barra', '75.00', 'Terminal', '45.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', 'Anel', '0.00', '0.00', '0.00', '', '0.00', '', '0.00', 'ROMULO', '6835.00', 'NaoPago', 'MÃƒO', '2500.00', '2021-01-24', '2021-01-25'),
(28, 'LUIZ ALBERTO', '333.333.333-33 ', '33', 0, '(88) 999155630', 'luisbv@gmail.com', 'RUA MANOEL ARAÃšJO MARINHO', 134, 'Aldeota', 'HHH3333', 'chevrolet', 'CORSA', 87222, 2015, 'Amortecedor da suspensÃ£o DIANTEIRO', '112.00', 'TROCA DE Ã“LEO ', '100.00', 'TROCA DE FILTRO DE AR', '40.00', 'BOZINA', '120.00', 'Buzina ou equipamento similar', '123.00', 'LÃ¢mpada para veÃ­culos automotivos', '44.00', 'Pino e anel de trava (retenÃ§Ã£o)', '78.00', 'PistÃ£o de liga leve de alumÃ­nio', '141.00', 'Baterias', '141.00', 'Terminal de direÃ§Ã£o', '1457.00', 'Barra de direÃ§Ã£o', '77.00', 'Barra de ligaÃ§Ã£o', '75.00', 'Terminal axial para veÃ­culos rodoviÃ¡rios automot', '45.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', 'FELIPE', '2553.00', 'Pago', 'MÃƒO DE OBRA ', '1200.00', '2021-01-25', '2021-01-25'),
(29, 'MARGARETH', '987.123.456-76 ', '121212', 0, '8899999', 'carlosbv1@gmail.com', 'Rua Alvaro Fernandes', 28, 'MONTESE', 'HVH1778', 'CHEVROLET', 'CORSA', 3000, 2002, 'Amortecedor da suspensÃ£o DIANTEIRO', '140.00', 'Anel de pistÃ£o', '2.00', 'Bomba elÃ©trica de combustÃ­vel para motores do Ci', '35.00', 'Bronzina', '120.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', '', '0.00', 'FELIPE', '297.00', 'Pago', 'MÃƒO DE OBRA ', '150.00', '2021-01-26', '2021-01-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES
(1, 'adm', 'adm123');
