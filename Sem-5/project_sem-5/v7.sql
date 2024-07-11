-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 10:02 PM
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
-- Database: `v7`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `movies_title` varchar(250) NOT NULL,
  `cinema_name` varchar(255) NOT NULL,
  `number_of_seats` int(5) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_name`, `movies_title`, `cinema_name`, `number_of_seats`, `total_price`, `booking_date`, `updated_at`) VALUES
(1, 'Kartik', 'Raabta', 'Roongta Cinemas, Shyam Mandir Vesu: Surat', 2, 360.00, '2024-07-06 05:07:16', '2024-07-10 22:14:16'),
(2, 'Kartik', 'Avatar: The Way of Water', 'Galaxy Cinema: Rajkot', 1, 280.00, '2024-07-06 13:03:07', '2024-07-10 22:19:58'),
(3, 'Kartik', 'Rebel Moon - Part Two: The Scargiver', 'Rajhans Cinemas: Gandhidham', 1, 270.00, '2024-07-06 13:30:08', '2024-07-10 22:14:32'),
(4, 'vishanu', 'Raabta', 'INOX: Reliance Mega Mall, Rajkot', 2, 360.00, '2024-07-06 13:36:03', '2024-07-10 22:16:07'),
(5, 'Kavit Fofariya', 'Avengers: Endgame', 'Cosmoplex Multiplex: Rajkot', 1, 280.00, '2024-07-07 08:58:29', '2024-07-10 22:15:07'),
(6, 'vishanu', 'Raabta', 'Galaxy Cinema: Rajkot', 2, 420.00, '2024-07-08 03:26:12', '2024-07-10 22:17:24'),
(7, 'vishanu', 'Raabta', 'Rajhans Cinemas: Gandhidham', 1, 200.00, '2024-07-08 03:41:16', '2024-07-10 22:17:30'),
(8, 'vishanu', 'Animal', 'Roongta Cinemas, Shyam Mandir Vesu: Surat', 1, 270.00, '2024-07-08 03:52:16', '2024-07-10 22:19:07'),
(9, 'vishanu', 'Thugs of Hindostan', 'Galaxy Cinema: Rajkot', 3, 270.00, '2024-07-08 03:58:20', '2024-07-10 22:18:06'),
(10, 'vishal', 'Avengers: Endgame', 'Rajhans Cinemas: Gandhidham', 1, 320.00, '2024-07-08 04:21:15', '2024-07-10 22:13:16'),
(11, 'vishal', 'Zara Hatke Zara Bachke', 'Rajhans Cinemas: Gandhidham', 1, 200.00, '2024-07-08 04:25:47', '2024-07-10 22:13:34'),
(12, 'kaushik', 'Saiyar Mori Re', 'INOX: Reliance Mega Mall, Rajkot', 1, 140.00, '2024-07-08 08:24:31', '2024-07-10 22:11:30'),
(13, 'kaushik', 'Pirates of the Caribbean: Dead Men Tell No Tales', 'Galaxy Cinema: Rajkot', 1, 310.00, '2024-07-08 18:26:27', '2024-07-10 22:11:51'),
(14, 'kaushik', 'Raabta', 'INOX: Reliance Mega Mall, Rajkot', 1, 140.00, '2024-07-08 21:07:35', '2024-07-10 22:12:21'),
(15, 'admin', 'Hi Nanna', 'Galaxy Cinema: Rajkot', 1, 220.00, '2024-07-09 17:04:09', '2024-07-10 22:10:17'),
(16, 'Kavit Fofariya', 'Rebel Moon - Part Two: The Scargiver', 'Wide Angle: Mehsana', 1, 260.00, '2024-07-11 09:41:52', NULL),
(17, 'vishal', 'Fast X', 'City Gold Cinema: Ahmedabad', 2, 320.00, '2024-07-11 18:09:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `facilities` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `price_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `name`, `location`, `facilities`, `created_at`, `updated_at`, `price_level`) VALUES
(1, 'Cosmoplex Multiplex: Rajkot', 'Mota Mauva Road, Kalawad Road, Near Rangoli Park Restaurant, Rajkot, Gujarat 360001, India', 'Food Court', '2024-06-10 17:48:44', '2024-07-03 10:43:58', '20,80,130'),
(2, 'Connplex Signature: Gandhinagar', '301-308, Shreeji Signature, Sargasan, Near Reliance Crossroad, Gandhinagar, Gujarat 382028, India', 'Ticket Cancellation, F&B, MTicket, Parking Facility, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:43:46', '10,40,90'),
(3, 'Cinepolis Vandana: Rajkot', 'Vandana Heritage 4th and 5th Floor, Opposite Atika Railway Crossing, Gondal Road, Rajkot, Gujarat 360004, India', 'F&B, MTicket, Parking Facility, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:40:58', '20,50,100'),
(4, 'INOX: Reliance Mega Mall, Rajkot', 'INOX Leisure Ltd., 2nd Floor, Reliance Mall, 150 Feet Ring Road, Near Nana Mauva Circle, Rajkot, Gujarat 360005, India', 'Ticket Cancellation, F&B, MTicket', '2024-06-10 17:48:44', '2024-07-03 10:44:06', '30,60,100'),
(5, 'Mehul Cinemax: Jamnagar', '15, Street No.4, Shivam Park, Ajanta Society, Near - Hotel Vishal International, Jamnagar, Gujarat 361006, India', 'Food Court', '2024-06-10 17:48:44', '2024-07-03 10:41:27', '10,50,80'),
(6, 'Rajhans Cinemas: Gandhidham', 'Aditya Mall And Multiplex, DC 2, Gurukul Road, Gandhidham, Gujarat 370201, India', 'F&B, MTicket, Parking Facility, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:44:33', '30,60,120'),
(7, 'City Gold Cinema: Ahmedabad', 'Jio Fashion Factory, B/h, NH228, Shyamal, Nehru Nagar, Ahmedabad, Gujarat, 380015', 'Ticket Cancellation, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:34:18', '20,50,80'),
(8, 'Galaxy Cinema: Rajkot', 'Race Course Ring Road, Next To Police Commissioner Office, Rajkot, Gujarat, 360001', 'Ticket Cancellation, F&B, MTicket, Recliner Seats, Parking Facility, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:44:40', '40,80,130'),
(9, 'Roongta Cinemas, Shyam Mandir Vesu: Surat', '5th Floor, Roongta Cinemas, Roongta Signature, Vesu, Opposite Shyam Baba Mandir, Surat, Gujarat 395007, India', 'Ticket Cancellation, F&B, MTicket, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:41:50', '40,100,150'),
(10, 'Wide Angle: Mehsana', 'Nagalpur Village, Near Khari River Bridge, Mehsana, Gujarat 384002, India', 'Parking Facility, Food Court', '2024-06-10 17:48:44', '2024-07-03 10:42:46', '10,60,110');

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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `movie_price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `duration`, `rating`, `language`, `director`, `image_location`, `description`, `release_date`, `created_at`, `updated_at`, `movie_price`) VALUES
(1, '12th Fail', 'Drama', '2h 27m', 'U', 'Hindi', 'Vidhu Vinod Chopra', 'images/12th_Fail.jpg', 'Based on Anurag Pathak`s bestselling novel of the same name, 12th Fail depicts the true story of an IPS officer Manoj Kumar Sharma hailing from a small town in Chambal, who fearlessly embraced the idea of restarting his academic journey and reclaiming his destiny at a place where millions of students attempt for the world`s toughest competitive exam, UPSC. The film is not just a chronicle of one man`s journey but a celebration of everyone who dared to look at failures as an opportunity to #Restart.', '3 November 2023', '2024-06-07 17:16:13', '2024-07-03 06:18:24', 100),
(2, 'Animal', 'Action, Crime, Drama', '3h 21m', 'A', 'Hindi', 'Sandeep Reddy Vanga', 'images/Animal.jpg', 'This is the story of a son whose love for his father knows no bounds. As their bond begins to fracture, a chain of extraordinary events unfold causing the son to undergo a remarkable transformation consumed by a thirst for vengeance.', '1 December 2023', '2024-06-07 17:16:13', '2024-07-03 10:35:01', 120),
(3, 'Avatar: The Way of Water', 'Action, Adventure, Fantasy, Sci-Fi', '3h 12m', 'UA', 'English, Hindi', 'James Cameron', 'images/Avatar_The_Way_of_Water.png', 'Set more than a decade after the events of the first film, \"Avatar The Way of Water\" begins to tell the story of the Sully family (Jake, Neytiri and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive and the tragedies they endure.', '16 December 2022', '2024-06-07 17:16:13', '2024-07-03 10:35:25', 200),
(4, 'Avengers: Endgame', 'Action, Adventure, Drama, Sci-Fi', '3h 1m', 'PG-13', 'English, Hindi', 'Anthony RussoJoe Russo', 'images/Avengers_EndGame.jpg', 'The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios` grand conclusion to twenty-two films, \"Avengers: Endgame.\"', '26 April 2019', '2024-06-07 17:16:13', '2024-07-03 10:35:40', 200),
(5, 'Chaal Jeevi Laiye', 'Drama, Comedy', '2h 17m', 'U', 'Gujarati', 'Vipul Mehta', 'images/chaal-jivi_laiye.jpg', 'Aditya Parikh and his father Bipin Chandra Parikh begin to explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realizations that strengthens their bond with every situation that tests their drifting relationship.', '1 February 2019', '2024-06-07 17:16:13', '2024-07-03 10:35:51', 80),
(6, 'Fast X', 'Action, Adventure, Crime, Thriller', '2h 21m', 'PG-13', 'English, Hindi', 'Louis Leterrier', 'images/fast_x.jpg', 'Over many missions and against impossible odds, Dom Toretto and his family have outsmarted and outdriven every foe in their path. Now, they must confront the most lethal opponent they`ve ever faced. Fueled by revenge, a terrifying threat emerges from the shadows of the past to shatter Dom`s world and destroy everything -- and everyone -- he loves.', '18 May, 2023', '2024-06-07 17:16:13', '2024-07-03 10:36:03', 80),
(7, 'Hi Nanna', 'Drama, Family, Romantic', '2h 35m', 'UA', 'Hindi', 'Shouryuv', 'images/Hi_Nanna_2023.jpg', 'A doting father and his six-year-old`s lives alter when a woman befriends them and empathizes with their past.', '7 December 2023', '2024-06-07 17:16:13', '2024-07-03 10:36:21', 90),
(8, 'Interstellar', 'Action, Adventure, Sci-Fi', '2h 49m', 'PG-13', 'English, Hindi', 'Christopher Nolan', 'images/Interstellar_2014.jpg', 'A team of explorers travel beyond this galaxy through a newly discovered wormhole to discover whether mankind has a future among the stars.', '7 November 2014', '2024-06-07 17:16:13', '2024-07-03 10:36:41', 70),
(9, 'IO', 'Romance, Sci-Fi', '1h 36m', 'TV-14', 'English', 'Jonathan Helpert', 'images/io_movie.jpg', 'In a post-apocalyptic time, the earth has been rendered toxic, and most of humanity has abandoned the planet and colonised one of Jupiter`s moons, IO. But young scientist Sam Walden has stayed behind and dedicated herself to finding a way for human beings to survive on Earth. After sending out a radio transmission to see if she can locate anyone else, a man named Micah arrives. He believes there is no hope of survival and intends to take the final shuttle to IO in 48 hours.', '18 January 2019', '2024-06-07 17:16:13', '2024-07-03 10:36:54', 110),
(10, 'Pirates of the Caribbean: Dead Men Tell No Tales', 'Action, Adventure', '2h 9m', 'PG-13', 'English, Hindi', 'Joachim Rønning, Espen Sandberg', 'images/Pirate_of_the_Caribbean_Dead_Men_Tell_No_Tales.webp', 'To break the curse of Flying Dutchman, Captain Jack Sparrow and Henry Turner embark on a mission to find the Trident of Poseidon. They also try to stop Captain Salazar who intends to rule the seas.', '26 May 2017', '2024-06-07 17:16:13', '2024-07-03 10:37:06', 180),
(11, 'Raabta', 'Action, Romantic', '2h 27m', 'UA', 'Hindi', 'James Cameron', 'images/raaabta_2017.jpg', 'When two souls meet, they are united and that connection lasts forever. A seemingly ordinary boy and girl meet and are instantly drawn to each other in an inexplicable way. Shiv is an easy come-easy go Punjabi from Amritsar, Saira is a beautiful, quirky, slightly odd chocolatier, who has strange dreams. When they meet in her chocolate shop in Budapest, there is an electric connection sparked between them. As a beautiful relationship builds and they fall in love with each other, we are lead to see why.', '9 June 2017', '2024-06-07 17:16:13', '2024-07-03 10:37:17', 80),
(12, 'Rampage', 'Action, Adventure', '1h 47m', 'PG-13', 'English, Hindi', 'Brad Peyton', 'images/Rampage.jpg', 'A primatologist teams up with a genetic engineer to stop a gigantic group of animals, including an albino gorilla whom he befriended, after the animals are exposed to an experimental pathogen.', '13 April 2018', '2024-06-07 17:16:13', '2024-07-03 10:37:28', 130),
(13, 'Rebel Moon - Part Two: The Scargiver', 'Action, Adventure, Fantasy, Sci-Fi', '2h 2m', 'PG-13', 'English, Hindi', 'Zack Snyder', 'images/Rebel_Moon_Part_Two_The_Scargiver.webp', 'A colony on the edge of the galaxy fights for survival against a tyrannical ruling force, relying on the efforts of a small group of rebels.', '12 April 2024', '2024-06-07 17:16:13', '2024-07-03 10:37:35', 150),
(14, 'Saiyar Mori Re', 'Drama, Romantic', '2h 45m', 'U', 'Gujarati', 'Vishal Vada Vala', 'images/Saiyar_Mori_Re_2022.png', 'Hari lives at a Gaushala with his bapu and transgender faiba. One fine day, while substituting for an odd job he sees Leela for the first time and instantly falls for her. They gradually fall in love but will it stay forever? What will happen when they separate?', '8 July 2022', '2024-06-07 17:16:13', '2024-07-03 10:37:45', 80),
(15, 'Thugs of Hindostan', 'Action, Adventure', '2h 44m', 'UA', 'Hindi', ' Vijay Krishna Acharya', 'images/Thugs-of-Hindostan.jpg', 'Vijay Krishna Acharya (Victor), the writer-director of the all-time YRF blockbuster Dhoom:3, teams up once again with Aamir Khan in Thugs of Hindostan along with Amitabh Bachchan to give the audience a never seen before experience of larger than life filmmaking! This YRF film holds a double bonanza by bringing together Amitabh Bachchan and Aamir Khan together for the first time ever. That in itself, is film lore in making! The film is set to treat audiences across age groups with the biggest jaw-dropping action sequences seen by audiences on screen to date. With its edge-of-the-seat thrills and an epic adventure and war on the seas, the film is set to light up this Diwali.', '8 November 2018', '2024-06-07 17:16:13', '2024-07-03 10:37:55', 50),
(16, 'Zara Hatke Zara Bachke', 'Comedy, Romance, Drama', '2h 12m', 'UA', 'Hindi', 'Laxman Utekar', 'images/Zara_Hatke_Zara_Bachke.jpg', 'Kapil and Somya are a happily married couple from Indore who live in a joint family and decide to get a divorce one fine day. Things don`t go as planned as their family gets to know of it, and thus begins a comedy of errors.', '2 June 2023', '2024-06-07 17:16:13', '2024-07-03 10:38:06', 80);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `seat_structure` text DEFAULT NULL,
  `no_seat` text DEFAULT NULL,
  `available_seats` int(11) DEFAULT NULL,
  `booked_seats_name` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `cinema_id`, `total_seats`, `seat_structure`, `no_seat`, `available_seats`, `booked_seats_name`, `created_at`, `updated_at`) VALUES
(1, 10, 176, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\', \'A14\', \'A15\', \'A16\', \'A17\', \'A18\', \'A19\', \'A20\', \'A21\', \'A22\', \'A23\', \'A24\', \'A25\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\', \'B14\', \'B15\', \'B16\', \'B17\', \'B18\', \'B19\', \'B20\', \'B21\', \'B22\', \'B23\', \'B24\', \'B25\'], [1],  [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\', \'C14\', \'C15\', \'C16\', \'C17\', \'C18\', \'C19\', \'C20\', \'C21\', \'C22\', \'C23\', \'C24\', \'C25\'], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\', \'D14\', \'D15\', \'D16\', \'D17\', \'D18\', \'D19\', \'D20\', \'D21\', \'D22\', \'D23\', \'D24\', \'D25\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\', \'E14\', \'E15\', \'E16\', \'E17\', \'E18\', \'E19\', \'E20\', \'E21\', \'E22\', \'E23\', \'E24\', \'E25\'], [2], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\', \'F14\', \'F15\', \'F16\', \'F17\', \'F18\', \'F19\', \'F20\', \'F21\', \'F22\', \'F23\', \'F24\', \'F25\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\', \'G14\', \'G15\', \'G16\', \'G17\', \'G18\', \'G19\', \'G20\', \'G21\', \'G22\', \'G23\', \'G24\', \'G25\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\', \'H14\', \'H15\', \'H16\', \'H17\', \'H18\', \'H19\', \'H20\', \'H21\', \'H22\', \'H23\', \'H24\', \'H25\'], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\', \'I14\', \'I15\', \'I16\', \'I17\', \'I18\', \'I19\', \'I20\', \'I21\', \'I22\', \'I23\', \'I24\', \'I25\']]', '[\'A1\', \'A2\', \'A3\', \'A13\', \'A23\', \'A24\', \'A25\', \'B1\', \'B2\', \'B3\', \'B13\', \'B23\', \'B24\', \'B25\', \'C1\', \'C2\', \'C13\', \'C24\', \'C25\', \'D1\', \'D2\', \'D13\', \'D24\', \'D25\', \'E1\', \'E2\', \'E13\', \'E24\', \'E25\', \'F1\', \'F7\', \'F13\', \'F19\', \'F25\', \'G1\', \'G7\', \'G13\', \'G19\', \'G25\', \'H1\', \'H7\', \'H13\', \'H19\', \'H25\', \'I1\', \'I7\', \'I13\', \'I19\', \'I25\']', 151, 'I20, F14, B17, B16, I4, I5, A11, A12, C4, E14, E15, G10, G11, G15, H16, H22, H23, J10, J11, D12, D14, D15, D16, F8, F9', '2024-06-12 18:04:33', '2024-07-11 09:46:00'),
(2, 9, 120, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\'], [2], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\'], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\']]', '[\'A7\', \'B7\', \'C7\', \'D7\', \'E7\', \'F7\', \'G7\', \'H7\', \'I7\', \'J7\']', 102, 'H13, J10, J11, C3, C5, C8, J9, J8, I6, I4, I5, G1, G2, B10, B11, D8, D9, D10', '2024-06-12 18:04:33', '2024-07-06 13:15:45'),
(3, 8, 80, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\'], [2], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\']]', '[\'A6\', \'A7\', \'B6\', \'B7\', \'C6\', \'C7\', \'D6\', \'D7\', \'E6\', \'E7\', \'F6\', \'F7\', \'G6\', \'G7\', \'H6\', \'H7\']', 68, 'C8, C9, C10, H5, F8, G8, G9, F4, F3, F2, E9, E10', '2024-06-12 18:04:33', '2024-07-09 17:06:13'),
(4, 7, 142, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\', \'A14\', \'A15\', \'A16\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\', \'B14\', \'B15\', \'B16\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\', \'C14\', \'C15\', \'C16\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\', \'D14\', \'D15\', \'D16\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\', \'E14\', \'E15\', \'E16\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\', \'F14\', \'F15\', \'F16\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\', \'G14\', \'G15\', \'G16\'], [2], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\', \'H14\', \'H15\', \'H16\'], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\', \'I14\', \'I15\', \'I16\'], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\', \'J14\', \'J15\', \'J16\']]', '[\'A8\', \'A9\', \'B8\', \'B9\', \'C8\', \'C9\', \'D8\', \'D9\', \'E8\', \'E9\', \'F8\', \'F9\', \'G8\', \'G9\', \'H8\', \'H9\', \'I8\', \'I9\']', 140, 'J8, J9 ', '2024-07-11 17:47:40', '2024-07-11 18:09:34'),
(5, 6, 144, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\', \'A14\', \'A15\', \'A16\', \'A17\', \'A18\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\', \'B14\', \'B15\', \'B16\', \'B17\', \'B18\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\', \'C14\', \'C15\', \'C16\', \'C17\', \'C18\'], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\', \'D14\', \'D15\', \'D16\', \'D17\', \'D18\'], [1], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\', \'E14\', \'E15\', \'E16\', \'E17\', \'E18\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\', \'F14\', \'F15\', \'F16\', \'F17\', \'F18\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\', \'G14\', \'G15\', \'G16\', \'G17\', \'G18\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\', \'H14\', \'H15\', \'H16\', \'H17\', \'H18\'], [2], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\', \'I14\', \'I15\', \'I16\', \'I17\', \'I18\'], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\', \'J14\', \'J15\', \'J16\', \'J17\', \'J18\'], [\'K1\', \'K2\', \'K3\', \'K4\', \'K5\', \'K6\', \'K7\', \'K8\', \'K9\', \'K10\', \'K11\', \'K12\', \'K13\', \'K14\', \'K15\', \'K16\', \'K17\', \'K18\']]', '[\'A1\', \'A2\', \'A3\', \'A9\', \'A10\', \'A16\', \'A17\', \'A18\', \'B1\', \'B2\', \'B3\', \'B9\', \'B10\', \'B16\', \'B17\', \'B18\', \'C1\', \'C2\', \'C3\', \'C9\', \'C10\', \'C16\', \'C17\', \'C18\', \'D1\', \'D2\', \'D3\', \'D9\', \'D10\', \'D16\', \'D17\', \'D18\', \'E1\', \'E6\', \'E13\', \'E18\', \'F1\', \'F6\', \'F13\', \'F18\', \'G1\', \'G6\', \'G13\', \'G18\', \'H1\', \'H6\', \'H13\', \'H18\', \'I6\', \'I13\', \'J6\', \'J13\', \'K6\', \'K13\']', NULL, NULL, '2024-07-11 18:07:34', '2024-07-11 19:58:39'),
(6, 5, 280, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\', \'A14\', \'A15\', \'A16\', \'A17\', \'A18\', \'A19\', \'A20\', \'A21\', \'A22\', \'A23\', \'A24\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\', \'B14\', \'B15\', \'B16\', \'B17\', \'B18\', \'B19\', \'B20\', \'B21\', \'B22\', \'B23\', \'B24\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\', \'C14\', \'C15\', \'C16\', \'C17\', \'C18\', \'C19\', \'C20\', \'C21\', \'C22\', \'C23\', \'C24\'], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\', \'D14\', \'D15\', \'D16\', \'D17\', \'D18\', \'D19\', \'D20\', \'D21\', \'D22\', \'D23\', \'D24\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\', \'E14\', \'E15\', \'E16\', \'E17\', \'E18\', \'E19\', \'E20\', \'E21\', \'E22\', \'E23\', \'E24\'], [1], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\', \'F14\', \'F15\', \'F16\', \'F17\', \'F18\', \'F19\', \'F20\', \'F21\', \'F22\', \'F23\', \'F24\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\', \'G14\', \'G15\', \'G16\', \'G17\', \'G18\', \'G19\', \'G20\', \'G21\', \'G22\', \'G23\', \'G24\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\', \'H14\', \'H15\', \'H16\', \'H17\', \'H18\', \'H19\', \'H20\', \'H21\', \'H22\', \'H23\', \'H24\'], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\', \'I14\', \'I15\', \'I16\', \'I17\', \'I18\', \'I19\', \'I20\', \'I21\', \'I22\', \'I23\', \'I24\'], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\', \'J14\', \'J15\', \'J16\', \'J17\', \'J18\', \'J19\', \'J20\', \'J21\', \'J22\', \'J23\', \'J24\'], [2], [\'K1\', \'K2\', \'K3\', \'K4\', \'K5\', \'K6\', \'K7\', \'K8\', \'K9\', \'K10\', \'K11\', \'K12\', \'K13\', \'K14\', \'K15\', \'K16\', \'K17\', \'K18\', \'K19\', \'K20\', \'K21\', \'K22\', \'K23\', \'K24\'], [\'L1\', \'L2\', \'L3\', \'L4\', \'L5\', \'L6\', \'L7\', \'L8\', \'L9\', \'L10\', \'L11\', \'L12\', \'L13\', \'L14\', \'L15\', \'L16\', \'L17\', \'L18\', \'L19\', \'L20\', \'L21\', \'L22\', \'L23\', \'L24\'], [\'M1\', \'M2\', \'M3\', \'M4\', \'M5\', \'M6\', \'M7\', \'M8\', \'M9\', \'M10\', \'M11\', \'M12\', \'M13\', \'M14\', \'M15\', \'M16\', \'M17\', \'M18\', \'M19\', \'M20\', \'M21\', \'M22\', \'M23\', \'M24\'], [\'N1\', \'N2\', \'N3\', \'N4\', \'N5\', \'N6\', \'N7\', \'N8\', \'N9\', \'N10\', \'N11\', \'N12\', \'N13\', \'N14\', \'N15\', \'N16\', \'N17\', \'N18\', \'N19\', \'N20\', \'N21\', \'N22\', \'N23\', \'N24\'], [\'O1\', \'O2\', \'O3\', \'O4\', \'O5\', \'O6\', \'O7\', \'O8\', \'O9\', \'O10\', \'O11\', \'O12\', \'O13\', \'O14\', \'O15\', \'O16\', \'O17\', \'O18\', \'O19\', \'O20\', \'O21\', \'O22\', \'O23\', \'O24\']]', '[\'A6\', \'A7\', \'A16\', \'A17\', \'B6\', \'B7\', \'B16\', \'B17\', \'C6\', \'C7\', \'C16\', \'C17\', \'D6\', \'D7\', \'D16\', \'D17\', \'E6\', \'E7\', \'E16\', \'E17\', \'E21\', \'E22\', \'E23\', \'E24\', \'F6\', \'F7\', \'F16\', \'F17\', \'F21\', \'F22\', \'F23\', \'F24\', \'G6\', \'G7\', \'G16\', \'G17\', \'G21\', \'G22\', \'G23\', \'G24\', \'H6\', \'H7\', \'H16\', \'H17\', \'H21\', \'H22\', \'H23\', \'H24\', \'I6\', \'I7\', \'I16\', \'I17\', \'I21\', \'I22\', \'I23\', \'I24\', \'J6\', \'J7\', \'J16\', \'J17\', \'K6\', \'K7\', \'K16\', \'K17\', \'L6\', \'L7\', \'L16\', \'L17\', \'M6\', \'M7\', \'M16\', \'M17\', \'N6\', \'N7\', \'N16\', \'N17\', \'O6\', \'O7\', \'O16\', \'O17\']', NULL, NULL, '2024-07-11 18:18:37', NULL),
(7, 4, 132, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\'], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\'],[1], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\'], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\'],[2], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\'], [\'K1\', \'K2\', \'K3\', \'K4\', \'K5\', \'K6\', \'K7\', \'K8\', \'K9\', \'K10\', \'K11\', \'K12\', \'K13\']]', '[\'A7\', \'B7\', \'C7\', \'D7\', \'E7\', \'F7\', \'G7\', \'H7\', \'I7\', \'J7\', \'K7\']', NULL, NULL, '2024-07-11 18:26:01', '2024-07-11 18:27:51'),
(8, 3, 126, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\', \'A14\', \'A15\', \'A16\', \'A17\', \'A18\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\', \'B14\', \'B15\', \'B16\', \'B17\', \'B18\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\', \'C14\', \'C15\', \'C16\', \'C17\', \'C18\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\', \'D14\', \'D15\', \'D16\', \'D17\', \'D18\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\', \'E14\', \'E15\', \'E16\', \'E17\', \'E18\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\', \'F14\', \'F15\', \'F16\', \'F17\', \'F18\'], [2], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\', \'G14\', \'G15\', \'G16\', \'G17\', \'G18\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\', \'H14\', \'H15\', \'H16\', \'H17\', \'H18\'], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\', \'I14\', \'I15\', \'I16\', \'I17\', \'I18\']]', '[\'A1\', \'A2\', \'A9\', \'A10\', \'A17\', \'A18\', \'B1\', \'B2\', \'B9\', \'B10\', \'B17\', \'B18\', \'C1\', \'C2\', \'C9\', \'C10\', \'C17\', \'C18\', \'D1\', \'D9\', \'D10\', \'D18\', \'E1\', \'E9\', \'E10\', \'E18\', \'F1\', \'F9\', \'F10\', \'F18\', \'G9\', \'G10\', \'H9\', \'H10\', \'I9\', \'I10\']', NULL, NULL, '2024-07-11 18:33:53', '2024-07-11 19:33:25'),
(9, 2, 62, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\'], [2], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\']]', '[\'A12\', \'A13\', \'B7\', \'B8\', \'B12\', \'B13\', \'C7\', \'C8\', \'C12\', \'C13\', \'D7\', \'D8\', \'D12\', \'D13\', \'E7\', \'E8\']', NULL, NULL, '2024-07-11 18:39:25', '2024-07-11 19:00:40'),
(10, 1, 70, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\'], [2], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\']]', '[\'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'B6\', \'B7\', \'C6\', \'C7\', \'D6\', \'D7\', \'E6\', \'E7\', \'F6\', \'F7\', \'G6\', \'G7\']', NULL, NULL, '2024-07-11 18:43:16', '2024-07-11 18:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `show_time` time NOT NULL,
  `show_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `cinema_id`, `show_time`, `show_date`, `created_at`, `updated_at`) VALUES
(1, 1, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(2, 1, '00:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(3, 1, '15:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(4, 1, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(5, 1, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(6, 1, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(7, 1, '20:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(8, 1, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(9, 1, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(10, 2, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(11, 2, '00:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(12, 2, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(13, 2, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(14, 2, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(15, 2, '20:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(16, 2, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(17, 2, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(18, 3, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(19, 3, '00:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(20, 3, '15:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(21, 3, '19:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(22, 3, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(23, 3, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(24, 3, '20:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(25, 3, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(26, 4, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(27, 4, '00:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(28, 4, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(29, 4, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(30, 4, '13:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(31, 4, '20:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(32, 4, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(33, 4, '16:00:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(34, 4, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(35, 5, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(36, 5, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(37, 5, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(38, 5, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(39, 6, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(40, 6, '00:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(41, 6, '15:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(42, 6, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(43, 6, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(44, 6, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(45, 6, '20:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(46, 6, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(47, 6, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(48, 7, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(49, 7, '19:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(50, 7, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(51, 7, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(52, 7, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(53, 7, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(54, 8, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(55, 8, '00:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(56, 8, '15:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(57, 8, '19:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(58, 8, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(59, 8, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(60, 8, '13:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(61, 8, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(62, 8, '20:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(63, 8, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(64, 8, '16:00:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(65, 8, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(66, 9, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(67, 9, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(68, 9, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(69, 10, '09:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(70, 10, '19:00:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(71, 10, '22:30:00', '2024-12-18', '2024-06-10 18:17:17', NULL),
(72, 10, '10:00:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(73, 10, '16:30:00', '2024-12-19', '2024-06-10 18:17:17', NULL),
(74, 10, '10:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL),
(75, 10, '19:30:00', '2024-12-20', '2024-06-10 18:17:17', NULL);

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
  `security_question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_number`, `security_question`, `answer`, `date`, `modify_date`) VALUES
(1, 'admin', 'okay@gmail.com', 'f97db60c120efd65f737b8c2122f13ec', '8320343610', 'What is your nickname ?', 'admin', '2024-07-05 10:11:46', '2024-07-07 08:40:03'),
(2, 'vishal', 'vishal@gmail.com', 'a49dbc19f3fa835f2786ad4de7966252', '7490943610', 'What\'s your favorite number in 0 to 9 ?', '8', '2024-07-05 10:12:56', '2024-07-07 08:22:41'),
(3, 'kaushik', 'kaushik@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9313850547', 'What\'s your favorite color ?', 'blue', '2024-07-05 10:12:56', '2024-07-07 09:05:42'),
(4, 'vishanu', 'visu@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', '8320395344', 'What is your nickname ?', 'visu', '2024-07-05 10:52:24', '2024-07-07 09:08:38'),
(5, 'Kartik', 'kartik@gmail.com', '28c1309d26f0e4da9c5e7e592dbb63e9', '8732964823', 'What is your nickname ?', 'K', '2024-07-06 04:09:13', '2024-07-07 09:10:13'),
(6, 'Kavit Fofariya', 'kavitfofariya@gmail.com', '1dd5576bd0889c377fc311ad18e45930', '6353235688', 'What is your nickname ?', 'kavi', '2024-07-07 08:50:45', '2024-07-07 09:00:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
