-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 04:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_theater`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` varchar(50) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Show_id` int(11) NOT NULL,
  `Dates` varchar(50) NOT NULL,
  `NoOfPerson` int(11) NOT NULL,
  `TotalPrice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `UserId`, `Show_id`, `Dates`, `NoOfPerson`, `TotalPrice`) VALUES
(' Platinium52', 2, 3, '', 5, '4350'),
('Platinium32022-09-262', 2, 3, '2022-09-26', 3, 'Rs 2610'),
('Platinium52', 2, 3, '', 5, 'Rs 4350'),
('Platinium62022-10-262', 2, 3, '2022-10-26', 6, 'Rs 5220'),
('Platinium62022-10-292', 2, 3, '2022-10-29', 6, 'Rs 5220'),
('Platinium82022-10-272', 2, 3, '2022-10-27', 8, 'Rs 6960');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_table`
--

CREATE TABLE `cinema_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `capcity` int(11) NOT NULL,
  `cinema_type` varchar(50) NOT NULL,
  `screen_size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema_table`
--

INSERT INTO `cinema_table` (`id`, `name`, `capcity`, `cinema_type`, `screen_size`) VALUES
(3, 'Sec A', 55, '2D', '16:9');

-- --------------------------------------------------------

--
-- Table structure for table `contact.php`
--

CREATE TABLE `contact.php` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact.php`
--

INSERT INTO `contact.php` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Loyal Tech World', 'admin@gmail.com', 'Vhkk', 'ghjdgdgdgdgfjhfgjhfhj'),
(2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie_show`
--

CREATE TABLE `movie_show` (
  `id` int(11) NOT NULL,
  `Movie_id` int(11) NOT NULL,
  `Time` varchar(225) NOT NULL,
  `Theater_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_show`
--

INSERT INTO `movie_show` (`id`, `Movie_id`, `Time`, `Theater_id`, `ticket_id`) VALUES
(3, 4, ' 03:17', 3, 3),
(4, 3, ' ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_theater`
--

CREATE TABLE `movie_theater` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `writter` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `Release_date` varchar(50) NOT NULL,
  `movie_img` varchar(225) NOT NULL,
  `Vid_url` varchar(255) NOT NULL,
  `Rating` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_theater`
--

INSERT INTO `movie_theater` (`id`, `Name`, `director`, `producer`, `writter`, `genre`, `Release_date`, `movie_img`, `Vid_url`, `Rating`, `description`) VALUES
(3, 'Pushpa: The Rise', 'Sukumar', 'Karthika Srinivas, Ruben', 'Karthika Srinivas, Ruben', 'drama', '2022-10-12', '../image/Pushpa_-_The_Rise_(2021_film).jpg', '../videos/SampleVideo_1280x720_1mb.mp4', '5', 'Pushpa: The Rise – Part 01 is a 2021 Indian Telugu-language action drama film[15] written and directed by Sukumar. It stars Allu Arjun as the titular character alongside Fahadh Faasil (his Telugu debut), and Rashmika Mandanna while Jagadeesh Prathap Bandari, Sunil, Rao Ramesh, Dhananjaya, Anasuya Bharadwaj, Ajay and Ajay Ghosh play supporting roles. It is produced by Mythri Movie Makers in association with Muttamsetty Media. '),
(4, 'Smile', 'Parker Finn ', 'Marty Bowen ', ' Marty Bowen', 'Entertainment', '2022-10-19', '../image/Smile.jpg', '../videos/SampleVideo_1280x720_1mb.mp4', '4.5', ''),
(5, 'Running the basses', 'Marty Roberts , Jimmy Womble', 'Robert C.', 'Marty Roberts , Jimmy Wombl', 'Entertainment', '2028-08-23', '../image/Gods-Creatures.jpg', '../videos/SampleVideo_1280x720_1mb.mp4', '3.5', ''),
(6, 'The Woman King ', 'Gina Prince-Bythewood', 'Maria Bello , Dale Butler ', 'Dana Stevens , Maria Bello', 'Entertainment', '2022-10-19', '../image/The-Woman-King.jpg', '../videos/SampleVideo_1280x720_1mb.mp4', '2.5', ''),
(7, 'Running the basses', 'Parker Finn ', 'Karthika Srinivas, Ruben', ' Marty Bowen', 'drama', '2022-10-11', '../image/Chup.jpg', '../videos/SampleVideo_1280x720_1mb.mp4', '5', ''),
(8, 'The Legend of Maula Jatt', 'Bilal Lashari', 'Dr. Asad Jamil Khan', 'Bilal Lashari', 'action drama', '2022-10-13', '../image/MV5BMWMwODY3MzYtYmY2MC00MDMzLWI0ZTgtYTlhODNmNWQzYmUxXkEyXkFqcGdeQXVyODg1MTc3MTM@._V1_.jpg', '../videos/y2mate.com - The Legend of Maula Jatt 2022  Official Theatrical Trailer_v144P.mp4', '5', 'Maula Jatt, a fierce prizefighter with a tortured past seeks vengeance against his arch nemesis Noori Natt, the most feared warrior in the land of Punjab.');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `Type` varchar(225) NOT NULL,
  `Price` int(11) NOT NULL,
  `Screen_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `Type`, `Price`, `Screen_type`) VALUES
(1, 'Silver', 200, '2D'),
(2, 'Platinium', 800, '3D'),
(3, 'Platinium', 1000, 'BOTH'),
(4, 'Silver', 800, '2D'),
(5, 'Gold', 1000, '3D'),
(6, 'Silver', 800, '3D'),
(7, 'Platinium', 1000, '3D'),
(8, 'Silver', 800, '2D');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', 'admin'),
(2, 'Jawad', 'jawad@gmail.com', '123', 'user'),
(3, 'fahad', 'fahad@gmail.com', '12345', 'user'),
(4, 'shaheer', 'Shaheer@gmail.com', '12345', 'user'),
(5, 'zubair', 'Zubair@gmail.com', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `Show_id` (`Show_id`);

--
-- Indexes for table `cinema_table`
--
ALTER TABLE `cinema_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact.php`
--
ALTER TABLE `contact.php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_show`
--
ALTER TABLE `movie_show`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_show_ibfk_1` (`Movie_id`),
  ADD KEY `Theater_id` (`Theater_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `movie_theater`
--
ALTER TABLE `movie_theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinema_table`
--
ALTER TABLE `cinema_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact.php`
--
ALTER TABLE `contact.php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie_show`
--
ALTER TABLE `movie_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie_theater`
--
ALTER TABLE `movie_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Show_id`) REFERENCES `movie_show` (`id`);

--
-- Constraints for table `movie_show`
--
ALTER TABLE `movie_show`
  ADD CONSTRAINT `movie_show_ibfk_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie_theater` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_show_ibfk_2` FOREIGN KEY (`Theater_id`) REFERENCES `cinema_table` (`id`),
  ADD CONSTRAINT `movie_show_ibfk_3` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
