CREATE DATABASE `hkeller` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE hkeller; 

CREATE TABLE `atividade_cao` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `id_cao` bigint(10) NOT NULL,
  `id_tutor` bigint(10) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `dt_inicio` datetime NOT NULL,
  `dt_fim` datetime NOT NULL,
  `dt_reg` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `atividade_cao_FK` (`id_cao`),
  KEY `atividade_cao_FK_1` (`id_tutor`),
  CONSTRAINT `atividade_cao_FK` FOREIGN KEY (`id_cao`) REFERENCES `caes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `atividade_cao_FK_1` FOREIGN KEY (`id_tutor`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `caes` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `dt_nasc` date NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `fg_status` tinyint(1) NOT NULL DEFAULT 1,
  `dt_reg` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_up` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `evento` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `id_cao` bigint(10) NOT NULL,
  `id_tutor` bigint(10) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `dt_evento` datetime NOT NULL,
  `fg_status` tinyint(1) NOT NULL DEFAULT 1,
  `dt_reg` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_up` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `evento_FK` (`id_cao`),
  KEY `evento_FK_1` (`id_tutor`),
  CONSTRAINT `evento_FK` FOREIGN KEY (`id_cao`) REFERENCES `caes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `evento_FK_1` FOREIGN KEY (`id_tutor`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tutor_cao` (
  `id_tutor` bigint(10) NOT NULL,
  `id_cao` bigint(10) NOT NULL,
  `fg_status` tinyint(1) NOT NULL DEFAULT 1,
  `dt_vinculo` datetime NOT NULL DEFAULT current_timestamp(),
  KEY `tutor_cao_FK` (`id_tutor`),
  KEY `tutor_cao_FK_1` (`id_cao`),
  CONSTRAINT `tutor_cao_FK` FOREIGN KEY (`id_tutor`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tutor_cao_FK_1` FOREIGN KEY (`id_cao`) REFERENCES `caes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `usuario` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dt_nasc` date NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `fg_status` tinyint(1) NOT NULL DEFAULT 1,
  `fg_permissao` tinyint(1) NOT NULL,
  `dt_reg` datetime NOT NULL DEFAULT current_timestamp(),
  `dt_up` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;