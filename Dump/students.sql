-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/09/2023 às 19:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `api_students`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `created_at`, `updated_at`) VALUES
(2, 'João', 'Direito', '2023-09-13 17:06:03', '2023-09-15 17:34:52'),
(3, 'Ana Claudia', 'Maquiagem', '2023-09-15 17:33:51', '2023-09-15 17:33:51'),
(4, 'Maria', 'Gastronomia', '2023-09-18 20:47:07', '2023-09-18 20:47:07'),
(5, 'Roberto', 'Gastronomia', '2023-09-18 20:47:18', '2023-09-18 20:47:18'),
(6, 'Cintia', 'Medicina', '2023-09-18 20:47:32', '2023-09-18 20:47:32'),
(7, 'Pedro Paulo', 'Medicina', '2023-09-18 20:47:44', '2023-09-18 20:47:44'),
(8, 'Claudio', 'Redes', '2023-09-18 20:48:08', '2023-09-18 20:48:08'),
(9, 'Gisele', 'Engenharia Civil', '2023-09-18 20:48:26', '2023-09-18 20:48:26'),
(10, 'Julia', 'Dados', '2023-09-18 20:48:57', '2023-09-18 20:48:57'),
(11, 'Helio', 'Dados', '2023-09-18 20:49:11', '2023-09-18 20:49:11'),
(12, 'Marcos', 'Dados', '2023-09-18 20:49:22', '2023-09-18 20:49:22'),
(13, 'Felipe', 'Dados', '2023-09-18 20:49:28', '2023-09-18 20:49:28');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
