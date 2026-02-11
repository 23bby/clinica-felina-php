-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2026 at 03:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica_veterinaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `appuntamenti`
--

CREATE TABLE `appuntamenti` (
  `id` int(11) NOT NULL,
  `id_veterinario` int(11) DEFAULT NULL,
  `id_giorno` int(11) NOT NULL,
  `id_fascia` int(11) NOT NULL,
  `id_gatto` int(11) DEFAULT NULL,
  `id_vaccino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appuntamenti`
--

INSERT INTO `appuntamenti` (`id`, `id_veterinario`, `id_giorno`, `id_fascia`, `id_gatto`, `id_vaccino`) VALUES
(1, 1, 1, 1, 1, 1),
(3, 2, 2, 1, 4, 3),
(4, 1, 3, 3, 32, 1),
(5, 3, 5, 1, 7, 6),
(7, 3, 4, 3, 6, 2),
(9, 2, 1, 2, 3, 6),
(10, 3, 1, 1, 23, 6),
(11, 1, 9, 2, 21, 1),
(12, 2, 4, 3, 30, 5),
(13, 2, 4, 1, 27, 6),
(14, 2, 9, 2, 31, 2),
(15, 3, 5, 3, 13, 1),
(16, 1, 4, 1, 22, 1),
(17, 3, 3, 3, 20, 1),
(18, 1, 3, 2, 28, 1),
(19, 1, 5, 1, 29, 3),
(20, 2, 9, 1, 17, 1),
(21, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fasce_orarie`
--

CREATE TABLE `fasce_orarie` (
  `id` int(11) NOT NULL,
  `nome_fascia_oraria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasce_orarie`
--

INSERT INTO `fasce_orarie` (`id`, `nome_fascia_oraria`) VALUES
(1, '10-12'),
(2, '12-14'),
(3, '14-16');

-- --------------------------------------------------------

--
-- Table structure for table `gatti`
--

CREATE TABLE `gatti` (
  `id` int(11) NOT NULL,
  `nome_gatto` varchar(45) DEFAULT NULL,
  `id_padrone` int(11) NOT NULL,
  `id_razza` int(11) NOT NULL,
  `eta` int(11) DEFAULT NULL,
  `note_gatto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gatti`
--

INSERT INTO `gatti` (`id`, `nome_gatto`, `id_padrone`, `id_razza`, `eta`, `note_gatto`) VALUES
(1, 'Semola', 1, 1, NULL, NULL),
(3, 'Zen', 3, 2, NULL, NULL),
(4, 'Morgana', 4, 4, NULL, 'IRC diagnosticata all\'eta di 6 anni'),
(6, 'Malvasia', 6, 3, NULL, NULL),
(7, 'Matisse', 3, 5, NULL, NULL),
(13, 'Mister', 4, 1, NULL, NULL),
(14, 'Oscar', 4, 4, NULL, NULL),
(17, 'Bobo', 11, 5, NULL, NULL),
(18, 'Pipo', 11, 5, NULL, NULL),
(19, 'Niro', 21, 1, NULL, NULL),
(20, 'Marley', 19, 4, NULL, NULL),
(21, 'Acchiappacoda', 18, 1, NULL, NULL),
(22, 'Greta', 20, 3, NULL, 'Probabile intolleranza alle proteine del pollo; prescitta dieta hypoallergenic'),
(23, 'Vita', 21, 2, NULL, NULL),
(24, 'Perla', 15, 2, NULL, NULL),
(25, 'Ugo', 16, 1, NULL, NULL),
(26, 'Neko', 16, 4, NULL, NULL),
(27, 'Totoro', 16, 1, 4, ''),
(28, 'Cleopatra', 17, 3, NULL, NULL),
(29, 'Calzedonia', 20, 5, NULL, NULL),
(30, 'Lalla', 16, 2, NULL, NULL),
(31, 'Frodo', 17, 4, NULL, NULL),
(32, 'Gandalf', 21, 4, NULL, NULL),
(33, 'filo', 18, 5, 3, ''),
(34, 'ciccio', 1, 4, 0, ''),
(35, 'lillo', 1, 4, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `giorni_settimana`
--

CREATE TABLE `giorni_settimana` (
  `id` int(11) NOT NULL,
  `nome_giorno` varchar(45) NOT NULL,
  `progressivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giorni_settimana`
--

INSERT INTO `giorni_settimana` (`id`, `nome_giorno`, `progressivo`) VALUES
(1, 'Lunedi', 0),
(2, 'Martedi', 1),
(3, 'Mercoledi', 2),
(4, 'Giovedi', 3),
(5, 'Venerdi', 4),
(9, 'Sabato', 5);

-- --------------------------------------------------------

--
-- Table structure for table `padroni`
--

CREATE TABLE `padroni` (
  `id` int(11) NOT NULL,
  `nome_padrone` varchar(45) DEFAULT NULL,
  `cognome_padrone` varchar(45) DEFAULT NULL,
  `telefono_padrone` varchar(45) DEFAULT NULL,
  `email_padrone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `padroni`
--

INSERT INTO `padroni` (`id`, `nome_padrone`, `cognome_padrone`, `telefono_padrone`, `email_padrone`) VALUES
(1, 'Andrea', 'Mieli', '3465968756', 'mieli@email.com'),
(2, 'Sofia', 'Ricci', '3497868594', 'ricci32@email.com'),
(3, 'Matteo', 'Gialli', '3489954328', 'gialli@email.com'),
(4, 'Lucia', 'Grigi', '3428593335', 'grigi@email.com'),
(6, 'Silvia', 'Verdi', '3428593336', 'verdi@email.com'),
(11, 'Alessio', 'Grigi', '349788885', 'grigi@emoil.com'),
(15, 'Giulio', 'Rosati', '45698342', 'rosati@email.com'),
(16, 'Giovanni', 'Bruni', '349876543', 'bruni@email.com'),
(17, 'Maria', 'Lieti', '347231957', 'lieti@email.com'),
(18, 'Chiara', 'Scuri', '3496757484', 'scuri@email.com'),
(19, 'Serena', 'Gatti', '3462390876', 'gatti@email.com'),
(20, 'Emilia', 'Romagna', '348239685', 'romagna@email.com'),
(21, 'Matteo', 'Lilli', '347853423', 'matteo.email.com'),
(22, 'Andrea', 'Arceri', '333214563423', 'andrea.arcri32@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `razze_gatti`
--

CREATE TABLE `razze_gatti` (
  `id` int(11) NOT NULL,
  `nome_razza` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `razze_gatti`
--

INSERT INTO `razze_gatti` (`id`, `nome_razza`) VALUES
(4, 'Birmano'),
(2, 'Certosino'),
(3, 'Main Coon'),
(5, 'Persiano'),
(1, 'Soriano');

-- --------------------------------------------------------

--
-- Table structure for table `vaccini`
--

CREATE TABLE `vaccini` (
  `id` int(11) NOT NULL,
  `tipologia_vaccino` varchar(45) DEFAULT NULL,
  `durata_vaccino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccini`
--

INSERT INTO `vaccini` (`id`, `tipologia_vaccino`, `durata_vaccino`) VALUES
(1, 'Herpesvirus felino', 365),
(2, 'Calicivirus felino', 365),
(3, 'Panleucopenia felina', 365),
(4, 'Leucemia felina', 180),
(5, 'Rabbia', 730),
(6, 'Dermatofitosi', 730);

-- --------------------------------------------------------

--
-- Table structure for table `veterinari`
--

CREATE TABLE `veterinari` (
  `id` int(11) NOT NULL,
  `cognome_veterinario` varchar(45) DEFAULT NULL,
  `nome_veterinario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veterinari`
--

INSERT INTO `veterinari` (`id`, `cognome_veterinario`, `nome_veterinario`) VALUES
(1, 'Seri', 'Claudio'),
(2, 'Gialloni', 'Sonia'),
(3, 'Monti', 'Marco');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appuntamenti`
--
ALTER TABLE `appuntamenti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_gatto_visita` (`id_gatto`),
  ADD KEY `fk_id_vacc` (`id_vaccino`),
  ADD KEY `fk_id_vet` (`id_veterinario`),
  ADD KEY `id_fascia_appunt` (`id_fascia`),
  ADD KEY `id_giorno_appunt` (`id_giorno`);

--
-- Indexes for table `fasce_orarie`
--
ALTER TABLE `fasce_orarie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome_fascia_oraria` (`nome_fascia_oraria`);

--
-- Indexes for table `gatti`
--
ALTER TABLE `gatti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_padrone` (`id_padrone`),
  ADD KEY `fk_id_razza` (`id_razza`);

--
-- Indexes for table `giorni_settimana`
--
ALTER TABLE `giorni_settimana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `padroni`
--
ALTER TABLE `padroni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono_padrone` (`telefono_padrone`),
  ADD UNIQUE KEY `email_padrone` (`email_padrone`);

--
-- Indexes for table `razze_gatti`
--
ALTER TABLE `razze_gatti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome_razza` (`nome_razza`);

--
-- Indexes for table `vaccini`
--
ALTER TABLE `vaccini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veterinari`
--
ALTER TABLE `veterinari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appuntamenti`
--
ALTER TABLE `appuntamenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fasce_orarie`
--
ALTER TABLE `fasce_orarie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gatti`
--
ALTER TABLE `gatti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `giorni_settimana`
--
ALTER TABLE `giorni_settimana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `padroni`
--
ALTER TABLE `padroni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `razze_gatti`
--
ALTER TABLE `razze_gatti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccini`
--
ALTER TABLE `vaccini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `veterinari`
--
ALTER TABLE `veterinari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appuntamenti`
--
ALTER TABLE `appuntamenti`
  ADD CONSTRAINT `fk_id_gatto_visita` FOREIGN KEY (`id_gatto`) REFERENCES `gatti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_vacc` FOREIGN KEY (`id_vaccino`) REFERENCES `vaccini` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_vet` FOREIGN KEY (`id_veterinario`) REFERENCES `veterinari` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_fascia_appunt` FOREIGN KEY (`id_fascia`) REFERENCES `fasce_orarie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_giorno_appunt` FOREIGN KEY (`id_giorno`) REFERENCES `giorni_settimana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gatti`
--
ALTER TABLE `gatti`
  ADD CONSTRAINT `fk_id_padrone` FOREIGN KEY (`id_padrone`) REFERENCES `padroni` (`id`),
  ADD CONSTRAINT `fk_id_razza` FOREIGN KEY (`id_razza`) REFERENCES `razze_gatti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
