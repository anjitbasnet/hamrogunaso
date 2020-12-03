/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - collegeproject
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`collegeproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `collegeproject`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `admin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `admin_fname` varchar(255) DEFAULT NULL,
  `admin_lname` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_contact` varchar(20) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_image` varchar(255) DEFAULT NULL,
  `admin_role` enum('admin','Superadmin') DEFAULT NULL,
  `admin_status` enum('active','in_active') DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`admin_id`,`admin_fname`,`admin_lname`,`admin_email`,`admin_contact`,`admin_password`,`admin_image`,`admin_role`,`admin_status`) values (8,'Anjit','Basnet','admin@gmail.com','9845555551','21232f297a57a5a743894a0e4a801fc3','uploads/admin-image/7768809780bec5815dd73b984949f21850c83ea2.jpg','Superadmin','active');

/*Table structure for table `tbl_complain` */

DROP TABLE IF EXISTS `tbl_complain`;

CREATE TABLE `tbl_complain` (
  `comp_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comp_added_by` bigint(20) DEFAULT NULL,
  `dept_id` bigint(20) DEFAULT NULL,
  `comp_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comp_types_of_complain` text DEFAULT NULL,
  `comp_image` varchar(255) DEFAULT NULL,
  `comp_complain_description` text DEFAULT NULL,
  `comp_status` enum('pending','approved','rejected') DEFAULT NULL,
  `comp_remark` text DEFAULT NULL,
  `comp_reviewed_by` bigint(20) DEFAULT NULL,
  `comp_reviewed_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_complain` */

/*Table structure for table `tbl_department` */

DROP TABLE IF EXISTS `tbl_department`;

CREATE TABLE `tbl_department` (
  `dept_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) DEFAULT NULL,
  `dept_status` enum('active','in_active') DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_department` */

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(255) DEFAULT NULL,
  `user_lname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_contact` varchar(255) DEFAULT NULL,
  `user_gender` enum('male','female','other') DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_role` enum('student','teacher','staff') DEFAULT NULL,
  `user_status` enum('active','in_active') DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`user_fname`,`user_lname`,`user_email`,`user_contact`,`user_gender`,`user_password`,`user_image`,`user_role`,`user_status`) values (22,'Demo','demo','user@gmail.com','9876543210','male','ee11cbb19052e40b07aac0ca060c23ee','images/icon/default.jpg','student','active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
