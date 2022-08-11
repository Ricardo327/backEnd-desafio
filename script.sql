CREATE SCHEMA IF NOT EXISTS `desafio_verdanatech` ;
USE `desafio_verdanatech` ;

CREATE TABLE IF NOT EXISTS `desafio_verdanatech`.`clientes` (
`id` INT NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) NOT NULL,
`cpf` VARCHAR(20) NOT NULL,
`endereco` VARCHAR(255) NOT NULL,

`telefone` VARCHAR(20) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `desafio_verdanatech`.`produtos` (
`id` INT NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(255) NOT NULL,
`preco_da_compra` DOUBLE(10,2) NOT NULL,
`data_da_entrada` DATE NOT NULL,
PRIMARY KEY (`id`),
UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;