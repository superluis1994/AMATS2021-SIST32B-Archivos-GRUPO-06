/*
SQLyog Ultimate
MySQL - 10.4.19-MariaDB : Database - salud360
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `asignaciondoctosecre` */

CREATE TABLE `asignaciondoctosecre` (
  `id_asignacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_doctor` int(11) DEFAULT NULL,
  `id_secretaria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `asignaciondoctosecre` */

insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (6,7,9);
insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (7,8,10);
insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (8,22,0);

/*Table structure for table `consultas` */

CREATE TABLE `consultas` (
  `id_consultas` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_agendacion` date NOT NULL,
  `fecha_consulta` date NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `doctor` varchar(11) NOT NULL,
  PRIMARY KEY (`id_consultas`),
  KEY `fkConsulta` (`id_paciente`),
  CONSTRAINT `fkConsulta` FOREIGN KEY (`id_paciente`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `consultas` */

/*Table structure for table `cuadropaciente` */

CREATE TABLE `cuadropaciente` (
  `id_cuadro` int(11) NOT NULL AUTO_INCREMENT,
  `edad` int(11) DEFAULT NULL,
  `peso` varchar(7) DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `discapcidad` varchar(2000) DEFAULT NULL,
  `tipo_sangre` varchar(30) DEFAULT NULL,
  `ciudad` varchar(25) DEFAULT NULL,
  `departamento` varchar(25) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cuadro`),
  KEY `cuadroFk` (`id_paciente`),
  CONSTRAINT `cuadroFk` FOREIGN KEY (`id_paciente`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cuadropaciente` */

/*Table structure for table `recetas` */

CREATE TABLE `recetas` (
  `id_receta` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` varchar(60) NOT NULL,
  `nombre_medicina` varchar(70) NOT NULL,
  `doctor` varchar(60) NOT NULL,
  `fecha_de_receta` date NOT NULL,
  PRIMARY KEY (`id_receta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `recetas` */

/*Table structure for table `usuarios` */

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `nombreCompleto` varchar(100) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `passw` varchar(30) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`) values (21,'luis','sorto lemus','superluis1994@gmail.com','1','admin');
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`) values (22,'luis','sorto lemus','superluis1994@gmail.com','2','Doctor');
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`) values (23,'usuario','nombreCompleto','correo','passw','Paciente');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
