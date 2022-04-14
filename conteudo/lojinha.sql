
DROP DATABASE  IF EXISTS `lojinha`;
CREATE DATABASE  IF NOT EXISTS `lojinha` CHARSET utf8;

USE `lojinha`;

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
);

DROP TABLE IF EXISTS `institucional`;
CREATE TABLE `institucional` (
  `idInstituicao` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `tipoPessoa` char(1) DEFAULT 'F' COMMENT '{ ''F'' , ''J'' }',
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idInstituicao`),
  UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`),
  UNIQUE KEY `email` (`email`)
);

DROP TABLE IF EXISTS `nivelUsuarios`;
CREATE TABLE `nivelUsuarios` (
  `idNivelUsuario` int NOT NULL AUTO_INCREMENT,
  `nivel` varchar(20) DEFAULT NULL COMMENT '{''Cliente '', ''Funcionário'', ''Caixa '', ''Financeiro '', ''Gerente '', ''Diretor'', ''Administrador''}',
  PRIMARY KEY (`idNivelUsuario`)
);


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(64) NOT NULL,
  `idNivelUsuario` int DEFAULT '1',
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ativo` varchar(1) DEFAULT 'N',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `idNivelUsuario` (`idNivelUsuario`),
  FOREIGN KEY (`idNivelUsuario`) REFERENCES `nivelUsuarios` (`idNivelUsuario`)
);

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `idPedido` int NOT NULL AUTO_INCREMENT,
  `idUsuario` int DEFAULT NULL,
  `dtPedido` datetime DEFAULT NULL,
  `dtPagamento` datetime DEFAULT NULL,
  `dtNotaFiscal` datetime DEFAULT NULL,
  `notaFiscal` text,
  `dtEnvio` datetime DEFAULT NULL,
  `dtRecebimento` datetime DEFAULT NULL,
  `tipoFrete` int DEFAULT '0' COMMENT '{ { 0, Retirada }, { 1, PAC }, { 2, SEDEX }, { 3, MOTOBOY }, { 4, TRANSPORTADORA} }',
  `rastreioFrete` varchar(255) DEFAULT NULL,
  `entregaendereco` varchar(50) DEFAULT NULL,
  `entregaNumero` varchar(10) DEFAULT NULL,
  `entregaCompl` varchar(50) DEFAULT NULL,
  `entregaBairro` varchar(30) DEFAULT NULL,
  `entregaCidade` varchar(50) DEFAULT NULL,
  `entregaUF` varchar(2) DEFAULT NULL,
  `entregaCEP` varchar(9) DEFAULT NULL,
  `entregaTelefone` varchar(15) DEFAULT NULL,
  `entregaRefer` varchar(255) DEFAULT NULL,
  `valorTotal` decimal(12,2) DEFAULT NULL,
  `qtdItems` int DEFAULT NULL,
  `dtDevolucao` datetime DEFAULT NULL,
  `motivoDevolucao` text,
  PRIMARY KEY (`idPedido`),
  KEY `idUsuario` (`idUsuario`),
  FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`)
);


DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `fabricante` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `idCategoria` int DEFAULT NULL,
  `descricao` text,
  `unidadeMedida` varchar(15) DEFAULT NULL,
  `largura` decimal(10,3) DEFAULT NULL COMMENT '9999999.999',
  `altura` decimal(10,3) DEFAULT NULL COMMENT '9999999.999',
  `profundidade` decimal(10,3) DEFAULT NULL COMMENT '9999999.999',
  `peso` decimal(10,3) DEFAULT NULL COMMENT '9999999.999',
  `cor` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `idCategoria` (`idCategoria`),
  FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`)
);
DROP TABLE IF EXISTS `estoque`;

CREATE TABLE `estoque` (
  `idEstoque` int NOT NULL AUTO_INCREMENT,
  `idProduto` int DEFAULT NULL,
  `dtEntrada` date DEFAULT NULL COMMENT 'YYYY/MM/DD',
  `quantidade` int DEFAULT '0',
  `dtFabricacao` date DEFAULT NULL COMMENT 'YYYY/MM/DD',
  `dtVencimento` date DEFAULT NULL COMMENT 'YYYY/MM/DD',
  `nfCompra` text,
  `precoCompra` decimal(15,2) DEFAULT NULL,
  `icmsCompra` decimal(15,2) DEFAULT NULL,
  `precoVenda` decimal(15,2) DEFAULT NULL,
  `qtdVendida` int DEFAULT NULL,
  `qtdOcorrencia` int DEFAULT NULL,
  `ocorrencia` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`idEstoque`),
  KEY `idProduto` (`idProduto`),
  FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`)
);

DROP TABLE IF EXISTS `itemsPedido`;
CREATE TABLE `itemsPedido` (
  `idItemPedido` int NOT NULL AUTO_INCREMENT,
  `ordem` int DEFAULT NULL,
  `idPedido` int DEFAULT NULL,
  `idEstoque` int DEFAULT NULL,
  `qtdItem` int DEFAULT NULL,
  `dtDevolucao` datetime DEFAULT NULL,
  `motivoDevolucao` text,
  PRIMARY KEY (`idItemPedido`),
  KEY `idEstoque` (`idEstoque`),
  FOREIGN KEY (`idEstoque`) REFERENCES `estoque` (`idEstoque`)
);




INSERT INTO `nivelUsuarios` VALUES (1,'Cliente'),(2,'Funcionário'),(3,'Caixa'),(4,'Financeiro'),(5,'Gerente'),(6,'Diretor'),(7,'Administrador');
INSERT INTO `usuarios` 	   	VALUES 
(2,'admins@localhost','admn',1,'Administrador','11111111111','',NULL,NULL,NULL,NULL,NULL,NULL,'N'),
(3,'cleber@localhost','12346',1,'Cleber','12345678912','','','','','','','','N'),
(4,'abc@localhost','12346',1,'abc','1234678901','Rua A','B','C','DE','01234987','115555-5555','','N');


