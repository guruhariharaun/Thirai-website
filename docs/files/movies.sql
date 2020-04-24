-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 11:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thirai`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(255) NOT NULL,
  `cookie_value` varchar(255) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_image` varchar(50) NOT NULL,
  `trailer_link` varchar(500) NOT NULL,
  `storyline` mediumtext NOT NULL,
  `director` varchar(30) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `download_link` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `cookie_value`, `movie_name`, `movie_image`, `trailer_link`, `storyline`, `director`, `cast`, `download_link`, `time`) VALUES
(23, 'Joker', 'Joker', 'joker.jpg', 'https://www.youtube.com/embed/zAGVQLHvwOY', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', ' Todd Phillips', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz ', 'theri.torrent', '2020-04-23 09:36:18'),
(35, 'Tamizh Padam 2.0 ', 'Tamizh Padam 2.0 ', 'TamizhPadam2.0.jpg', 'https://www.youtube.com/embed/vFWlCsjWFMw', 'A stringent cop tries all the possible ways to nab a dreaded don who poses a big threat to the society.', 'C.S. Amudhan', ' Jiiva, Manobala, Shiva', '', '2020-04-23 20:46:11'),
(37, 'Raatchasan', 'Raatchasan', 'Raatchasan.jpg', 'https://www.youtube.com/embed/GsrN7rNch9Y', 'Constant rejections in his attempts to become a filmmaker and family constraints force Arun to let go of his dream and take up the job of a Police officer.', 'Ram Kumar', ' Vishnu Vishal, Radha Ravi, Sangili Murugan', '', '2020-04-23 21:04:17'),
(38, 'Darbar', 'Darbar', 'darbar.jpg', 'https://www.youtube.com/embed/1JlLi9pDaJE', 'A police officer on a chase to hunt down a dreaded gangster for fulfilling his own secret agenda.', ' A.R. Murugadoss', 'Rajinikanth, Nayanthara, Nivetha Thomas', '', '2020-04-23 21:05:15'),
(39, 'Vikram Vedha', 'Vikram Vedha', 'vikramvedha.jpg', 'https://www.youtube.com/embed/1sVr-uWZPjE', '', '', '', '', '2020-04-23 21:07:05'),
(40, ' 96', ' 96', '96.jpg', 'https://www.youtube.com/embed/r0synl-lI4I', 'Two high school sweethearts meet at a reunion after 22 years and reminisce about their past over the course of an evening.', 'C. Prem Kumar', ' Vijay Sethupathi, Trisha Krishnan, Varsha Bollamma ', '', '2020-04-23 21:08:25'),
(41, 'Kaithi', 'Kaithi', 'Kaithi.jpg', 'https://www.youtube.com/embed/g79CvhHaj5I', 'A recently released prisoner becomes involved in a chase with criminals as he races against time to drive poisoned cops to hospital in exchange for meeting his daughter.', 'Lokesh Kanagaraj', 'Karthi, Narain, Ramana ', '', '2020-04-23 21:10:07'),
(42, 'Super Deluxe', 'Super Deluxe', 'SuperDeluxe.jpg', 'https://www.youtube.com/embed/3-Xq_Zz3nPA', 'An unfaithful newly-wed wife, an estranged father, a priest and an angry son suddenly find themselves in the most unexpected predicaments, each poised to experience their destiny, all on one fateful day.', 'Thiagarajan Kumararaja', ' Vijay Sethupathi, Fahadh Faasil, Samantha Ruth Prabhu', '', '2020-04-23 21:12:47'),
(43, 'Kannum Kannum Kollaiyadithaal', 'Kannum Kannum Kollaiyadithaal', 'KannumKannumKollaiyadithaal.jpg', 'https://www.youtube.com/embed/hPybzXeEWSI', 'A carefree youngster`s life takes an interesting turn after he meets the girl of his dreams', 'Desingh Periyasamy', 'Dulquer Salmaan, Gautham Vasudev Menon, Ritu Varma ', '', '2020-04-23 21:15:46'),
(44, 'Thadam', 'Thadam', 'Thadam.jpg', 'https://www.youtube.com/embed/sFzCikcEjZY', 'The murder of a youngster creates confusion among cops when they discover the suspect has a lookalike.', 'Magizh Thirumeni', 'Arun Vijay, Tanya Hope, Smruthi Venkat', '', '2020-04-23 21:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
