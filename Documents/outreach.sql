-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2015 at 02:32 AM
-- Server version: 5.5.42-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `outreach`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('17fc17335ac5e805df6298c27eda49db', '43.249.226.72', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1440054700, 'a:3:{s:9:"user_data";s:0:"";s:12:"adminDetails";a:5:{s:13:"permission_id";s:1:"1";s:8:"admin_id";s:1:"1";s:10:"first_name";s:8:"outreach";s:9:"last_name";s:5:"Admin";s:5:"image";s:18:"14376608481103.jpg";}s:12:"user_details";a:16:{s:2:"id";s:2:"84";s:4:"name";s:9:"karunakar";s:5:"email";s:24:"karunakar.2093@gmail.com";s:13:"mobile_number";N;s:8:"password";s:32:"e10adc3949ba59abbe56e057f20f883e";s:9:"user_type";s:1:"2";s:6:"center";s:9:"hyderabad";s:6:"status";s:1:"1";s:11:"outreach_id";s:2:"63";s:8:"workshop";s:2:"25";s:12:"participants";s:3:"250";s:11:"experiments";s:2:"11";s:13:"profile_image";s:38:"531549_252669044836256_236359487_n.jpg";s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-07-27 07:59:27";s:13:"last_loggedin";s:19:"2015-08-19 19:55:18";}}'),
('3c4e3322b48a67f0f697687edb185aee', '43.249.226.72', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1440014111, 'a:2:{s:9:"user_data";s:0:"";s:12:"user_details";a:16:{s:2:"id";s:2:"84";s:4:"name";s:9:"karunakar";s:5:"email";s:24:"karunakar.2093@gmail.com";s:13:"mobile_number";N;s:8:"password";s:32:"e10adc3949ba59abbe56e057f20f883e";s:9:"user_type";s:1:"2";s:6:"center";s:9:"hyderabad";s:6:"status";s:1:"1";s:11:"outreach_id";s:2:"63";s:8:"workshop";s:2:"25";s:12:"participants";s:3:"250";s:11:"experiments";s:2:"11";s:13:"profile_image";s:38:"531549_252669044836256_236359487_n.jpg";s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-07-27 16:29:27";s:13:"last_loggedin";s:19:"2015-08-19 18:40:41";}}'),
('5e71c5193d97a96fad29da7d52d97f49', '49.206.0.78', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.36', 1439999281, 'a:2:{s:9:"user_data";s:0:"";s:12:"user_details";a:16:{s:2:"id";s:2:"84";s:4:"name";s:9:"karunakar";s:5:"email";s:24:"karunakar.2093@gmail.com";s:13:"mobile_number";N;s:8:"password";s:32:"e10adc3949ba59abbe56e057f20f883e";s:9:"user_type";s:1:"2";s:6:"center";s:9:"hyderabad";s:6:"status";s:1:"1";s:11:"outreach_id";s:2:"63";s:8:"workshop";s:2:"25";s:12:"participants";s:3:"250";s:11:"experiments";s:2:"11";s:13:"profile_image";s:38:"531549_252669044836256_236359487_n.jpg";s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-07-27 16:29:27";s:13:"last_loggedin";s:19:"2015-08-19 13:42:32";}}'),
('64011d5970118a54843713420d7d0c93', '49.206.0.78', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1439991031, 'a:2:{s:9:"user_data";s:0:"";s:12:"adminDetails";a:5:{s:13:"permission_id";s:1:"1";s:8:"admin_id";s:1:"1";s:10:"first_name";s:8:"outreach";s:9:"last_name";s:5:"Admin";s:5:"image";s:18:"14376608481103.jpg";}}'),
('bfb674f2e64e1a4a23eda0a6a70e9678', '49.206.0.78', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1439978989, ''),
('c412f097c22c6db75e2b13cae9970498', '175.101.8.162', 'Mozilla/5.0 (X11; Linux x86_64; rv:31.0) Gecko/20100101 Firefox/31.0 Iceweasel/31.6.0', 1440006594, 'a:1:{s:12:"user_details";a:16:{s:2:"id";s:2:"63";s:4:"name";s:9:"karunakar";s:5:"email";s:36:"karunakar.reddy@possibilliontech.com";s:13:"mobile_number";s:10:"7416542049";s:8:"password";s:32:"c33367701511b4f6020ec61ded352059";s:9:"user_type";s:1:"1";s:6:"center";N;s:6:"status";s:1:"1";s:11:"outreach_id";s:1:"0";s:8:"workshop";N;s:12:"participants";s:0:"";s:11:"experiments";N;s:13:"profile_image";s:13:"outreach2.jpg";s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-07-19 06:22:38";s:13:"last_loggedin";s:19:"2015-08-19 16:36:56";}}'),
('ce6f2520c5e895a9e3ff56e0d2c05a7c', '183.82.66.226', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.3', 1439975371, 'a:2:{s:12:"adminDetails";a:5:{s:13:"permission_id";s:1:"1";s:8:"admin_id";s:1:"1";s:10:"first_name";s:8:"outreach";s:9:"last_name";s:5:"Admin";s:5:"image";s:18:"14376608481103.jpg";}s:12:"user_details";a:16:{s:2:"id";s:2:"63";s:4:"name";s:9:"karunakar";s:5:"email";s:36:"karunakar.reddy@possibilliontech.com";s:13:"mobile_number";s:10:"7416542049";s:8:"password";s:32:"c33367701511b4f6020ec61ded352059";s:9:"user_type";s:1:"1";s:6:"center";N;s:6:"status";s:1:"1";s:11:"outreach_id";s:1:"0";s:8:"workshop";N;s:12:"participants";s:0:"";s:11:"experiments";N;s:13:"profile_image";s:13:"outreach2.jpg";s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-07-19 06:22:38";s:13:"last_loggedin";s:19:"2015-08-19 06:47:19";}}'),
('d664b9577e36c1a13d665d4d4cd446cf', '183.82.66.226', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.155 Safari/537.3', 1439982259, ''),
('d98d6f965587dc735e874a5071568525', '14.139.82.6', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0', 1439991276, 'a:2:{s:9:"user_data";s:0:"";s:12:"user_details";a:16:{s:2:"id";s:2:"84";s:4:"name";s:9:"karunakar";s:5:"email";s:24:"karunakar.2093@gmail.com";s:13:"mobile_number";N;s:8:"password";s:32:"e10adc3949ba59abbe56e057f20f883e";s:9:"user_type";s:1:"2";s:6:"center";s:9:"hyderabad";s:6:"status";s:1:"1";s:11:"outreach_id";s:2:"63";s:8:"workshop";s:2:"25";s:12:"participants";s:3:"250";s:11:"experiments";s:2:"11";s:13:"profile_image";s:38:"531549_252669044836256_236359487_n.jpg";s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-07-27 16:29:27";s:13:"last_loggedin";s:19:"2015-08-19 13:10:57";}}'),
('dbb789b288862486e3036c16811800f0', '49.206.0.78', 'Mozilla/5.0 (Windows NT 6.1; rv:39.0) Gecko/20100101 Firefox/39.0', 1439980064, 'a:2:{s:12:"adminDetails";a:5:{s:13:"permission_id";s:1:"1";s:8:"admin_id";s:1:"1";s:10:"first_name";s:8:"outreach";s:9:"last_name";s:5:"Admin";s:5:"image";s:18:"14376608481103.jpg";}s:12:"user_details";a:16:{s:2:"id";s:2:"91";s:4:"name";s:7:"testone";s:5:"email";s:34:"harathi.basam@possibilliontech.com";s:13:"mobile_number";N;s:8:"password";s:32:"e10adc3949ba59abbe56e057f20f883e";s:9:"user_type";s:1:"1";s:6:"center";N;s:6:"status";s:1:"1";s:11:"outreach_id";N;s:8:"workshop";N;s:12:"participants";s:0:"";s:11:"experiments";N;s:13:"profile_image";N;s:14:"createworkshop";N;s:10:"created_on";s:19:"2015-08-19 10:05:31";s:13:"last_loggedin";N;}}');

-- --------------------------------------------------------

--
-- Table structure for table `nodal_centers`
--

CREATE TABLE IF NOT EXISTS `nodal_centers` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(125) DEFAULT NULL,
  `coordinator` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `mou` varchar(225) DEFAULT NULL,
  `workshop` varchar(225) DEFAULT NULL,
  `participants` varchar(225) DEFAULT NULL,
  `experiments` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nodal_centers`
--

INSERT INTO `nodal_centers` (`id`, `first_name`, `coordinator`, `email`, `mou`, `workshop`, `participants`, `experiments`) VALUES
(1, 'hyderabad', 'karunakar', 'karana4567@gmail.com', 'hhh', 'hhhh', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `presentation_reporting_documents`
--

CREATE TABLE IF NOT EXISTS `presentation_reporting_documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(255) NOT NULL,
  `document_path` longtext,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`document_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `presentation_reporting_documents`
--

INSERT INTO `presentation_reporting_documents` (`document_id`, `document_name`, `document_path`, `created_on`, `status`, `updated_on`) VALUES
(1, 'Virtual Labs Introduction presentation', '1437746606-66.docx', '2015-07-29 03:32:03', 1, '0000-00-00 00:00:00'),
(2, 'College Report format', '1437747400-13.docx', '2015-07-29 03:31:52', 1, '0000-00-00 00:00:00'),
(3, 'Virtual Labs Introduction presentation', '1437748246-60.docx', '2015-07-29 03:32:07', 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `va_admin_details`
--

CREATE TABLE IF NOT EXISTS `va_admin_details` (
  `details_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `works` varchar(200) NOT NULL,
  `participants` varchar(200) NOT NULL,
  `experiments` varchar(200) NOT NULL,
  PRIMARY KEY (`details_id`),
  KEY `admin_id` (`admin_id`),
  KEY `admin_id_2` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `va_admin_details`
--

INSERT INTO `va_admin_details` (`details_id`, `admin_id`, `first_name`, `last_name`, `email`, `image`, `works`, `participants`, `experiments`) VALUES
(1, 1, 'outreach', 'Admin', 'admin@task.com', '14376608481103.jpg', '', '', ''),
(14, 5, 'task', 'collage', 'collage@task.com', '', '', '', ''),
(15, 6, 'Cms', 'Permission', 'cms@permission.com', '', '', '', ''),
(16, 7, 'tirupati', 'rao', 'thirupathirao57@gmail.com', '', '', '', ''),
(17, 8, 'Rakesh', 'Reddy', 'rakesh.dady143@gmail.com', '', '', '', ''),
(18, 9, 'demo', 'testvv', 'nodaluser@gmail.com', '', '', '', ''),
(19, 10, 'demo', 'testvv', 'karana4567@gmail.com', '', '', '', ''),
(20, 11, 'demo', 'testvv', 'nodaluser12@gmail.com', '', 'demo', 'test', '444'),
(21, 46, 'demo', 'test', 'karana4567@gmail.com', '', 'adas', 'asdasd', '1234'),
(22, 48, '', 'asdffas', 'asdf@gmail.com', '', '', '', ''),
(23, 49, '', 'newdemo', 'karana4567248@gmail.com', '', '', '', ''),
(24, 50, '', 'outreachtest', 'manjula.gangisetty@gmail.com', '', '', '', ''),
(25, 51, '', 'rtrtrtrt', 'adminrt@outreach.com', '', '', '', ''),
(26, 52, '', 'asdffas', 'adminasasasasa@outreach.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `va_admin_permissions`
--

CREATE TABLE IF NOT EXISTS `va_admin_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) DEFAULT NULL,
  `staff` set('read','write') DEFAULT NULL,
  `company` set('read','write') DEFAULT NULL,
  `students` set('read','write') DEFAULT NULL,
  `tepprogramme` set('read','write') DEFAULT NULL,
  `finishing_school` set('read','write') DEFAULT NULL,
  `courses` set('read','write') DEFAULT NULL,
  `test` set('read','write') DEFAULT NULL,
  `results` set('read','write') NOT NULL,
  `certifications` set('read','write') NOT NULL,
  `downloads` set('read','write') NOT NULL,
  `placements` set('read','write') NOT NULL,
  `notifications` set('read','write') NOT NULL,
  `settings` set('read','write') NOT NULL,
  `careers` set('read','write') DEFAULT NULL,
  `cms` set('read','write') DEFAULT NULL,
  `partners` set('read','write') DEFAULT NULL,
  `news` set('read','write') DEFAULT NULL,
  `contact` set('read','write') DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `edited_by` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `edited_on` datetime DEFAULT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `va_admin_permissions`
--

INSERT INTO `va_admin_permissions` (`permission_id`, `role_name`, `staff`, `company`, `students`, `tepprogramme`, `finishing_school`, `courses`, `test`, `results`, `certifications`, `downloads`, `placements`, `notifications`, `settings`, `careers`, `cms`, `partners`, `news`, `contact`, `status`, `edited_by`, `added_on`, `added_by`, `edited_on`) VALUES
(1, 'super admin', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 'read,write', 1, 0, '2014-11-28 23:25:16', NULL, NULL),
(3, 'Company Admin', '', 'read,write', '', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', 1, 0, '2015-04-29 04:16:52', 1, NULL),
(4, 'cms', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '', '', 'read', '', '', NULL, 1, 0, '2015-07-01 05:50:44', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `va_admin_users`
--

CREATE TABLE IF NOT EXISTS `va_admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_logout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` int(11) NOT NULL,
  `edited_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`),
  KEY `permission_id` (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='volyty admin users with credentials ' AUTO_INCREMENT=12 ;

--
-- Dumping data for table `va_admin_users`
--

INSERT INTO `va_admin_users` (`admin_id`, `admin_name`, `password`, `permission_id`, `created_on`, `last_login`, `last_logout`, `edited_by`, `edited_on`, `status`) VALUES
(1, 'admin@outreach.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2015-07-16 13:35:41', '2015-01-29 13:00:00', '2015-01-28 17:13:16', 1, '2015-04-28 20:34:23', 1),
(11, 'nodaluser1@gmail.com', '06e3a8929159582392fc51c3cdb7f9f9', 1, '2015-07-16 13:38:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `va_logs`
--

CREATE TABLE IF NOT EXISTS `va_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `msg_type` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=542 ;

--
-- Dumping data for table `va_logs`
--

INSERT INTO `va_logs` (`id`, `subject`, `type`, `msg_type`, `created`) VALUES
(1, ' has been Created. ', 'collages', 'success', '2015-06-10 04:31:49'),
(2, ' has been Updated. ', 'collages', 'success', '2015-06-10 05:09:10'),
(3, ' has been Updated. ', 'collages', 'success', '2015-06-10 05:10:06'),
(4, ' has been Updated. ', 'collages', 'success', '2015-06-10 05:10:40'),
(5, 'company has been deleted. ', 'collages', 'success', '2015-06-10 05:11:31'),
(6, 'Task has been updated. ', 'Staff', 'success', '2015-06-10 05:14:01'),
(7, 'Cse has been Created. ', 'corporate', 'success', '2015-06-10 07:16:15'),
(8, 'Cse123 has been Updated. ', 'category', 'success', '2015-06-10 07:18:36'),
(9, 'Cse has been Updated. ', 'category', 'success', '2015-06-10 07:18:44'),
(10, 'company has been deleted. ', 'category', 'success', '2015-06-10 07:20:18'),
(11, 'notification has been Created. ', 'corporate', 'success', '2015-06-11 04:01:21'),
(12, 'notification has been Created. ', 'corporate', 'success', '2015-06-11 04:08:43'),
(13, 'notification has been Created. ', 'corporate', 'success', '2015-06-11 04:09:43'),
(14, 'notification has been Created. ', 'corporate', 'success', '2015-06-11 04:11:07'),
(15, 'notification has been Created. ', 'corporate', 'success', '2015-06-11 04:12:21'),
(16, 'company has been deleted. ', 'category', 'success', '2015-06-11 04:15:41'),
(17, 'company has been deleted. ', 'category', 'success', '2015-06-11 04:16:21'),
(18, 'notifications has been Updated. ', 'category', 'success', '2015-06-11 04:28:59'),
(19, 'notifications has been Updated. ', 'category', 'success', '2015-06-11 06:25:46'),
(20, 'notification has been Created. ', 'corporate', 'success', '2015-06-11 06:26:07'),
(21, 'company has been deleted. ', 'category', 'success', '2015-06-11 06:26:20'),
(22, 'company has been deleted. ', 'collages', 'success', '2015-06-12 01:58:37'),
(23, 'notification has been Created. ', 'corporate', 'success', '2015-06-13 08:30:47'),
(24, 'Poss has been Created. ', 'placements', 'success', '2015-06-17 05:00:32'),
(25, 'Android has been Created. ', 'courses', 'success', '2015-06-17 05:29:03'),
(26, ' has been Updated. ', 'collages', 'success', '2015-06-19 04:46:44'),
(27, ' has been Created. ', 'collages', 'success', '2015-06-19 05:17:38'),
(28, ' has been Created. ', 'collages', 'success', '2015-06-19 05:22:07'),
(29, ' has been Updated. ', 'collages', 'success', '2015-06-19 06:05:34'),
(30, 'company has been deleted. ', 'collages', 'success', '2015-06-19 08:17:26'),
(31, ' has been Updated. ', 'collages', 'success', '2015-06-19 08:25:05'),
(32, ' has been Updated. ', 'collages', 'success', '2015-06-19 08:28:18'),
(33, ' has been Created. ', 'collages', 'success', '2015-06-19 08:33:14'),
(34, ' has been Created. ', 'collages', 'success', '2015-06-19 08:36:47'),
(35, ' has been Created. ', 'collages', 'success', '2015-06-19 08:41:49'),
(36, 'TASK 2015-16 College Notification has been added. ', 'news', 'success', '2015-06-22 01:26:18'),
(37, 'TASK Degree College Registration Notification 2015-16 has been added. ', 'news', 'success', '2015-06-22 01:28:39'),
(38, 'TASK 2015-16 College Registration form has been added. ', 'news', 'success', '2015-06-22 02:39:24'),
(39, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:13:27'),
(40, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:14:06'),
(41, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:14:53'),
(42, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:15:31'),
(43, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:29:30'),
(44, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:32:36'),
(45, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-22 03:33:04'),
(46, ' has been toggled. ', 'news', 'success', '2015-06-22 03:34:10'),
(47, ' has been toggled. ', 'news', 'success', '2015-06-22 03:34:20'),
(48, 'TASK 2015-16 College Notification has been updated. ', 'news', 'success', '2015-06-22 03:34:40'),
(49, 'TASK Degree College Registration Notification 2015-16 has been updated. ', 'news', 'success', '2015-06-22 03:38:09'),
(50, 'FINISHING SCHOOL PILOT has been added. ', 'careers', 'success', '2015-06-22 04:21:52'),
(51, 'SumTotal Systems has been added. ', 'careers', 'success', '2015-06-22 04:22:58'),
(52, 'VEDAIIT Engineer Trainee Recruitment Process has been added. ', 'careers', 'success', '2015-06-22 04:24:00'),
(53, 'Oracle Academy has been Created. ', 'placements', 'success', '2015-06-22 05:19:33'),
(54, 'Tech Trunk has been Created. ', 'placements', 'success', '2015-06-22 05:21:43'),
(55, 'SumTotal Systems, LLC, a Skillsoft company. has been Created. ', 'placements', 'success', '2015-06-22 05:23:08'),
(56, 'ORACLE ( Database and Java ) has been Created. ', 'certifications', 'success', '2015-06-22 07:33:30'),
(57, 'IBM ( DB2 ) has been Created. ', 'certifications', 'success', '2015-06-22 07:35:47'),
(58, 'MICROSOFT ( MTA ) has been Created. ', 'certifications', 'success', '2015-06-22 07:37:31'),
(59, 'GOOGLE ( Android ) has been Created. ', 'certifications', 'success', '2015-06-22 07:37:57'),
(60, 'GOOGLE ( Android ) has been Updated. ', 'certifications', 'success', '2015-06-22 07:38:18'),
(61, 'GOOGLE ( Android ) has been Updated. ', 'certifications', 'success', '2015-06-22 07:51:37'),
(62, 'GOOGLE ( Cloud Computing ) has been Created. ', 'certifications', 'success', '2015-06-22 07:52:34'),
(63, 'GOOGLE ( Cloud Computing ) has been Updated. ', 'certifications', 'success', '2015-06-22 07:53:03'),
(64, 'AUTODESK ( AutoCad ) has been Created. ', 'certifications', 'success', '2015-06-22 07:53:36'),
(65, 'company has been deleted. ', 'category', 'success', '2015-06-22 22:49:25'),
(66, 'company has been deleted. ', 'category', 'success', '2015-06-22 22:49:32'),
(67, 'notification has been Created. ', 'corporate', 'success', '2015-06-22 23:22:56'),
(68, 'notification has been Created. ', 'corporate', 'success', '2015-06-22 23:27:35'),
(69, 'notification has been Created. ', 'corporate', 'success', '2015-06-22 23:28:32'),
(70, 'notification has been Created. ', 'corporate', 'success', '2015-06-22 23:29:21'),
(71, 'Contact has been deleted. ', 'category', 'success', '2015-06-23 01:45:54'),
(72, 'AUTODESK ( AutoCad ) has been Updated. ', 'downloads', 'success', '2015-06-23 23:49:02'),
(73, 'downloads has been deleted. ', 'downloads', 'success', '2015-06-23 23:49:11'),
(74, 'TASK 2015-16 College Notification has been Created. ', 'downloads', 'success', '2015-06-24 00:06:01'),
(75, 'TASK 2015-16 College Registration form has been Created. ', 'downloads', 'success', '2015-06-24 00:06:37'),
(76, 'TASK Degree College Registration Notification 2015-16 has been Created. ', 'downloads', 'success', '2015-06-24 00:07:07'),
(77, 'TASK Degree College Registration form 2015-16 has been Created. ', 'downloads', 'success', '2015-06-24 00:07:29'),
(78, 'Dfgdsg has been Created. ', 'downloads', 'success', '2015-06-24 00:13:06'),
(79, 'downloads has been deleted. ', 'downloads', 'success', '2015-06-24 00:13:10'),
(80, 'TASK has been Created. ', 'testimonials', 'success', '2015-06-24 01:08:28'),
(81, 'NASSCOM has been Created. ', 'testimonials', 'success', '2015-06-24 01:15:46'),
(82, 'NASSCOM123 has been Updated. ', 'testimonials', 'success', '2015-06-24 01:18:21'),
(83, 'NASSCOM has been Updated. ', 'testimonials', 'success', '2015-06-24 01:18:30'),
(84, 'testimonials has been deleted. ', 'testimonials', 'success', '2015-06-24 01:19:36'),
(85, 'testimonials has been deleted. ', 'testimonials', 'success', '2015-06-24 01:47:47'),
(86, 'testimonials has been deleted. ', 'testimonials', 'success', '2015-06-24 01:47:49'),
(87, 'TASK 2015-16 College Registration form123 has been updated. ', 'news', 'success', '2015-06-24 04:23:19'),
(88, 'TASK 2015-16 College Registration form has been updated. ', 'news', 'success', '2015-06-24 04:23:31'),
(89, 'ABC has been added. ', 'partners', 'success', '2015-06-24 04:25:29'),
(90, 'ABCvgdgdsg has been updated. ', 'partners', 'success', '2015-06-24 04:26:04'),
(91, 'ABCv has been updated. ', 'partners', 'success', '2015-06-24 04:26:24'),
(92, 'Virtual Labs has been added. ', 'partners', 'success', '2015-06-24 04:53:43'),
(93, 'ISB has been added. ', 'partners', 'success', '2015-06-24 04:54:56'),
(94, 'Tucson Electric Power has been added. ', 'partners', 'success', '2015-06-24 04:56:29'),
(95, ' has been toggled. ', 'partners', 'success', '2015-06-24 04:57:10'),
(96, ' has been toggled. ', 'partners', 'success', '2015-06-24 04:57:13'),
(97, 'VEDAIIT has been Created. ', 'placements', 'success', '2015-06-24 07:31:01'),
(98, 'courses has been deleted. ', 'courses', 'success', '2015-06-26 23:29:30'),
(99, 'Php has been Updated. ', 'courses', 'success', '2015-06-29 06:18:17'),
(100, 'Php has been Updated. ', 'courses', 'success', '2015-06-29 06:21:56'),
(101, 'Employability Questionnaire has been Created. ', 'courses', 'success', '2015-06-29 06:23:50'),
(102, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:25:10'),
(103, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:26:09'),
(104, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:27:21'),
(105, 'Question has been Updated. ', 'questions', 'success', '2015-06-29 06:28:07'),
(106, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:34:18'),
(107, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:40:01'),
(108, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:55:41'),
(109, 'Question has been Created. ', 'questions', 'success', '2015-06-29 06:59:42'),
(110, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:11:17'),
(111, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:12:04'),
(112, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:12:58'),
(113, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:13:54'),
(114, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:14:46'),
(115, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:15:34'),
(116, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:16:28'),
(117, 'Question has been Created. ', 'questions', 'success', '2015-06-29 07:18:50'),
(118, 'registration has been deleted. ', 'registrations', 'success', '2015-06-29 07:53:10'),
(119, 'student has been deleted. ', 'students', 'success', '2015-06-29 07:54:42'),
(120, 'Question has been Created. ', 'questions', 'success', '2015-06-29 22:54:04'),
(121, 'Question has been Created. ', 'questions', 'success', '2015-06-29 22:55:01'),
(122, 'Question has been Created. ', 'questions', 'success', '2015-06-29 22:55:38'),
(123, 'Question has been Created. ', 'questions', 'success', '2015-06-29 22:56:34'),
(124, 'Question has been Created. ', 'questions', 'success', '2015-06-29 22:58:36'),
(125, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:00:39'),
(126, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:02:39'),
(127, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:03:29'),
(128, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:04:38'),
(129, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:05:49'),
(130, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:06:57'),
(131, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:07:42'),
(132, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:08:26'),
(133, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:09:13'),
(134, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:10:28'),
(135, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:11:12'),
(136, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:12:00'),
(137, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:12:56'),
(138, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:13:43'),
(139, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:14:33'),
(140, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:15:18'),
(141, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:16:05'),
(142, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:16:40'),
(143, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:17:22'),
(144, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:17:57'),
(145, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:19:04'),
(146, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:19:50'),
(147, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:20:43'),
(148, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:21:24'),
(149, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:22:50'),
(150, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:23:31'),
(151, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:24:02'),
(152, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:24:46'),
(153, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:25:28'),
(154, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:26:10'),
(155, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:26:54'),
(156, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:27:42'),
(157, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:28:20'),
(158, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:29:02'),
(159, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:29:45'),
(160, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:30:33'),
(161, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:44:19'),
(162, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:44:56'),
(163, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:45:43'),
(164, 'Question has been Created. ', 'questions', 'success', '2015-06-29 23:46:45'),
(165, 'Question has been Updated. ', 'questions', 'success', '2015-06-29 23:47:30'),
(166, 'Question has been Updated. ', 'questions', 'success', '2015-06-29 23:47:55'),
(167, 'Employability Questionnaire has been Updated. ', 'courses', 'success', '2015-06-30 23:05:08'),
(168, 'Employability Questionnaire has been Updated. ', 'courses', 'success', '2015-06-30 23:33:03'),
(169, 'courses has been deleted. ', 'courses', 'success', '2015-06-30 23:33:11'),
(170, 'student has been deleted. ', 'students', 'success', '2015-07-01 01:35:03'),
(171, 'TEP Progremme has been Approved. ', 'students', 'success', '2015-07-01 02:06:59'),
(172, 'General Admin Permission has been updated. ', 'Staff', 'success', '2015-07-01 05:49:50'),
(173, 'General Admin Permission has been updated. ', 'Staff', 'success', '2015-07-01 05:50:01'),
(174, ' Permission has been Added. ', 'Staff', 'success', '2015-07-01 05:50:44'),
(175, 'Task has been updated. ', 'Staff', 'success', '2015-07-01 05:51:33'),
(176, 'Task has been updated. ', 'Staff', 'success', '2015-07-01 05:51:42'),
(177, 'Cms has been added. ', 'Staff', 'success', '2015-07-01 05:52:30'),
(178, 'Tirupati has been added. ', 'Staff', 'success', '2015-07-01 05:55:45'),
(179, 'Careers Admin Permission has been updated. ', 'Staff', 'success', '2015-07-01 05:58:45'),
(180, ' has been toggled. ', 'partners', 'success', '2015-07-01 23:10:59'),
(181, 'ISB has been updated. ', 'partners', 'success', '2015-07-02 00:19:10'),
(182, ' has been toggled. ', 'partners', 'success', '2015-07-02 00:20:54'),
(183, ' has been toggled. ', 'partners', 'success', '2015-07-02 04:29:46'),
(184, 'student has been Approved. ', 'students', 'success', '2015-07-03 07:24:31'),
(185, 'Matrix Inst Of Tech has been Created. ', 'corporate', 'success', '2015-07-06 07:02:30'),
(186, 'College has been deleted. ', 'category', 'success', '2015-07-06 07:05:26'),
(187, 'Anjamma Agi Reddy Engineering College for Women has been Created. ', 'corporate', 'success', '2015-07-06 23:54:33'),
(188, 'Bandari Srinivas College of Engineering & Technology has been Created. ', 'corporate', 'success', '2015-07-06 23:56:47'),
(189, 'CMR Engineering College has been Created. ', 'corporate', 'success', '2015-07-06 23:57:08'),
(190, 'Cyberabad Institute of Technology has been Created. ', 'corporate', 'success', '2015-07-06 23:57:27'),
(191, 'Gayatri Institute of Technology & Sciences has been Created. ', 'corporate', 'success', '2015-07-06 23:57:44'),
(192, 'Guru Nanak Institute of Engineering & Technology has been Created. ', 'corporate', 'success', '2015-07-06 23:58:00'),
(193, 'Hasvita Institute of Science & Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:03:24'),
(194, 'Kamakshi College of Engineering & Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:03:45'),
(195, 'KLR Engineering College has been Created. ', 'corporate', 'success', '2015-07-07 00:04:08'),
(196, 'Sree Vaanmayi Institute of Engineering & Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:04:22'),
(197, 'TRV College of Engineering & Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:04:42'),
(198, 'Vidyaniketan Institute of Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:04:57'),
(199, 'Aarushi Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:05:28'),
(200, 'Anurag Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:06:10'),
(201, 'Global Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:06:24'),
(202, 'GSR Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:06:41'),
(203, 'Harshith Group of Institutions  has been Created. ', 'corporate', 'success', '2015-07-07 00:06:55'),
(204, 'Nova Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:07:07'),
(205, 'S.V.S Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:07:23'),
(206, 'Sree Dattha Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:07:40'),
(207, 'St.Mary College of Engg & Tech has been Created. ', 'corporate', 'success', '2015-07-07 00:09:15'),
(208, 'Vivekananda Group of Institutions has been Created. ', 'corporate', 'success', '2015-07-07 00:10:07'),
(209, 'Lotus Institute of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 00:10:40'),
(210, 'RKLK  PG College has been Created. ', 'corporate', 'success', '2015-07-07 00:12:48'),
(211, 'Rousseau Inst. of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 00:13:04'),
(212, 'Sahaja School of Business has been Created. ', 'corporate', 'success', '2015-07-07 00:13:19'),
(213, 'Sree Chaitanya P.G. College  has been Created. ', 'corporate', 'success', '2015-07-07 00:14:01'),
(214, 'Sree Dattha School of Business Management has been Created. ', 'corporate', 'success', '2015-07-07 00:14:31'),
(215, 'Sree kavitha College of Management & Information Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:14:50'),
(216, 'SRM PG College  has been Created. ', 'corporate', 'success', '2015-07-07 00:15:10'),
(217, 'Ushodaya Inst. of Management, & Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:15:39'),
(218, 'Aurora Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:25:12'),
(219, 'A.V. Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:25:31'),
(220, 'A.K. Navajeevan Degree Coll. for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:25:49'),
(221, 'ACME Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:26:05'),
(222, 'Kranthi Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:26:19'),
(223, 'Andhra Yuvathi Mandali Degree College for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:26:36'),
(224, 'Avanthi Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:26:49'),
(225, 'Annie Besant Womens Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:27:05'),
(226, 'Arunodaya Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:27:20'),
(227, 'Badruka Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:27:38'),
(228, 'BBCIT has been Created. ', 'corporate', 'success', '2015-07-07 00:28:18'),
(229, 'Bhavans New Science Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:28:33'),
(230, 'BJR Govt. Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:28:58'),
(231, 'Bharat Degree College for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:29:14'),
(232, 'Bhavans Viveknanda Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:29:31'),
(233, 'CAT Degree & PG College has been Created. ', 'corporate', 'success', '2015-07-07 00:29:49'),
(234, 'Dharmavanth Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:30:07'),
(235, 'Dr. B. R. Ambedkar Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:30:25'),
(236, 'Dewan Bahadur Padma Rao Modiliar Degree College for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:30:41'),
(237, 'D.V.M Degree College of Commerce & Science has been Created. ', 'corporate', 'success', '2015-07-07 00:30:59'),
(238, 'Don Bosco Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:31:15'),
(239, 'David Memorial Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:31:32'),
(240, 'Govt. Degree College for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:31:45'),
(241, 'G.M. Sanghi Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:32:01'),
(242, 'Gauthami Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:32:18'),
(243, 'G. Pulla Reddy Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:32:49'),
(244, 'Geetanjali Degree College for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:33:05'),
(245, 'Gokul Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:33:19'),
(246, 'Sree Venkateshwara Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:33:35'),
(247, 'Haindavi Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:34:04'),
(248, 'Kasturba Gandhi Degree College for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:34:28'),
(249, 'KEN Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:34:47'),
(250, 'Kakitya Degree College has been Created. ', 'corporate', 'success', '2015-07-07 00:35:20'),
(251, 'Chaitanya Bharathi Institute of Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:38:56'),
(252, 'Deccan College of Engineering &Tech; has been Created. ', 'corporate', 'success', '2015-07-07 00:43:56'),
(253, 'Islamia College of Engineering & Technology for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:44:11'),
(254, 'M J COLLEGE OF ENGINEERING AND TECHNOLOGY has been Created. ', 'corporate', 'success', '2015-07-07 00:44:25'),
(255, 'MATRUSRI ENGINEERING COLLEGE has been Created. ', 'corporate', 'success', '2015-07-07 00:44:38'),
(256, 'Methodist College of Engineering & Technology  has been Created. ', 'corporate', 'success', '2015-07-07 00:44:52'),
(257, 'Muffakham Jah (MJ) College of Engineering & Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:45:06'),
(258, 'MVSR (Maturi Venkata Subba Rao) Engineering College has been Created. ', 'corporate', 'success', '2015-07-07 00:45:25'),
(259, 'Osmania University College of Engineering has been Created. ', 'corporate', 'success', '2015-07-07 00:45:40'),
(260, 'Osmania University College of Technology has been Created. ', 'corporate', 'success', '2015-07-07 00:45:55'),
(261, 'Stanley College of Engineering & Technology for Women has been Created. ', 'corporate', 'success', '2015-07-07 00:46:10'),
(262, 'Swathi Institute of Technology & Sciences has been Created. ', 'corporate', 'success', '2015-07-07 00:46:22'),
(263, 'Vasavi College of Engineering has been Created. ', 'corporate', 'success', '2015-07-07 00:46:35'),
(264, 'Academy of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 01:33:12'),
(265, 'Adarsh PG College of Computer Science has been Created. ', 'corporate', 'success', '2015-07-07 01:33:28'),
(266, 'Al-Madina College of Computer Science has been Created. ', 'corporate', 'success', '2015-07-07 01:33:42'),
(267, 'Al-Qurmoshi Institute of Business Management has been Created. ', 'corporate', 'success', '2015-07-07 01:33:55'),
(268, 'Amjad Ali Khan College of Business Administration has been Created. ', 'corporate', 'success', '2015-07-07 01:34:08'),
(269, 'AMS (Andhra Mahila Sabha) School of Informatics for Women  has been Created. ', 'corporate', 'success', '2015-07-07 01:34:21'),
(270, 'Andhra Yuvathi Mandali School of Business for Women has been Created. ', 'corporate', 'success', '2015-07-07 01:34:35'),
(271, 'Anwar Ul Uloom College For Computer Studies  has been Created. ', 'corporate', 'success', '2015-07-07 01:35:00'),
(272, 'Apex College of Management & Computers has been Created. ', 'corporate', 'success', '2015-07-07 01:35:24'),
(273, 'Aradhana PG College for MBA for Women has been Created. ', 'corporate', 'success', '2015-07-07 01:35:41'),
(274, 'Aurora''s College of PG Studies has been Created. ', 'corporate', 'success', '2015-07-07 01:35:54'),
(275, 'Auroras School of Computer Sci and Research has been Created. ', 'corporate', 'success', '2015-07-07 01:36:05'),
(276, 'Badruka College PG Centre has been Created. ', 'corporate', 'success', '2015-07-07 01:36:17'),
(277, 'Basaveshwara Institute of Information Technology (BIIT) has been Created. ', 'corporate', 'success', '2015-07-07 01:36:32'),
(278, 'Brilliant PG College (MCA) has been Created. ', 'corporate', 'success', '2015-07-07 01:36:48'),
(279, 'Chaitanya Institute of Business Management has been Created. ', 'corporate', 'success', '2015-07-07 01:37:00'),
(280, 'CM Institute of Management has been Created. ', 'corporate', 'success', '2015-07-07 01:37:14'),
(281, 'Deccan School of Management has been Created. ', 'corporate', 'success', '2015-07-07 01:37:28'),
(282, 'Dr.B.R.Ambedkar Institute of Management & Technology has been Created. ', 'corporate', 'success', '2015-07-07 01:37:40'),
(283, 'Hasvita PG College has been Created. ', 'corporate', 'success', '2015-07-07 01:38:02'),
(284, 'Holy Mother PG College has been Created. ', 'corporate', 'success', '2015-07-07 01:39:27'),
(285, 'Alluri Institute of Management Sciences has been Created. ', 'corporate', 'success', '2015-07-07 02:00:33'),
(286, 'Annie Besant PG College  has been Created. ', 'corporate', 'success', '2015-07-07 02:00:47'),
(287, 'Apoorva Institute of Management & Sciences has been Created. ', 'corporate', 'success', '2015-07-07 02:01:02'),
(288, 'Avinash Institute of Management has been Created. ', 'corporate', 'success', '2015-07-07 02:01:17'),
(289, 'Brown''s PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:01:37'),
(290, 'Chaitanya PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:01:51'),
(291, 'CKM Arts & Science College has been Created. ', 'corporate', 'success', '2015-07-07 02:02:06'),
(292, 'Dhanvanthari Institute of Management Sciences has been Created. ', 'corporate', 'success', '2015-07-07 02:02:21'),
(293, 'Gaayathri Institute of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 02:02:35'),
(294, 'Herambhu Business School has been Created. ', 'corporate', 'success', '2015-07-07 02:02:51'),
(295, 'Jaya Institute of Business Management has been Created. ', 'corporate', 'success', '2015-07-07 02:03:08'),
(296, 'Jayamukhi Institute of Management Sciences has been Created. ', 'corporate', 'success', '2015-07-07 02:03:22'),
(297, 'Kakatiya Institute of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 02:03:40'),
(298, 'Kakatiya University College has been Created. ', 'corporate', 'success', '2015-07-07 02:03:53'),
(299, 'Kavitha Memorial PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:04:07'),
(300, 'KU Arts and Science College has been Created. ', 'corporate', 'success', '2015-07-07 02:04:20'),
(301, 'Laqshya College of Management has been Created. ', 'corporate', 'success', '2015-07-07 02:04:37'),
(302, 'Mahaboobia Panjetan PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:04:52'),
(303, 'Manair College of Computer Science has been Created. ', 'corporate', 'success', '2015-07-07 02:05:07'),
(304, 'Mohammadiya Institute of Management has been Created. ', 'corporate', 'success', '2015-07-07 02:05:21'),
(305, 'New Science PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:05:34'),
(306, 'Pragathi School of Business has been Created. ', 'corporate', 'success', '2015-07-07 02:05:48'),
(307, 'Rousseau Institute of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 02:06:23'),
(308, 'Shantha Institute of PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:06:39'),
(309, 'Sree Chaitanya PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:06:59'),
(310, 'Sree Kavitha College of Management & Information Technology has been Created. ', 'corporate', 'success', '2015-07-07 02:07:14'),
(311, 'SRM PG College  has been Created. ', 'corporate', 'success', '2015-07-07 02:07:36'),
(312, 'Sree Vashistha Institute of Management Studies has been Created. ', 'corporate', 'success', '2015-07-07 02:07:49'),
(313, 'Sri Gaayatri College Of Management Sciences has been Created. ', 'corporate', 'success', '2015-07-07 02:08:04'),
(314, 'St.John School of Management has been Created. ', 'corporate', 'success', '2015-07-07 02:08:17'),
(315, 'SVS PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:08:31'),
(316, 'Swarna Bharathi Institute of Management Sciences has been Created. ', 'corporate', 'success', '2015-07-07 02:08:43'),
(317, 'Talasila College of Management & Information Technology has been Created. ', 'corporate', 'success', '2015-07-07 02:08:59'),
(318, 'Vivekananda Degree & PG College has been Created. ', 'corporate', 'success', '2015-07-07 02:09:21'),
(319, 'Government (A.B.V) Degree College, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:25:51'),
(320, 'Government (G.R.P) Degree College, Adilabad has been Created. ', 'corporate', 'success', '2015-07-07 03:26:03'),
(321, 'Government (J.V.R) Degree College, Khammam has been Created. ', 'corporate', 'success', '2015-07-07 03:26:15'),
(322, 'Government (Pingle) Degree College for Women, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:26:26'),
(323, 'Government (S.K.N.R) Degree College, Karimnagar has been Created. ', 'corporate', 'success', '2015-07-07 03:26:38'),
(324, 'Government (S.R and B.G.N.R) Degree College, Khammam has been Created. ', 'corporate', 'success', '2015-07-07 03:26:51'),
(325, 'Government (S.R.A.S) Degree College, Khammam has been Created. ', 'corporate', 'success', '2015-07-07 03:27:03'),
(326, 'Government (S.R.R) Degree College, Karimnagar has been Created. ', 'corporate', 'success', '2015-07-07 03:27:15'),
(327, 'Government Degree College (for Women), Mancherial has been Created. ', 'corporate', 'success', '2015-07-07 03:27:31'),
(328, 'Government Degree College for Men, Adilabad has been Created. ', 'corporate', 'success', '2015-07-07 03:28:22'),
(329, 'Kakatia University Arts and Science College, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:28:36'),
(330, 'Kakatiya Government Degree College, Hanamkonda has been Created. ', 'corporate', 'success', '2015-07-07 03:28:48'),
(331, 'A.K. Vishvanatha Reddy Degree College, Bheemadevarapally Mandal has been Created. ', 'corporate', 'success', '2015-07-07 03:29:01'),
(332, 'A.S.M. College for Women, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:29:13'),
(333, 'A.V.V. Degree College, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:29:25'),
(334, 'Acharya Degree College, Narsampet has been Created. ', 'corporate', 'success', '2015-07-07 03:29:37'),
(335, 'Adarsha Degree College, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:29:51'),
(336, 'Adarsha Women''s Degree College, Bellampalli has been Created. ', 'corporate', 'success', '2015-07-07 03:30:06'),
(337, 'B.B.M. Vaari Gayathri Degree College, Khammam has been Created. ', 'corporate', 'success', '2015-07-07 03:30:20'),
(338, 'Bharathi Degree College, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:30:33'),
(339, 'Chanakya Degree College, Jammikunta has been Created. ', 'corporate', 'success', '2015-07-07 03:30:43'),
(340, 'Dr. M.R. Reddy Degree College, Warangal has been Created. ', 'corporate', 'success', '2015-07-07 03:30:55'),
(341, 'Gandhi Memorial Degree College, Karimnagar has been Created. ', 'corporate', 'success', '2015-07-07 03:31:06'),
(342, 'Gayatri Degree College, Karimnagar has been Created. ', 'corporate', 'success', '2015-07-07 03:31:19'),
(343, 'Question has been Created. ', 'questions', 'success', '2015-07-08 01:56:57'),
(344, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 02:08:30'),
(345, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 02:08:44'),
(346, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 02:10:15'),
(347, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 02:10:27'),
(348, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:10:39'),
(349, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:12:16'),
(350, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:12:36'),
(351, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:13:22'),
(352, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:13:45'),
(353, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:14:42'),
(354, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:15:32'),
(355, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:15:49'),
(356, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:16:09'),
(357, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:16:25'),
(358, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:16:49'),
(359, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:17:20'),
(360, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:17:43'),
(361, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:17:59'),
(362, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:18:19'),
(363, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 02:18:37'),
(364, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:10:09'),
(365, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:10:37'),
(366, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:10:54'),
(367, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:12:08'),
(368, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:12:59'),
(369, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:13:35'),
(370, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:14:03'),
(371, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:14:40'),
(372, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:15:14'),
(373, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:15:53'),
(374, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:16:37'),
(375, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:17:15'),
(376, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:17:52'),
(377, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 03:18:29'),
(378, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:18:55'),
(379, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:19:33'),
(380, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 03:19:54'),
(381, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:20:21'),
(382, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:20:49'),
(383, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:26:24'),
(384, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:27:53'),
(385, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:28:42'),
(386, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:29:27'),
(387, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:29:57'),
(388, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:30:37'),
(389, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:31:16'),
(390, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:43:20'),
(391, 'questions has been deleted. ', 'questions', 'success', '2015-07-08 03:43:53'),
(392, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:44:22'),
(393, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:45:11'),
(394, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:45:39'),
(395, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:46:53'),
(396, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:47:24'),
(397, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:48:15'),
(398, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:48:37'),
(399, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:49:06'),
(400, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:49:35'),
(401, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:50:00'),
(402, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:50:49'),
(403, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:51:24'),
(404, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:51:43'),
(405, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:52:31'),
(406, 'Question has been Updated. ', 'questions', 'success', '2015-07-08 03:53:03'),
(407, 'VEDAIIT has been Updated. ', 'placements', 'success', '2015-07-09 07:48:32'),
(408, 'SumTotal Systems, LLC, a Skillsoft company. has been Updated. ', 'placements', 'success', '2015-07-09 07:50:04'),
(409, 'Tech Trunk has been Updated. ', 'placements', 'success', '2015-07-09 07:50:12'),
(410, 'Oracle Academy has been Updated. ', 'placements', 'success', '2015-07-09 07:50:19'),
(411, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:13:43'),
(412, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:13:47'),
(413, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:13:56'),
(414, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:15:15'),
(415, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:15:22'),
(416, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:15:26'),
(417, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:15:30'),
(418, 'result has been deleted. ', 'results', 'success', '2015-07-09 08:15:34'),
(419, 'SRM PG College  has been Created. ', 'corporate', 'success', '2015-07-09 08:29:11'),
(420, '34325355 has been Updated. ', 'category', 'success', '2015-07-09 08:29:21'),
(421, 'College has been deleted. ', 'category', 'success', '2015-07-09 08:29:25'),
(422, 'CSE has been Created. ', 'corporate', 'success', '2015-07-09 08:42:11'),
(423, 'IT has been Updated. ', 'category', 'success', '2015-07-09 08:42:54'),
(424, 'company has been deleted. ', 'category', 'success', '2015-07-09 08:43:02'),
(425, 'notifications has been Updated. ', 'category', 'success', '2015-07-09 09:09:26'),
(426, 'notifications has been Updated. ', 'category', 'success', '2015-07-09 09:09:35'),
(427, 'notification has been Created. ', 'corporate', 'success', '2015-07-09 09:09:43'),
(428, 'notifications has been Updated. ', 'category', 'success', '2015-07-09 09:09:52'),
(429, 'company has been deleted. ', 'category', 'success', '2015-07-09 09:10:00'),
(430, 'Test has been Created. ', 'courses', 'success', '2015-07-09 09:14:52'),
(431, 'Test has been Created. ', 'courses', 'success', '2015-07-09 09:15:18'),
(432, 'Test has been Created. ', 'courses', 'success', '2015-07-09 09:24:34'),
(433, 'Test has been Updated. ', 'courses', 'success', '2015-07-09 09:38:16'),
(434, 'Test Please ignore has been Updated. ', 'courses', 'success', '2015-07-09 09:38:40'),
(435, 'Please ignore test has been Created. ', 'courses', 'success', '2015-07-10 02:12:57'),
(436, 'Question has been Created. ', 'questions', 'success', '2015-07-10 02:13:26'),
(437, 'Question has been Updated. ', 'questions', 'success', '2015-07-10 02:13:57'),
(438, 'questions has been deleted. ', 'questions', 'success', '2015-07-10 02:14:07'),
(439, 'Question has been Created. ', 'questions', 'success', '2015-07-10 02:16:08'),
(440, 'Question has been Created. ', 'questions', 'success', '2015-07-10 02:23:37'),
(441, 'Question has been Updated. ', 'questions', 'success', '2015-07-10 02:23:54'),
(442, 'Karuna A has been Updated. ', 'testimonials', 'success', '2015-07-10 02:53:06'),
(443, 'DIETY has been Updated. ', 'testimonials', 'success', '2015-07-10 02:53:54'),
(444, 'CBIT has been Created. ', 'corporate', 'success', '2015-07-10 04:12:37'),
(445, 'IT has been Created. ', 'corporate', 'success', '2015-07-10 04:14:57'),
(446, 'ESDM has been Created. ', 'corporate', 'success', '2015-07-10 04:36:53'),
(447, 'ESDM123 has been Updated. ', 'category', 'success', '2015-07-10 04:37:00'),
(448, 'ESD has been Updated. ', 'category', 'success', '2015-07-10 04:37:08'),
(449, 'ESDM has been Updated. ', 'category', 'success', '2015-07-10 04:37:16'),
(450, 'company has been deleted. ', 'category', 'success', '2015-07-10 04:37:29'),
(451, 'Certifications has been Created. ', 'corporate', 'success', '2015-07-10 04:51:32'),
(452, 'AUTODESK ( AutoCad ) has been Updated. ', 'certifications', 'success', '2015-07-10 04:53:59'),
(453, 'GOOGLE ( Cloud Computing ) has been Updated. ', 'certifications', 'success', '2015-07-10 05:04:56'),
(454, 'GOOGLE ( Android ) has been Updated. ', 'certifications', 'success', '2015-07-10 05:05:09'),
(455, 'MICROSOFT ( MTA ) has been Updated. ', 'certifications', 'success', '2015-07-10 05:05:30'),
(456, 'IBM-SAP has been Created. ', 'certifications', 'success', '2015-07-10 05:07:40'),
(457, 'ESDM has been Created. ', 'certifications', 'success', '2015-07-10 05:08:46'),
(458, 'certifications has been deleted. ', 'certifications', 'success', '2015-07-10 05:34:13'),
(459, 'certifications has been deleted. ', 'certifications', 'success', '2015-07-10 05:34:17'),
(460, 'AUTODESK Academy Programs has been Updated. ', 'certifications', 'success', '2015-07-10 06:56:03'),
(461, 'GOOGLE Cloud Computing has been Updated. ', 'certifications', 'success', '2015-07-10 06:56:32'),
(462, 'GOOGLE - Android has been Updated. ', 'certifications', 'success', '2015-07-10 06:56:50'),
(463, 'MICROSOFT-MTA has been Updated. ', 'certifications', 'success', '2015-07-10 06:57:09'),
(464, 'IBM-DB2 has been Updated. ', 'certifications', 'success', '2015-07-10 06:57:22'),
(465, 'ORACLE-Database and Java has been Updated. ', 'certifications', 'success', '2015-07-10 06:57:50'),
(466, 'College has been Approved. ', 'collages', 'success', '2015-07-11 01:24:28'),
(467, 'College has been Approved. ', 'collages', 'success', '2015-07-11 01:24:45'),
(468, 'registration has been deleted. ', 'registrations', 'success', '2015-07-13 00:19:42'),
(469, 'Zxcvbnm has been Created. ', 'corporate', 'success', '2015-07-13 06:32:58'),
(470, 'Skfdxgkhxkfsk has been Created. ', 'courses', 'success', '2015-07-13 06:41:15'),
(471, 'courses has been deleted. ', 'courses', 'success', '2015-07-13 06:41:53'),
(472, 'company has been deleted. ', 'category', 'success', '2015-07-13 06:42:08'),
(473, 'ISB has been updated. ', 'partners', 'success', '2015-07-13 06:44:36'),
(474, 'ISB has been updated. ', 'partners', 'success', '2015-07-13 06:48:00'),
(475, 'Rakesh has been added. ', 'Staff', 'success', '2015-07-13 09:21:18'),
(476, ' has been deleted. ', 'Staff', 'success', '2015-07-13 09:22:51'),
(477, 'RAKESH has been added. ', 'partners', 'success', '2015-07-13 09:42:03'),
(478, 'DIETY has been Updated. ', 'testimonials', 'success', '2015-07-14 02:01:45'),
(479, 'Karuna A has been Updated. ', 'testimonials', 'success', '2015-07-14 02:02:00'),
(480, 'Demo has been Created. ', 'gallery', 'success', '2015-07-14 02:18:44'),
(481, 'gallery has been deleted. ', 'gallery', 'success', '2015-07-14 02:21:31'),
(482, 'gallery has been deleted. ', 'gallery', 'success', '2015-07-14 02:41:40'),
(483, 'gallery has been deleted. ', 'gallery', 'success', '2015-07-14 02:41:43'),
(484, 'gallery has been deleted. ', 'gallery', 'success', '2015-07-14 02:41:46'),
(485, 'gallery has been deleted. ', 'gallery', 'success', '2015-07-14 02:41:50'),
(486, 'gallery has been deleted. ', 'gallery', 'success', '2015-07-14 02:41:53'),
(487, 'Mohit Jain has been Updated. ', 'testimonials', 'success', '2015-07-14 06:23:29'),
(488, 'Karuna A has been Updated. ', 'testimonials', 'success', '2015-07-14 06:23:55'),
(489, 'Demo has been added. ', 'Staff', 'success', '2015-07-16 13:12:57'),
(490, 'Demo has been added. ', 'Staff', 'success', '2015-07-16 13:14:22'),
(491, 'Demo has been added. ', 'Staff', 'success', '2015-07-16 13:32:28'),
(492, 'Demo has been added. ', 'Staff', 'success', '2015-07-16 23:31:52'),
(493, ' has been added. ', 'Staff', 'success', '2015-07-17 01:54:24'),
(494, ' has been added. ', 'Staff', 'success', '2015-07-17 01:56:34'),
(495, ' has been added. ', 'Staff', 'success', '2015-07-17 05:29:35'),
(496, ' has been added. ', 'Staff', 'success', '2015-07-17 05:31:11'),
(497, ' has been added. ', 'Staff', 'success', '2015-07-17 05:40:48'),
(498, ' has been added. ', 'Staff', 'success', '2015-07-17 07:49:04'),
(499, ' has been added. ', 'Staff', 'success', '2015-07-17 08:06:40'),
(500, ' has been added. ', 'Staff', 'success', '2015-07-17 08:07:13'),
(501, ' has been added. ', 'Staff', 'success', '2015-07-17 08:48:12'),
(502, 'Outreach account has been updated. ', 'Profile', 'success', '2015-07-18 01:44:30'),
(503, ' has been added. ', 'Staff', 'success', '2015-07-18 01:47:06'),
(504, ' has been added. ', 'Staff', 'success', '2015-07-18 02:26:35'),
(505, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 02:36:16'),
(506, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 02:36:23'),
(507, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 02:36:27'),
(508, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 02:36:34'),
(509, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 02:36:41'),
(510, ' has been added. ', 'Staff', 'success', '2015-07-18 02:44:51'),
(511, ' has been updated. ', 'Staff', 'success', '2015-07-18 03:18:47'),
(512, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 04:15:45'),
(513, ' has been added. ', 'Staff', 'success', '2015-07-18 04:16:17'),
(514, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 21:12:38'),
(515, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 21:12:48'),
(516, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 21:12:57'),
(517, ' has been added. ', 'Staff', 'success', '2015-07-18 21:39:43'),
(518, ' has been added. ', 'Staff', 'success', '2015-07-18 21:44:22'),
(519, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 21:45:03'),
(520, ' has been updated. ', 'Staff', 'success', '2015-07-18 21:49:07'),
(521, ' has been updated. ', 'Staff', 'success', '2015-07-18 21:50:40'),
(522, ' has been deleted. ', 'Coordinator', 'success', '2015-07-18 21:50:50'),
(523, ' has been added. ', 'Staff', 'success', '2015-07-18 21:52:38'),
(524, ' has been added. ', 'Staff', 'success', '2015-07-19 00:05:09'),
(525, 'Contact has been deleted. ', 'category', 'success', '2015-07-20 00:55:47'),
(526, ' has been added. ', 'Staff', 'success', '2015-07-20 05:36:43'),
(527, ' has been added. ', 'Staff', 'success', '2015-07-20 18:03:55'),
(528, 'Outreach account has been updated. ', 'Profile', 'success', '2015-07-20 18:09:34'),
(529, 'Outreach account has been updated. ', 'Profile', 'success', '2015-07-20 18:10:00'),
(530, ' has been added. ', 'Staff', 'success', '2015-07-20 22:52:35'),
(531, ' has been added. ', 'Staff', 'success', '2015-07-20 23:10:15'),
(532, ' has been added. ', 'Staff', 'success', '2015-07-21 00:14:47'),
(533, 'Contact has been deleted. ', 'category', 'success', '2015-07-23 08:43:27'),
(534, 'Outreach account has been updated. ', 'Profile', 'success', '2015-07-23 08:44:08'),
(535, ' has been deleted. ', 'Coordinator', 'success', '2015-07-23 23:02:31'),
(536, ' has been deleted. ', 'Coordinator', 'success', '2015-07-23 23:02:37'),
(537, ' has been deleted. ', 'Coordinator', 'success', '2015-07-23 23:02:43'),
(538, ' has been deleted. ', 'Coordinator', 'success', '2015-07-23 23:02:48'),
(539, ' has been updated. ', 'Staff', 'success', '2015-07-23 23:03:39'),
(540, ' has been added. ', 'Staff', 'success', '2015-07-27 00:40:13'),
(541, ' has been added. ', 'Staff', 'success', '2015-08-19 04:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `va_users`
--

CREATE TABLE IF NOT EXISTS `va_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `center` varchar(222) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `outreach_id` int(11) DEFAULT NULL,
  `workshop` varchar(333) DEFAULT NULL,
  `participants` varchar(22) NOT NULL,
  `experiments` varchar(222) DEFAULT NULL,
  `profile_image` varchar(500) DEFAULT NULL,
  `createworkshop` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_loggedin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `va_users`
--

INSERT INTO `va_users` (`id`, `name`, `email`, `mobile_number`, `password`, `user_type`, `center`, `status`, `outreach_id`, `workshop`, `participants`, `experiments`, `profile_image`, `createworkshop`, `created_on`, `last_loggedin`) VALUES
(63, 'karunakar', 'karunakar.reddy@possibilliontech.com', '7416542049', 'c33367701511b4f6020ec61ded352059', '1', NULL, 1, 0, NULL, '', NULL, 'outreach2.jpg', NULL, '2015-07-19 04:52:38', '2015-08-20 00:25:23'),
(82, 'Manjula', 'manjulasetty@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, 1, NULL, NULL, '', NULL, '09.jpg', NULL, '2015-07-27 07:40:13', '2015-08-10 11:22:04'),
(83, 'manjula possibillion', 'manjula.gangisetty@possibilliontech.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2', 'Possibillion', 1, 82, '20', '20', '20', '20150629021251 (4).jpg', 1, '2015-07-27 07:43:14', '2015-08-07 12:25:32'),
(87, 'Geeta Bose', 'geetabose@gmail.com', NULL, 'aa23dd48fa0e118c2abbac4fb459445c', '2', 'IIIT-Hyd', 1, 82, '50', '2500', '25000', NULL, 0, '2015-07-28 08:14:47', NULL),
(73, 'Susmita', 'susmita.chatterjee@possibilliontech.com', NULL, 'a7b5aef16bfff466afe93f124eb19af0', '1', NULL, 1, 0, NULL, '', NULL, NULL, NULL, '2015-07-20 12:36:43', NULL),
(84, 'karunakar', 'karunakar.2093@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2', 'hyderabad', 1, 63, '25', '250', '11', '531549_252669044836256_236359487_n.jpg', NULL, '2015-07-27 14:59:27', '2015-08-20 07:05:19'),
(76, 'manjula', 'manjulasetty@gmail.com', NULL, '9270d2b541d8757adfd4229e84027666', '1', NULL, 3, 0, NULL, '', NULL, '', NULL, '2015-07-21 05:52:34', '2015-07-21 04:30:17'),
(86, 'karunakar', 'karana4567@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2', 'hyderabad', 1, 63, '25', '250', '11', 'outreach2.jpg', NULL, '2015-07-27 15:39:29', '2015-07-27 14:12:00'),
(78, 'geeta', 'geeta@vlabs.ac.in', NULL, 'dfa24abfb7d21f3502dec8d9d3036264', '1', NULL, 1, 0, NULL, '', NULL, 'Chrysanthemum.jpg', NULL, '2015-07-21 07:14:47', '2015-07-21 05:48:52'),
(79, 'sowjany', 'soujanya@vlabs.ac.in', NULL, '51577174c468611cb09672b287977e3b', '2', 'gnit', 1, 0, '2', '10', '45', NULL, NULL, '2015-07-21 07:20:40', NULL),
(88, 'karunakar', 'karana456@gmail.com', NULL, 'bb1d69d615e3d205601ea79a24437db7', '2', 'hyderabad', 1, 63, '25', '250', '11', 'img.jpg', NULL, '2015-07-28 15:03:48', '2015-08-19 04:54:58'),
(89, 'Ramesh Rao', 'ramesh.rao@wittwarangal.com', NULL, '0c89a33749475e75b4cf6b3a92dcca55', '2', 'Warangal Institute of Information Technology, Warangal (WITT, Warangal))', 1, 82, '6', '1200', '3600', NULL, 0, '2015-07-29 05:41:01', NULL),
(90, 'srikanth', 'srikanth.maggidi@possibilliontech.com', NULL, '04c6b2b6ab5c40aaa134ac6033b31e1e', '2', 'hyderabad', 1, 82, '15', '250', '25', NULL, NULL, '2015-08-05 06:56:30', NULL),
(91, 'testone', 'harathi.basam@possibilliontech.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, 1, NULL, NULL, '', NULL, NULL, NULL, '2015-08-19 08:35:31', NULL),
(92, 'test-coordinator', 'test$test@gmail.com', NULL, 'bc382b3877548b9a4d934e795c895b47', '2', 'test', 1, 63, '2', '3', '4', NULL, NULL, '2015-08-19 16:10:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `va_user_details`
--

CREATE TABLE IF NOT EXISTS `va_user_details` (
  `userdetails_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`userdetails_id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='user details of volyty users' AUTO_INCREMENT=42 ;

--
-- Dumping data for table `va_user_details`
--

INSERT INTO `va_user_details` (`userdetails_id`, `user_id`, `first_name`, `last_name`, `birthday`, `gender`, `address`, `country_id`, `state_id`, `city_id`, `country_code`, `mobile`, `image`) VALUES
(1, 1, 'pos', 'testing', NULL, '', '', 0, 0, 0, '', '', ''),
(2, 53, NULL, 'Manjula', NULL, '', '', 0, 0, 0, '', '', ''),
(3, 54, NULL, 'Manjula', NULL, '', '', 0, 0, 0, '', '', ''),
(4, 55, NULL, 'Manjula', NULL, '', '', 0, 0, 0, '', '', ''),
(5, 56, NULL, 'dssadsf', NULL, '', '', 0, 0, 0, '', '', ''),
(6, 57, NULL, 'karunakarreddy', NULL, '', '', 0, 0, 0, '', '', ''),
(7, 58, NULL, 'karunakarreddy', NULL, '', '', 0, 0, 0, '', '', ''),
(8, 59, NULL, 'karunakarreddy', NULL, '', '', 0, 0, 0, '', '', ''),
(9, 60, NULL, 'karunakarreddy', NULL, '', '', 0, 0, 0, '', '', ''),
(10, 61, NULL, 'reddy', NULL, '', '', 0, 0, 0, '', '', ''),
(11, 62, NULL, 'reddy', NULL, '', '', 0, 0, 0, '', '', ''),
(12, 63, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(13, 64, NULL, NULL, NULL, '', '', 0, 0, 0, '', '', ''),
(14, 65, NULL, NULL, NULL, '', '', 0, 0, 0, '', '', ''),
(15, 66, NULL, NULL, NULL, '', '', 0, 0, 0, '', '', ''),
(16, 67, NULL, NULL, NULL, '', '', 0, 0, 0, '', '', ''),
(17, 68, NULL, 'ggg', NULL, '', '', 0, 0, 0, '', '', ''),
(18, 69, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(19, 70, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(20, 71, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(21, 72, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(22, 73, NULL, 'Susmita', NULL, '', '', 0, 0, 0, '', '', ''),
(23, 74, NULL, 'Manjula', NULL, '', '', 0, 0, 0, '', '', ''),
(24, 75, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(25, 76, NULL, 'manjula', NULL, '', '', 0, 0, 0, '', '', ''),
(26, 77, NULL, 'tirupati rao', NULL, '', '', 0, 0, 0, '', '', ''),
(27, 78, NULL, 'geeta', NULL, '', '', 0, 0, 0, '', '', ''),
(28, 79, NULL, 'sowjany', NULL, '', '', 0, 0, 0, '', '', ''),
(29, 80, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(30, 81, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(31, 82, NULL, 'Manjula', NULL, '', '', 0, 0, 0, '', '', ''),
(32, 83, NULL, 'manjula possibillion', NULL, '', '', 0, 0, 0, '', '', ''),
(33, 84, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(34, 85, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(35, 86, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(36, 87, NULL, 'Geeta Bose', NULL, '', '', 0, 0, 0, '', '', ''),
(37, 88, NULL, 'karunakar', NULL, '', '', 0, 0, 0, '', '', ''),
(38, 89, NULL, 'Ramesh Rao', NULL, '', '', 0, 0, 0, '', '', ''),
(39, 90, NULL, 'srikanth', NULL, '', '', 0, 0, 0, '', '', ''),
(40, 91, NULL, 'testone', NULL, '', '', 0, 0, 0, '', '', ''),
(41, 92, NULL, 'test-coordinator', NULL, '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `workshop_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `participate_institute` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `number_of_participants` int(11) NOT NULL,
  `no_of_sessions` varchar(250) NOT NULL,
  `durationofsessions` varchar(250) NOT NULL,
  `subject_of_session` varchar(250) NOT NULL,
  `labs_plan` varchar(255) NOT NULL,
  `other_details` longtext NOT NULL,
  `workshop_status` tinyint(4) NOT NULL DEFAULT '1',
  `uid` int(11) NOT NULL,
  `outreach_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `latitude` varchar(222) DEFAULT NULL,
  `longitude` varchar(222) DEFAULT NULL,
  `address` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`workshop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`workshop_id`, `name`, `location`, `participate_institute`, `date`, `number_of_participants`, `no_of_sessions`, `durationofsessions`, `subject_of_session`, `labs_plan`, `other_details`, `workshop_status`, `uid`, `outreach_id`, `report_id`, `latitude`, `longitude`, `address`, `created_on`, `updated_on`) VALUES
(20, 'Ramesh Reddy', 'iiit pune', 'Jyothishmathi Institute of Technological Science,Sri Indu College of Engineering & Technology-An Autonomous Institution under UGC, NBA Accredited, NAAC\n', '2015-08-06 14:00:37', 250, '25', '1', '0', 'may be', 'TEST', 1, 83, 82, 38, '18.5840728', '73.73721269999999', ', P-14, Hinjewadi Rajiv Gandhi Infotech Park, Phase-1, Hinjawadi, Pune, Maharashtra 411057', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Ramesh Reddy', 'GNIT Warangal', 'Jyothishmathi Institute of Technological Science,Sri Indu College of Engineering & Technology-An Autonomous Institution under UGC, NBA Accredited, NAAC\n', '2015-08-06 23:18:28', 250, '15', '1', '0', 'may be', 'test', 1, 83, 82, 39, '17.9884017', '79.53010029999996', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Manjula', 'iit kanpur', 'Jyothishmathi Institute of Technological Science,Sri Indu College of Engineering & Technology-An Autonomous Institution under UGC, NBA Accredited, NAAC\n', '2015-08-07 04:39:36', 250, '25', '1', '0', 'may be', 'TEST', 2, 83, 82, 37, '26.5123388', '80.23289999999997', ',Address:\nIndian Institute of Technology\nKalyanpur\nKanpur-208016\nINDIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Manjula ', 'iit kanpur', 'Jyothishmathi Institute of Technological Science,Sri Indu College of Engineering & Technology-An Autonomous Institution under UGC, NBA Accredited, NAAC\n', '2015-08-06 14:01:07', 250, '15', '1', '0', 'may be', 'no', 2, 83, 82, 36, '26.5123388', '80.23289999999997', 'Address:\nIndian Institute of Technology\nKalyanpur\nKanpur-208016\nINDIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'test', 'iiit hyderabad, ', 'Jyothishmathi Institute of Technological Science,Sri Indu College of Engineering & Technology-An Autonomous Institution under UGC, NBA Accredited, NAAC\n', '2015-08-06 14:01:13', 250, '25', '2', '0', 'asdf', 'asdf', 1, 88, 63, 0, '17.4968554', '78.3591609', 'International Institute of Information Technology \n                     Gachibowli, Hyderabad 500 032 \n                     Telangana, INDIA\n                     Phone : +91-40-6653 1000 \n                     Fax : +91-40-6653 1413', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Ramesh Reddy', 'jntu hyderabad', 'Jyothishmathi Institute of Technological Science,Sri Indu College of Engineering & Technology-An Autonomous Institution under UGC, NBA Accredited, NAAC', '2015-11-21 23:30:00', 250, '25', '1', '1', 'may be', 'DEMO', 1, 83, 82, 0, '17.496402', '78.39412990000005', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'demo', 'Hyderabad, Andhra Pradesh', 'srinindu', '2015-08-17 01:03:06', 120, '12', '0', '0', 'yes', 'demo', 2, 84, 63, 42, '15.1283849', '79.17661139999996', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'karunakar reddy', 'IIIT Medak', 'Govt Collage Medak ', '2015-08-19 14:05:27', 4, '5412m', '1:20 h', 'Maths', 'Yes', 'DEMo', 2, 84, 63, 43, '17.4447918', '78.34830979999992', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'karunakar reddy', 'IIIT Hyderabad', 'Sri Indu', '2015-08-18 22:30:00', 300, '150', '150', 'Maths', 'Yes', 'DEMO', 1, 84, 63, 0, '17.4447918', '78.34830979999992', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_documents`
--

CREATE TABLE IF NOT EXISTS `workshop_documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(255) NOT NULL,
  `document_path` longtext,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`document_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `workshop_documents`
--

INSERT INTO `workshop_documents` (`document_id`, `document_name`, `document_path`, `created_on`, `status`, `updated_on`) VALUES
(1, 'Planning a workshop', '1437746606-66.docx', '2015-07-29 03:25:45', 1, '0000-00-00 00:00:00'),
(2, 'Conducting a workshop', '1438264433-92.doc', '2015-07-30 08:23:53', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_metirial_documents`
--

CREATE TABLE IF NOT EXISTS `workshop_metirial_documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(255) NOT NULL,
  `document_path` longtext,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`document_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `workshop_metirial_documents`
--

INSERT INTO `workshop_metirial_documents` (`document_id`, `document_name`, `document_path`, `created_on`, `status`, `updated_on`) VALUES
(1, 'doc123', '1437746606-66.docx', '2015-07-24 15:46:49', 3, '0000-00-00 00:00:00'),
(2, 'Attendance sheet', '1437747400-13.docx', '2015-07-29 03:28:22', 1, '0000-00-00 00:00:00'),
(3, 'Feedback form', '1438160401-33.docx', '2015-07-29 03:30:01', 1, '0000-00-00 00:00:00'),
(4, 'Flyers', '1438160417-43.docx', '2015-07-29 03:30:17', 1, '0000-00-00 00:00:00'),
(5, 'Banners', '1438160432-63.docx', '2015-07-29 03:30:32', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_report`
--

CREATE TABLE IF NOT EXISTS `workshop_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `workshop_id` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `participate_attend` int(11) DEFAULT NULL,
  `participate_experiment` int(11) DEFAULT NULL,
  `upload_attend_sheet` longtext,
  `upload_experiment_sheet` longtext,
  `college_report` longtext,
  `workshop_photos` longtext,
  `report_status` tinyint(4) NOT NULL DEFAULT '0',
  `letter_head_status` tinyint(4) NOT NULL DEFAULT '0',
  `sealed_stamp_status` tinyint(4) NOT NULL DEFAULT '0',
  `pricipal_sign_status` tinyint(4) NOT NULL DEFAULT '0',
  `attend_status` tinyint(4) NOT NULL DEFAULT '0',
  `college_status` tinyint(4) NOT NULL DEFAULT '0',
  `workshop_status` tinyint(4) NOT NULL DEFAULT '0',
  `comments_positive` text,
  `comments_negative` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `workshop_report`
--

INSERT INTO `workshop_report` (`report_id`, `workshop_id`, `uid`, `participate_attend`, `participate_experiment`, `upload_attend_sheet`, `upload_experiment_sheet`, `college_report`, `workshop_photos`, `report_status`, `letter_head_status`, `sealed_stamp_status`, `pricipal_sign_status`, `attend_status`, `college_status`, `workshop_status`, `comments_positive`, `comments_negative`, `created_on`, `updated_on`, `status`) VALUES
(22, 7, 0, 250, 250, '531549_252669044836256_236359487_n.jpg', '', '531549_252669044836256_236359487_n.jpg', '531549_252669044836256_236359487_n.jpg', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 08:13:01', '0000-00-00 00:00:00', NULL),
(21, 6, 0, 23, 23, 'Hydrangeas.jpg', '', 'Lighthouse.jpg', 'Chrysanthemum.jpg', 0, 0, 0, 0, 0, 0, 0, '23', '23', '2015-07-27 07:48:16', '0000-00-00 00:00:00', NULL),
(20, 6, 0, 12, 12, 'Jellyfish.jpg', '', 'Hydrangeas.jpg', 'Lighthouse.jpg', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 07:46:44', '0000-00-00 00:00:00', NULL),
(19, 4, 0, 2344, 2342, '531549_252669044836256_236359487_n.jpg', '', '531549_252669044836256_236359487_n.jpg', '531549_252669044836256_236359487_n.jpg', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 07:42:50', '0000-00-00 00:00:00', NULL),
(18, 5, 0, 2344, 2342, '531549_252669044836256_236359487_n.jpg', '', '531549_252669044836256_236359487_n.jpg', '531549_252669044836256_236359487_n.jpg', 1, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 06:50:40', '0000-00-00 00:00:00', NULL),
(23, 11, 0, 250, 2342, '4.png', '', '8.jpg', '7.jpg', 2, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 10:28:43', '0000-00-00 00:00:00', NULL),
(24, 12, 0, 2344, 2342, '6.jpg', '', '6.jpg', '6.jpg', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 09:16:32', '0000-00-00 00:00:00', NULL),
(25, 14, 0, 23, 123, '404.png', '', '404.png', '404.png', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-27 09:26:46', '0000-00-00 00:00:00', NULL),
(26, 7, 0, 12, 12334, 'Desert - Copy.jpg', '', 'Jellyfish.jpg', 'Koala.jpg', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-30 01:10:07', '0000-00-00 00:00:00', 1),
(31, 8, 84, 12123, 12376555, 'Desert - Copy.jpg', 'Desert - Copy.jpg', 'Desert - Copy.jpg', 'Desert - Copy.jpg', 0, 0, 0, 0, 0, 0, 0, '127654545', '1376544', '2015-07-30 05:31:16', '0000-00-00 00:00:00', 0),
(30, 0, 84, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '0', '0', '2015-07-30 04:49:21', '0000-00-00 00:00:00', NULL),
(35, 9, 84, 24, 23445, 'Chrysanthemum.jpg', '', 'Chrysanthemum.jpg', 'Chrysanthemum - Copy.jpg', 0, 0, 0, 0, 0, 0, 0, 'gfhfg', 'dfvgbhfhgf', '2015-07-30 05:40:48', '0000-00-00 00:00:00', 0),
(36, 17, 83, 250, 14, '4.png', '4.png', '404.png', '7.jpg', 0, 0, 0, 0, 0, 0, 0, 'demo', 'demo', '2015-08-07 06:15:33', '0000-00-00 00:00:00', 1),
(37, 18, 83, 250, 14, '6.jpg', 'Chrysanthemum.jpg', 'Chrysanthemum.jpg', 'Chrysanthemum - Copy.jpg', 0, 0, 0, 0, 0, 0, 0, '', '', '2015-08-07 06:12:25', '0000-00-00 00:00:00', 1),
(38, 20, 83, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', '2015-08-06 09:09:19', '0000-00-00 00:00:00', 1),
(39, 19, 83, 0, 0, '1437747400-13.docx', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', '2015-08-06 23:18:28', '0000-00-00 00:00:00', 1),
(40, 19, 83, 0, 0, '1437747400-13.docx', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', '2015-08-06 23:18:29', '0000-00-00 00:00:00', 0),
(41, 21, 83, 0, 0, '1437747400-13.docx', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', '2015-08-06 23:33:53', '0000-00-00 00:00:00', 0),
(42, 22, 84, 12, 23, 'Structure of the IGNOU-MBA program.pdf', NULL, 'The effect of simulation games.pdf', 'The effect of simulation games.pdf', 0, 0, 0, 0, 0, 0, 0, 'yes', 'no', '2015-08-17 01:01:56', '0000-00-00 00:00:00', 1),
(43, 23, 84, 25, 15, 'schema.pdf', NULL, 'schema.pdf', 'schema.pdf', 0, 0, 0, 0, 0, 0, 0, 'DEMO Positive', 'DEMO Negative', '2015-08-19 02:12:09', '0000-00-00 00:00:00', 1),
(44, 24, 84, 12, 12, 'schema.pdf', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '', '', '2015-08-19 09:43:16', '0000-00-00 00:00:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
