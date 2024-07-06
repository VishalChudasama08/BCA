CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    mobile_number VARCHAR(15) NOT NULL,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modify_date TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
);
INSERT INTO `users` (`name`, `email`, `password`, `mobile_number`, `security_question`, `answer`) VALUES ('admin', 'okay@gmail.com', 'okay', '8320343610', 'What is your nickname ?', 'admin')
('Vishal', 'vishal@gmail.com', '74108520', '7490943610', 'What\'s your favorite number in 0 to 9 ?', '8')
('kaushik', 'kaushik@gmail.com', '123456', '9313850547', 'What's your favorite color ?', 'blue');



CREATE TABLE IF NOT EXISTS movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100),
    duration VARCHAR(20) NOT NULL,
    rating VARCHAR(10),
    language VARCHAR(80) NOT NULL,
    director VARCHAR(50) NOT NULL,
    image_location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    release_date VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    '12th Fail',
    'Drama',
    '2h 27m',
    'U',
    'Hindi, Tamil, Kannada',
    'Vidhu Vinod Chopra',
    'images/12th_Fail.jpg',
    '3 November 2023',
    'Based on Anurag Pathak`s bestselling novel of the same name, 12th Fail depicts the true story of an IPS officer Manoj Kumar Sharma hailing from a small town in Chambal, who fearlessly embraced the idea of restarting his academic journey and reclaiming his destiny at a place where millions of students attempt for the world`s toughest competitive exam, UPSC. The film is not just a chronicle of one man`s journey but a celebration of everyone who dared to look at failures as an opportunity to #Restart.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Animal',
    'Action, Crime, Drama',
    '3h 21m',
    'A',
    'Hindi, Tamil, Telugu, Kannada, Malayalam',
    'Sandeep Reddy Vanga',
    'images/Animal.jpg',
    '1 December 2023',
    'This is the story of a son whose love for his father knows no bounds. As their bond begins to fracture, a chain of extraordinary events unfold causing the son to undergo a remarkable transformation consumed by a thirst for vengeance.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Avatar: The Way of Water',
    'Action, Adventure, Fantasy, Sci-Fi',
    '3h 12m',
    'UA',
    'English, Hindi, Tamil, Telugu, Kannada, Malayalam',
    'James Cameron',
    'images/Avatar_The_Way_of_Water.png',
    '16 December 2022',
    'Set more than a decade after the events of the first film, "Avatar The Way of Water" begins to tell the story of the Sully family (Jake, Neytiri and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive and the tragedies they endure.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Avengers: Endgame',
    'Action, Adventure, Drama, Sci-Fi',
    '3h 1m',
    'PG-13',
    'English, Hindi, Tamil, Telugu, Kannada, Malayalam',
    'Anthony RussoJoe Russo',
    'images/Avengers_EndGame.jpg',
    '26 April 2019',
    'The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios` grand conclusion to twenty-two films, "Avengers: Endgame."'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Chaal Jeevi Laiye',
    'Drama, Comedy',
    '2h 17m',
    'U',
    'Gujarati',
    'Vipul Mehta',
    'images/chaal-jivi_laiye.jpg',
    '1 February 2019',
    'Aditya Parikh and his father Bipin Chandra Parikh begin to explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realizations that strengthens their bond with every situation that tests their drifting relationship.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Fast X',
    'Action, Adventure, Crime, Thriller',
    '2h 21m',
    'PG-13',
    'English, Hindi, Tamil, Telugu',
    'Louis Leterrier',
    'images/fast_x.jpg',
    '18 May, 2023',
    'Over many missions and against impossible odds, Dom Toretto and his family have outsmarted and outdriven every foe in their path. Now, they must confront the most lethal opponent they`ve ever faced. Fueled by revenge, a terrifying threat emerges from the shadows of the past to shatter Dom`s world and destroy everything -- and everyone -- he loves.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Hi Nanna',
    'Drama, Family, Romantic',
    '2h 35m',
    'UA',
    'Hindi, Tamil, Telugu, Kannada, Malayalam',
    'Shouryuv',
    'images/Hi_Nanna_2023.jpg',
    '7 December 2023',
    'A doting father and his six-year-old`s lives alter when a woman befriends them and empathizes with their past.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Interstellar',
    'Action, Adventure, Sci-Fi',
    '2h 49m',
    'PG-13',
    'English, Hindi',
    'Christopher Nolan',
    'images/Interstellar_2014.jpg',
    '7 November 2014',
    'A team of explorers travel beyond this galaxy through a newly discovered wormhole to discover whether mankind has a future among the stars.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'IO',
    'Romance, Sci-Fi',
    '1h 36m',
    'TV-14',
    'English',
    'Jonathan Helpert',
    'images/io_movie.jpg',
    '18 January 2019',
    'In a post-apocalyptic time, the earth has been rendered toxic, and most of humanity has abandoned the planet and colonised one of Jupiter`s moons, IO. But young scientist Sam Walden has stayed behind and dedicated herself to finding a way for human beings to survive on Earth. After sending out a radio transmission to see if she can locate anyone else, a man named Micah arrives. He believes there is no hope of survival and intends to take the final shuttle to IO in 48 hours.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Pirates of the Caribbean: Dead Men Tell No Tales',
    'Action, Adventure',
    '2h 9m',
    'PG-13',
    'English, Hindi, Tamil, Telugu, Malayalam',
    'Joachim Rønning, Espen Sandberg',
    'images/Pirate_of_the_Caribbean_Dead_Men_Tell_No_Tales.webp',
    '26 May 2017',
    'To break the curse of Flying Dutchman, Captain Jack Sparrow and Henry Turner embark on a mission to find the Trident of Poseidon. They also try to stop Captain Salazar who intends to rule the seas.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Raabta',
    'Action, Romantic',
    '2h 27m',
    'UA',
    'Hindi',
    'James Cameron',
    'images/raaabta_2017.jpg',
    '9 June 2017',
    'When two souls meet, they are united and that connection lasts forever. A seemingly ordinary boy and girl meet and are instantly drawn to each other in an inexplicable way. Shiv is an easy come-easy go Punjabi from Amritsar, Saira is a beautiful, quirky, slightly odd chocolatier, who has strange dreams. When they meet in her chocolate shop in Budapest, there is an electric connection sparked between them. As a beautiful relationship builds and they fall in love with each other, we are lead to see why.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Rampage',
    'Action, Adventure',
    '1h 47m',
    'PG-13',
    'English, Hindi',
    'Brad Peyton',
    'images/Rampage.jpg',
    '13 April 2018',
    'A primatologist teams up with a genetic engineer to stop a gigantic group of animals, including an albino gorilla whom he befriended, after the animals are exposed to an experimental pathogen.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Rebel Moon - Part Two: The Scargiver',
    'Action, Adventure, Fantasy, Sci-Fi',
    '2h 2m',
    'PG-13',
    'English, Hindi, Tamil, Telugu',
    'Zack Snyder',
    'images/Rebel_Moon_Part_Two_The_Scargiver.webp',
    '12 April 2024',
    'A colony on the edge of the galaxy fights for survival against a tyrannical ruling force, relying on the efforts of a small group of rebels.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Saiyar Mori Re',
    'Drama, Romantic',
    '2h 45m',
    'U',
    'Gujarati',
    'Vishal Vada Vala',
    'images/Saiyar_Mori_Re_2022.png',
    '8 July 2022',
    'Hari lives at a Gaushala with his bapu and transgender faiba. One fine day, while substituting for an odd job he sees Leela for the first time and instantly falls for her. They gradually fall in love but will it stay forever? What will happen when they separate?'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Thugs of Hindostan',
    'Action, Adventure',
    '2h 44m',
    'UA',
    'Hindi',
    ' Vijay Krishna Acharya',
    'images/Thugs-of-Hindostan.jpg',
    '8 November 2018',
    'Vijay Krishna Acharya (Victor), the writer-director of the all-time YRF blockbuster Dhoom:3, teams up once again with Aamir Khan in Thugs of Hindostan along with Amitabh Bachchan to give the audience a never seen before experience of larger than life filmmaking! This YRF film holds a double bonanza by bringing together Amitabh Bachchan and Aamir Khan together for the first time ever. That in itself, is film lore in making! The film is set to treat audiences across age groups with the biggest jaw-dropping action sequences seen by audiences on screen to date. With its edge-of-the-seat thrills and an epic adventure and war on the seas, the film is set to light up this Diwali.'
);
INSERT INTO movies (title, genre, duration, rating, language, director, image_location, release_date, description)
VALUES (
    'Zara Hatke Zara Bachke',
    'Comedy, Romance, Drama',
    '2h 12m',
    'UA',
    'Hindi, Tamil, Telugu',
    'Laxman Utekar',
    'images/Zara_Hatke_Zara_Bachke.jpg',
    '2 June 2023',
    'Kapil and Somya are a happily married couple from Indore who live in a joint family and decide to get a divorce one fine day. Things don`t go as planned as their family gets to know of it, and thus begins a comedy of errors.'
);


CREATE TABLE IF NOT EXISTS cinema (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    facilities TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
); 
INSERT INTO cinema 
(name, location, facilities) 
VALUES 
('Cosmoplex Multiplex: Rajkot', 'Mota Mauva Road, Kalawad Road, Near Rangoli Park Restaurant, Rajkot, Gujarat 360001, India', 'Food Court'), 
('Connplex Signature: Gandhinagar', '301-308, Shreeji Signature, Sargasan, Near Reliance Crossroad, Gandhinagar, Gujarat 382028, India', 'Ticket Cancellation, F&B, MTicket, Parking Facility, Food Court'), 
('Cinepolis Vandana: Rajkot', 'Vandana Heritage 4th and 5th Floor, Opposite Atika Railway Crossing, Gondal Road, Rajkot, Gujarat 360004, India', 'F&B, MTicket, Parking Facility, Food Court'), 
('INOX: Reliance Mega Mall, Rajkot', 'INOX Leisure Ltd., 2nd Floor, Reliance Mall, 150 Feet Ring Road, Near Nana Mauva Circle, Rajkot, Gujarat 360005, India', 'Ticket Cancellation, F&B, MTicket'), 
('Mehul Cinemax: Jamnagar', '15, Street No.4, Shivam Park, Ajanta Society, Near - Hotel Vishal International, Jamnagar, Gujarat 361006, India', 'Food Court'), 
('Rajhans Cinemas: Gandhidham', 'Aditya Mall And Multiplex, DC 2, Gurukul Road, Gandhidham, Gujarat 370201, India', 'F&B, MTicket, Parking Facility, Food Court'), 
('Cineworld Theater: Buhari', 'Amrut shopping center, Plot no 162/A Buhari, Dist-Valod, Buhari, Gujarat 394630, India', 'Ticket Cancellation, Food Court'), 
('The Cinestar Miniplex: Bhat Circle, SP Ring Road', '201, Xperia, 2nd Floor, Opposite Agora Mall, Bhat Circle, Gandhinagar, Ahmedabad, Gujarat 382424, India', 'Ticket Cancellation, F&B, MTicket, Recliner Seats, Parking Facility, Food Court'), 
('ROONGTA CINEMAS, Shyam Mandir Vesu: Surat', '5th Floor, Roongta Cinemas, Roongta Signature, Vesu, Opposite Shyam Baba Mandir, Surat, Gujarat 395007, India', 'Ticket Cancellation, F&B, MTicket, Food Court'), 
('Wide Angle: Mehsana', 'Nagalpur Village, Near Khari River Bridge, Mehsana, Gujarat 384002, India', 'Parking Facility, Food Court'); 


CREATE TABLE `seats` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `total_seats` INT(11) NOT NULL,
  `seat_structure` TEXT,
  `no_seat` TEXT,
  `available_seats` INT(11) NOT NULL,
  `booked_seats_name` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO seats 
(total_seats, seat_structure, no_seat, available_seats) 
VALUES 
(176, "[['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14', 'A15', 'A16', 'A17', 'A18', 'A19', 'A20', 'A21', 'A22', 'A23', 'A24', 'A25'], ['B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14', 'B15', 'B16', 'B17', 'B18', 'B19', 'B20', 'B21', 'B22', 'B23', 'B24', 'B25'], ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'C19', 'C20', 'C21', 'C22', 'C23', 'C24', 'C25'], ['D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'D14', 'D15', 'D16', 'D17', 'D18', 'D19', 'D20', 'D21', 'D22', 'D23', 'D24', 'D25'], ['E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17', 'E18', 'E19', 'E20', 'E21', 'E22', 'E23', 'E24', 'E25'], ['F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16', 'F17', 'F18', 'F19', 'F20', 'F21', 'F22', 'F23', 'F24', 'F25'], ['G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'G14', 'G15', 'G16', 'G17', 'G18', 'G19', 'G20', 'G21', 'G22', 'G23', 'G24', 'G25'], ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14', 'H15', 'H16', 'H17', 'H18', 'H19', 'H20', 'H21', 'H22', 'H23', 'H24', 'H25'], ['I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'I14', 'I15', 'I16', 'I17', 'I18', 'I19', 'I20', 'I21', 'I22', 'I23', 'I24', 'I25'], ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18', 'J19', 'J20', 'J21', 'J22', 'J23', 'J24', 'J25']]", "['A1', 'A2', 'A3', 'A13', 'A23', 'A24', 'A25', 'B1', 'B2', 'B3', 'B13', 'B23', 'B24', 'B25', 'C1', 'C2', 'C13', 'C24', 'C25', 'D1', 'D2', 'D13', 'D24', 'D25', 'E1', 'E2', 'E13', 'E24', 'E25', 'F5', 'F6', 'F7', 'F12', 'F13', 'F14', 'F19', 'F20', 'F21', 'G5', 'G6', 'G7', 'G12', 'G13', 'G14', 'G19', 'G20', 'G21', 'H5', 'H6', 'H7', 'H12', 'H13', 'H14', 'H19', 'H20', 'H21', 'I5', 'I6', 'I7', 'I12', 'I13', 'I14', 'I19', 'I20', 'I21', 'J5', 'J6', 'J7', 'J12', 'J13', 'J14', 'J19', 'J20', 'J21']", 176),
(124, "[['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13'], ['B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13'], ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13'], ['D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13'], ['E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13'], ['F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13'], ['G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13'], ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13'], ['I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13'], ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13']]", "['A1', 'A2', 'A12', 'A13','J12', 'J13]", 124),
(80, "[['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12'], ['B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12'], ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12'], ['D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12'], ['E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12'], ['F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12'], ['G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12'], ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12']]", "['A6', 'A7', 'B6', 'B7', 'C6', 'C7', 'D6', 'D7', 'E6', 'E7', 'F6', 'F7', 'G6', 'G7', 'H6', 'H7']", 80);




CREATE TABLE IF NOT EXISTS `times` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cinema_id INT NOT NULL,
    show_time TIME NOT NULL,
    show_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (cinema_id) REFERENCES cinema(id) ON DELETE CASCADE
);
INSERT INTO shows 
(cinema_id, show_time, show_date) 
VALUES 
(1, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(1, STR_TO_DATE('12:00 AM', '%h:%i %p'), '2024-12-18'),
(1, STR_TO_DATE('03:30 PM', '%h:%i %p'), '2024-12-18'),
(1, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(1, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(1, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(1, STR_TO_DATE('08:00 PM', '%h:%i %p'), '2024-12-19'),
(1, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(1, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(2, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(2, STR_TO_DATE('12:00 AM', '%h:%i %p'), '2024-12-18'),
(2, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(2, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(2, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(2, STR_TO_DATE('08:00 PM', '%h:%i %p'), '2024-12-19'),
(2, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(2, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(3, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(3, STR_TO_DATE('12:00 AM', '%h:%i %p'), '2024-12-18'),
(3, STR_TO_DATE('03:30 PM', '%h:%i %p'), '2024-12-18'),
(3, STR_TO_DATE('07:00 PM', '%h:%i %p'), '2024-12-18'),
(3, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(3, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(3, STR_TO_DATE('08:00 PM', '%h:%i %p'), '2024-12-19'),
(3, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(4, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(4, STR_TO_DATE('12:00 AM', '%h:%i %p'), '2024-12-18'),
(4, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(4, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(4, STR_TO_DATE('01:30 PM', '%h:%i %p'), '2024-12-19'),
(4, STR_TO_DATE('08:00 PM', '%h:%i %p'), '2024-12-19'),
(4, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(4, STR_TO_DATE('04:00 PM', '%h:%i %p'), '2024-12-20'),
(4, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(5, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(5, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(5, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(5, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(6, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(6, STR_TO_DATE('12:00 AM', '%h:%i %p'), '2024-12-18'),
(6, STR_TO_DATE('03:30 PM', '%h:%i %p'), '2024-12-18'),
(6, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(6, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(6, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(6, STR_TO_DATE('08:00 PM', '%h:%i %p'), '2024-12-19'),
(6, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(6, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(7, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(7, STR_TO_DATE('07:00 PM', '%h:%i %p'), '2024-12-18'),
(7, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(7, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(7, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(7, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(8, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(8, STR_TO_DATE('12:00 AM', '%h:%i %p'), '2024-12-18'),
(8, STR_TO_DATE('03:30 PM', '%h:%i %p'), '2024-12-18'),
(8, STR_TO_DATE('07:00 PM', '%h:%i %p'), '2024-12-18'),
(8, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(8, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(8, STR_TO_DATE('01:30 PM', '%h:%i %p'), '2024-12-19'),
(8, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(8, STR_TO_DATE('08:00 PM', '%h:%i %p'), '2024-12-19'),
(8, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(8, STR_TO_DATE('04:00 PM', '%h:%i %p'), '2024-12-20'),
(8, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(9, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(9, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(9, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20'),
(10, STR_TO_DATE('09:00 AM', '%h:%i %p'), '2024-12-18'),
(10, STR_TO_DATE('07:00 PM', '%h:%i %p'), '2024-12-18'),
(10, STR_TO_DATE('10:30 PM', '%h:%i %p'), '2024-12-18'),
(10, STR_TO_DATE('10:00 AM', '%h:%i %p'), '2024-12-19'),
(10, STR_TO_DATE('04:30 PM', '%h:%i %p'), '2024-12-19'),
(10, STR_TO_DATE('10:30 AM', '%h:%i %p'), '2024-12-20'),
(10, STR_TO_DATE('07:30 PM', '%h:%i %p'), '2024-12-20');

-- 09:00 AM, 10:00 AM, 10:30 AM
-- 12:00 AM, 01:30 PM, 04:00 PM
-- 03:30 PM, 04:30 PM, 07:30 PM
-- 07:00 PM, 08:00 PM
-- 10:30 PM
4
3
3
5
3
4
4
3
5
6
5 4 3, 


CREATE TABLE IF NOT EXISTS bookings (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) UNSIGNED NOT NULL,
    movies_id INT(11) NOT NULL,
    cinema_id INT(11) NOT NULL,
    number_of_seats INT(5) NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (movies_id) REFERENCES movies(id) ON DELETE CASCADE,
    FOREIGN KEY (cinema_id) REFERENCES cinema(id) ON DELETE CASCADE
);

INSERT INTO bookings (user_id, movies_id, cinema_id, number_of_seats, total_price) VALUES 
(1, 1, 1, 2, 200.00),
(3, 2, 2, 3, 150.00);




-- ('Cosmoplex Multiplex: Rajkot', 'Mota Mauva Road, Kalawad Road, Near Rangoli Park Restaurant, Rajkot, Gujarat 360001, India', 'Food Court', 65, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11']", "['A7', 'A8', 'A9', 'A10', 'A11', 'B5', 'B6', 'B7', 'C5', 'C6', 'C7', 'D5', 'D6', 'D7', 'E5', 'E6', 'E7', 'F6', 'F7', 'G6', 'G7', 'H6', 'H7']"), 
-- ('Connplex Signature: Gandhinagar', '301-308, Shreeji Signature, Sargasan, Near Reliance Crossroad, Gandhinagar, Gujarat 382028, India', 'Ticket Cancellation, F&B, MTicket, Parking Facility, Food Court', 61, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13']", "['A13', 'B7', 'B8', 'B12', 'B13', 'C7', 'C8', 'C12', 'C13', 'D7', 'D8', 'D12', 'D13', 'E7', 'E8', 'F7', 'F8']"), 
-- ('Cinepolis Vandana: Rajkot', 'Vandana Heritage 4th and 5th Floor, Opposite Atika Railway Crossing, Gondal Road, Rajkot, Gujarat 360004, India', 'F&B, MTicket, Parking Facility, Food Court', 126, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14', 'A15', 'A16', 'A17', 'A18', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14', 'B15', 'B16', 'B17', 'B18', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'D14', 'D15', 'D16', 'D17', 'D18', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17', 'E18', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16', 'F17', 'F18', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'G14', 'G15', 'G16', 'G17', 'G18', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14', 'H15', 'H16', 'H17', 'H18', 'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'I14', 'I15', 'I16', 'I17', 'I18']", "['A1', 'A2', 'A9', 'A10', 'A17', 'A18', 'B1', 'B2', 'B7', 'B8', 'B17', 'B18', 'C1', 'C2', 'C9', 'C10', 'C17', 'C18',  'D1', 'D9', 'D10', 'D18', 'E1', 'E9', 'E10', 'E18', 'F1', 'F9', 'F10', 'F18', 'G9', 'G10', 'H9', 'H10', 'I9', 'I10']"), 
-- ('INOX: Reliance Mega Mall, Rajkot', 'INOX Leisure Ltd., 2nd Floor, Reliance Mall, 150 Feet Ring Road, Near Nana Mauva Circle, Rajkot, Gujarat 360005, India', 'Ticket Cancellation, F&B, MTicket', 132, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'K7', 'K8', 'K9', 'K10', 'K11', 'K12', 'K13']", "['A7', 'B7',  'C7', 'D7', 'E7', 'F7', 'G7', 'H7', 'I7', 'J7', 'K7']"), 
-- ('Mehul Cinemax: Jamnagar', '15, Street No.4, Shivam Park, Ajanta Society, Near - Hotel Vishal International, Jamnagar, Gujarat 361006, India', 'Food Court', 280,"['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14', 'A15', 'A16', 'A17', 'A18', 'A19', 'A20', 'A21', 'A22', 'A23', 'A24', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14', 'B15', 'B16', 'B17', 'B18', 'B19', 'B20', 'B21', 'B22', 'B23', 'B24', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'C19', 'C20', 'C21', 'C22', 'C23', 'C24', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'D14', 'D15', 'D16', 'D17', 'D18', 'D19', 'D20', 'D21', 'D22', 'D23', 'D24', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17', 'E18', 'E19', 'E20', 'E21', 'E22', 'E23', 'E24', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16', 'F17', 'F18', 'F19', 'F20', 'F21', 'F22', 'F23', 'F24', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'G14', 'G15', 'G16', 'G17', 'G18', 'G19', 'G20', 'G21', 'G22', 'G23', 'G24', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14', 'H15', 'H16', 'H17', 'H18', 'H19', 'H20', 'H21', 'H22', 'H23', 'H24', 'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'I14', 'I15', 'I16', 'I17', 'I18', 'I19', 'I20', 'I21', 'I22', 'I23', 'I24', 'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18', 'J19', 'J20', 'J21', 'J22', 'J23', 'J24', 'K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'K7', 'K8', 'K9', 'K10', 'K11', 'K12', 'K13', 'K14', 'K15', 'K16', 'K17', 'K18', 'K19', 'K20', 'K21', 'K22', 'K23', 'K24', 'L1', 'L2', 'L3', 'L4', 'L5', 'L6', 'L7', 'L8', 'L9', 'L10', 'L11', 'L12', 'L13', 'L14', 'L15', 'L16', 'L17', 'L18', 'L19', 'L20', 'L21', 'L22', 'L23', 'L24', 'M1', 'M2', 'M3', 'M4', 'M5', 'M6', 'M7', 'M8', 'M9', 'M10', 'M11', 'M12', 'M13', 'M14', 'M15', 'M16', 'M17', 'M18', 'M19', 'M20', 'M21', 'M22', 'M23', 'M24', 'N1', 'N2', 'N3', 'N4', 'N5', 'N6', 'N7', 'N8', 'N9', 'N10', 'N11', 'N12', 'N13', 'N14', 'N15', 'N16', 'N17', 'N18', 'N19', 'N20', 'N21', 'N22', 'N23', 'N24', 'O1', 'O2', 'O3', 'O4', 'O5', 'O6', 'O7', 'O8', 'O9', 'O10', 'O11', 'O12', 'O13', 'O14', 'O15', 'O16', 'O17', 'O18', 'O19', 'O20', 'O21', 'O22', 'O23', 'O24']", "['A6', 'A7', 'A16', 'A17', 'B6', 'B7', 'B16', 'B17', 'C6', 'C7', 'C16', 'C17', 'D6', 'D7', 'D16', 'D17', 'E6', 'E7', 'E16', 'E17', 'E21', 'E22', 'E23', 'E24', 'F6', 'F7', 'F16', 'F17', 'F21', 'F22', 'F23', 'F24', 'G6', 'G7', 'G16', 'G17', 'G21', 'G22', 'G23', 'G24', 'H6', 'H7', 'H16', 'H17', 'H21', 'H22', 'H23', 'H24', 'I6', 'I7', 'I16', 'I17', 'I21', 'I22', 'I23', 'I24', 'J6', 'J7', 'J16', 'J17', 'K6', 'K7', 'K16', 'K17', 'L6', 'L7', 'L16', 'L17', 'M6', 'M7', 'M16', 'M17', 'N6', 'N7', 'N16', 'N17', 'O6', 'O7', 'O16', 'O17']"), 
-- ('Rajhans Cinemas: Gandhidham', 'Aditya Mall And Multiplex, DC 2, Gurukul Road, Gandhidham, Gujarat 370201, India', 'F&B, MTicket, Parking Facility, Food Court', 165, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14', 'A15', 'A16', 'A17', 'A18',  'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14', 'B15', 'B16', 'B17', 'B18',  'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18',  'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'D14', 'D15', 'D16', 'D17', 'D18',  'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17', 'E18',  'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16', 'F17', 'F18',  'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'G14', 'G15', 'G16', 'G17', 'G18',  'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14', 'H15', 'H16', 'H17', 'H18',  'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'I14', 'I15', 'I16', 'I17', 'I18',  'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18',  'K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'K7', 'K8', 'K9', 'K10', 'K11', 'K12', 'K13', 'K14', 'K15', 'K16', 'K17', 'K18']", "['A16', 'A17', 'A18', 'B8', 'B9', 'B16', 'B17', 'B18', 'C8', 'C9', 'C16', 'C17', 'C18', 'D7', 'D17', 'D18', 'E7', 'E17', 'E18', 'F7', 'F17', 'F18', 'G7', 'G17', 'G18', 'H7', 'H17', 'H18', 'I7', 'I17', 'I18', 'J18', 'K10']"), 
-- ('Cineworld Theater: Buhari', 'Amrut shopping center, Plot no 162/A Buhari, Dist-Valod, Buhari, Gujarat 394630, India', 'Ticket Cancellation, Food Court', 142, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14', 'A15', 'A16',  'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14', 'B15', 'B16',  'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16',  'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'D14', 'D15', 'D16',  'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16',  'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16',  'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'G14', 'G15', 'G16',  'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14', 'H15', 'H16',  'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'I14', 'I15', 'I16',  'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16']", "['A8', 'A9', 'B8', 'B9', 'C8', 'C9', 'D8', 'D9', 'E8', 'E9', 'F8', 'F9', 'G8', 'G9', 'H8', 'H9', 'I8', 'I9']"), 
-- ('The Cinestar Miniplex: Bhat Circle, SP Ring Road', '201, Xperia, 2nd Floor, Opposite Agora Mall, Bhat Circle, Gandhinagar, Ahmedabad, Gujarat 382424, India', 'Ticket Cancellation, F&B, MTicket, Recliner Seats, Parking Facility, Food Court', 80, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12']", "['A6', 'A7', 'B6', 'B7', 'C6', 'C7', 'D6', 'D7', 'E6', 'E7', 'F6', 'F7', 'G6', 'G7', 'H6', 'H7']"), 
-- ('ROONGTA CINEMAS, Shyam Mandir Vesu: Surat', '5th Floor, Roongta Cinemas, Roongta Signature, Vesu, Opposite Shyam Baba Mandir, Surat, Gujarat 395007, India', 'Ticket Cancellation, F&B, MTicket, Food Court', 124, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13']", "['A1', 'A2', 'A12', 'A13','J12', 'J13]"), 
-- ('Wide Angle: Mehsana', 'Nagalpur Village, Near Khari River Bridge, Mehsana, Gujarat 384002, India', 'Parking Facility, Food Court', 176, "['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14', 'A15', 'A16', 'A17', 'A18', 'A19', 'A20', 'A21', 'A22', 'A23', 'A24', 'A25', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14', 'B15', 'B16', 'B17', 'B18', 'B19', 'B20', 'B21', 'B22', 'B23', 'B24', 'B25', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'C19', 'C20', 'C21', 'C22', 'C23', 'C24', 'C25', 'D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12', 'D13', 'D14', 'D15', 'D16', 'D17', 'D18', 'D19', 'D20', 'D21', 'D22', 'D23', 'D24', 'D25', 'E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17', 'E18', 'E19', 'E20', 'E21', 'E22', 'E23', 'E24', 'E25', 'F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16', 'F17', 'F18', 'F19', 'F20', 'F21', 'F22', 'F23', 'F24', 'F25', 'G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'G14', 'G15', 'G16', 'G17', 'G18', 'G19', 'G20', 'G21', 'G22', 'G23', 'G24', 'G25', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14', 'H15', 'H16', 'H17', 'H18', 'H19', 'H20', 'H21', 'H22', 'H23', 'H24', 'H25', 'I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12', 'I13', 'I14', 'I15', 'I16', 'I17', 'I18', 'I19', 'I20', 'I21', 'I22', 'I23', 'I24', 'I25', 'J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18', 'J19', 'J20', 'J21', 'J22', 'J23', 'J24', 'J25']", "['A1', 'A2', 'A3', 'A13', 'A23', 'A24', 'A25', 'B1', 'B2', 'B3', 'B13', 'B23', 'B24', 'B25', 'C1', 'C2', 'C13', 'C24', 'C25', 'D1', 'D2', 'D13', 'D24', 'D25', 'E1', 'E2', 'E13', 'E24', 'E25', 'F5', 'F6', 'F7', 'F12', 'F13', 'F14', 'F19', 'F20', 'F21', 'G5', 'G6', 'G7', 'G12', 'G13', 'G14', 'G19', 'G20', 'G21', 'H5', 'H6', 'H7', 'H12', 'H13', 'H14', 'H19', 'H20', 'H21', 'I5', 'I6', 'I7', 'I12', 'I13', 'I14', 'I19', 'I20', 'I21', 'J5', 'J6', 'J7', 'J12', 'J13', 'J14', 'J19', 'J20', 'J21']"); 




