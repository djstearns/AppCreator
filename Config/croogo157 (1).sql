-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2014 at 01:15 PM
-- Server version: 5.6.14
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `croogo157`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=286 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, '', NULL, 'controllers', 1, 564),
(2, 1, '', NULL, 'Acl', 2, 25),
(3, 2, '', NULL, 'AclActions', 3, 16),
(4, 3, '', NULL, 'admin_index', 4, 5),
(5, 3, '', NULL, 'admin_add', 6, 7),
(6, 3, '', NULL, 'admin_edit', 8, 9),
(7, 3, '', NULL, 'admin_delete', 10, 11),
(8, 3, '', NULL, 'admin_move', 12, 13),
(9, 3, '', NULL, 'admin_generate', 14, 15),
(10, 2, '', NULL, 'AclPermissions', 17, 24),
(11, 10, '', NULL, 'admin_index', 18, 19),
(12, 10, '', NULL, 'admin_toggle', 20, 21),
(13, 10, '', NULL, 'admin_upgrade', 22, 23),
(14, 1, '', NULL, 'Blocks', 26, 55),
(15, 14, '', NULL, 'Blocks', 27, 44),
(16, 15, '', NULL, 'admin_toggle', 28, 29),
(17, 15, '', NULL, 'admin_index', 30, 31),
(18, 15, '', NULL, 'admin_add', 32, 33),
(19, 15, '', NULL, 'admin_edit', 34, 35),
(20, 15, '', NULL, 'admin_delete', 36, 37),
(21, 15, '', NULL, 'admin_moveup', 38, 39),
(22, 15, '', NULL, 'admin_movedown', 40, 41),
(23, 15, '', NULL, 'admin_process', 42, 43),
(24, 14, '', NULL, 'Regions', 45, 54),
(25, 24, '', NULL, 'admin_index', 46, 47),
(26, 24, '', NULL, 'admin_add', 48, 49),
(27, 24, '', NULL, 'admin_edit', 50, 51),
(28, 24, '', NULL, 'admin_delete', 52, 53),
(29, 1, '', NULL, 'Comments', 56, 73),
(30, 29, '', NULL, 'Comments', 57, 72),
(31, 30, '', NULL, 'admin_index', 58, 59),
(32, 30, '', NULL, 'admin_edit', 60, 61),
(33, 30, '', NULL, 'admin_delete', 62, 63),
(34, 30, '', NULL, 'admin_process', 64, 65),
(35, 30, '', NULL, 'index', 66, 67),
(36, 30, '', NULL, 'add', 68, 69),
(37, 30, '', NULL, 'delete', 70, 71),
(38, 1, '', NULL, 'Contacts', 74, 97),
(39, 38, '', NULL, 'Contacts', 75, 86),
(40, 39, '', NULL, 'admin_index', 76, 77),
(41, 39, '', NULL, 'admin_add', 78, 79),
(42, 39, '', NULL, 'admin_edit', 80, 81),
(43, 39, '', NULL, 'admin_delete', 82, 83),
(44, 39, '', NULL, 'view', 84, 85),
(45, 38, '', NULL, 'Messages', 87, 96),
(46, 45, '', NULL, 'admin_index', 88, 89),
(47, 45, '', NULL, 'admin_edit', 90, 91),
(48, 45, '', NULL, 'admin_delete', 92, 93),
(49, 45, '', NULL, 'admin_process', 94, 95),
(50, 1, '', NULL, 'Croogo', 98, 99),
(51, 1, '', NULL, 'Extensions', 100, 143),
(52, 51, '', NULL, 'ExtensionsLocales', 101, 112),
(53, 52, '', NULL, 'admin_index', 102, 103),
(54, 52, '', NULL, 'admin_activate', 104, 105),
(55, 52, '', NULL, 'admin_add', 106, 107),
(56, 52, '', NULL, 'admin_edit', 108, 109),
(57, 52, '', NULL, 'admin_delete', 110, 111),
(58, 51, '', NULL, 'ExtensionsPlugins', 113, 128),
(59, 58, '', NULL, 'admin_index', 114, 115),
(60, 58, '', NULL, 'admin_add', 116, 117),
(61, 58, '', NULL, 'admin_delete', 118, 119),
(62, 58, '', NULL, 'admin_toggle', 120, 121),
(63, 58, '', NULL, 'admin_migrate', 122, 123),
(64, 51, '', NULL, 'ExtensionsThemes', 129, 142),
(65, 64, '', NULL, 'admin_index', 130, 131),
(66, 64, '', NULL, 'admin_activate', 132, 133),
(67, 64, '', NULL, 'admin_add', 134, 135),
(68, 64, '', NULL, 'admin_editor', 136, 137),
(69, 64, '', NULL, 'admin_save', 138, 139),
(70, 64, '', NULL, 'admin_delete', 140, 141),
(71, 1, '', NULL, 'FileManager', 144, 179),
(72, 71, '', NULL, 'Attachments', 145, 156),
(73, 72, '', NULL, 'admin_index', 146, 147),
(74, 72, '', NULL, 'admin_add', 148, 149),
(75, 72, '', NULL, 'admin_edit', 150, 151),
(76, 72, '', NULL, 'admin_delete', 152, 153),
(77, 72, '', NULL, 'admin_browse', 154, 155),
(78, 71, '', NULL, 'FileManager', 157, 178),
(79, 78, '', NULL, 'admin_index', 158, 159),
(80, 78, '', NULL, 'admin_browse', 160, 161),
(81, 78, '', NULL, 'admin_editfile', 162, 163),
(82, 78, '', NULL, 'admin_upload', 164, 165),
(83, 78, '', NULL, 'admin_delete_file', 166, 167),
(84, 78, '', NULL, 'admin_delete_directory', 168, 169),
(85, 78, '', NULL, 'admin_rename', 170, 171),
(86, 78, '', NULL, 'admin_create_directory', 172, 173),
(87, 78, '', NULL, 'admin_create_file', 174, 175),
(88, 78, '', NULL, 'admin_chmod', 176, 177),
(89, 1, '', NULL, 'Install', 180, 193),
(90, 89, '', NULL, 'Install', 181, 192),
(91, 90, '', NULL, 'index', 182, 183),
(92, 90, '', NULL, 'database', 184, 185),
(93, 90, '', NULL, 'data', 186, 187),
(94, 90, '', NULL, 'adminuser', 188, 189),
(95, 90, '', NULL, 'finish', 190, 191),
(96, 1, '', NULL, 'Menus', 194, 223),
(97, 96, '', NULL, 'Links', 195, 212),
(98, 97, '', NULL, 'admin_toggle', 196, 197),
(99, 97, '', NULL, 'admin_index', 198, 199),
(100, 97, '', NULL, 'admin_add', 200, 201),
(101, 97, '', NULL, 'admin_edit', 202, 203),
(102, 97, '', NULL, 'admin_delete', 204, 205),
(103, 97, '', NULL, 'admin_moveup', 206, 207),
(104, 97, '', NULL, 'admin_movedown', 208, 209),
(105, 97, '', NULL, 'admin_process', 210, 211),
(106, 96, '', NULL, 'Menus', 213, 222),
(107, 106, '', NULL, 'admin_index', 214, 215),
(108, 106, '', NULL, 'admin_add', 216, 217),
(109, 106, '', NULL, 'admin_edit', 218, 219),
(110, 106, '', NULL, 'admin_delete', 220, 221),
(111, 1, '', NULL, 'Meta', 224, 225),
(112, 1, '', NULL, 'Migrations', 226, 227),
(113, 1, '', NULL, 'Nodes', 228, 261),
(114, 113, '', NULL, 'Nodes', 229, 260),
(115, 114, '', NULL, 'admin_toggle', 230, 231),
(116, 114, '', NULL, 'admin_index', 232, 233),
(117, 114, '', NULL, 'admin_create', 234, 235),
(118, 114, '', NULL, 'admin_add', 236, 237),
(119, 114, '', NULL, 'admin_edit', 238, 239),
(120, 114, '', NULL, 'admin_update_paths', 240, 241),
(121, 114, '', NULL, 'admin_delete', 242, 243),
(122, 114, '', NULL, 'admin_delete_meta', 244, 245),
(123, 114, '', NULL, 'admin_add_meta', 246, 247),
(124, 114, '', NULL, 'admin_process', 248, 249),
(125, 114, '', NULL, 'index', 250, 251),
(126, 114, '', NULL, 'term', 252, 253),
(127, 114, '', NULL, 'promoted', 254, 255),
(128, 114, '', NULL, 'search', 256, 257),
(129, 114, '', NULL, 'view', 258, 259),
(130, 1, '', NULL, 'Search', 262, 263),
(131, 1, '', NULL, 'Settings', 264, 301),
(132, 131, '', NULL, 'Languages', 265, 280),
(133, 132, '', NULL, 'admin_index', 266, 267),
(134, 132, '', NULL, 'admin_add', 268, 269),
(135, 132, '', NULL, 'admin_edit', 270, 271),
(136, 132, '', NULL, 'admin_delete', 272, 273),
(137, 132, '', NULL, 'admin_moveup', 274, 275),
(138, 132, '', NULL, 'admin_movedown', 276, 277),
(139, 132, '', NULL, 'admin_select', 278, 279),
(140, 131, '', NULL, 'Settings', 281, 300),
(141, 140, '', NULL, 'admin_dashboard', 282, 283),
(142, 140, '', NULL, 'admin_index', 284, 285),
(143, 140, '', NULL, 'admin_view', 286, 287),
(144, 140, '', NULL, 'admin_add', 288, 289),
(145, 140, '', NULL, 'admin_edit', 290, 291),
(146, 140, '', NULL, 'admin_delete', 292, 293),
(147, 140, '', NULL, 'admin_prefix', 294, 295),
(148, 140, '', NULL, 'admin_moveup', 296, 297),
(149, 140, '', NULL, 'admin_movedown', 298, 299),
(150, 1, '', NULL, 'Taxonomy', 302, 341),
(151, 150, '', NULL, 'Terms', 303, 316),
(152, 151, '', NULL, 'admin_index', 304, 305),
(153, 151, '', NULL, 'admin_add', 306, 307),
(154, 151, '', NULL, 'admin_edit', 308, 309),
(155, 151, '', NULL, 'admin_delete', 310, 311),
(156, 151, '', NULL, 'admin_moveup', 312, 313),
(157, 151, '', NULL, 'admin_movedown', 314, 315),
(158, 150, '', NULL, 'Types', 317, 326),
(159, 158, '', NULL, 'admin_index', 318, 319),
(160, 158, '', NULL, 'admin_add', 320, 321),
(161, 158, '', NULL, 'admin_edit', 322, 323),
(162, 158, '', NULL, 'admin_delete', 324, 325),
(163, 150, '', NULL, 'Vocabularies', 327, 340),
(164, 163, '', NULL, 'admin_index', 328, 329),
(165, 163, '', NULL, 'admin_add', 330, 331),
(166, 163, '', NULL, 'admin_edit', 332, 333),
(167, 163, '', NULL, 'admin_delete', 334, 335),
(168, 163, '', NULL, 'admin_moveup', 336, 337),
(169, 163, '', NULL, 'admin_movedown', 338, 339),
(170, 1, '', NULL, 'Ckeditor', 342, 343),
(171, 1, '', NULL, 'Users', 344, 389),
(172, 171, '', NULL, 'Roles', 345, 354),
(173, 172, '', NULL, 'admin_index', 346, 347),
(174, 172, '', NULL, 'admin_add', 348, 349),
(175, 172, '', NULL, 'admin_edit', 350, 351),
(176, 172, '', NULL, 'admin_delete', 352, 353),
(177, 171, '', NULL, 'Users', 355, 388),
(178, 177, '', NULL, 'admin_index', 356, 357),
(179, 177, '', NULL, 'admin_add', 358, 359),
(180, 177, '', NULL, 'admin_edit', 360, 361),
(181, 177, '', NULL, 'admin_reset_password', 362, 363),
(182, 177, '', NULL, 'admin_delete', 364, 365),
(183, 177, '', NULL, 'admin_login', 366, 367),
(184, 177, '', NULL, 'admin_logout', 368, 369),
(185, 177, '', NULL, 'index', 370, 371),
(186, 177, '', NULL, 'add', 372, 373),
(187, 177, '', NULL, 'activate', 374, 375),
(188, 177, '', NULL, 'edit', 376, 377),
(189, 177, '', NULL, 'forgot', 378, 379),
(190, 177, '', NULL, 'reset', 380, 381),
(191, 177, '', NULL, 'login', 382, 383),
(192, 177, '', NULL, 'logout', 384, 385),
(193, 177, '', NULL, 'view', 386, 387),
(194, 58, NULL, NULL, 'admin_moveup', 124, 125),
(195, 58, NULL, NULL, 'admin_movedown', 126, 127),
(196, 1, NULL, NULL, 'Wysiwyg', 390, 391),
(197, 1, NULL, NULL, 'Project', 392, 563),
(201, 197, NULL, NULL, 'Projects', 393, 418),
(202, 201, NULL, NULL, 'index', 394, 395),
(203, 201, NULL, NULL, 'view', 396, 397),
(204, 201, NULL, NULL, 'add', 398, 399),
(205, 201, NULL, NULL, 'edit', 400, 401),
(206, 201, NULL, NULL, 'editindexsavefld', 402, 403),
(207, 201, NULL, NULL, 'admin_editindexsavefld', 404, 405),
(208, 201, NULL, NULL, 'delete', 406, 407),
(209, 201, NULL, NULL, 'admin_index', 408, 409),
(210, 201, NULL, NULL, 'admin_view', 410, 411),
(211, 201, NULL, NULL, 'admin_add', 412, 413),
(212, 201, NULL, NULL, 'admin_edit', 414, 415),
(213, 201, NULL, NULL, 'admin_delete', 416, 417),
(214, 197, NULL, NULL, 'Pobjectbehaviors', 419, 446),
(215, 214, NULL, NULL, 'indexOLD', 420, 421),
(216, 214, NULL, NULL, 'mobileindex', 422, 423),
(217, 214, NULL, NULL, 'mobileadd', 424, 425),
(218, 214, NULL, NULL, 'mobilesave', 426, 427),
(219, 214, NULL, NULL, 'mobiledelete', 428, 429),
(220, 214, NULL, NULL, 'editindexsavefld', 430, 431),
(221, 214, NULL, NULL, 'index', 432, 433),
(222, 214, NULL, NULL, 'savehabtmfld', 434, 435),
(223, 214, NULL, NULL, 'deleteall', 436, 437),
(224, 214, NULL, NULL, 'view', 438, 439),
(225, 214, NULL, NULL, 'add', 440, 441),
(226, 214, NULL, NULL, 'edit', 442, 443),
(227, 214, NULL, NULL, 'delete', 444, 445),
(228, 197, NULL, NULL, 'Pobjects', 447, 476),
(229, 228, NULL, NULL, 'indexOLD', 448, 449),
(230, 228, NULL, NULL, 'mobileindex', 450, 451),
(231, 228, NULL, NULL, 'multiadd', 452, 453),
(232, 228, NULL, NULL, 'mobileadd', 454, 455),
(233, 228, NULL, NULL, 'mobilesave', 456, 457),
(234, 228, NULL, NULL, 'mobiledelete', 458, 459),
(235, 228, NULL, NULL, 'editindexsavefld', 460, 461),
(236, 228, NULL, NULL, 'index', 462, 463),
(237, 228, NULL, NULL, 'savehabtmfld', 464, 465),
(238, 228, NULL, NULL, 'deleteall', 466, 467),
(239, 228, NULL, NULL, 'view', 468, 469),
(240, 228, NULL, NULL, 'add', 470, 471),
(241, 228, NULL, NULL, 'edit', 472, 473),
(242, 228, NULL, NULL, 'delete', 474, 475),
(243, 197, NULL, NULL, 'Fldbehaviors', 477, 504),
(244, 243, NULL, NULL, 'indexOLD', 478, 479),
(245, 243, NULL, NULL, 'mobileindex', 480, 481),
(246, 243, NULL, NULL, 'mobileadd', 482, 483),
(247, 243, NULL, NULL, 'mobilesave', 484, 485),
(248, 243, NULL, NULL, 'mobiledelete', 486, 487),
(249, 243, NULL, NULL, 'editindexsavefld', 488, 489),
(250, 243, NULL, NULL, 'index', 490, 491),
(251, 243, NULL, NULL, 'savehabtmfld', 492, 493),
(252, 243, NULL, NULL, 'deleteall', 494, 495),
(253, 243, NULL, NULL, 'view', 496, 497),
(254, 243, NULL, NULL, 'add', 498, 499),
(255, 243, NULL, NULL, 'edit', 500, 501),
(256, 243, NULL, NULL, 'delete', 502, 503),
(257, 197, NULL, NULL, 'Flds', 505, 534),
(258, 257, NULL, NULL, 'indexOLD', 506, 507),
(259, 257, NULL, NULL, 'multiadd', 508, 509),
(260, 257, NULL, NULL, 'mobileindex', 510, 511),
(261, 257, NULL, NULL, 'mobileadd', 512, 513),
(262, 257, NULL, NULL, 'mobilesave', 514, 515),
(263, 257, NULL, NULL, 'mobiledelete', 516, 517),
(264, 257, NULL, NULL, 'editindexsavefld', 518, 519),
(265, 257, NULL, NULL, 'index', 520, 521),
(266, 257, NULL, NULL, 'savehabtmfld', 522, 523),
(267, 257, NULL, NULL, 'deleteall', 524, 525),
(268, 257, NULL, NULL, 'view', 526, 527),
(269, 257, NULL, NULL, 'add', 528, 529),
(270, 257, NULL, NULL, 'edit', 530, 531),
(271, 257, NULL, NULL, 'delete', 532, 533),
(272, 197, NULL, NULL, 'Ftypes', 535, 562),
(273, 272, NULL, NULL, 'indexOLD', 536, 537),
(274, 272, NULL, NULL, 'mobileindex', 538, 539),
(275, 272, NULL, NULL, 'mobileadd', 540, 541),
(276, 272, NULL, NULL, 'mobilesave', 542, 543),
(277, 272, NULL, NULL, 'mobiledelete', 544, 545),
(278, 272, NULL, NULL, 'editindexsavefld', 546, 547),
(279, 272, NULL, NULL, 'index', 548, 549),
(280, 272, NULL, NULL, 'savehabtmfld', 550, 551),
(281, 272, NULL, NULL, 'deleteall', 552, 553),
(282, 272, NULL, NULL, 'view', 554, 555),
(283, 272, NULL, NULL, 'add', 556, 557),
(284, 272, NULL, NULL, 'edit', 558, 559),
(285, 272, NULL, NULL, 'delete', 560, 561);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, 2, 'Role', 1, 'Role-admin', 3, 6),
(2, 3, 'Role', 2, 'Role-registered', 2, 9),
(3, NULL, 'Role', 3, 'Role-public', 1, 10),
(4, 1, 'User', 1, 'admin1', 4, 5),
(5, 2, 'User', 2, 'test', 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 3, 35, '1', '1', '1', '1'),
(2, 3, 36, '1', '1', '1', '1'),
(3, 2, 37, '1', '1', '1', '1'),
(4, 3, 44, '1', '1', '1', '1'),
(5, 3, 125, '1', '1', '1', '1'),
(6, 3, 126, '1', '1', '1', '1'),
(7, 3, 127, '1', '1', '1', '1'),
(8, 3, 128, '1', '1', '1', '1'),
(9, 3, 129, '1', '1', '1', '1'),
(10, 2, 185, '1', '1', '1', '1'),
(11, 3, 186, '1', '1', '1', '1'),
(12, 3, 187, '1', '1', '1', '1'),
(13, 2, 188, '1', '1', '1', '1'),
(14, 3, 189, '1', '1', '1', '1'),
(15, 3, 190, '1', '1', '1', '1'),
(16, 3, 191, '1', '1', '1', '1'),
(17, 2, 192, '1', '1', '1', '1'),
(18, 2, 193, '1', '1', '1', '1'),
(19, 3, 183, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `region_id` int(20) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `show_title` tinyint(1) NOT NULL DEFAULT '1',
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `weight` int(11) DEFAULT NULL,
  `element` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visibility_roles` text COLLATE utf8_unicode_ci,
  `visibility_paths` text COLLATE utf8_unicode_ci,
  `visibility_php` text COLLATE utf8_unicode_ci,
  `params` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `block_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `region_id`, `title`, `alias`, `body`, `show_title`, `class`, `status`, `weight`, `element`, `visibility_roles`, `visibility_paths`, `visibility_php`, `params`, `updated`, `created`) VALUES
(3, 4, 'About', 'about', 'This is the content of your block. Can be modified in admin panel.', 1, '', 1, 2, '', '', '', '', '', '2009-12-20 03:07:39', '2009-07-26 17:13:14'),
(5, 4, 'Meta', 'meta', '[menu:meta]', 1, '', 1, 6, '', '', '', '', '', '2009-12-22 05:17:39', '2009-09-12 06:36:22'),
(6, 4, 'Blogroll', 'blogroll', '[menu:blogroll]', 1, '', 1, 4, '', '', '', '', '', '2009-12-20 03:07:33', '2009-09-12 23:33:27'),
(7, 4, 'Categories', 'categories', '[vocabulary:categories type="blog"]', 1, '', 1, 3, '', '', '', '', '', '2009-12-20 03:07:36', '2009-10-03 16:52:50'),
(8, 4, 'Search', 'search', '', 0, '', 1, 1, 'Nodes.search', '', '', '', '', '2009-12-20 03:07:39', '2009-12-20 03:07:27'),
(9, 4, 'Recent Posts', 'recent_posts', '[node:recent_posts conditions="Node.type:blog" order="Node.id DESC" limit="5"]', 1, '', 1, 5, '', '', '', '', '', '2010-04-08 21:09:31', '2009-12-22 05:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `node_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `notify` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'comment',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `node_id`, `user_id`, `name`, `email`, `website`, `ip`, `title`, `body`, `rating`, `status`, `notify`, `type`, `comment_type`, `lft`, `rght`, `updated`, `created`) VALUES
(1, NULL, 1, 0, 'Mr Croogo', 'email@example.com', 'http://www.croogo.org', '127.0.0.1', '', 'Hi, this is the first comment.', NULL, 1, 0, 'blog', 'comment', 1, 2, '2009-12-25 12:00:00', '2009-12-25 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `address2` text COLLATE utf8_unicode_ci,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message_status` tinyint(1) NOT NULL DEFAULT '1',
  `message_archive` tinyint(1) NOT NULL DEFAULT '1',
  `message_count` int(11) NOT NULL DEFAULT '0',
  `message_spam_protection` tinyint(1) NOT NULL DEFAULT '0',
  `message_captcha` tinyint(1) NOT NULL DEFAULT '0',
  `message_notify` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `alias`, `body`, `name`, `position`, `address`, `address2`, `state`, `country`, `postcode`, `phone`, `fax`, `email`, `message_status`, `message_archive`, `message_count`, `message_spam_protection`, `message_captcha`, `message_notify`, `status`, `updated`, `created`) VALUES
(1, 'Contact', 'contact', '', '', '', '', '', '', '', '', '', '', 'you@your-site.com', 1, 0, 0, 0, 0, 1, 1, '2009-10-07 22:07:49', '2009-09-16 01:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `fldbehaviors`
--

CREATE TABLE IF NOT EXISTS `fldbehaviors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fldbehaviors`
--

INSERT INTO `fldbehaviors` (`id`, `name`) VALUES
(1, 'Autocomplete');

-- --------------------------------------------------------

--
-- Table structure for table `flds`
--

CREATE TABLE IF NOT EXISTS `flds` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pobject_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ftype_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=83 ;

-- --------------------------------------------------------

--
-- Table structure for table `flds_fldbehaviors`
--

CREATE TABLE IF NOT EXISTS `flds_fldbehaviors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ftypes`
--

CREATE TABLE IF NOT EXISTS `ftypes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ftypes`
--

INSERT INTO `ftypes` (`id`, `name`, `extra`, `created`, `modified`) VALUES
(1, 'string', NULL, '2013-11-17 00:00:00', '2014-01-09 00:00:00'),
(2, 'boolean', NULL, '2013-11-17 00:00:00', '2014-01-09 00:00:00'),
(4, 'datetime', NULL, '2013-11-17 00:00:00', '2014-01-09 00:00:00'),
(5, 'integer', NULL, '2013-11-17 00:00:00', '2013-12-26 00:00:00'),
(6, 'text', NULL, '2014-01-09 00:00:00', '2014-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `native` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `native`, `alias`, `status`, `weight`, `updated`, `created`) VALUES
(1, 'English', 'English', 'eng', 1, 1, '2009-11-02 21:37:38', '2009-11-02 20:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `menu_id` int(20) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `visibility_roles` text COLLATE utf8_unicode_ci,
  `params` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `parent_id`, `menu_id`, `title`, `class`, `description`, `link`, `target`, `rel`, `status`, `lft`, `rght`, `visibility_roles`, `params`, `updated`, `created`) VALUES
(5, NULL, 4, 'About', 'about', '', 'plugin:nodes/controller:nodes/action:view/type:page/slug:about', '', '', 1, 3, 4, '', '', '2009-10-06 23:14:21', '2009-08-19 12:23:33'),
(6, NULL, 4, 'Contact', 'contact', '', 'plugin:contacts/controller:contacts/action:view/contact', '', '', 1, 5, 6, '', '', '2009-10-06 23:14:45', '2009-08-19 12:34:56'),
(7, NULL, 3, 'Home', 'home', '', 'plugin:nodes/controller:nodes/action:promoted', '', '', 1, 5, 6, '', '', '2009-10-06 21:17:06', '2009-09-06 21:32:54'),
(8, NULL, 3, 'About', 'about', '', 'plugin:nodes/controller:nodes/action:view/type:page/slug:about', '', '', 1, 7, 10, '', '', '2009-09-12 03:45:53', '2009-09-06 21:34:57'),
(9, 8, 3, 'Child link', 'child-link', '', '#', '', '', 1, 8, 9, '', '', '2014-05-14 13:11:42', '2009-09-12 03:52:23'),
(10, NULL, 5, 'Site Admin', 'site-admin', '', '/admin', '', '', 1, 1, 2, '', '', '2009-09-12 06:34:09', '2009-09-12 06:34:09'),
(11, NULL, 5, 'Log out', 'log-out', '', '/plugin:users/controller:users/action:logout', '', '', 1, 7, 8, '["1","2"]', '', '2009-09-12 06:35:22', '2009-09-12 06:34:41'),
(12, NULL, 6, 'Croogo', 'croogo', '', 'http://www.croogo.org', '', '', 1, 3, 4, '', '', '2009-09-12 23:31:59', '2009-09-12 23:31:59'),
(14, NULL, 6, 'CakePHP', 'cakephp', '', 'http://www.cakephp.org', '', '', 1, 1, 2, '', '', '2009-10-07 03:25:25', '2009-09-12 23:38:43'),
(15, NULL, 3, 'Contact', 'contact', '', '/plugin:contacts/controller:contacts/action:view/contact', '', '', 1, 11, 12, '', '', '2009-09-16 07:54:13', '2009-09-16 07:53:33'),
(16, NULL, 5, 'Entries (RSS)', 'entries-rss', '', '/promoted.rss', '', '', 1, 3, 4, '', '', '2009-10-27 17:46:22', '2009-10-27 17:46:22'),
(17, NULL, 5, 'Comments (RSS)', 'comments-rss', '', '/comments.rss', '', '', 1, 5, 6, '', '', '2009-10-27 17:46:54', '2009-10-27 17:46:54'),
(18, NULL, 3, 'Project', 'project', NULL, 'plugin:project/controller:project/action:index', NULL, NULL, 1, 13, 14, NULL, NULL, '2014-05-13 05:07:42', '2014-05-13 05:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `link_count` int(11) NOT NULL,
  `params` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `alias`, `class`, `description`, `status`, `weight`, `link_count`, `params`, `updated`, `created`) VALUES
(3, 'Main Menu', 'main', '', '', 1, NULL, 5, '', '2009-08-19 12:21:06', '2009-07-22 01:49:53'),
(4, 'Footer', 'footer', '', '', 1, NULL, 2, '', '2009-08-19 12:22:42', '2009-08-19 12:22:42'),
(5, 'Meta', 'meta', '', '', 1, NULL, 4, '', '2009-09-12 06:33:29', '2009-09-12 06:33:29'),
(6, 'Blogroll', 'blogroll', '', '', 1, NULL, 2, '', '2009-09-12 23:30:24', '2009-09-12 23:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `message_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE IF NOT EXISTS `meta` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Node',
  `foreign_key` int(20) DEFAULT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `model`, `foreign_key`, `key`, `value`, `weight`) VALUES
(1, 'Node', 1, 'meta_keywords', 'key1, key2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE IF NOT EXISTS `nodes` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `user_id` int(20) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `mime_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment_status` int(1) NOT NULL DEFAULT '1',
  `comment_count` int(11) DEFAULT '0',
  `promote` tinyint(1) NOT NULL DEFAULT '0',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms` text COLLATE utf8_unicode_ci,
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `visibility_roles` text COLLATE utf8_unicode_ci,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'node',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nodes`
--

INSERT INTO `nodes` (`id`, `parent_id`, `user_id`, `title`, `slug`, `body`, `excerpt`, `status`, `mime_type`, `comment_status`, `comment_count`, `promote`, `path`, `terms`, `sticky`, `lft`, `rght`, `visibility_roles`, `type`, `updated`, `created`) VALUES
(1, NULL, 1, 'Hello World', 'hello-world', '<p>Welcome to Croogo. This is your first post. You can edit or delete it from the admin panel.</p>', '', 1, '', 2, 1, 1, '/blog/hello-world', '{"1":"uncategorized"}', 0, 1, 2, '', 'blog', '2009-12-25 11:00:00', '2009-12-25 11:00:00'),
(2, NULL, 1, 'About', 'about', '<p>This is an example of a Croogo page, you could edit this to put information about yourself or your site.</p>', '', 1, '', 0, 0, 0, '/about', '', 0, 1, 2, '', 'page', '2009-12-25 22:00:00', '2009-12-25 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nodes_taxonomies`
--

CREATE TABLE IF NOT EXISTS `nodes_taxonomies` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `node_id` int(20) NOT NULL DEFAULT '0',
  `taxonomy_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nodes_taxonomies`
--

INSERT INTO `nodes_taxonomies` (`id`, `node_id`, `taxonomy_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pobjectbehaviors`
--

CREATE TABLE IF NOT EXISTS `pobjectbehaviors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pobjectbehaviors`
--

INSERT INTO `pobjectbehaviors` (`id`, `name`) VALUES
(2, 'Tree');

-- --------------------------------------------------------

--
-- Table structure for table `pobjects`
--

CREATE TABLE IF NOT EXISTS `pobjects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(50) NOT NULL,
  `tablename` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=60 ;

-- --------------------------------------------------------

--
-- Table structure for table `pobjects_pobjectbehaviors`
--

CREATE TABLE IF NOT EXISTS `pobjects_pobjectbehaviors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pobject_id` int(50) NOT NULL,
  `pobjectbehavior_id` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(50) NOT NULL,
  `host` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `user_id`, `host`) VALUES
(125, 'asdf', 'asdf', 2, 'asdf'),
(126, 'asdfasdf', 'asdfasdf', 2, 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `block_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `region_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `title`, `alias`, `description`, `block_count`) VALUES
(3, 'none', 'none', '', 0),
(4, 'right', 'right', '', 6),
(6, 'left', 'left', '', 0),
(7, 'header', 'header', '', 0),
(8, 'footer', 'footer', '', 0),
(9, 'region1', 'region1', '', 0),
(10, 'region2', 'region2', '', 0),
(11, 'region3', 'region3', '', 0),
(12, 'region4', 'region4', '', 0),
(13, 'region5', 'region5', '', 0),
(14, 'region6', 'region6', '', 0),
(15, 'region7', 'region7', '', 0),
(16, 'region8', 'region8', '', 0),
(17, 'region9', 'region9', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `alias`, `created`, `updated`) VALUES
(1, 'Admin', 'admin', '2009-04-05 00:10:34', '2009-04-05 00:10:34'),
(2, 'Registered', 'registered', '2009-04-05 00:10:50', '2009-04-06 05:20:38'),
(3, 'Public', 'public', '2009-04-05 00:12:38', '2009-04-07 01:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `granted_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pk_role_users` (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schema_migrations`
--

CREATE TABLE IF NOT EXISTS `schema_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `class`, `type`, `created`) VALUES
(1, 'InitMigrations', 'Migrations', '2014-05-13 02:07:25'),
(2, 'ConvertVersionToClassNames', 'Migrations', '2014-05-13 02:07:25'),
(3, 'IncreaseClassNameLength', 'Migrations', '2014-05-13 02:07:25'),
(4, 'FirstMigrationSettings', 'Settings', '2014-05-13 02:07:26'),
(5, 'FirstMigrationAcl', 'Acl', '2014-05-13 02:07:26'),
(6, 'FirstMigrationBlocks', 'Blocks', '2014-05-13 02:07:26'),
(7, 'FirstMigrationComments', 'Comments', '2014-05-13 02:07:27'),
(8, 'FirstMigrationContacts', 'Contacts', '2014-05-13 02:07:27'),
(9, 'FirstMigrationMenus', 'Menus', '2014-05-13 02:07:27'),
(10, 'FirstMigrationMeta', 'Meta', '2014-05-13 02:07:27'),
(11, 'FirstMigrationNodes', 'Nodes', '2014-05-13 02:07:28'),
(12, 'FirstMigrationTaxonomy', 'Taxonomy', '2014-05-13 02:07:28'),
(13, 'FirstMigrationUsers', 'Users', '2014-05-13 02:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `input_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `params` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `title`, `description`, `input_type`, `editable`, `weight`, `params`) VALUES
(6, 'Site.title', 'Croogo', '', '', '', 1, 1, ''),
(7, 'Site.tagline', 'A CakePHP powered Content Management System.', '', '', 'textarea', 1, 2, ''),
(8, 'Site.email', 'you@your-site.com', '', '', '', 1, 3, ''),
(9, 'Site.status', '1', '', '', 'checkbox', 1, 6, ''),
(12, 'Meta.robots', 'index, follow', '', '', '', 1, 6, ''),
(13, 'Meta.keywords', 'croogo, Croogo', '', '', 'textarea', 1, 7, ''),
(14, 'Meta.description', 'Croogo - A CakePHP powered Content Management System', '', '', 'textarea', 1, 8, ''),
(15, 'Meta.generator', 'Croogo - Content Management System', '', '', '', 0, 9, ''),
(16, 'Service.akismet_key', 'your-key', '', '', '', 1, 11, ''),
(17, 'Service.recaptcha_public_key', 'your-public-key', '', '', '', 1, 12, ''),
(18, 'Service.recaptcha_private_key', 'your-private-key', '', '', '', 1, 13, ''),
(19, 'Service.akismet_url', 'http://your-blog.com', '', '', '', 1, 10, ''),
(20, 'Site.theme', '', '', '', '', 0, 14, ''),
(21, 'Site.feed_url', '', '', '', '', 0, 15, ''),
(22, 'Reading.nodes_per_page', '5', '', '', '', 1, 16, ''),
(23, 'Writing.wysiwyg', '1', 'Enable WYSIWYG editor', '', 'checkbox', 1, 17, ''),
(24, 'Comment.level', '1', '', 'levels deep (threaded comments)', '', 1, 18, ''),
(25, 'Comment.feed_limit', '10', '', 'number of comments to show in feed', '', 1, 19, ''),
(26, 'Site.locale', 'eng', '', '', 'text', 1, 20, ''),
(27, 'Reading.date_time_format', 'D, M d Y H:i:s', '', '', '', 1, 21, ''),
(28, 'Comment.date_time_format', 'M d, Y', '', '', '', 1, 22, ''),
(29, 'Site.timezone', '0', '', 'zero (0) for GMT', '', 1, 4, ''),
(32, 'Hook.bootstraps', 'Settings,Comments,Contacts,Nodes,Meta,Menus,Users,Blocks,Taxonomy,FileManager,Wysiwyg,Ckeditor,Project', '', '', '', 0, 23, ''),
(33, 'Comment.email_notification', '1', 'Enable email notification', '', 'checkbox', 1, 24, ''),
(34, 'Access Control.multiRole', '0', 'Enable Multiple Roles', '', 'checkbox', 1, 25, ''),
(35, 'Access Control.rowLevel', '0', 'Row Level Access Control', '', 'checkbox', 1, 26, ''),
(36, 'Access Control.autoLoginDuration', '+1 week', '"Remember Me" Duration', 'Eg: +1 day, +1 week. Leave empty to disable.', 'text', 1, 27, ''),
(37, 'Access Control.models', '', 'Models with Row Level Acl', 'Select models to activate Row Level Access Control on', 'multiple', 1, 26, 'multiple=checkbox\noptions={"Nodes.Node": "Node", "Blocks.Block": "Block", "Menus.Menu": "Menu", "Menus.Link": "Link"}'),
(38, 'Croogo.installed', '1', '', '', '', 0, 28, ''),
(39, 'Croogo.version', '1.5.7', '', '', '', 0, 29, '');

-- --------------------------------------------------------

--
-- Table structure for table `taxonomies`
--

CREATE TABLE IF NOT EXISTS `taxonomies` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) DEFAULT NULL,
  `term_id` int(10) NOT NULL,
  `vocabulary_id` int(10) NOT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `taxonomies`
--

INSERT INTO `taxonomies` (`id`, `parent_id`, `term_id`, `vocabulary_id`, `lft`, `rght`) VALUES
(1, NULL, 1, 1, 1, 2),
(2, NULL, 2, 1, 3, 4),
(3, NULL, 3, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `slug`, `description`, `updated`, `created`) VALUES
(1, 'Uncategorized', 'uncategorized', '', '2009-07-22 03:38:43', '2009-07-22 03:34:56'),
(2, 'Announcements', 'announcements', '', '2010-05-16 23:57:06', '2009-07-22 03:45:37'),
(3, 'mytag', 'mytag', '', '2009-08-26 14:42:43', '2009-08-26 14:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `format_show_author` tinyint(1) NOT NULL DEFAULT '1',
  `format_show_date` tinyint(1) NOT NULL DEFAULT '1',
  `comment_status` int(1) NOT NULL DEFAULT '1',
  `comment_approve` tinyint(1) NOT NULL DEFAULT '1',
  `comment_spam_protection` tinyint(1) NOT NULL DEFAULT '0',
  `comment_captcha` tinyint(1) NOT NULL DEFAULT '0',
  `params` text COLLATE utf8_unicode_ci,
  `plugin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `title`, `alias`, `description`, `format_show_author`, `format_show_date`, `comment_status`, `comment_approve`, `comment_spam_protection`, `comment_captcha`, `params`, `plugin`, `updated`, `created`) VALUES
(1, 'Page', 'page', 'A page is a simple method for creating and displaying information that rarely changes, such as an "About us" section of a website. By default, a page entry does not allow visitor comments.', 0, 0, 0, 1, 0, 0, '', '', '2009-09-09 00:23:24', '2009-09-02 18:06:27'),
(2, 'Blog', 'blog', 'A blog entry is a single post to an online journal, or blog.', 1, 1, 2, 1, 0, 0, '', '', '2009-09-15 12:15:43', '2009-09-02 18:20:44'),
(4, 'Node', 'node', 'Default content type.', 1, 1, 2, 1, 0, 0, '', '', '2009-10-06 21:53:15', '2009-09-05 23:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `types_vocabularies`
--

CREATE TABLE IF NOT EXISTS `types_vocabularies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` int(10) NOT NULL,
  `vocabulary_id` int(10) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `types_vocabularies`
--

INSERT INTO `types_vocabularies` (`id`, `type_id`, `vocabulary_id`, `weight`) VALUES
(24, 4, 1, NULL),
(25, 4, 2, NULL),
(30, 2, 1, NULL),
(31, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_key` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `name`, `email`, `website`, `activation_key`, `image`, `bio`, `timezone`, `status`, `updated`, `created`) VALUES
(1, 1, 'admin1', '59890360a0eead5847205cf963774c2fe231a0b7', 'admin', 'admin@gmail.com', 'hello.com', 'd7cbac0cb2fae0f9b421dae1a4766e47', NULL, NULL, '0', 1, '2014-05-13 13:51:38', '2014-05-13 02:08:20'),
(2, 1, 'test', '6f986311cf415840a52765278aba48cdc281fef9', 'test', 'test@test.com', 'test.com', '43a6a071e61d87be264ad7ed259a34c4', NULL, NULL, '0', 1, '2014-05-13 02:13:01', '2014-05-13 02:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `vocabularies`
--

CREATE TABLE IF NOT EXISTS `vocabularies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `multiple` tinyint(1) NOT NULL DEFAULT '0',
  `tags` tinyint(1) NOT NULL DEFAULT '0',
  `plugin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vocabulary_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vocabularies`
--

INSERT INTO `vocabularies` (`id`, `title`, `alias`, `description`, `required`, `multiple`, `tags`, `plugin`, `weight`, `updated`, `created`) VALUES
(1, 'Categories', 'categories', '', 0, 1, 0, '', 1, '2010-05-17 20:03:11', '2009-07-22 02:16:21'),
(2, 'Tags', 'tags', '', 0, 1, 0, '', 2, '2010-05-17 20:03:11', '2009-07-22 02:16:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
