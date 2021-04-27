/*
SQLyog - Free MySQL GUI v5.0
Host - 5.0.41-community-nt : Database - bd_ejemplo2
*********************************************************************
Server version : 5.0.41-community-nt
*/


create database if not exists `bd_ejemplo2`;

USE `bd_ejemplo2`;

/*Table structure for table `tclientes` */

DROP TABLE IF EXISTS `tclientes`;

CREATE TABLE `tclientes` (
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ncuenta` varchar(20) NOT NULL,
  `ingresos` varchar(20) NOT NULL,
  `egresos` varchar(20) NOT NULL,
  PRIMARY KEY  (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tclientes` */

insert into `tclientes` values 
('10774589','carlos arturo lopera','diagonal 17 32-29 ','3003522590','carlos@hotmail.com','0123456','1200000','500000');

/*Table structure for table `tusuarios` */

DROP TABLE IF EXISTS `tusuarios`;

CREATE TABLE `tusuarios` (
  `usuario` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY  (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tusuarios` */

insert into `tusuarios` values 
('a','a');
