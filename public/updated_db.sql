SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `kudumbashree` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `kudumbashree` ;

-- -----------------------------------------------------
-- Table `kudumbashree`.`units`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kudumbashree`.`units` ;

CREATE TABLE IF NOT EXISTS `kudumbashree`.`units` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `isapproved` VARCHAR(15) NULL,
  `ward` VARCHAR(45) NULL,
  `ADDRESS` VARCHAR(150) NULL,
  `PLACE` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kudumbashree`.`members`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kudumbashree`.`members` ;

CREATE TABLE IF NOT EXISTS `kudumbashree`.`members` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `age` INT NULL,
  `dob` DATE NULL,
  `address` VARCHAR(45) NULL,
  `spousesname` VARCHAR(45) NULL,
  `fathername` VARCHAR(45) NULL,
  `mothername` VARCHAR(45) NULL,
  `bpl/apl` VARCHAR(45) NULL,
  `sc/st/general` VARCHAR(45) NULL,
  `bloodgroup` VARCHAR(45) NULL,
  `eligibility` VARCHAR(45) NULL,
  `relegion` VARCHAR(45) NULL,
  `cast` VARCHAR(45) NULL,
  `nationality` VARCHAR(45) NULL,
  `state` VARCHAR(45) NULL,
  `district` VARCHAR(45) NULL,
  `taluk` VARCHAR(45) NULL,
  `panchayath` VARCHAR(45) NULL,
  `mobno` VARCHAR(16) NULL,
  `idno` VARCHAR(45) NULL,
  `accountno` VARCHAR(45) NULL,
  `adarno` INT NULL,
  `emialid` VARCHAR(45) NULL,
  `units_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_members_units1_idx` (`units_id` ASC),
  CONSTRAINT `fk_members_units1`
    FOREIGN KEY (`units_id`)
    REFERENCES `kudumbashree`.`units` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
