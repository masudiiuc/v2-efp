//@date: 10-09-2012
CREATE TABLE `organic_listing_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB

INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (1,'Organic Food provider',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (2,'Organic Catering',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (3,'Organic Bakeries',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (4,'Rent a Keg',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (5,'Organic Beer',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (6,'Organic Wine',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (7,'ECO Event Planners',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (8,'Eco Place that offer Green parties',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (9,'ECO Friendly Ballons',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (10,'Organic Flowers',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (11,'Artist',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (12,'Entertainers',NULL,'active');
INSERT INTO `organic_listing_type` (`id`,`title`,`slug`,`status`) VALUES (13,'Eco-products',NULL,'active');