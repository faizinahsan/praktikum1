-- MySQL Script generated by MySQL Workbench
-- Fri Dec  1 21:01:34 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(40) NOT NULL,
  `password` VARCHAR(40) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  UNIQUE INDEX `username_UNIQUE` (`idUser` ASC),
  PRIMARY KEY (`idUser`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Kategori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Kategori` (
  `idKategori` INT NOT NULL AUTO_INCREMENT,
  `namaKategori` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`idKategori`),
  UNIQUE INDEX `namaKategori_UNIQUE` (`idKategori` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`File`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`File` (
  `idFile` INT NOT NULL AUTO_INCREMENT,
  `namaFile` VARCHAR(40) NOT NULL,
  `tanggalFile` DATE NULL,
  `linkFile` VARCHAR(40) NOT NULL,
  `extensi` VARCHAR(5) NOT NULL,
  `User_idUser` INT NOT NULL,
  PRIMARY KEY (`idFile`, `User_idUser`),
  UNIQUE INDEX `idFile_UNIQUE` (`idFile` ASC),
  INDEX `fk_File_User_idx` (`User_idUser` ASC),
  CONSTRAINT `fk_File_User`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `mydb`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Paper`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Paper` (
  `idPaper` INT NOT NULL AUTO_INCREMENT,
  `namaPaper` VARCHAR(40) NOT NULL,
  `File_idFile` INT NOT NULL,
  `File_User_idUser` INT NOT NULL,
  PRIMARY KEY (`idPaper`, `File_idFile`, `File_User_idUser`),
  UNIQUE INDEX `namaPaper_UNIQUE` (`namaPaper` ASC),
  UNIQUE INDEX `idPaper_UNIQUE` (`idPaper` ASC),
  INDEX `fk_Paper_File1_idx` (`File_idFile` ASC, `File_User_idUser` ASC),
  CONSTRAINT `fk_Paper_File1`
    FOREIGN KEY (`File_idFile` , `File_User_idUser`)
    REFERENCES `mydb`.`File` (`idFile` , `User_idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User_has_Paper`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User_has_Paper` (
  `User_idUser` INT NOT NULL,
  `Paper_idPaper` INT NOT NULL,
  `isWishlist` TINYINT NOT NULL DEFAULT 0,
  `isReadHistory` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`User_idUser`, `Paper_idPaper`),
  INDEX `fk_User_has_Paper_Paper1_idx` (`Paper_idPaper` ASC),
  INDEX `fk_User_has_Paper_User1_idx` (`User_idUser` ASC),
  CONSTRAINT `fk_User_has_Paper_User1`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `mydb`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Paper_Paper1`
    FOREIGN KEY (`Paper_idPaper`)
    REFERENCES `mydb`.`Paper` (`idPaper`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Paper_has_Kategori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Paper_has_Kategori` (
  `Paper_idPaper` INT NOT NULL,
  `Kategori_idKategori` INT NOT NULL,
  PRIMARY KEY (`Paper_idPaper`, `Kategori_idKategori`),
  INDEX `fk_Paper_has_Kategori_Kategori1_idx` (`Kategori_idKategori` ASC),
  INDEX `fk_Paper_has_Kategori_Paper1_idx` (`Paper_idPaper` ASC),
  CONSTRAINT `fk_Paper_has_Kategori_Paper1`
    FOREIGN KEY (`Paper_idPaper`)
    REFERENCES `mydb`.`Paper` (`idPaper`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Paper_has_Kategori_Kategori1`
    FOREIGN KEY (`Kategori_idKategori`)
    REFERENCES `mydb`.`Kategori` (`idKategori`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
