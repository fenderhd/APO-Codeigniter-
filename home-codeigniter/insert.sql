-- phpMyAdmin SQL Dump
-- Host: 127.0.0.1
-- versão do PHP: 7.4.8

CREATE TABLE `aboutme` (
  `id` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aboutme`
--

INSERT INTO `aboutme` (`id`, `texto`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');


-- Estrutura da tabela `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `career`
--

INSERT INTO `career` (`id`, `texto`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

-- --------------------------------------------------------

--
-- Estrutura da tabela `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `interests`
--

INSERT INTO `interests` (`id`, `texto`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
  the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of 
  type and scrambled it to make a type specimen book.'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
  the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of 
  type and scrambled it to make a type specimen book.'),


ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `aboutme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
