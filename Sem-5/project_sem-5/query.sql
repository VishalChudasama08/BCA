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








CREATE TABLE IF NOT EXISTS showtimes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie_id INT NOT NULL,
    show_date DATE NOT NULL,
    show_time TIME NOT NULL,
    available_seats INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (movie_id) REFERENCES movies(id) ON DELETE CASCADE
);
INSERT INTO showtimes (movie_id, show_date, show_time, available_seats)
VALUES (1, '2024-06-01', '18:00:00',100);
