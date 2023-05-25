CREATE DATABASE `hkeller` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

-- hkeller.users definition

CREATE TABLE hkeller.users (
    id BIGINT(10) auto_increment NOT NULL,
    email varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
    pass varchar(20) NOT null,
    primary key (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;

-- hkeller.caes definition

CREATE TABLE hkeller.caes (
  id bigint NOT NULL AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  cor varchar(100) NOT NULL,
  dt_nasc date NOT NULL,
  genero varchar(20) NOT NULL,
  dt_reg datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  dt_up datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- hkeller.tutor definition

CREATE TABLE hkeller.tutor (
    id BIGINT(10) auto_increment primary key NOT NULL,
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    cpf varchar(11) NOT NULL,
    dt_nasc DATE NOT NULL,
    telefone varchar(11) NOT NULL,
    fg_status BOOL DEFAULT true NULL,
    dt_reg DATETIME DEFAULT now() NOT NULL,
    dt_up DATETIME DEFAULT now() NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;


1