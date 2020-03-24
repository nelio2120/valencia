-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema gimnasia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gimnasia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gimnasia` DEFAULT CHARACTER SET latin1 ;
USE `gimnasia` ;

-- -----------------------------------------------------
-- Table `gimnasia`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`persona` (
  `id_persona` INT(11) NOT NULL AUTO_INCREMENT,
  `cedula` TEXT NOT NULL,
  `nombre` TEXT NOT NULL,
  `apellido` TEXT NOT NULL,
  `telefono` TEXT NOT NULL,
  `correo` TEXT NOT NULL,
  `direccion` TEXT NOT NULL,
  `ciudad` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `sexo` VARCHAR(1) NOT NULL,
  `provincia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_persona`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`entrenador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`entrenador` (
  `id_entrenador` INT(11) NOT NULL AUTO_INCREMENT,
  `id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`id_entrenador`),
  INDEX `fk_persona_idx` (`id_persona` ASC) VISIBLE,
  CONSTRAINT `fk_persona_entrenador`
    FOREIGN KEY (`id_persona`)
    REFERENCES `gimnasia`.`persona` (`id_persona`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`nivel` (
  `id_nivel` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `rango` TEXT NOT NULL,
  PRIMARY KEY (`id_nivel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`estudiante` (
  `id_estudiante` INT(11) NOT NULL AUTO_INCREMENT,
  `id_persona` INT(11) NOT NULL,
  `id_nivel` INT(11) NOT NULL,
  `id_entrenador` INT(11) NOT NULL,
  `club` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  INDEX `fk_id_persona_idx` (`id_persona` ASC) VISIBLE,
  INDEX `fk_id_nivel_idx` (`id_nivel` ASC) VISIBLE,
  INDEX `fk_id_entrenador_idx` (`id_entrenador` ASC) VISIBLE,
  INDEX `persona_idx` (`id_persona` ASC) VISIBLE,
  CONSTRAINT `fk_entrenador_estudiante`
    FOREIGN KEY (`id_entrenador`)
    REFERENCES `gimnasia`.`entrenador` (`id_entrenador`),
  CONSTRAINT `fk_nivel_estudiante`
    FOREIGN KEY (`id_nivel`)
    REFERENCES `gimnasia`.`nivel` (`id_nivel`),
  CONSTRAINT `fk_persona_estudiante`
    FOREIGN KEY (`id_persona`)
    REFERENCES `gimnasia`.`persona` (`id_persona`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`parametro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`parametro` (
  `id_parametro` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `respuesta` CHAR(2) NOT NULL,
  PRIMARY KEY (`id_parametro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`evaluacion_aspirante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`evaluacion_aspirante` (
  `id_evaluacion_aspirante` INT(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` INT(11) NOT NULL,
  `id_parametro` INT(11) NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`id_evaluacion_aspirante`),
  INDEX `fk_id_parametro_idx` (`id_parametro` ASC) VISIBLE,
  INDEX `fk_estudiante_evaluacion_idx` (`id_estudiante` ASC) VISIBLE,
  CONSTRAINT `fk_estudiante_evaluacion`
    FOREIGN KEY (`id_estudiante`)
    REFERENCES `gimnasia`.`estudiante` (`id_estudiante`),
  CONSTRAINT `fk_parametro_evaluacion`
    FOREIGN KEY (`id_parametro`)
    REFERENCES `gimnasia`.`parametro` (`id_parametro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`ejercicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`ejercicio` (
  `id_ejercicio` INT(11) NOT NULL AUTO_INCREMENT,
  `id_nivel` INT(11) NOT NULL,
  `nombre` TEXT NOT NULL,
  `descripcion` TEXT NOT NULL,
  `imagen` TEXT NOT NULL,
  PRIMARY KEY (`id_ejercicio`),
  INDEX `fk__ejercicio_idx` (`id_nivel` ASC) VISIBLE,
  CONSTRAINT `fk_nivel_ejercicio`
    FOREIGN KEY (`id_nivel`)
    REFERENCES `gimnasia`.`nivel` (`id_nivel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gimnasia`.`detalle_evaluacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`detalle_evaluacion` (
  `iddetalle_evaluacion` INT(11) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `idejercicio` INT(11) NOT NULL,
  `puntos` DECIMAL(10,0) NOT NULL,
  `idevaluacion_aspirante` INT(11) NOT NULL,
  PRIMARY KEY (`iddetalle_evaluacion`),
  INDEX `fk_ejercicio_idx` (`idejercicio` ASC) VISIBLE,
  INDEX `fk_cabecera_idx` (`idevaluacion_aspirante` ASC) VISIBLE,
  CONSTRAINT `fk_cabecera`
    FOREIGN KEY (`idevaluacion_aspirante`)
    REFERENCES `gimnasia`.`evaluacion_aspirante` (`id_evaluacion_aspirante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ejercicio`
    FOREIGN KEY (`idejercicio`)
    REFERENCES `gimnasia`.`ejercicio` (`id_ejercicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `gimnasia`.`representante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`representante` (
  `idRepresentante` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Cedula` VARCHAR(12) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `idestudiante` INT(11) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `sector` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idRepresentante`),
  INDEX `fk_repre_estudiante_idx` (`idestudiante` ASC) VISIBLE,
  CONSTRAINT `fk_repre_estudiante`
    FOREIGN KEY (`idestudiante`)
    REFERENCES `gimnasia`.`estudiante` (`id_estudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `gimnasia`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gimnasia`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` TEXT NOT NULL,
  `clave` TEXT NOT NULL,
  `idpersona` INT(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `fk_usuario_persona_idx` (`idpersona` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_persona`
    FOREIGN KEY (`idpersona`)
    REFERENCES `gimnasia`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
