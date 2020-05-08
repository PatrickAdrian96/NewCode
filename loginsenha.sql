/*
SQLyog Community v9.63 
MySQL - 5.5.8 : Database - loginsenha
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`loginsenha` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `loginsenha`;

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `fone` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`nome`,`login`,`senha`,`fone`,`email`,`tipo`,`foto`) values (1,'Administrador','adm','adm','5194822815','adm@gmail.com','admin','Coala.jpg'),(2,'marcus','adrian','123','5194679838','algo@algo','user','Coala.jpg'),(7,'Fernando Pessoa','fernando','abc','5182346595','pessoafernando@gmail.com','user','Coala.jpg'),(10,'Leonardo Dutra','leo','157','5194676985','dutra@gmail.com','user','Jellyfish.jpg'),(11,'Jubarti','jubileu','951','5134679852','jubileu@gmail.com','user','Coala.jpg'),(12,'Juan','juan','123456','132213123','juan@gmail.com','user',NULL),(13,'Marcus','marcus','123','123123213','marcus@marcus.com','user','Desert.jpg'),(16,'Michael','michael','123','231312','michael@michas.comn','user','Hydrangeas.jpg'),(19,'janete arruda','janete','321','5194679838','janete@gmail.com','user','Tulips.jpg');

/*Table structure for table `contador` */

DROP TABLE IF EXISTS `contador`;

CREATE TABLE `contador` (
  `visitas` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `contador` */

insert  into `contador`(`visitas`) values (180),(180);

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `produtos` */

insert  into `produtos`(`idproduto`,`titulo`,`arquivo`) values (19,'Vendo Coala','Coala.jpg'),(20,'farolete','Lighthouse.jpg');

/*Table structure for table `recados` */

DROP TABLE IF EXISTS `recados`;

CREATE TABLE `recados` (
  `numero` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(25) DEFAULT NULL,
  `comentario` text,
  `controle` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `recados` */

insert  into `recados`(`numero`,`login`,`comentario`,`controle`) values (1,'adrian','FUNCIONANDO COMENTARIO','1'),(2,'Adrian','sdasdasd','1'),(3,'pedro','12s3d2ad32a','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
