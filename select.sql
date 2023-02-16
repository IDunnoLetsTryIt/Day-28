SELECT *
FROM `countries`;

-- DELETE
-- FROM `countries`;

SELECT *
FROM `countries`
WHERE 1;

-- this is a comment
SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10;

SELECT `id`, `name`, `population`
FROM `countries`
WHERE `population`>20000000
ORDER BY `population`DESC
LIMIT 10;

SELECT *
FROM `countries`
WHERE `population`>20000000
AND `continent`=`Europe`
ORDER BY `population` ASC;


SELECT *
FROM `cities`
WHERE `district` LIKE '%Holland';

SELECT *
FROM `cities`
WHERE `country_id`IN (56, 199, 172, 98)
ORDER BY `population` DESC
LIMIT 10;

-- Tables
DROP TABLE IF EXISTS `comment`;
 
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `text` text NULL COLLATE utf8_czech_ci DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
