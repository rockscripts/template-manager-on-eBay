CREATE TABLE IF NOT EXISTS `menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(255) NOT NULL DEFAULT '',
  `position` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

INSERT INTO `menu` (`id`, `parent_id`, `title`, `url`, `class`, `position`, `group_id`) VALUES
(1, 0, 'Home', '/', '', 1, 1),
(2, 0, 'About', '/about.html', '', 2, 1),
(3, 2, 'Company Profile', '/company-profile.html', '', 1, 1),
(19, 0, 'Affiliate', '/affiliate.html', '', 3, 2),
(18, 0, 'Forum', '/forum', '', 2, 2),
(17, 0, 'Make Money', '/make-money.html', '', 1, 2),
(7, 0, 'Contact Us', '/contact-us.html', '', 5, 1),
(8, 0, 'Blog', '/blog', '', 4, 1),
(9, 0, 'Products', '/products', '', 3, 1),
(10, 9, 'Handicraft', '/products/handicraft', '', 1, 1),
(11, 9, 'Furniture', '/products/furniture', '', 2, 1),
(12, 10, 'Tissue Box', '/products/handicraft/tissue', '', 1, 1),
(13, 10, 'Frame', '/products/handicraft/frame', '', 2, 1),
(14, 11, 'Cabinet', '/products/furniture/cabinet', '', 1, 1),
(15, 11, 'Chair', '/products/furniture/chair', '', 2, 1),
(16, 11, 'Table', '/products/furniture/table', '', 3, 1),
(20, 0, 'Help', '/help', '', 4, 2),
(21, 20, 'Support Center', '/support-center.html', '', 1, 2),
(22, 20, 'Sitemap', '/sitemap.html', '', 2, 2),
(23, 0, 'Author Dashboard', '/author-dashboard', '', 1, 3),
(24, 0, 'My Profile', '/member/profile', '', 2, 3),
(25, 0, 'Settings', '/member/settings', '', 3, 3),
(26, 0, 'Downloads', '/member/downloads', '', 4, 3),
(27, 0, 'Bookmarks', '/member/bookmarks', '', 5, 3),
(28, 0, 'Logout', '/logout.php', '', 6, 3),
(29, 25, 'Profile', '/member/settings/profile', '', 1, 3),
(30, 25, 'Change Password', '/member/settings/password', '', 2, 3),
(31, 0, 'Menu 1', '', '', 1, 4),
(32, 31, 'Menu 1.1', '', '', 1, 4),
(33, 31, 'Menu 1.2', '', '', 2, 4),
(34, 0, 'Menu 2', '', '', 2, 4),
(35, 34, 'Menu 2.1', '', '', 1, 4),
(36, 35, 'Menu 2.1.1', '', '', 1, 4),
(37, 35, 'Menu 2.1.2', '', '', 2, 4),
(38, 34, 'Menu 2.2', '', '', 2, 4),
(39, 21, 'Popular Files', '/popular', '', 1, 2),
(40, 21, 'Top Authors', '/top', '', 2, 2),
(41, 21, 'Wordpress', '/wp', '', 3, 2);

CREATE TABLE IF NOT EXISTS `menu_group` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `menu_group` (`id`, `title`) VALUES
(1, 'Main Menu'),
(2, 'Footer Menu'),
(3, 'Member Menu'),
(4, 'Admin Menu');
