-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 07:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_asesor`
--

CREATE TABLE `data_asesor` (
  `id_assessor` int(11) NOT NULL,
  `assessor_name` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `nik_number` varchar(255) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `bnsp_reg_num` varchar(255) NOT NULL,
  `exp_date_sertificate` date NOT NULL,
  `institutional_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_asesor`
--

INSERT INTO `data_asesor` (`id_assessor`, `assessor_name`, `tempat_lahir`, `birth_date`, `nik_number`, `gender`, `nationality`, `address`, `email`, `phone_number`, `education_level`, `bnsp_reg_num`, `exp_date_sertificate`, `institutional_name`) VALUES
(1, 'Ghania Shafiqa Raisa', 'Jakarta', '2003-09-22', '1050245708900002', 'Perempuan', 'WNI', 'Perumahan ABC', 'ghaniashafiqaa@gmail.com', '081314152801', 'S3', '1344578901801', '2024-12-26', 'Politeknik Negeri Jakarta'),
(2, 'Dea ', 'Jakarta', '2003-06-11', '4050245708900002', 'Perempuan', 'WNI', 'Perum obqbfo', 'dea@gmail.com', '081414142804', 'S2', '013613016401', '2025-02-21', 'Universitas Indonesia'),
(3, 'Kanira', 'Bandung', '2003-11-20', '3000245708900002', 'Perempuan', 'WNI', 'Di Rumah', 'kanira@gmail.com', '082055664400', 'S3', '01649164691649', '2025-11-20', 'ITB'),
(4, 'Cocolatos', 'Depok', '2007-03-09', '9050245708900002', 'Laki-laki', 'WNA', 'Tinggal di blok R2', 'cocolatos@gmail.com', '081514130199', 's2', '104169174169461', '2025-08-08', 'IPB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_asesor`
--
ALTER TABLE `data_asesor`
  ADD PRIMARY KEY (`id_assessor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_asesor`
--
ALTER TABLE `data_asesor`
  MODIFY `id_assessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
