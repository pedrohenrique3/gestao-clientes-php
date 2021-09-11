CREATE DATABASE  IF NOT EXISTS `gestao` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `gestao`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: gestao
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adm`
--

DROP TABLE IF EXISTS `adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adm`
--

LOCK TABLES `adm` WRITE;
/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
INSERT INTO `adm` VALUES (1,'Elisandro Ferreira Monteiro','teste','698dc19d489c4e4db73e28a713eab07b');
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assina`
--

DROP TABLE IF EXISTS `assina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assina` (
  `id_assinatura` int NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `cpf_cliente` bigint NOT NULL,
  `id_plano` int NOT NULL,
  PRIMARY KEY (`id_assinatura`),
  KEY `cpf_cliente` (`cpf_cliente`),
  KEY `id_plano` (`id_plano`),
  CONSTRAINT `assina_ibfk_1` FOREIGN KEY (`cpf_cliente`) REFERENCES `clientes` (`cpf`),
  CONSTRAINT `assina_ibfk_2` FOREIGN KEY (`id_plano`) REFERENCES `planos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assina`
--

LOCK TABLES `assina` WRITE;
/*!40000 ALTER TABLE `assina` DISABLE KEYS */;
INSERT INTO `assina` VALUES (1,'2021-09-11',7925945095,6),(2,'2021-09-11',14198879044,5),(3,'2021-09-11',20613227000,5),(4,'2021-09-11',24730247078,4),(5,'2021-09-11',26758012085,1),(6,'2021-09-11',35184629033,7),(7,'2021-09-11',52028379090,8),(8,'2021-09-11',53929142090,2),(9,'2021-09-11',59272201500,1),(10,'2021-09-11',59941175012,10),(11,'2021-09-11',61429415010,9),(12,'2021-09-11',66886996053,10),(13,'2021-09-11',70428523030,9),(14,'2021-09-11',72797442067,2),(15,'2021-09-11',73336083010,3),(16,'2021-09-11',75685187017,3),(17,'2021-09-11',79211236002,5),(18,'2021-09-11',81318060060,6),(19,'2021-09-11',82663453099,6),(20,'2021-09-11',83809752002,7),(21,'2021-09-11',84321415004,8),(22,'2021-09-11',85738820002,1),(23,'2021-09-11',94115635037,8),(24,'2021-09-11',94462575067,8),(25,'2021-09-11',99746311069,6);
/*!40000 ALTER TABLE `assina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `cpf` bigint NOT NULL,
  `nome_cliente` varchar(40) NOT NULL,
  `apelido` varchar(20) DEFAULT NULL,
  `endereco` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `ponto_de_referencia` varchar(30) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `dia_do_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (7925945095,'Mel Muniz Barateiro',NULL,'Rua do Vento','Bananeiras','PB','Na barbearia',NULL,30),(14198879044,'Maria Ferreira da Costa','Lilí','Rua do Vento','Bananeiras','PB','Perto da mercearia',NULL,30),(20613227000,'Carlos Alberto dos Santos',NULL,'Centro','Guarabira','PB','Perto do Magazine Luiza','83996541147',1),(24730247078,'Francisca Távora Vergueiro','Cícera','Centro','Solânea','PB','Perto das Lojas Amerianas',NULL,30),(26758012085,'Andrea Paula Guerra',NULL,'Conjunto','Bananeiras','PB','Próximo ao colégio','83995114171',30),(35184629033,'Helieser Silva Fernandes','Lieser','Conjunto','Bananeiras','PB','Próximo ao condomínio','83995411471',30),(52028379090,'Yohanna Barata Caçoilo',NULL,'Centro','Bananeiras','PB','Próximo da Caixa Econômica','83995471752',19),(53929142090,'Matviy Brites Aguiar',NULL,'Rua Nova','Belém','PB','Perto ao atacadão','83991456453',1),(59272201500,'Olívia Marreiro Breia',NULL,'Para Velho','Bananeiras','PB','Perto da oficina','83996547145',30),(59941175012,'Thomas Vilar Azenha',NULL,'Vila Maia','Bananeiras','PB','Em frente ao campo de futebol','83912456493',2),(61429415010,'Maria Emanuele Santos','Mafê','Roma','Bananeiras','PB','Atrás do posto de saúde','83992456783',30),(66886996053,'Josimar Marinho da Silva',NULL,'Sítio Cocos','Bananeiras','PB','Perto da bica',NULL,30),(70428523030,'Éric Furtado Patrício',NULL,'Rabo da Gata','Solânea','PB','Ao lado da oficina',NULL,30),(72797442067,'Chelsea Varão da Costa',NULL,'Sítio Cocos','Bananeiras','PB','Na bica dos cocos',NULL,30),(73336083010,'João Bruno de Lima','Bruninho','Sítio Cocos','Bananeiras','PB','Após a bica','83995481166',30),(75685187017,'Bernardo Aguiar Anes',NULL,'Rua do Vento','Bananeiras','PB','Do lado do terceiro mercadinho','83996541147',3),(79211236002,'Dennis Pinheiro Peralta','Pinho','Conjunto','Bananeiras','PB','No lava jato',NULL,30),(81318060060,'Zenor Cavalcante Neto',NULL,'Conjunto','Bananeiras','PB','Após o lava jato',NULL,1),(82663453099,'Valêncio Caldas de Lima','Val','Sítio Gamelas','Bananeiras','PB','Perto do moinho','83996547111',30),(83809752002,'Pétres Bonifácio Leitão',NULL,'Centro','Bananeiras','PB','Perto do Banco do Brasil','83996555214',4),(84321415004,'Kieza Saloio Rego',NULL,'Vila Maia','Bananeiras','PB','Perto do supermercado',NULL,30),(85738820002,'Gabriela Caparica Peralta','Gabi','Roma','Bananeiras','PB','Perto dos supermercados da che',NULL,1),(94115635037,'Irene Costa da Silva',NULL,'Roma','Bananeiras','PB','Próximo ao ginásio',NULL,4),(94462575067,'Lurdes Monteiro Galindo',NULL,'Centro','Belém','PB','Perto do laboratório','83996541177',30),(99746311069,'Andressa Antas Quina',NULL,'Rabo da Gata','Solânea','PB','No mercadinho','83997414445',30);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planos`
--

DROP TABLE IF EXISTS `planos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `planos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_plano` varchar(25) DEFAULT NULL,
  `valor` int DEFAULT NULL,
  `tipo` enum('RADIO','FIBRA') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planos`
--

LOCK TABLES `planos` WRITE;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
INSERT INTO `planos` VALUES (1,'0.5 MB',40,'RADIO'),(2,'1 MB',50,'RADIO'),(3,'2 MB',60,'RADIO'),(4,'3 MB',70,'RADIO'),(5,'5 MB',80,'RADIO'),(6,'50 MB',50,'FIBRA'),(7,'100 MB',100,'FIBRA'),(8,'200 MB',200,'FIBRA'),(9,'500 MB',400,'FIBRA'),(10,'1 GB',800,'FIBRA');
/*!40000 ALTER TABLE `planos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-11 17:56:13
