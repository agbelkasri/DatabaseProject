-- ===================================================================
-- Something Something
-- ===================================================================

-- -------------------------------------------------------------------
-- Save selected MySQL settings
-- -------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -------------------------------------------------------------------
-- Delete and create database
-- -------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbTickets` ;
CREATE SCHEMA IF NOT EXISTS `dbTickets` DEFAULT CHARACTER SET utf8;

-- -------------------------------------------------------------------
-- Switch to dbTask database
-- -------------------------------------------------------------------
USE dbTask;

-- -------------------------------------------------------------------
-- Delete and create table `dbTask`.`tbTask`
-- -------------------------------------------------------------------
DROP TABLE IF EXISTS `dbTask`.`tbTask` ;
CREATE TABLE IF NOT EXISTS `dbTask`.`tbTask` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Category` VARCHAR(60) NOT NULL,
  `EventDate` VARCHAR(20) NOT NULL,
  `Tickets` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

-- -------------------------------------------------------------------
-- Insert data into table
-- -------------------------------------------------------------------
INSERT INTO tbTask (Name, Event, EventDate, Tickets) VALUES 
  ('John Cena',	'The Beatles', '4/20/4020', Yeah),
SELECT * FROM tbTask;

-- -----------------------------------------------------
-- Restore saved MySQL settings
-- -----------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
