
CREATE DATABASE salud360
USE salud360

CREATE TABLE asignaciondoctosecre (
  id_asignacion int(11) NOT NULL AUTO_INCREMENT,
  id_doctor int(11) DEFAULT NULL,
  id_secretaria int(11) DEFAULT NULL,
  PRIMARY KEY (id_asignacion)
);



CREATE TABLE consultas (
  id_consultas int(11) NOT NULL AUTO_INCREMENT,
  fecha_agendacion date NOT NULL,
  fecha_consulta date NOT NULL,
  id_paciente int(11) NOT NULL,
  id_doctor int(11) NOT NULL,
  PRIMARY KEY (id_consultas)
);


CREATE TABLE cuadropaciente (
  id_cuadro int(11) NOT NULL AUTO_INCREMENT,
  id_paciente int(11) DEFAULT NULL,
  observaciones varchar(2000) DEFAULT NULL,
  id_recetas int(11) DEFAULT NULL,
  PRIMARY KEY (id_cuadro)
); 


CREATE TABLE recetas (
  id_receta int(11) NOT NULL AUTO_INCREMENT,
  id_paciente varchar(60) NOT NULL,
  nombre_medicina varchar(70) NOT NULL,
  Id_doctor varchar(60) NOT NULL,
  fecha_de_receta date NOT NULL,
  PRIMARY KEY (id_receta)
)


CREATE TABLE usuarios (
  id_usuario int(11) NOT NULL AUTO_INCREMENT,
  usuario varchar(50) NOT NULL,
  nombreCompleto varchar(100) NOT NULL,
  correo varchar(60) NOT NULL,
  passw varchar(30) NOT NULL,
  tipo varchar(25) NOT NULL,
  PRIMARY KEY (id_usuario)
) 

