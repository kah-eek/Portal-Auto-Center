-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_auto_center
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_acao_nivel_usuario`
--

DROP TABLE IF EXISTS `tbl_acao_nivel_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_acao_nivel_usuario` (
  `id_acoes_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `id_nivel_usuario` int(11) NOT NULL,
  `id_acao_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_acoes_nivel`),
  KEY `fk_tbl_acao_nivel_usuario_id_nivel_usuario_idx` (`id_nivel_usuario`),
  KEY `fk_tbl_acao_nivel_usuario_id_acao_usuario_idx` (`id_acao_usuario`),
  CONSTRAINT `fk_tbl_acao_nivel_usuario_id_acao_usuario` FOREIGN KEY (`id_acao_usuario`) REFERENCES `tbl_acao_usuario` (`id_acao_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_acao_nivel_usuario_id_nivel_usuario` FOREIGN KEY (`id_nivel_usuario`) REFERENCES `tbl_nivel_usuario` (`id_nivel_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_acao_nivel_usuario`
--

LOCK TABLES `tbl_acao_nivel_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_acao_nivel_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_acao_nivel_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_acao_usuario`
--

DROP TABLE IF EXISTS `tbl_acao_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_acao_usuario` (
  `id_acao_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `acao` varchar(120) NOT NULL,
  PRIMARY KEY (`id_acao_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_acao_usuario`
--

LOCK TABLES `tbl_acao_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_acao_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_acao_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_anuncio_parceiro`
--

DROP TABLE IF EXISTS `tbl_anuncio_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_anuncio_parceiro` (
  `id_anuncio_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_parceiro` int(11) NOT NULL,
  `foto` varchar(420) NOT NULL,
  `link_redirecionamento` varchar(580) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `log_anuncio_parceiro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_anuncio_parceiro`),
  KEY `fk_tbl_anuncio_parceiro_id_parceiro_idx` (`id_parceiro`),
  CONSTRAINT `fk_tbl_anuncio_parceiro_id_parceiro` FOREIGN KEY (`id_parceiro`) REFERENCES `tbl_parceiro` (`id_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_anuncio_parceiro`
--

LOCK TABLES `tbl_anuncio_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_anuncio_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_anuncio_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_anuncio_produto_parceiro`
--

DROP TABLE IF EXISTS `tbl_anuncio_produto_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_anuncio_produto_parceiro` (
  `id_anuncio_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_anuncio_produto`),
  KEY `fk_tbl_anuncio_produto_parceiro_id_produto_idx` (`id_produto`),
  CONSTRAINT `fk_tbl_anuncio_produto_parceiro_id_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_anuncio_produto_parceiro`
--

LOCK TABLES `tbl_anuncio_produto_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_anuncio_produto_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_anuncio_produto_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_anuncio_veiculo_parceiro`
--

DROP TABLE IF EXISTS `tbl_anuncio_veiculo_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_anuncio_veiculo_parceiro` (
  `id_anuncio_veiculo_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo_parceiro` int(11) NOT NULL,
  `preco` decimal(15,2) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_anuncio_veiculo_parceiro`),
  KEY `fk_tbl_anuncio_veiculo_parceirotbl_anuncio_veiculo_parceiro_idx` (`id_veiculo_parceiro`),
  CONSTRAINT `fk_anunc_v_par_id_veiculo_parceiro` FOREIGN KEY (`id_veiculo_parceiro`) REFERENCES `tbl_veiculo_parceiro` (`id_veiculo_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_anuncio_veiculo_parceiro`
--

LOCK TABLES `tbl_anuncio_veiculo_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_anuncio_veiculo_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_anuncio_veiculo_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cargo_funcionario_pac`
--

DROP TABLE IF EXISTS `tbl_cargo_funcionario_pac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cargo_funcionario_pac` (
  `id_cargo_funcionario_pac` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(280) NOT NULL,
  PRIMARY KEY (`id_cargo_funcionario_pac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cargo_funcionario_pac`
--

LOCK TABLES `tbl_cargo_funcionario_pac` WRITE;
/*!40000 ALTER TABLE `tbl_cargo_funcionario_pac` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cargo_funcionario_pac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria_conta_pac`
--

DROP TABLE IF EXISTS `tbl_categoria_conta_pac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categoria_conta_pac` (
  `id_categoria_conta_pac` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(180) NOT NULL,
  PRIMARY KEY (`id_categoria_conta_pac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria_conta_pac`
--

LOCK TABLES `tbl_categoria_conta_pac` WRITE;
/*!40000 ALTER TABLE `tbl_categoria_conta_pac` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_categoria_conta_pac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria_produto`
--

DROP TABLE IF EXISTS `tbl_categoria_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categoria_produto` (
  `id_categoria_produto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(380) NOT NULL,
  PRIMARY KEY (`id_categoria_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria_produto`
--

LOCK TABLES `tbl_categoria_produto` WRITE;
/*!40000 ALTER TABLE `tbl_categoria_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_categoria_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria_topico_forum`
--

DROP TABLE IF EXISTS `tbl_categoria_topico_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categoria_topico_forum` (
  `id_categoria_topico_forum` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(80) NOT NULL,
  PRIMARY KEY (`id_categoria_topico_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria_topico_forum`
--

LOCK TABLES `tbl_categoria_topico_forum` WRITE;
/*!40000 ALTER TABLE `tbl_categoria_topico_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_categoria_topico_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_click_anuncio_parceiro`
--

DROP TABLE IF EXISTS `tbl_click_anuncio_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_click_anuncio_parceiro` (
  `id_click_anuncio_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_anuncio_parceiro` int(11) NOT NULL,
  `clicado` int(11) NOT NULL,
  `log_click_anuncio_parceiro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_click_anuncio_parceiro`),
  KEY `fk_tbl_click_anuncio_parceiro_id_anuncio_parceiro_idx` (`id_anuncio_parceiro`),
  CONSTRAINT `fk_tbl_click_anuncio_parceiro_id_anuncio_parceiro` FOREIGN KEY (`id_anuncio_parceiro`) REFERENCES `tbl_anuncio_parceiro` (`id_anuncio_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_click_anuncio_parceiro`
--

LOCK TABLES `tbl_click_anuncio_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_click_anuncio_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_click_anuncio_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `dtNasc` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(280) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto_perfil` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `fk_tbl_cliente_id_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_tbl_cliente_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cliente`
--

LOCK TABLES `tbl_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_comentario_post`
--

DROP TABLE IF EXISTS `tbl_comentario_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_comentario_post` (
  `id_comentario_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_post_rede_social` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(2000) NOT NULL,
  `log_comentario_post` datetime NOT NULL,
  PRIMARY KEY (`id_comentario_post`),
  KEY `fk_tbl_comentario_post_id_post_rede_social_idx` (`id_post_rede_social`),
  KEY `fk_tbl_comentario_post_id_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_tbl_comentario_post_id_post_rede_social` FOREIGN KEY (`id_post_rede_social`) REFERENCES `tbl_post_rede_social` (`id_post_rede_social`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_comentario_post_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_comentario_post`
--

LOCK TABLES `tbl_comentario_post` WRITE;
/*!40000 ALTER TABLE `tbl_comentario_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_comentario_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_comentario_topico_forum`
--

DROP TABLE IF EXISTS `tbl_comentario_topico_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_comentario_topico_forum` (
  `id_comentario_forum` int(11) NOT NULL AUTO_INCREMENT,
  `id_topico_forum` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `mensagem` varchar(5500) NOT NULL,
  `foto` varchar(350) DEFAULT NULL,
  `log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comentario_forum`),
  KEY `fk_tbl_comentario_topico_forum_idx` (`id_topico_forum`),
  KEY `fk_tbl_situacao_pedido_id_cliente_idx` (`id_cliente`),
  CONSTRAINT `fk_tbl_comentario_topico_forum` FOREIGN KEY (`id_topico_forum`) REFERENCES `tbl_topico_forum` (`id_topico_forum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_situacao_pedido_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_comentario_topico_forum`
--

LOCK TABLES `tbl_comentario_topico_forum` WRITE;
/*!40000 ALTER TABLE `tbl_comentario_topico_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_comentario_topico_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_compatibilidade_produto_veiculo`
--

DROP TABLE IF EXISTS `tbl_compatibilidade_produto_veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_compatibilidade_produto_veiculo` (
  `id_compatibilidade_produto_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_compatibilidade_produto_veiculo`),
  KEY `fk_tbl_compatibilidade_produto_veiculo_id_veiculo_idx` (`id_veiculo`),
  KEY `fk_tbl_compatibilidade_produto_veiculo_id_produto_idx` (`id_produto`),
  CONSTRAINT `fk_tbl_compatibilidade_produto_veiculo_id_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_compatibilidade_produto_veiculo_id_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `tbl_veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_compatibilidade_produto_veiculo`
--

LOCK TABLES `tbl_compatibilidade_produto_veiculo` WRITE;
/*!40000 ALTER TABLE `tbl_compatibilidade_produto_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_compatibilidade_produto_veiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_conta_pac`
--

DROP TABLE IF EXISTS `tbl_conta_pac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_conta_pac` (
  `id_conta_pac` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria_conta_pac` int(11) NOT NULL,
  `valor` decimal(9,2) NOT NULL,
  `vencimento` date NOT NULL,
  `paga` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_conta_pac`),
  KEY `fk_tbl_conta_pac_id_categoria_conta_idx` (`id_categoria_conta_pac`),
  CONSTRAINT `fk_tbl_conta_pac_id_categoria_conta` FOREIGN KEY (`id_categoria_conta_pac`) REFERENCES `tbl_categoria_conta_pac` (`id_categoria_conta_pac`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_conta_pac`
--

LOCK TABLES `tbl_conta_pac` WRITE;
/*!40000 ALTER TABLE `tbl_conta_pac` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_conta_pac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_controle_abastecimento`
--

DROP TABLE IF EXISTS `tbl_controle_abastecimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_controle_abastecimento` (
  `id_controle_abastecimento` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_combustivel` int(11) NOT NULL,
  `valor_abastecimento` decimal(6,2) NOT NULL,
  `latitute` double NOT NULL,
  `log_controle_abastecimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_controle_abastecimento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_controle_abastecimento`
--

LOCK TABLES `tbl_controle_abastecimento` WRITE;
/*!40000 ALTER TABLE `tbl_controle_abastecimento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_controle_abastecimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cor`
--

DROP TABLE IF EXISTS `tbl_cor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cor` (
  `id_cor` int(11) NOT NULL AUTO_INCREMENT,
  `cor` varchar(80) NOT NULL,
  PRIMARY KEY (`id_cor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cor`
--

LOCK TABLES `tbl_cor` WRITE;
/*!40000 ALTER TABLE `tbl_cor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_curtir_post`
--

DROP TABLE IF EXISTS `tbl_curtir_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_curtir_post` (
  `id_curtir_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_post_rede_social` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `log_curtir_post` datetime NOT NULL,
  PRIMARY KEY (`id_curtir_post`),
  KEY `fk_tbl_curtir_post_id_post_rede_social_idx` (`id_post_rede_social`),
  KEY `fk_tbl_curtir_post_id_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_tbl_curtir_post_id_post_rede_social` FOREIGN KEY (`id_post_rede_social`) REFERENCES `tbl_post_rede_social` (`id_post_rede_social`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_curtir_post_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_curtir_post`
--

LOCK TABLES `tbl_curtir_post` WRITE;
/*!40000 ALTER TABLE `tbl_curtir_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_curtir_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco` (
  `id_edereco` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(210) NOT NULL,
  `numero` varchar(80) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `bairro` varchar(120) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  PRIMARY KEY (`id_edereco`),
  KEY `fk_tbl_endereco_id_estado_idx` (`id_estado`),
  CONSTRAINT `fk_tbl_endereco_id_estado` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco`
--

LOCK TABLES `tbl_endereco` WRITE;
/*!40000 ALTER TABLE `tbl_endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(180) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado`
--

LOCK TABLES `tbl_estado` WRITE;
/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fabricante`
--

DROP TABLE IF EXISTS `tbl_fabricante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fabricante` (
  `id_fabricante` int(11) NOT NULL AUTO_INCREMENT,
  `fabricante` varchar(180) NOT NULL,
  PRIMARY KEY (`id_fabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fabricante`
--

LOCK TABLES `tbl_fabricante` WRITE;
/*!40000 ALTER TABLE `tbl_fabricante` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_fabricante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fabricante_produto`
--

DROP TABLE IF EXISTS `tbl_fabricante_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fabricante_produto` (
  `id_fabricante_produto` int(11) NOT NULL AUTO_INCREMENT,
  `fabricante` varchar(320) NOT NULL,
  PRIMARY KEY (`id_fabricante_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fabricante_produto`
--

LOCK TABLES `tbl_fabricante_produto` WRITE;
/*!40000 ALTER TABLE `tbl_fabricante_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_fabricante_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fale_conosco`
--

DROP TABLE IF EXISTS `tbl_fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fale_conosco` (
  `id_fale_conosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(280) NOT NULL,
  `email` varchar(320) NOT NULL,
  `pergunta_sugestao_critica` varchar(1800) NOT NULL,
  PRIMARY KEY (`id_fale_conosco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fale_conosco`
--

LOCK TABLES `tbl_fale_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_fale_conosco` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_feedback_cliente`
--

DROP TABLE IF EXISTS `tbl_feedback_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_feedback_cliente` (
  `id_feedback_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `feedback` varchar(2500) NOT NULL,
  `log_feedback` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_feedback_cliente`),
  KEY `fk_tbl_feedback_cliente_id_pedido_idx` (`id_pedido`),
  CONSTRAINT `fk_tbl_feedback_cliente_id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feedback_cliente`
--

LOCK TABLES `tbl_feedback_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_feedback_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_feedback_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_funcionario_pac`
--

DROP TABLE IF EXISTS `tbl_funcionario_pac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_funcionario_pac` (
  `id_funcionario_pac` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(210) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `id_cargo_funcionario_pac` int(11) NOT NULL,
  `salario` decimal(8,2) NOT NULL,
  `sexo` char(1) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `email` varchar(280) NOT NULL,
  `foto` varchar(320) NOT NULL,
  `cnh` varchar(11) DEFAULT NULL,
  `pis` varchar(13) DEFAULT NULL,
  `certificado_reservista` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_funcionario_pac`),
  KEY `fk_tbl_funcionario_pac_id_endereco_idx` (`id_endereco`),
  KEY `fk_tbl_funcionario_pac_id_cargo_funcionario_pac_idx` (`id_cargo_funcionario_pac`),
  CONSTRAINT `fk_tbl_funcionario_pac_id_cargo_funcionario_pac` FOREIGN KEY (`id_cargo_funcionario_pac`) REFERENCES `tbl_cargo_funcionario_pac` (`id_cargo_funcionario_pac`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_funcionario_pac_id_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_endereco` (`id_edereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_funcionario_pac`
--

LOCK TABLES `tbl_funcionario_pac` WRITE;
/*!40000 ALTER TABLE `tbl_funcionario_pac` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_funcionario_pac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagem_produto_parceiro`
--

DROP TABLE IF EXISTS `tbl_imagem_produto_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagem_produto_parceiro` (
  `id_imagem_produto_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(800) NOT NULL,
  PRIMARY KEY (`id_imagem_produto_parceiro`),
  KEY `fk_tbl_imagem_produto_parceiro_id_produto_idx` (`id_produto`),
  CONSTRAINT `fk_tbl_imagem_produto_parceiro_id_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagem_produto_parceiro`
--

LOCK TABLES `tbl_imagem_produto_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_imagem_produto_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem_produto_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagem_veiculo_cliente`
--

DROP TABLE IF EXISTS `tbl_imagem_veiculo_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagem_veiculo_cliente` (
  `id_imagem_veiculo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo_cliente` int(11) NOT NULL,
  `imagem` varchar(800) NOT NULL,
  PRIMARY KEY (`id_imagem_veiculo_cliente`),
  KEY `fk_tbl_imagem_veiculo_cliente_id_veiculo_cliente_idx` (`id_veiculo_cliente`),
  CONSTRAINT `fk_tbl_imagem_veiculo_cliente_id_veiculo_cliente` FOREIGN KEY (`id_veiculo_cliente`) REFERENCES `tbl_veiculo_cliente` (`id_veiculo_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagem_veiculo_cliente`
--

LOCK TABLES `tbl_imagem_veiculo_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_imagem_veiculo_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem_veiculo_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagem_veiculo_parceiro`
--

DROP TABLE IF EXISTS `tbl_imagem_veiculo_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagem_veiculo_parceiro` (
  `id_imagem_veiculo_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo_parceiro` int(11) NOT NULL,
  `imagem` varchar(800) NOT NULL,
  PRIMARY KEY (`id_imagem_veiculo_parceiro`),
  KEY `fk_tbl_imagem_veiculo_parceiro_id_veiculo_parceiro_idx` (`id_veiculo_parceiro`),
  CONSTRAINT `fk_tbl_imagem_veiculo_parceiro_id_veiculo_parceiro` FOREIGN KEY (`id_veiculo_parceiro`) REFERENCES `tbl_veiculo_parceiro` (`id_veiculo_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagem_veiculo_parceiro`
--

LOCK TABLES `tbl_imagem_veiculo_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_imagem_veiculo_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_imagem_veiculo_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_modelo_produto`
--

DROP TABLE IF EXISTS `tbl_modelo_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_modelo_produto` (
  `id_modelo_produto` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(380) NOT NULL,
  `id_fabricante_produto` int(11) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `comprimento` float NOT NULL,
  PRIMARY KEY (`id_modelo_produto`),
  KEY `fk_tbl_modelo_produto_id_fabricante_produto__idx` (`id_fabricante_produto`),
  CONSTRAINT `fk_tbl_modelo_produto_id_fabricante_produto_` FOREIGN KEY (`id_fabricante_produto`) REFERENCES `tbl_fabricante_produto` (`id_fabricante_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_modelo_produto`
--

LOCK TABLES `tbl_modelo_produto` WRITE;
/*!40000 ALTER TABLE `tbl_modelo_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_modelo_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_modelo_veiculo`
--

DROP TABLE IF EXISTS `tbl_modelo_veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_modelo_veiculo` (
  `id_modelo_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_fabricante` int(11) NOT NULL,
  `modelo` varchar(180) NOT NULL,
  PRIMARY KEY (`id_modelo_veiculo`),
  KEY `fk_tbl_modelo_veiculo_idx` (`id_fabricante`),
  CONSTRAINT `fk_tbl_modelo_veiculo_id_fabricante` FOREIGN KEY (`id_fabricante`) REFERENCES `tbl_fabricante` (`id_fabricante`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_modelo_veiculo`
--

LOCK TABLES `tbl_modelo_veiculo` WRITE;
/*!40000 ALTER TABLE `tbl_modelo_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_modelo_veiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_modo_pagamento`
--

DROP TABLE IF EXISTS `tbl_modo_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_modo_pagamento` (
  `id_modo_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `modo` varchar(180) NOT NULL,
  PRIMARY KEY (`id_modo_pagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_modo_pagamento`
--

LOCK TABLES `tbl_modo_pagamento` WRITE;
/*!40000 ALTER TABLE `tbl_modo_pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_modo_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivel_usuario`
--

DROP TABLE IF EXISTS `tbl_nivel_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nivel_usuario` (
  `id_nivel_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nivel_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivel_usuario`
--

LOCK TABLES `tbl_nivel_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_nivel_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_nivel_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pagamento_funcionario_pac`
--

DROP TABLE IF EXISTS `tbl_pagamento_funcionario_pac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pagamento_funcionario_pac` (
  `id_pagamento_funcionario_pac` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario_pac` int(11) NOT NULL,
  `pago` tinyint(1) NOT NULL DEFAULT '0',
  `log_pagamento_funcionario_pac` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pagamento_funcionario_pac`),
  KEY `fk_tbl_pagamento_funcionario_pac_id_funcionario_pac_idx` (`id_funcionario_pac`),
  CONSTRAINT `fk_tbl_pagamento_funcionario_pac_id_funcionario_pac` FOREIGN KEY (`id_funcionario_pac`) REFERENCES `tbl_funcionario_pac` (`id_funcionario_pac`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pagamento_funcionario_pac`
--

LOCK TABLES `tbl_pagamento_funcionario_pac` WRITE;
/*!40000 ALTER TABLE `tbl_pagamento_funcionario_pac` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pagamento_funcionario_pac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_parceiro`
--

DROP TABLE IF EXISTS `tbl_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_parceiro` (
  `id_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fantasia` varchar(280) NOT NULL,
  `razao_social` varchar(280) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `id_endereco` int(1) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `socorrista` tinyint(1) NOT NULL,
  `email` varchar(280) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `foto_perfil` varchar(350) NOT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `log_parceiro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `id_plano_contratacao` int(11) NOT NULL,
  PRIMARY KEY (`id_parceiro`),
  KEY `fk_tbl_parceiro_id_plano_contratacao_idx` (`id_plano_contratacao`),
  KEY `fk_tbl_parceiro_id_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_tbl_parceiro_id_plano_contratacao` FOREIGN KEY (`id_plano_contratacao`) REFERENCES `tbl_plano_contratacao` (`id_plano_contratacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_parceiro_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_parceiro`
--

LOCK TABLES `tbl_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pedido`
--

DROP TABLE IF EXISTS `tbl_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `data_agendada` datetime DEFAULT NULL,
  `log_pedido` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_tbl_pedido_id_cliente_idx` (`id_cliente`),
  KEY `fk_tbl_pedido_id_produto_idx` (`id_produto`),
  CONSTRAINT `fk_tbl_pedido_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_pedido_id_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pedido`
--

LOCK TABLES `tbl_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pergunta_chatbot`
--

DROP TABLE IF EXISTS `tbl_pergunta_chatbot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pergunta_chatbot` (
  `id_pergunta_chatbot` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(800) NOT NULL,
  PRIMARY KEY (`id_pergunta_chatbot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pergunta_chatbot`
--

LOCK TABLES `tbl_pergunta_chatbot` WRITE;
/*!40000 ALTER TABLE `tbl_pergunta_chatbot` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pergunta_chatbot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pergunta_resposta_chatbot`
--

DROP TABLE IF EXISTS `tbl_pergunta_resposta_chatbot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pergunta_resposta_chatbot` (
  `id_pergunta_resposta_chatbot` int(11) NOT NULL AUTO_INCREMENT,
  `id_pergunta` int(11) NOT NULL,
  `id_resposta` int(11) NOT NULL,
  PRIMARY KEY (`id_pergunta_resposta_chatbot`),
  KEY `fk_tbl_pergunta_resposta_chatbot_id_pergunta_idx` (`id_pergunta`),
  KEY `fk_tbl_pergunta_resposta_chatbot_id_resposta_idx` (`id_resposta`),
  CONSTRAINT `fk_tbl_pergunta_resposta_chatbot_id_pergunta` FOREIGN KEY (`id_pergunta`) REFERENCES `tbl_pergunta_chatbot` (`id_pergunta_chatbot`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_pergunta_resposta_chatbot_id_resposta` FOREIGN KEY (`id_resposta`) REFERENCES `tbl_resposta_chatbot` (`id_resposta_chatbot`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pergunta_resposta_chatbot`
--

LOCK TABLES `tbl_pergunta_resposta_chatbot` WRITE;
/*!40000 ALTER TABLE `tbl_pergunta_resposta_chatbot` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pergunta_resposta_chatbot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plano_contratacao`
--

DROP TABLE IF EXISTS `tbl_plano_contratacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_plano_contratacao` (
  `id_plano_contratacao` int(11) NOT NULL AUTO_INCREMENT,
  `plano` varchar(120) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id_plano_contratacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plano_contratacao`
--

LOCK TABLES `tbl_plano_contratacao` WRITE;
/*!40000 ALTER TABLE `tbl_plano_contratacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plano_contratacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_post_rede_social`
--

DROP TABLE IF EXISTS `tbl_post_rede_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_post_rede_social` (
  `id_post_rede_social` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `post` varchar(1500) DEFAULT NULL,
  `foto` varchar(350) DEFAULT NULL,
  `log_post_rede_social` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post_rede_social`),
  KEY `fk_tbl_post_rede_social_id_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_tbl_post_rede_social_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_post_rede_social`
--

LOCK TABLES `tbl_post_rede_social` WRITE;
/*!40000 ALTER TABLE `tbl_post_rede_social` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_post_rede_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_modelo_produto` int(11) NOT NULL,
  `id_parceiro` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `id_categoria_produto` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `conteudo_embalagem` varchar(4000) NOT NULL,
  `garantia` varchar(1500) NOT NULL,
  `descricao` varchar(5500) NOT NULL,
  `observacao` varchar(5500) DEFAULT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `fk_tbl_produto_id_modelo_produto_idx` (`id_modelo_produto`),
  KEY `fk_tbl_produto_id_parceiro_idx` (`id_parceiro`),
  KEY `fk_tbl_produto_id_cor_idx` (`id_cor`),
  KEY `fk_tbl_produto_id_categoria_produto_idx` (`id_categoria_produto`),
  CONSTRAINT `fk_tbl_produto_id_categoria_produto` FOREIGN KEY (`id_categoria_produto`) REFERENCES `tbl_categoria_produto` (`id_categoria_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_produto_id_cor` FOREIGN KEY (`id_cor`) REFERENCES `tbl_cor` (`id_cor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_produto_id_modelo_produto` FOREIGN KEY (`id_modelo_produto`) REFERENCES `tbl_modelo_produto` (`id_modelo_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_produto_id_parceiro` FOREIGN KEY (`id_parceiro`) REFERENCES `tbl_parceiro` (`id_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resposta_chatbot`
--

DROP TABLE IF EXISTS `tbl_resposta_chatbot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resposta_chatbot` (
  `id_resposta_chatbot` int(11) NOT NULL AUTO_INCREMENT,
  `resposta` varchar(1500) NOT NULL,
  PRIMARY KEY (`id_resposta_chatbot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resposta_chatbot`
--

LOCK TABLES `tbl_resposta_chatbot` WRITE;
/*!40000 ALTER TABLE `tbl_resposta_chatbot` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_resposta_chatbot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_seguir_rede_social`
--

DROP TABLE IF EXISTS `tbl_seguir_rede_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_seguir_rede_social` (
  `id_seguir_rede_social` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_seguidor` int(11) NOT NULL,
  `usuario_seguido` int(11) NOT NULL,
  `log_seguir_rede_social` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_seguir_rede_social`),
  KEY `fk_tbl_seguir_rede_social_usuario_seguidor_idx` (`usuario_seguidor`),
  KEY `fk_tbl_seguir_rede_social_usuario_seguido_idx` (`usuario_seguido`),
  CONSTRAINT `fk_tbl_seguir_rede_social_usuario_seguido` FOREIGN KEY (`usuario_seguido`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_seguir_rede_social_usuario_seguidor` FOREIGN KEY (`usuario_seguidor`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_seguir_rede_social`
--

LOCK TABLES `tbl_seguir_rede_social` WRITE;
/*!40000 ALTER TABLE `tbl_seguir_rede_social` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seguir_rede_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_situacao_pedido`
--

DROP TABLE IF EXISTS `tbl_situacao_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_situacao_pedido` (
  `id_situacao_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_tipo_situacao_pedido` int(11) NOT NULL,
  `log_situacao_pedido` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_situacao_pedido`),
  KEY `fk_tbl_situacao_pedido_id_pedido_idx` (`id_pedido`),
  KEY `fk_tbl_situacao_pedido_id_tipo_situacao_pedido_idx` (`id_tipo_situacao_pedido`),
  CONSTRAINT `fk_tbl_situacao_pedido_id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `tbl_pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_situacao_pedido_id_tipo_situacao_pedido` FOREIGN KEY (`id_tipo_situacao_pedido`) REFERENCES `tbl_tipo_situacao_pedido` (`id_tipo_situacao_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_situacao_pedido`
--

LOCK TABLES `tbl_situacao_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_situacao_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_situacao_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sobre_cliente_parceiro`
--

DROP TABLE IF EXISTS `tbl_sobre_cliente_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sobre_cliente_parceiro` (
  `id_sobre_cliente_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(300) NOT NULL,
  `descricao` varchar(1800) NOT NULL,
  `id_tipo_descricao` int(11) NOT NULL,
  `log_sobre_cliente_parceiro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sobre_cliente_parceiro`),
  KEY `fk_tbl_sobre_cliente_parceiro_id_tipo_descricao_idx` (`id_tipo_descricao`),
  CONSTRAINT `fk_tbl_sobre_cliente_parceiro_id_tipo_descricao` FOREIGN KEY (`id_tipo_descricao`) REFERENCES `tbl_tipo_descricao` (`id_tipo_descricao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre_cliente_parceiro`
--

LOCK TABLES `tbl_sobre_cliente_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_sobre_cliente_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_sobre_cliente_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_socorrista_socorro_ja`
--

DROP TABLE IF EXISTS `tbl_socorrista_socorro_ja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_socorrista_socorro_ja` (
  `id_socorrista_socorro_ja` int(11) NOT NULL AUTO_INCREMENT,
  `id_parceiro` int(11) NOT NULL,
  `id_socorro_ja` int(11) NOT NULL,
  `log_socorrista_socorro_ja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_socorrista_socorro_ja`),
  KEY `fk_tbl_socorrista_socorro_ja_id_parceiro_idx` (`id_parceiro`),
  KEY `fk_tbl_socorrista_socorro_ja_id_socorro_ja_idx` (`id_socorro_ja`),
  CONSTRAINT `fk_tbl_socorrista_socorro_ja_id_parceiro` FOREIGN KEY (`id_parceiro`) REFERENCES `tbl_parceiro` (`id_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_socorrista_socorro_ja_id_socorro_ja` FOREIGN KEY (`id_socorro_ja`) REFERENCES `tbl_socorro_ja` (`id_socorro_ja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_socorrista_socorro_ja`
--

LOCK TABLES `tbl_socorrista_socorro_ja` WRITE;
/*!40000 ALTER TABLE `tbl_socorrista_socorro_ja` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_socorrista_socorro_ja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_socorro_ja`
--

DROP TABLE IF EXISTS `tbl_socorro_ja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_socorro_ja` (
  `id_socorro_ja` int(11) NOT NULL AUTO_INCREMENT,
  `problema` varchar(6800) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `atendido` tinyint(1) NOT NULL,
  `log_socorro_ja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_socorro_ja`),
  KEY `fk_tbl_socorro_ja_id_endereco_idx` (`id_endereco`),
  KEY `fk_tbl_socorro_ja_id_cliente_idx` (`id_cliente`),
  CONSTRAINT `fk_tbl_socorro_ja_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_socorro_ja_id_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_endereco` (`id_edereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_socorro_ja`
--

LOCK TABLES `tbl_socorro_ja` WRITE;
/*!40000 ALTER TABLE `tbl_socorro_ja` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_socorro_ja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_combustivel`
--

DROP TABLE IF EXISTS `tbl_tipo_combustivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_combustivel` (
  `id_tipo_combustivel` int(11) NOT NULL AUTO_INCREMENT,
  `combustivel` varchar(120) NOT NULL,
  PRIMARY KEY (`id_tipo_combustivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_combustivel`
--

LOCK TABLES `tbl_tipo_combustivel` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_combustivel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_combustivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_descricao`
--

DROP TABLE IF EXISTS `tbl_tipo_descricao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_descricao` (
  `id_tipo_descricao` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(180) NOT NULL,
  PRIMARY KEY (`id_tipo_descricao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_descricao`
--

LOCK TABLES `tbl_tipo_descricao` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_descricao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_descricao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_situacao_pedido`
--

DROP TABLE IF EXISTS `tbl_tipo_situacao_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_situacao_pedido` (
  `id_tipo_situacao_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `situacao` varchar(120) NOT NULL,
  PRIMARY KEY (`id_tipo_situacao_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_situacao_pedido`
--

LOCK TABLES `tbl_tipo_situacao_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_situacao_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_situacao_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_topico_forum`
--

DROP TABLE IF EXISTS `tbl_topico_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_topico_forum` (
  `id_topico_forum` int(11) NOT NULL,
  `foto` varchar(350) DEFAULT NULL,
  `mensagem` varchar(5500) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `log_topico_forum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_categoria_topico_forum` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `finalizado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_topico_forum`),
  KEY `fk_tbl_topico_forum_id_categoria_topico_forum_idx` (`id_categoria_topico_forum`),
  KEY `fk_tbl_topico_forum_id_cliente_idx` (`id_cliente`),
  CONSTRAINT `fk_tbl_topico_forum_id_categoria_topico_forum` FOREIGN KEY (`id_categoria_topico_forum`) REFERENCES `tbl_categoria_topico_forum` (`id_categoria_topico_forum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_topico_forum_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_topico_forum`
--

LOCK TABLES `tbl_topico_forum` WRITE;
/*!40000 ALTER TABLE `tbl_topico_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_topico_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(160) NOT NULL,
  `senha` varchar(280) NOT NULL,
  `log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_nivel_usuario` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`),
  KEY `fk_tbl_usuario_id_nivel_usuario_idx` (`id_nivel_usuario`),
  CONSTRAINT `fk_tbl_usuario_id_nivel_usuario` FOREIGN KEY (`id_nivel_usuario`) REFERENCES `tbl_nivel_usuario` (`id_nivel_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_veiculo`
--

DROP TABLE IF EXISTS `tbl_veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_veiculo` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `ano_fabricacao` year(4) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `qtd_porta` int(11) NOT NULL,
  `quilometro_rodado` int(11) NOT NULL,
  `id_tipo_veiculo` int(11) NOT NULL,
  `id_modelo_veiculo` int(11) NOT NULL,
  PRIMARY KEY (`id_veiculo`),
  KEY `fk_tbl_veiculo_id_cor_idx` (`id_cor`),
  KEY `fk_tbl_veiculo_id_modelo_veiculo_idx` (`id_modelo_veiculo`),
  CONSTRAINT `fk_tbl_veiculo_id_cor` FOREIGN KEY (`id_cor`) REFERENCES `tbl_cor` (`id_cor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_veiculo_id_modelo_veiculo` FOREIGN KEY (`id_modelo_veiculo`) REFERENCES `tbl_modelo_veiculo` (`id_modelo_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_veiculo`
--

LOCK TABLES `tbl_veiculo` WRITE;
/*!40000 ALTER TABLE `tbl_veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_veiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_veiculo_cliente`
--

DROP TABLE IF EXISTS `tbl_veiculo_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_veiculo_cliente` (
  `id_veiculo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  PRIMARY KEY (`id_veiculo_cliente`),
  KEY `fk_veiculo_cliente_id_veiculo_idx` (`id_veiculo`),
  KEY `fk_veiculo_cliente_id_cliente_idx` (`id_cliente`),
  CONSTRAINT `fk_veiculo_cliente_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_veiculo_cliente_id_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `tbl_veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_veiculo_cliente`
--

LOCK TABLES `tbl_veiculo_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_veiculo_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_veiculo_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_veiculo_parceiro`
--

DROP TABLE IF EXISTS `tbl_veiculo_parceiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_veiculo_parceiro` (
  `id_veiculo_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_parceiro` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  PRIMARY KEY (`id_veiculo_parceiro`),
  KEY `fk_tbl_veiculo_parceiro_id_parceiro_idx` (`id_parceiro`),
  KEY `fk_tbl_veiculo_parceiro_id_veiculo_idx` (`id_veiculo`),
  CONSTRAINT `fk_tbl_veiculo_parceiro_id_parceiro` FOREIGN KEY (`id_parceiro`) REFERENCES `tbl_parceiro` (`id_parceiro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_veiculo_parceiro_id_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `tbl_veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_veiculo_parceiro`
--

LOCK TABLES `tbl_veiculo_parceiro` WRITE;
/*!40000 ALTER TABLE `tbl_veiculo_parceiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_veiculo_parceiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_veiculo_tipo_combustivel`
--

DROP TABLE IF EXISTS `tbl_veiculo_tipo_combustivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_veiculo_tipo_combustivel` (
  `id_veiculo_tipo_combustivel` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo` int(11) NOT NULL,
  `id_tipo_combustivel` int(11) NOT NULL,
  PRIMARY KEY (`id_veiculo_tipo_combustivel`),
  KEY `fk_tbl_veiculo_tipo_combustivel_id_veiculo_idx` (`id_veiculo`),
  KEY `fk_tbl_veiculo_tipo_combustivel_id_tipo_combustivel_idx` (`id_tipo_combustivel`),
  CONSTRAINT `fk_tbl_veiculo_tipo_combustivel_id_tipo_combustivel` FOREIGN KEY (`id_tipo_combustivel`) REFERENCES `tbl_tipo_combustivel` (`id_tipo_combustivel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_veiculo_tipo_combustivel_id_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `tbl_veiculo` (`id_veiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_veiculo_tipo_combustivel`
--

LOCK TABLES `tbl_veiculo_tipo_combustivel` WRITE;
/*!40000 ALTER TABLE `tbl_veiculo_tipo_combustivel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_veiculo_tipo_combustivel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-28  1:09:09
