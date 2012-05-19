CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(12) NOT NULL,
  `surname` varchar(12) NOT NULL,
  `acc_type` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

CREATE TABLE `merchants` (
  `mer_id` int(10) NOT NULL DEFAULT '0',
  `mer_name` char(20) NOT NULL,
  `mer_address` char(20) NOT NULL,
  `mer_phone` int(12) NOT NULL,
  PRIMARY KEY (`mer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1

CREATE TABLE `deals` (
  `deal_id` int(10) NOT NULL AUTO_INCREMENT,
  `deal_name` char(20) NOT NULL,
  `merchant_id` int(10) NOT NULL,
  `deal_price` int(5) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`deal_id`),
  KEY `cat_id` (`cat_id`),
  KEY `merchant_id` (`merchant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1

CREATE TABLE `coupons` (
  `cup_id` int(10) NOT NULL AUTO_INCREMENT,
  `cup_name` char(20) NOT NULL,
  `cup_discount` int(3) NOT NULL,
  PRIMARY KEY (`cup_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` char(15) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1

CREATE TABLE `type` (
  `type_id` int(5) NOT NULL AUTO_INCREMENT,
  `type` char(15) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1

CREATE TABLE `deal_type` (
  `deal_id` int(10) DEFAULT NULL,
  `type_id` int(5) DEFAULT NULL,
  KEY `deal_id` (`deal_id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
