CREATE DATABASE `mystore_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `mystore_db`;

CREATE TABLE IF NOT EXISTS `products` (
  `sku` int(11) Primary Key,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `paypal` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

***********************************************************************

CREATE TABLE IF Not EXISTS`sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

***********************************************************************

CREATE TABLE IF Not Exists`products_sizes` (
`product_sku` int(11) ,
`size_id` int(11) ,
Foreign key (`size_id`) references sizes(`id`),
Foreign key (`product_sku`) references products(`sku`) )
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


***********************************************************************

CREATE TABLE If not Exists`inventory` (
`sku` int(11),
`size_id` int(11),
`quantity` int(11),
Foreign key (`sku`) references products(`sku`),
Foreign key (`size_id`) references sizes(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

***********************************************************************

CREATE TABLE IF Not Exists `orders_details`(
`order_id` int(11) NOT NULL Primary key AUTO_INCREMENT,
`sku` int(11),
`size` varchar(32),
`quantity` int(11),
`status` varchar(50),
Foreign key (`sku`) references products(`sku`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
