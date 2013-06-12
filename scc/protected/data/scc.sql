/*
SQLyog Ultimate v9.30 
MySQL - 5.5.25a : Database - scc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`scc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `scc`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(160) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fullname` varchar(160) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_phone` varchar(25) NOT NULL,
  `access_status` varchar(160) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_created` varchar(160) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_modified` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username`,`password`,`fullname`,`email`,`no_phone`,`access_status`,`date_created`,`user_created`,`date_modified`,`user_modified`) values (2,'heri','6812af90c6a1bbec134e323d7e70587b','Heri Setiyawan','herisetiyawan85@yahoo.com','081234567','admin','2013-06-12 14:07:40','admin','2013-06-12 16:28:14','heri'),(3,'manager','1d0258c2440a8d19e716292b231e3190','Manager','manager@manager.com','0123456789','manager','2013-06-12 15:26:40','heri',NULL,NULL);

/*Table structure for table `information` */

DROP TABLE IF EXISTS `information`;

CREATE TABLE `information` (
  `id_information` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_info` int(11) DEFAULT NULL,
  `image` text,
  `description` text NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_created` varchar(160) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_modified` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id_information`),
  KEY `FK_informationid_type_info` (`id_type_info`),
  CONSTRAINT `FK_informationid_type_info` FOREIGN KEY (`id_type_info`) REFERENCES `type_info` (`id_type_info`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `information` */

/*Table structure for table `pelajar` */

DROP TABLE IF EXISTS `pelajar`;

CREATE TABLE `pelajar` (
  `id_pelajar` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) DEFAULT NULL,
  `password` text,
  `nama` varchar(160) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(220) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(60) NOT NULL,
  `sekolah` varchar(10) NOT NULL,
  `kelas` int(1) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `program` int(1) DEFAULT NULL,
  `no_formulir` varchar(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `confirmasi_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pelajar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pelajar` */

insert  into `pelajar`(`id_pelajar`,`nip`,`password`,`nama`,`tempat`,`tanggal_lahir`,`email`,`jenis_kelamin`,`alamat`,`agama`,`sekolah`,`kelas`,`alamat_sekolah`,`program`,`no_formulir`,`date_created`,`is_active`,`confirmasi_status`) values (2,'123','6812af90c6a1bbec134e323d7e70587b','heri','magetan','0000-00-00','herisetiyawan85@yahoo.com','L','jakarta','Islam','SMA',3,'jakarta',2,NULL,NULL,NULL,NULL);

/*Table structure for table `prog_studi` */

DROP TABLE IF EXISTS `prog_studi`;

CREATE TABLE `prog_studi` (
  `id_prog_stud` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(220) NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_created` varchar(250) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_modified` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_prog_stud`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `prog_studi` */

insert  into `prog_studi`(`id_prog_stud`,`nama`,`keterangan`,`date_created`,`user_created`,`date_modified`,`user_modified`) values (2,'Eksklusif','untuk sd saja\r\n','2013-06-12 20:02:29','heri','2013-06-12 20:08:10','heri'),(3,'Private','untuk smp saja','2013-06-12 20:02:49','heri','2013-06-12 20:08:33','heri'),(4,'Regular','untuk sma','2013-06-12 20:03:03','heri','2013-06-12 20:08:58','heri'),(5,'Weekend','sabtu mingu','2013-06-12 20:09:19','heri',NULL,NULL);

/*Table structure for table `type_info` */

DROP TABLE IF EXISTS `type_info`;

CREATE TABLE `type_info` (
  `id_type_info` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(160) NOT NULL,
  `description` tinytext,
  `date_created` datetime DEFAULT NULL,
  `user_created` varchar(160) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_modified` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id_type_info`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `type_info` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
