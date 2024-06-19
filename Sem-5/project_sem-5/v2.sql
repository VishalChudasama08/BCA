-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 11:42 AM
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
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `facilities` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `name`, `location`, `facilities`, `created_at`, `updated_at`) VALUES
(1, 'Cosmoplex Multiplex: Rajkot', 'Mota Mauva Road, Kalawad Road, Near Rangoli Park Restaurant, Rajkot, Gujarat 360001, India', 'Food Court', '2024-06-10 17:48:44', NULL),
(2, 'Connplex Signature: Gandhinagar', '301-308, Shreeji Signature, Sargasan, Near Reliance Crossroad, Gandhinagar, Gujarat 382028, India', 'Ticket Cancellation, F&B, MTicket, Parking Facility, Food Court', '2024-06-10 17:48:44', NULL),
(3, 'Cinepolis Vandana: Rajkot', 'Vandana Heritage 4th and 5th Floor, Opposite Atika Railway Crossing, Gondal Road, Rajkot, Gujarat 360004, India', 'F&B, MTicket, Parking Facility, Food Court', '2024-06-10 17:48:44', NULL),
(4, 'INOX: Reliance Mega Mall, Rajkot', 'INOX Leisure Ltd., 2nd Floor, Reliance Mall, 150 Feet Ring Road, Near Nana Mauva Circle, Rajkot, Gujarat 360005, India', 'Ticket Cancellation, F&B, MTicket', '2024-06-10 17:48:44', NULL),
(5, 'Mehul Cinemax: Jamnagar', '15, Street No.4, Shivam Park, Ajanta Society, Near - Hotel Vishal International, Jamnagar, Gujarat 361006, India', 'Food Court', '2024-06-10 17:48:44', NULL),
(6, 'Rajhans Cinemas: Gandhidham', 'Aditya Mall And Multiplex, DC 2, Gurukul Road, Gandhidham, Gujarat 370201, India', 'F&B, MTicket, Parking Facility, Food Court', '2024-06-10 17:48:44', NULL),
(7, 'Cineworld Theater: Buhari', 'Amrut shopping center, Plot no 162/A Buhari, Dist-Valod, Buhari, Gujarat 394630, India', 'Ticket Cancellation, Food Court', '2024-06-10 17:48:44', NULL),
(8, 'The Cinestar Miniplex: Bhat Circle, SP Ring Road', '201, Xperia, 2nd Floor, Opposite Agora Mall, Bhat Circle, Gandhinagar, Ahmedabad, Gujarat 382424, India', 'Ticket Cancellation, F&B, MTicket, Recliner Seats, Parking Facility, Food Court', '2024-06-10 17:48:44', NULL),
(9, 'ROONGTA CINEMAS, Shyam Mandir Vesu: Surat', '5th Floor, Roongta Cinemas, Roongta Signature, Vesu, Opposite Shyam Baba Mandir, Surat, Gujarat 395007, India', 'Ticket Cancellation, F&B, MTicket, Food Court', '2024-06-10 17:48:44', NULL),
(10, 'Wide Angle: Mehsana', 'Nagalpur Village, Near Khari River Bridge, Mehsana, Gujarat 384002, India', 'Parking Facility, Food Court', '2024-06-10 17:48:44', NULL);

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
(1, '12th Fail', 'Drama', '2h 27m', 'U', 'Hindi', 'Vidhu Vinod Chopra', 'images/12th_Fail.jpg', 'Based on Anurag Pathak`s bestselling novel of the same name, 12th Fail depicts the true story of an IPS officer Manoj Kumar Sharma hailing from a small town in Chambal, who fearlessly embraced the idea of restarting his academic journey and reclaiming his destiny at a place where millions of students attempt for the world`s toughest competitive exam, UPSC. The film is not just a chronicle of one man`s journey but a celebration of everyone who dared to look at failures as an opportunity to #Restart.', '3 November 2023', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(2, 'Animal', 'Action, Crime, Drama', '3h 21m', 'A', 'Hindi', 'Sandeep Reddy Vanga', 'images/Animal.jpg', 'This is the story of a son whose love for his father knows no bounds. As their bond begins to fracture, a chain of extraordinary events unfold causing the son to undergo a remarkable transformation consumed by a thirst for vengeance.', '1 December 2023', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(3, 'Avatar: The Way of Water', 'Action, Adventure, Fantasy, Sci-Fi', '3h 12m', 'UA', 'English, Hindi', 'James Cameron', 'images/Avatar_The_Way_of_Water.png', 'Set more than a decade after the events of the first film, \"Avatar The Way of Water\" begins to tell the story of the Sully family (Jake, Neytiri and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive and the tragedies they endure.', '16 December 2022', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(4, 'Avengers: Endgame', 'Action, Adventure, Drama, Sci-Fi', '3h 1m', 'PG-13', 'English, Hindi', 'Anthony RussoJoe Russo', 'images/Avengers_EndGame.jpg', 'The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios` grand conclusion to twenty-two films, \"Avengers: Endgame.\"', '26 April 2019', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(5, 'Chaal Jeevi Laiye', 'Drama, Comedy', '2h 17m', 'U', 'Gujarati', 'Vipul Mehta', 'images/chaal-jivi_laiye.jpg', 'Aditya Parikh and his father Bipin Chandra Parikh begin to explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realizations that strengthens their bond with every situation that tests their drifting relationship.', '1 February 2019', '2024-06-07 17:16:13', NULL),
(6, 'Fast X', 'Action, Adventure, Crime, Thriller', '2h 21m', 'PG-13', 'English, Hindi', 'Louis Leterrier', 'images/fast_x.jpg', 'Over many missions and against impossible odds, Dom Toretto and his family have outsmarted and outdriven every foe in their path. Now, they must confront the most lethal opponent they`ve ever faced. Fueled by revenge, a terrifying threat emerges from the shadows of the past to shatter Dom`s world and destroy everything -- and everyone -- he loves.', '18 May, 2023', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(7, 'Hi Nanna', 'Drama, Family, Romantic', '2h 35m', 'UA', 'Hindi', 'Shouryuv', 'images/Hi_Nanna_2023.jpg', 'A doting father and his six-year-old`s lives alter when a woman befriends them and empathizes with their past.', '7 December 2023', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(8, 'Interstellar', 'Action, Adventure, Sci-Fi', '2h 49m', 'PG-13', 'English, Hindi', 'Christopher Nolan', 'images/Interstellar_2014.jpg', 'A team of explorers travel beyond this galaxy through a newly discovered wormhole to discover whether mankind has a future among the stars.', '7 November 2014', '2024-06-07 17:16:13', NULL),
(9, 'IO', 'Romance, Sci-Fi', '1h 36m', 'TV-14', 'English', 'Jonathan Helpert', 'images/io_movie.jpg', 'In a post-apocalyptic time, the earth has been rendered toxic, and most of humanity has abandoned the planet and colonised one of Jupiter`s moons, IO. But young scientist Sam Walden has stayed behind and dedicated herself to finding a way for human beings to survive on Earth. After sending out a radio transmission to see if she can locate anyone else, a man named Micah arrives. He believes there is no hope of survival and intends to take the final shuttle to IO in 48 hours.', '18 January 2019', '2024-06-07 17:16:13', NULL),
(10, 'Pirates of the Caribbean: Dead Men Tell No Tales', 'Action, Adventure', '2h 9m', 'PG-13', 'English, Hindi', 'Joachim Rønning, Espen Sandberg', 'images/Pirate_of_the_Caribbean_Dead_Men_Tell_No_Tales.webp', 'To break the curse of Flying Dutchman, Captain Jack Sparrow and Henry Turner embark on a mission to find the Trident of Poseidon. They also try to stop Captain Salazar who intends to rule the seas.', '26 May 2017', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(11, 'Raabta', 'Action, Romantic', '2h 27m', 'UA', 'Hindi', 'James Cameron', 'images/raaabta_2017.jpg', 'When two souls meet, they are united and that connection lasts forever. A seemingly ordinary boy and girl meet and are instantly drawn to each other in an inexplicable way. Shiv is an easy come-easy go Punjabi from Amritsar, Saira is a beautiful, quirky, slightly odd chocolatier, who has strange dreams. When they meet in her chocolate shop in Budapest, there is an electric connection sparked between them. As a beautiful relationship builds and they fall in love with each other, we are lead to see why.', '9 June 2017', '2024-06-07 17:16:13', NULL),
(12, 'Rampage', 'Action, Adventure', '1h 47m', 'PG-13', 'English, Hindi', 'Brad Peyton', 'images/Rampage.jpg', 'A primatologist teams up with a genetic engineer to stop a gigantic group of animals, including an albino gorilla whom he befriended, after the animals are exposed to an experimental pathogen.', '13 April 2018', '2024-06-07 17:16:13', NULL),
(13, 'Rebel Moon - Part Two: The Scargiver', 'Action, Adventure, Fantasy, Sci-Fi', '2h 2m', 'PG-13', 'English, Hindi', 'Zack Snyder', 'images/Rebel_Moon_Part_Two_The_Scargiver.webp', 'A colony on the edge of the galaxy fights for survival against a tyrannical ruling force, relying on the efforts of a small group of rebels.', '12 April 2024', '2024-06-07 17:16:13', '2024-06-10 20:21:37'),
(14, 'Saiyar Mori Re', 'Drama, Romantic', '2h 45m', 'U', 'Gujarati', 'Vishal Vada Vala', 'images/Saiyar_Mori_Re_2022.png', 'Hari lives at a Gaushala with his bapu and transgender faiba. One fine day, while substituting for an odd job he sees Leela for the first time and instantly falls for her. They gradually fall in love but will it stay forever? What will happen when they separate?', '8 July 2022', '2024-06-07 17:16:13', NULL),
(15, 'Thugs of Hindostan', 'Action, Adventure', '2h 44m', 'UA', 'Hindi', ' Vijay Krishna Acharya', 'images/Thugs-of-Hindostan.jpg', 'Vijay Krishna Acharya (Victor), the writer-director of the all-time YRF blockbuster Dhoom:3, teams up once again with Aamir Khan in Thugs of Hindostan along with Amitabh Bachchan to give the audience a never seen before experience of larger than life filmmaking! This YRF film holds a double bonanza by bringing together Amitabh Bachchan and Aamir Khan together for the first time ever. That in itself, is film lore in making! The film is set to treat audiences across age groups with the biggest jaw-dropping action sequences seen by audiences on screen to date. With its edge-of-the-seat thrills and an epic adventure and war on the seas, the film is set to light up this Diwali.', '8 November 2018', '2024-06-07 17:16:13', NULL),
(16, 'Zara Hatke Zara Bachke', 'Comedy, Romance, Drama', '2h 12m', 'UA', 'Hindi', 'Laxman Utekar', 'images/Zara_Hatke_Zara_Bachke.jpg', 'Kapil and Somya are a happily married couple from Indore who live in a joint family and decide to get a divorce one fine day. Things don`t go as planned as their family gets to know of it, and thus begins a comedy of errors.', '2 June 2023', '2024-06-07 17:16:13', '2024-06-10 20:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `seat_structure` text DEFAULT NULL,
  `no_seat` text DEFAULT NULL,
  `available_seats` int(11) NOT NULL,
  `booked_seats_name` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `total_seats`, `seat_structure`, `no_seat`, `available_seats`, `booked_seats_name`, `created_at`, `updated_at`) VALUES
(1, 176, '[[\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\', \'A14\', \'A15\', \'A16\', \'A17\', \'A18\', \'A19\', \'A20\', \'A21\', \'A22\', \'A23\', \'A24\', \'A25\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\', \'B14\', \'B15\', \'B16\', \'B17\', \'B18\', \'B19\', \'B20\', \'B21\', \'B22\', \'B23\', \'B24\', \'B25\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\', \'C14\', \'C15\', \'C16\', \'C17\', \'C18\', \'C19\', \'C20\', \'C21\', \'C22\', \'C23\', \'C24\', \'C25\'], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\', \'D14\', \'D15\', \'D16\', \'D17\', \'D18\', \'D19\', \'D20\', \'D21\', \'D22\', \'D23\', \'D24\', \'D25\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\', \'E14\', \'E15\', \'E16\', \'E17\', \'E18\', \'E19\', \'E20\', \'E21\', \'E22\', \'E23\', \'E24\', \'E25\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\', \'F14\', \'F15\', \'F16\', \'F17\', \'F18\', \'F19\', \'F20\', \'F21\', \'F22\', \'F23\', \'F24\', \'F25\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\', \'G14\', \'G15\', \'G16\', \'G17\', \'G18\', \'G19\', \'G20\', \'G21\', \'G22\', \'G23\', \'G24\', \'G25\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\', \'H14\', \'H15\', \'H16\', \'H17\', \'H18\', \'H19\', \'H20\', \'H21\', \'H22\', \'H23\', \'H24\', \'H25\'], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\', \'I14\', \'I15\', \'I16\', \'I17\', \'I18\', \'I19\', \'I20\', \'I21\', \'I22\', \'I23\', \'I24\', \'I25\'], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\', \'J14\', \'J15\', \'J16\', \'J17\', \'J18\', \'J19\', \'J20\', \'J21\', \'J22\', \'J23\', \'J24\', \'J25\']]', '[\'A1\', \'A2\', \'A3\', \'A13\', \'A23\', \'A24\', \'A25\', \'B1\', \'B2\', \'B3\', \'B13\', \'B23\', \'B24\', \'B25\', \'C1\', \'C2\', \'C13\', \'C24\', \'C25\', \'D1\', \'D2\', \'D13\', \'D24\', \'D25\', \'E1\', \'E2\', \'E13\', \'E24\', \'E25\', \'F5\', \'F6\', \'F7\', \'F12\', \'F13\', \'F14\', \'F19\', \'F20\', \'F21\', \'G5\', \'G6\', \'G7\', \'G12\', \'G13\', \'G14\', \'G19\', \'G20\', \'G21\', \'H5\', \'H6\', \'H7\', \'H12\', \'H13\', \'H14\', \'H19\', \'H20\', \'H21\', \'I5\', \'I6\', \'I7\', \'I12\', \'I13\', \'I14\', \'I19\', \'I20\', \'I21\', \'J5\', \'J6\', \'J7\', \'J12\', \'J13\', \'J14\', \'J19\', \'J20\', \'J21\']', 160, 'E14, E15, G10, G11, G15, H16, H22, H23, J10, J11, D12, D14, D15, D16, F8, F9', '2024-06-12 18:04:33', '2024-06-14 10:25:22'),
(2, 124, '[[0], [\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\', \'A13\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\', \'B13\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\', \'C13\'], [1], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\', \'D13\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\', \'E13\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\', \'F13\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\', \'G13\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\', \'H13\'], [2], [\'I1\', \'I2\', \'I3\', \'I4\', \'I5\', \'I6\', \'I7\', \'I8\', \'I9\', \'I10\', \'I11\', \'I12\', \'I13\'], [\'J1\', \'J2\', \'J3\', \'J4\', \'J5\', \'J6\', \'J7\', \'J8\', \'J9\', \'J10\', \'J11\', \'J12\', \'J13\']]', '[\'A7\', \'B7\', \'C7\', \'D7\', \'E7\', \'F7\', \'G7\', \'H7\', \'I7\', \'J7\']', 124, NULL, '2024-06-12 18:04:33', '2024-06-16 06:01:06'),
(3, 80, '[[\'A1\', \'A2\', \'A3\', \'A4\', \'A5\', \'A6\', \'A7\', \'A8\', \'A9\', \'A10\', \'A11\', \'A12\'], [\'B1\', \'B2\', \'B3\', \'B4\', \'B5\', \'B6\', \'B7\', \'B8\', \'B9\', \'B10\', \'B11\', \'B12\'], [\'C1\', \'C2\', \'C3\', \'C4\', \'C5\', \'C6\', \'C7\', \'C8\', \'C9\', \'C10\', \'C11\', \'C12\'], [\'D1\', \'D2\', \'D3\', \'D4\', \'D5\', \'D6\', \'D7\', \'D8\', \'D9\', \'D10\', \'D11\', \'D12\'], [\'E1\', \'E2\', \'E3\', \'E4\', \'E5\', \'E6\', \'E7\', \'E8\', \'E9\', \'E10\', \'E11\', \'E12\'], [\'F1\', \'F2\', \'F3\', \'F4\', \'F5\', \'F6\', \'F7\', \'F8\', \'F9\', \'F10\', \'F11\', \'F12\'], [\'G1\', \'G2\', \'G3\', \'G4\', \'G5\', \'G6\', \'G7\', \'G8\', \'G9\', \'G10\', \'G11\', \'G12\'], [\'H1\', \'H2\', \'H3\', \'H4\', \'H5\', \'H6\', \'H7\', \'H8\', \'H9\', \'H10\', \'H11\', \'H12\']]', '[\'A6\', \'A7\', \'B6\', \'B7\', \'C6\', \'C7\', \'D6\', \'D7\', \'E6\', \'E7\', \'F6\', \'F7\', \'G6\', \'G7\', \'H6\', \'H7\']', 80, NULL, '2024-06-12 18:04:33', NULL);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `times_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
