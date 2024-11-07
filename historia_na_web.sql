-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2024 às 16:17
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `historia_na_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id_conteudo` int(11) NOT NULL,
  `titulo_conteudo` varchar(100) NOT NULL,
  `texto_conteudo` varchar(600) NOT NULL,
  `fonte_conteudo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id_conteudo`, `titulo_conteudo`, `texto_conteudo`, `fonte_conteudo`) VALUES
(6, 'Artesanato', 'O artesanato é um ofício ancestral feito de forma manual utilizando a matéria-prima natural, sendo também o produto final feito por um artesão. Mas com a mecanização da indústria o artesão é identificado como aquele que produz objetos pertencentes a chamada cultura popular.', 'Wikipédia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `email_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(64) NOT NULL,
  `imagem_usuario` varchar(50) NOT NULL,
  `tipo_usuario` enum('Admin','Aluno') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `imagem_usuario`, `tipo_usuario`) VALUES
(1, 'User_Admin', 'admin@gmail.com', '$2y$10$OW98gpd0Oabk0wxghsULVON.3v48VN3LQ3LiTTDHZbooQyO5BjQe6', 'user_default.jpg', 'Admin'),
(2, 'User_Aluno', 'aluno@gmail.com', '$2y$10$pFLHZAweox3b1qqleGSHr.ZtMCPPe8gpzjjK9VUMu8VkLyM51Kfpi', 'user_default.jpg', 'Aluno');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id_conteudo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id_conteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
