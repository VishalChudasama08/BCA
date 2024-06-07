-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 07:51 PM
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
-- Database: `v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `show_id` int(11) NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `show_id`, `num_tickets`, `total_price`, `booking_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 200.00, '2024-06-07 17:50:52', '2024-06-07 17:50:52', NULL),
(2, 8, 2, 3, 150.00, '2024-06-07 17:50:52', '2024-06-07 17:50:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `duration` varchar(20) NOT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `language` varchar(80) NOT NULL,
  `director` varchar(50) NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `release_date` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `duration`, `rating`, `language`, `director`, `image_location`, `description`, `release_date`, `created_at`, `updated_at`) VALUES
(1, '12th Fail', 'Drama', '2h 27m', 'U', 'Hindi, Tamil, Kannada', 'Vidhu Vinod Chopra', 'images/12th_Fail.jpg', 'Based on Anurag Pathak`s bestselling novel of the same name, 12th Fail depicts the true story of an IPS officer Manoj Kumar Sharma hailing from a small town in Chambal, who fearlessly embraced the idea of restarting his academic journey and reclaiming his destiny at a place where millions of students attempt for the world`s toughest competitive exam, UPSC. The film is not just a chronicle of one man`s journey but a celebration of everyone who dared to look at failures as an opportunity to #Restart.', '3 November 2023', '2024-06-07 17:16:13', NULL),
(2, 'Animal', 'Action, Crime, Drama', '3h 21m', 'A', 'Hindi, Tamil, Telugu, Kannada, Malayalam', 'Sandeep Reddy Vanga', 'images/Animal.jpg', 'This is the story of a son whose love for his father knows no bounds. As their bond begins to fracture, a chain of extraordinary events unfold causing the son to undergo a remarkable transformation consumed by a thirst for vengeance.', '1 December 2023', '2024-06-07 17:16:13', NULL),
(3, 'Avatar: The Way of Water', 'Action, Adventure, Fantasy, Sci-Fi', '3h 12m', 'UA', 'English, Hindi, Tamil, Telugu, Kannada, Malayalam', 'James Cameron', 'images/Avatar_The_Way_of_Water.png', 'Set more than a decade after the events of the first film, \"Avatar The Way of Water\" begins to tell the story of the Sully family (Jake, Neytiri and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive and the tragedies they endure.', '16 December 2022', '2024-06-07 17:16:13', NULL),
(4, 'Avengers: Endgame', 'Action, Adventure, Drama, Sci-Fi', '3h 1m', 'PG-13', 'English, Hindi, Tamil, Telugu, Kannada, Malayalam', 'Anthony RussoJoe Russo', 'images/Avengers_EndGame.jpg', 'The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios` grand conclusion to twenty-two films, \"Avengers: Endgame.\"', '26 April 2019', '2024-06-07 17:16:13', NULL),
(5, 'Chaal Jeevi Laiye', 'Drama, Comedy', '2h 17m', 'U', 'Gujarati', 'Vipul Mehta', 'images/chaal-jivi_laiye.jpg', 'Aditya Parikh and his father Bipin Chandra Parikh begin to explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realizations that strengthens their bond with every situation that tests their drifting relationship.', '1 February 2019', '2024-06-07 17:16:13', NULL),
(6, 'Fast X', 'Action, Adventure, Crime, Thriller', '2h 21m', 'PG-13', 'English, Hindi, Tamil, Telugu', 'Louis Leterrier', 'images/fast_x.jpg', 'Over many missions and against impossible odds, Dom Toretto and his family have outsmarted and outdriven every foe in their path. Now, they must confront the most lethal opponent they`ve ever faced. Fueled by revenge, a terrifying threat emerges from the shadows of the past to shatter Dom`s world and destroy everything -- and everyone -- he loves.', '18 May, 2023', '2024-06-07 17:16:13', NULL),
(7, 'Hi Nanna', 'Drama, Family, Romantic', '2h 35m', 'UA', 'Hindi, Tamil, Telugu, Kannada, Malayalam', 'Shouryuv', 'images/Hi_Nanna_2023.jpg', 'A doting father and his six-year-old`s lives alter when a woman befriends them and empathizes with their past.', '7 December 2023', '2024-06-07 17:16:13', NULL),
(8, 'Interstellar', 'Action, Adventure, Sci-Fi', '2h 49m', 'PG-13', 'English, Hindi', 'Christopher Nolan', 'images/Interstellar_2014.jpg', 'A team of explorers travel beyond this galaxy through a newly discovered wormhole to discover whether mankind has a future among the stars.', '7 November 2014', '2024-06-07 17:16:13', NULL),
(9, 'IO', 'Romance, Sci-Fi', '1h 36m', 'TV-14', 'English', 'Jonathan Helpert', 'images/io_movie.jpg', 'In a post-apocalyptic time, the earth has been rendered toxic, and most of humanity has abandoned the planet and colonised one of Jupiter`s moons, IO. But young scientist Sam Walden has stayed behind and dedicated herself to finding a way for human beings to survive on Earth. After sending out a radio transmission to see if she can locate anyone else, a man named Micah arrives. He believes there is no hope of survival and intends to take the final shuttle to IO in 48 hours.', '18 January 2019', '2024-06-07 17:16:13', NULL),
(10, 'Pirates of the Caribbean: Dead Men Tell No Tales', 'Action, Adventure', '2h 9m', 'PG-13', 'English, Hindi, Tamil, Telugu, Malayalam', 'Joachim Rønning, Espen Sandberg', 'images/Pirate_of_the_Caribbean_Dead_Men_Tell_No_Tales.webp', 'To break the curse of Flying Dutchman, Captain Jack Sparrow and Henry Turner embark on a mission to find the Trident of Poseidon. They also try to stop Captain Salazar who intends to rule the seas.', '26 May 2017', '2024-06-07 17:16:13', NULL),
(11, 'Raabta', 'Action, Romantic', '2h 27m', 'UA', 'Hindi', 'James Cameron', 'images/raaabta_2017.jpg', 'When two souls meet, they are united and that connection lasts forever. A seemingly ordinary boy and girl meet and are instantly drawn to each other in an inexplicable way. Shiv is an easy come-easy go Punjabi from Amritsar, Saira is a beautiful, quirky, slightly odd chocolatier, who has strange dreams. When they meet in her chocolate shop in Budapest, there is an electric connection sparked between them. As a beautiful relationship builds and they fall in love with each other, we are lead to see why.', '9 June 2017', '2024-06-07 17:16:13', NULL),
(12, 'Rampage', 'Action, Adventure', '1h 47m', 'PG-13', 'English, Hindi', 'Brad Peyton', 'images/Rampage.jpg', 'A primatologist teams up with a genetic engineer to stop a gigantic group of animals, including an albino gorilla whom he befriended, after the animals are exposed to an experimental pathogen.', '13 April 2018', '2024-06-07 17:16:13', NULL),
(13, 'Rebel Moon - Part Two: The Scargiver', 'Action, Adventure, Fantasy, Sci-Fi', '2h 2m', 'PG-13', 'English, Hindi, Tamil, Telugu', 'Zack Snyder', 'images/Rebel_Moon_Part_Two_The_Scargiver.webp', 'A colony on the edge of the galaxy fights for survival against a tyrannical ruling force, relying on the efforts of a small group of rebels.', '12 April 2024', '2024-06-07 17:16:13', NULL),
(14, 'Saiyar Mori Re', 'Drama, Romantic', '2h 45m', 'U', 'Gujarati', 'Vishal Vada Vala', 'images/Saiyar_Mori_Re_2022.png', 'Hari lives at a Gaushala with his bapu and transgender faiba. One fine day, while substituting for an odd job he sees Leela for the first time and instantly falls for her. They gradually fall in love but will it stay forever? What will happen when they separate?', '8 July 2022', '2024-06-07 17:16:13', NULL),
(15, 'Thugs of Hindostan', 'Action, Adventure', '2h 44m', 'UA', 'Hindi', ' Vijay Krishna Acharya', 'images/Thugs-of-Hindostan.jpg', 'Vijay Krishna Acharya (Victor), the writer-director of the all-time YRF blockbuster Dhoom:3, teams up once again with Aamir Khan in Thugs of Hindostan along with Amitabh Bachchan to give the audience a never seen before experience of larger than life filmmaking! This YRF film holds a double bonanza by bringing together Amitabh Bachchan and Aamir Khan together for the first time ever. That in itself, is film lore in making! The film is set to treat audiences across age groups with the biggest jaw-dropping action sequences seen by audiences on screen to date. With its edge-of-the-seat thrills and an epic adventure and war on the seas, the film is set to light up this Diwali.', '8 November 2018', '2024-06-07 17:16:13', NULL),
(16, 'Zara Hatke Zara Bachke', 'Comedy, Romance, Drama', '2h 12m', 'UA', 'Hindi, Tamil, Telugu', 'Laxman Utekar', 'images/Zara_Hatke_Zara_Bachke.jpg', 'Kapil and Somya are a happily married couple from Indore who live in a joint family and decide to get a divorce one fine day. Things don`t go as planned as their family gets to know of it, and thus begins a comedy of errors.', '2 June 2023', '2024-06-07 17:16:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `screen_number` int(11) NOT NULL,
  `num_seats` int(11) NOT NULL,
  `seat_structure` text DEFAULT NULL,
  `available_seats` int(11) NOT NULL,
  `booked_seats` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`id`, `theater_id`, `screen_number`, `num_seats`, `seat_structure`, `available_seats`, `booked_seats`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 12, 'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4', 12, 0, '2024-06-07 17:34:31', NULL),
(2, 2, 1, 8, 'A1,A2,A3,A4,B1,B2,B3,B4', 8, 0, '2024-06-07 17:34:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat_bookings`
--

CREATE TABLE `seat_bookings` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `seat_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_bookings`
--

INSERT INTO `seat_bookings` (`id`, `booking_id`, `seat_number`) VALUES
(1, 1, 'A1'),
(2, 1, 'A2'),
(3, 2, 'B1'),
(4, 2, 'B2'),
(5, 2, 'B3');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `show_time` time NOT NULL,
  `show_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `screen_id`, `movie_id`, `show_time`, `show_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '18:00:00', '2023-06-10', '2024-06-07 17:35:48', NULL),
(2, 2, 2, '20:00:00', '2023-06-10', '2024-06-07 17:35:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `facilities` text DEFAULT NULL,
  `number_of_screens` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `name`, `location`, `city`, `state`, `zip_code`, `facilities`, `number_of_screens`, `created_at`, `updated_at`) VALUES
(1, 'Theater 1', '123 Main St', 'City1', 'State1', '12345', 'Parking, Snacks', 5, '2024-06-07 17:27:31', NULL),
(2, 'Theater 2', '456 Broadway', 'City2', 'State2', '67890', 'Parking, Snacks, 3D', 3, '2024-06-07 17:27:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_number`, `date`, `modify_date`) VALUES
(1, 'vishal', 'okay@gmail.com', '74108520', '8320343610', '2024-05-29 13:00:00', NULL),
(8, 'kaushik', 'test@gmail.com', '123456', '9313850547', '2024-06-01 05:14:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `seat_bookings`
--
ALTER TABLE `seat_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `screen_id` (`screen_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat_bookings`
--
ALTER TABLE `seat_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `screens`
--
ALTER TABLE `screens`
  ADD CONSTRAINT `screens_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seat_bookings`
--
ALTER TABLE `seat_bookings`
  ADD CONSTRAINT `seat_bookings_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
