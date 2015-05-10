CREATE TABLE `lf_pages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `author` int(5) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;