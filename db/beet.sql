-- ============================================================
-- DROP DATABASE: BEET
-- ============================================================
DROP DATABASE IF EXISTS beet;

-- ============================================================
-- DROP TABLE
-- ============================================================
DROP TABLE IF EXISTS nivelacesso;
DROP TABLE IF EXISTS administrador;
DROP TABLE IF EXISTS pedido;
DROP TABLE IF EXISTS cliente;

-- ============================================================
-- CRIANDO O BANCO: BEET
-- ============================================================
CREATE DATABASE IF NOT EXISTS beet
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

-- ============================================================
-- TABLE: NIVEL DE ACESSO
-- ============================================================
CREATE TABLE IF NOT EXISTS `nivelacesso`(
    `idnivel` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME,
	PRIMARY KEY (`idnivel`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ============================================================
-- TABLE: ADMINISTRADOR
-- ============================================================
CREATE TABLE IF NOT EXISTS `administrador`(
    `idadmin` INT NOT NULL AUTO_INCREMENT,
    `ra` INT(9) NOT NULL UNIQUE,
    `senha` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `nome` VARCHAR(255) NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME,
    `nivel_id` INT NOT NULL,
    PRIMARY KEY (`idadmin`),
    FOREIGN KEY (`nivel_id`) REFERENCES nivelacesso(idnivel)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ============================================================
-- TABLE: PEDIDO
-- ============================================================
CREATE TABLE IF NOT EXISTS `pedido`(
    `idpedido` INT NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(200) NOT NULL,
    `descricao` LONGTEXT NOT NULL,
    `t_aplic` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idpedido`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ============================================================
-- TABLE: CLIENTE
-- ============================================================
CREATE TABLE IF NOT EXISTS `cliente`(
    `idcliente` INT NOT NULL AUTO_INCREMENT,
    `nomeusuario` VARCHAR(255) NOT NULL, 
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `senha` VARCHAR(255) NOT NULL,
    `criado` DATETIME NOT NULL,
    `modified` DATETIME,
    `nivel_id` INT NOT NULL,
    `id_pedido` INT,
    FOREIGN KEY (`nivel_id`) REFERENCES nivelacesso(idnivel),
    FOREIGN KEY (`id_pedido`) REFERENCES pedido(idpedido),
    PRIMARY KEY (`idcliente`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ============================================================
-- INSERT TABLE: NIVEL DE ACESSO
-- ============================================================
INSERT INTO nivelacesso VALUES (1, 'administrador', NOW(), NULL);
INSERT INTO nivelacesso VALUES (2, 'usuario'      , NOW(), NULL);

-- ============================================================
-- INSERT TABLE: ADMINISTRADOR
-- ============================================================
INSERT INTO administrador VALUES (1, 917200319, 'a92ab72c9f6093ab1488d54b96aff511', 'bortolettohenrique@gmail.com', 'henrique bortoletto', NOW(), NULL, 1);
INSERT INTO administrador VALUES (2, 917202025, '827ccb0eea8a706c4c34a16891f84e7b', 'luizcripa@gmail.com'         , 'luiz cripa'         , NOW(), NULL, 1);
INSERT INTO administrador VALUES (3, 917204118, '1e01ba3e07ac48cbdab2d3284d1dd0fa', 'victorceretti@gmail.com'     , 'victor ceretti'     , NOW(), NULL, 1);
INSERT INTO administrador VALUES (4, 917203725, 'e13dd027be0f2152ce387ac0ea83d863', 'gabrielgomes@gmail.com'      , 'gabriel gomes'      , NOW(), NULL, 1);
INSERT INTO administrador VALUES (5, 917207225, '9256f177e09e1f3f6f860a86373b3aad', 'rafaeltoppis@gmail.com'      , 'rafael toppis'      , NOW(), NULL, 1);
INSERT INTO administrador VALUES (6, 917200773, 'd0970714757783e6cf17b26fb8e2298f', 'felipemontenegro@gmail.com'  , 'felipe montenegro'  , NOW(), NULL, 1);

-- ============================================================
-- SELECT: 
-- ============================================================
SELECT * FROM administrador;
SELECT * FROM nivelacesso;
SELECT * FROM pedido;
SELECT * FROM cliente;