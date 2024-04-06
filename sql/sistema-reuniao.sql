-- MySQL Script generated by MySQL Workbench
-- Fri Apr  5 16:32:37 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`salas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`salas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_sala` VARCHAR(45) NOT NULL,
  `capacidade` VARCHAR(45) NOT NULL,
  `recusos_disponiveis` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`agendamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`agendamentos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_organizador` VARCHAR(45) NOT NULL,
  `numero_particpantes` INT NOT NULL,
  `finalidade` VARCHAR(45) NULL,
  `data` DATE NOT NULL,
  `hora` INT NOT NULL,
  `status_ocupadp/disponivel` VARCHAR(100) NOT NULL,
  `sala_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `sala_id`),
  INDEX `fk_agendamentos_salas_idx` (`sala_id` ASC) VISIBLE,
  CONSTRAINT `fk_agendamentos_salas`
    FOREIGN KEY (`sala_id`)
    REFERENCES `mydb`.`salas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
