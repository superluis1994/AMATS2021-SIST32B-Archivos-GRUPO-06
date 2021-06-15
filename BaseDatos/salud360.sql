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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `asignaciondoctosecre` */

insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (6,7,9);
insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (7,8,10);
insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (8,22,0);
insert  into `asignaciondoctosecre`(`id_asignacion`,`id_doctor`,`id_secretaria`) values (9,24,25);

/*Table structure for table `consultas` */

CREATE TABLE `consultas` (
  `id_consultas` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_agendacion` date NOT NULL,
  `fecha_consulta` date NOT NULL,
  `horaConsulta` varchar(20) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `doctor` varchar(11) NOT NULL,
  PRIMARY KEY (`id_consultas`),
  KEY `fkConsulta` (`id_paciente`),
  CONSTRAINT `fkConsulta` FOREIGN KEY (`id_paciente`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `consultas` */

insert  into `consultas`(`id_consultas`,`fecha_agendacion`,`fecha_consulta`,`horaConsulta`,`id_paciente`,`doctor`) values (2,'2021-06-15','2021-06-16','11 AM',23,'sorto lemus');
insert  into `consultas`(`id_consultas`,`fecha_agendacion`,`fecha_consulta`,`horaConsulta`,`id_paciente`,`doctor`) values (7,'2021-06-15','2021-06-16','10 AM',23,'sorto lemus');
insert  into `consultas`(`id_consultas`,`fecha_agendacion`,`fecha_consulta`,`horaConsulta`,`id_paciente`,`doctor`) values (8,'2021-06-15','2021-06-16','1 PM',23,'sorto lemus');
insert  into `consultas`(`id_consultas`,`fecha_agendacion`,`fecha_consulta`,`horaConsulta`,`id_paciente`,`doctor`) values (9,'2021-06-15','2021-06-15','11 AM',23,'Mike Andrew');

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
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (21,'luis','sorto lemus','superluis1994@gmail.com','1','admin',NULL);
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (23,'usuario','nombreCompleto','correo','passw','Paciente',NULL);
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (25,'fdfdfsss','Cesar Chanchagua','superluis1994@gmail.com','1','Secretaria',NULL);
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (26,'fdfdfsss','Cesar Chanchagua','superluis1994@gmail.com','ff','Secretaria',NULL);
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (32,'sssss','Cesar Chanchagua','superluis1994@gmail.com','11991','Secretaria',NULL);
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (34,'1994','nombreCompleto','superluis1994@gmail.com','passw1','tipo','img/Elementos de Informe Final de Proyecto.JPG');
insert  into `usuarios`(`id_usuario`,`usuario`,`nombreCompleto`,`correo`,`passw`,`tipo`,`foto`) values (36,'100','Mike Andrew','antonio@eee.com','5','Doctor',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
