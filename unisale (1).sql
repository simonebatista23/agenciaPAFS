-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2024 às 00:14
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unisale`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `celular` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `cpf`, `nome`, `celular`, `email`, `login`, `senha`) VALUES
(1, '12345678901', 'Manoel da Silva', '(18)989897766', 'manoel@usuarios.com.br', 'manoel@usuarios.com.br', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, '12345678902', 'Maria da Silva', '(18)989897755', 'maria@usuarios.com.br', 'maria@usuarios.com.br', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, '12345678903', 'Andreia da Silva', '(18)989897744', 'andreia@usuarios.com.br', 'andreia@usuarios.com.br', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, '12345678904', 'Carlos da Silva', '(18)989897733', 'carlos@usuarios.com.br', 'carlos@usuarios.com.br', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, '12345678905', 'Caio da Silva', '(18)989897722', 'caio@usuarios.com.br', 'caio', 'c4ca4238a0b923820dcc509a6f75849b'),
(6, '12345678906', 'Moura da Silva', '(18)989897711', 'moura@usuarios.com.br', 'moura', 'c4ca4238a0b923820dcc509a6f75849b'),
(7, '12345678907', 'Oswaldo da Silva', '(18)989897700', 'oswaldo@usuarios.com.br', 'oswaldo', 'c4ca4238a0b923820dcc509a6f75849b'),
(8, '12345678908', 'Regina da Silva', '(18)989897710', 'regina@usuarios.com.br', 'regina', 'c4ca4238a0b923820dcc509a6f75849b'),
(9, '1234567', 'fabio', '17998764532', 'fabio@gmail.com', 'fabio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, '8226139414', 'fabiana', '999999999', 'fabiana@gmail.com', 'fabiana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, '56354155522', 'anderson', '18777777777', 'anderson@gmail.com', 'anderson@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, '1234512480', 'marta', '14997256639', 'marta@gmail.com', 'marta@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, '8226139414', 'linara', '999999999', 'linara@gmail.com', 'linara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, '56354155512', 'marta', '1899999999', 'marta123@gmail.com', 'marta12', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, '1234567', 'fabiana', '17998764532', 'fabiana12@gmail.com', 'fabiana 23', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, '1425289233', 'antonio', '17998764534', 'antonio1234@gmail.com', 'Antonio24', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, '6112548799', 'linara oliveira', '1598756423', 'testando@gmail.com', 'linaraoliveira', 'fcea920f7412b5da7be0cf42b8c93759'),
(21, '111.111.111', 'marta', '17998764532', 'marta123@gmail.com', 'marta1234', '827ccb0eea8a706c4c34a16891f84e7b'),
(22, '111.111.111', 'marta', '17998764532', 'marta123@gmail.com', 'marta123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, '822.613.941', 'fabio', '(17) 99-8764', 'fabio78@gmail.com', 'fabio78@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, '123.456.777', 'fabio', '(17) 99999-9999', 'simone12@gmail.com', 'simone12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(25, '822.613.941', 'luna', '(17) 99876-4532', 'luna@gmail.com', 'luna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(26, '822.613.941', 'anderson', '(17) 99876-4532', 'anderson1@gmail.com', 'anderson1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(27, '222.222.222', 'marcia', '(17) 99876-4532', 'marcia@gmail.com', 'marcia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(29, '555.555.555', 'mercedes', '(66) 66666-6666', 'mercedes@gmail.com', 'mercedes@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, '563.541.555', 'mercedes', '(88) 88888-8888', 'mercedes12@gmail.com', 'mercedes12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `documento` (`cpf`),
  ADD KEY `endemail` (`email`),
  ADD KEY `login_2` (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
