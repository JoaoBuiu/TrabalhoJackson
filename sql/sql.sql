-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_trabalho
CREATE DATABASE IF NOT EXISTS `db_trabalho` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_trabalho`;

-- Copiando estrutura para tabela db_trabalho.fornecedor
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `contato` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `assunto` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_trabalho.fornecedor: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_trabalho.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `preco` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `quantidade` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `tamanho` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `descricao` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_trabalho.produto: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_trabalho.suporte
CREATE TABLE IF NOT EXISTS `suporte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `assunto` varchar(200) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_trabalho.suporte: ~0 rows (aproximadamente)
INSERT INTO `suporte` (`id`, `nome`, `email`, `assunto`, `data`) VALUES
	(1, 'eda', 'joao@gmail.com', 'Roupas', '2023-04-06'),
	(2, 'dada', 'joao@gmail.com', 'Roupas', '2023-04-19');

  -- Copiando estrutura para tabela db_trabalho.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  `cpf` varchar(100) COLLATE utf8mb4_0900_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_bin;

-- Copiando dados para a tabela db_trabalho.produto: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
