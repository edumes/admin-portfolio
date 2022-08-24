# SQL Manager 2007 Lite for MySQL 4.4.2.1
# ---------------------------------------
# Host     : dumont
# Port     : 3306
# Database : d210045


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `d210045`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `d210045`;

#
# Structure for the `tb_aluno` table : 
#

CREATE TABLE `tb_aluno` (
  `alu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `alu_nome` varchar(120) DEFAULT NULL,
  `alu_data_nascimento` date DEFAULT NULL,
  `alu_sexo` char(20) DEFAULT NULL,
  `alu_cep` int(8) DEFAULT NULL,
  `alu_logradouro` varchar(128) DEFAULT NULL,
  `alu_numero` varchar(10) DEFAULT NULL,
  `alu_complemento` varchar(255) DEFAULT NULL,
  `alu_cidade` varchar(38) DEFAULT NULL,
  `alu_estado` char(2) DEFAULT NULL,
  `alu_email` varchar(180) DEFAULT NULL,
  `alu_telefone` int(14) DEFAULT NULL,
  `alu_celular` varchar(15) DEFAULT NULL,
  `alu_escolaridade` varchar(120) DEFAULT NULL,
  `alu_serie` varchar(10) DEFAULT NULL,
  `alu_ano_conclusao` date DEFAULT NULL,
  `alu_escola` varchar(60) DEFAULT NULL,
  `alu_objetivo` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`alu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_login` table : 
#

CREATE TABLE `tb_login` (
  `log_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `log_nome` varchar(120) DEFAULT NULL,
  `log_login` varchar(20) DEFAULT NULL,
  `log_senha` varchar(30) DEFAULT NULL,
  `log_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_projetos` table : 
#

CREATE TABLE `tb_projetos` (
  `pro_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descricao` varchar(200) DEFAULT NULL,
  `pro_foto` varchar(250) DEFAULT NULL,
  `pro_status` char(1) DEFAULT NULL,
  `pro_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pro_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_servicos` table : 
#

CREATE TABLE `tb_servicos` (
  `ser_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ser_titulo` varchar(100) DEFAULT NULL,
  `ser_descricao` varchar(160) DEFAULT NULL,
  `ser_icone` varchar(50) DEFAULT NULL,
  `ser_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ser_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_skill` table : 
#

CREATE TABLE `tb_skill` (
  `ski_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ski_descricao` varchar(150) DEFAULT NULL,
  `ski_porcentagem` int(11) DEFAULT NULL,
  `ski_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ski_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

#
# Data for the `tb_aluno` table  (LIMIT 0,500)
#

INSERT INTO `tb_aluno` (`alu_codigo`, `alu_nome`, `alu_data_nascimento`, `alu_sexo`, `alu_cep`, `alu_logradouro`, `alu_numero`, `alu_complemento`, `alu_cidade`, `alu_estado`, `alu_email`, `alu_telefone`, `alu_celular`, `alu_escolaridade`, `alu_serie`, `alu_ano_conclusao`, `alu_escola`, `alu_objetivo`) VALUES 
  (11,'Eduardo Santarosa','0000-00-00','H',2147483647,'rua jacinto','11','loja cem','americana','sp','dev.eduardosantarosa@gmail.com',1999999,'19982741464','2ano','D','2022-08-25','colegio politec','estudar'),
  (12,'jair','0000-00-00','H',2147483647,'rua degrande','12','loja aki tem','americana','PB','jair@gmail.com',1999999,'1999999','2ano','C','2022-09-08','colegio politec','estudar');
COMMIT;

#
# Data for the `tb_login` table  (LIMIT 0,500)
#

INSERT INTO `tb_login` (`log_codigo`, `log_nome`, `log_login`, `log_senha`, `log_data_cadastro`) VALUES 
  (40,'admin','admin','1234','2022-06-21 19:36:11'),
  (41,'jair','jair','12345','2022-08-22 21:49:40'),
  (42,'eduardo','edu','12345','2022-08-22 21:50:00');
COMMIT;

#
# Data for the `tb_projetos` table  (LIMIT 0,500)
#

INSERT INTO `tb_projetos` (`pro_codigo`, `pro_descricao`, `pro_foto`, `pro_status`, `pro_data_cadastro`) VALUES 
  (7,'Cadastro de Ovinos App','fotos/work-1.jpg','A','2022-08-22 21:41:21'),
  (8,'Youtube Video Downloader','fotos/1661217073.jpg','A','2022-08-22 22:11:13'),
  (9,'Site da Cabanha M.Sol','fotos/1661217108.jpg','A','2022-08-22 22:11:48'),
  (10,'Site Cyber Café','fotos/1661217133.jpg','A','2022-08-22 22:12:13'),
  (11,'Detector de Mão com Python','fotos/1661217168.jpg','A','2022-08-22 22:12:48'),
  (12,'Speech Recognition','fotos/1661217208.jpg','A','2022-08-22 22:13:28');
COMMIT;

#
# Data for the `tb_servicos` table  (LIMIT 0,500)
#

INSERT INTO `tb_servicos` (`ser_codigo`, `ser_titulo`, `ser_descricao`, `ser_icone`, `ser_data_cadastro`) VALUES 
  (1,'Design Web','Tenho experiencia em HTML e CSS, você pode ver alguns desses projetos no meu GitHub','bi bi-brightness-high','2022-06-21 19:43:57'),
  (2,'Desenvolvimento Web','Tenho experiencia em PHP e um pouco de JavaScript.','bi bi-card-checklist','2022-08-22 21:32:44'),
  (3,'Back-End','Tenho experiencia em Python com alguns projetos que desenvolvi e exercicios do Curso de Python do Curso em Vídeo','bi bi-briefcase','2022-08-22 21:37:03');
COMMIT;

#
# Data for the `tb_skill` table  (LIMIT 0,500)
#

INSERT INTO `tb_skill` (`ski_codigo`, `ski_descricao`, `ski_porcentagem`, `ski_data_cadastro`) VALUES 
  (18,'Python',65,'2022-06-21 19:44:26'),
  (19,'React.js',30,'2022-08-15 22:19:50'),
  (20,'React Native',50,'2022-08-22 21:22:48'),
  (21,'PHP',60,'2022-08-22 21:23:11'),
  (22,'C#',40,'2022-08-22 21:23:24'),
  (23,'JavaScript',40,'2022-08-22 21:23:59'),
  (24,'HTML & CSS',70,'2022-08-22 21:24:20');
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;