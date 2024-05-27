-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2024 às 13:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_uepa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `formulario`
--

CREATE TABLE `formulario` (
  `id` int(99) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `formulario`
--

INSERT INTO `formulario` (`id`, `nome`, `email`, `tipo`, `texto`) VALUES
(1, 'maumau', 'maumau@gmail.com', 'Denúcia', 'estou denunciando o assédio das 600hrs de ch do nosso curso, inadmissível, parece que voltamos a época da escravidão, #faleitoleve.'),
(2, 'gaybriel', 'castrorodriguesg52@yahoo.com', 'Denúcia', 'me atacaram moralmente, emocionalmente. #faleitoleve'),
(15, 'cristiano ronaldo CR7', 'CR7@hotmail.com', 'Denúcia', 'estou denunciando a FIFA por nunca reconhecerem meus feitos e serem baba-ovo do messi na bola de ouro #faleitoleve'),
(16, 'a', 'aa@fssf.cmkd', 'Sugestão', 'me humilharam e me deixaram faminto '),
(18, 'maumau', 'adoleta123@example.com', 'Reclamação', 'as prova tao difisiu'),
(19, 'teste', 'teste@teste', 'Reclamação', 'terrivel\r\n'),
(20, 'Gabriel Castro Rodrigues', 'castrorodriguesg52@gmail.com', 'Informação', 'è muito perigoso andar a noite sozinho'),
(21, 'Pedro A. da S. Motta', 'pedromotta@gmail.com', 'Denúcia', 'Estão me perseguindo com as vagas de carro'),
(22, 'Ryan', 'ryan.rdsouza@aluno.uepa.br', 'Reclamação', 'hdsafhqaereerjheqarjhrsetjhwaerst'),
(23, 'kakauzin_546', 'kauzin@vivo.com', 'Solicitação', 'quero que o professor dê nota máxima pra todo mundo :P'),
(24, 'Hatsune Miku', 'hatsunemiku@gmail.com', 'Informação', 'konnichiwa, miku desu'),
(25, 'João Silva', 'joao@silva.com', 'Solicitação', 'Teste 1, 2, 3');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
