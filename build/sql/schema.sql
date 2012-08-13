
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- movies
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies`
(
	`id` int(10) unsigned(10) NOT NULL AUTO_INCREMENT,
	`parentId` int(10) unsigned(10) NOT NULL,
	`originalTitle` VARCHAR(255) NOT NULL,
	`originalSubtitle` VARCHAR(255) NOT NULL,
	`title` VARCHAR(255) NOT NULL,
	`subtitle` VARCHAR(255) NOT NULL,
	`startDate` DATE NOT NULL,
	`fsk` SMALLINT(2) NOT NULL,
	`directors` VARCHAR(255) NOT NULL,
	`actors` VARCHAR(255) NOT NULL,
	`camera` VARCHAR(255) NOT NULL,
	`book` VARCHAR(255) NOT NULL,
	`rental` VARCHAR(255) NOT NULL,
	`producers` VARCHAR(255) NOT NULL,
	`lengthInMinutes` SMALLINT(3) NOT NULL,
	`createDate` DATE NOT NULL,
	`picture` VARCHAR(255) NOT NULL,
	`description` TEXT NOT NULL,
	`languages` VARCHAR(255) NOT NULL,
	`countries` VARCHAR(255) NOT NULL,
	`url` VARCHAR(255) NOT NULL,
	`trailer` VARCHAR(255) NOT NULL,
	`lastEditTime` int(10) unsigned(10) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- genres
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres`
(
	`id` int(10) unsigned(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- persons
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `persons`;

CREATE TABLE `persons`
(
	`id` int(10) unsigned(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`role` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- moviesGenres
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `moviesGenres`;

CREATE TABLE `moviesGenres`
(
	`movieId` int(10) unsigned(10) NOT NULL,
	`genreId` int(10) unsigned(10) NOT NULL,
	PRIMARY KEY (`movieId`,`genreId`),
	INDEX `moviesGenres_FI_2` (`genreId`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- moviesPersons
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `moviesPersons`;

CREATE TABLE `moviesPersons`
(
	`movieId` int(10) unsigned(10) NOT NULL,
	`personId` int(10) unsigned(10) NOT NULL,
	PRIMARY KEY (`movieId`,`personId`),
	INDEX `moviesPersons_FI_2` (`personId`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
