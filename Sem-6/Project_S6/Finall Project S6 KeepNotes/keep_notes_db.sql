-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 09:16 PM
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
-- Database: `keep_notes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `pinned` bit(1) DEFAULT b'0',
  `created_date` datetime(6) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `updated_date` datetime(6) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `bg_color` varchar(255) DEFAULT '',
  `description` longtext DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`pinned`, `created_date`, `id`, `updated_date`, `user_id`, `bg_color`, `description`, `title`) VALUES
(b'0', '2024-12-28 23:07:18.000000', 3, '2024-12-28 23:07:18.000000', 1, 'springgreen', 'Note 3', 'T3'),
(b'1', '2024-12-28 23:23:07.000000', 4, '2024-12-29 06:44:24.000000', 1, 'greenyellow', 'Note 4 edited*', 'T4'),
(b'0', '2024-12-28 23:25:33.000000', 5, '2024-12-28 23:25:33.000000', 1, '', 'Note 5', 'T5'),
(b'0', '2024-12-29 06:42:34.000000', 6, '2024-12-29 06:42:34.000000', 1, 'slategray', 'Note 6', 'T6'),
(b'0', '2024-12-29 06:45:24.000000', 7, '2024-12-29 07:40:15.000000', 1, 'darkolivegreen', 'Note 7 Edited* 2 time', 'T7'),
(b'0', '2024-12-29 06:45:37.000000', 8, '2024-12-29 06:45:37.000000', 1, 'deepskyblue', 'Note 8', 'T8'),
(b'1', '2024-12-29 16:58:44.000000', 12, '2024-12-29 16:59:24.000000', 1, NULL, 'T12 Hey this note is pinned also edited* \n', 'T12'),
(b'1', '2025-01-03 09:24:33.000000', 13, '2025-01-03 09:24:33.000000', 1, 'coral', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolores, veniam vel fugit sit accusantium animi cumque. Ab eaque non illo necessitatibus sed doloremque, voluptates reiciendis accusamus dolores sapiente sunt aperiam eius natus animi explicabo laboriosam nemo voluptatem ea dolore repellendus officiis culpa nulla laborum ipsa! Deserunt, accusantium repudiandae aspernatur unde, nobis doloribus harum quaerat nemo consequatur eos incidunt iure, quod ab odio laboriosam? Ratione ipsum eligendi earum consequuntur voluptate doloremque eaque, assumenda in, laudantium accusamus alias! Aspernatur animi repudiandae dolorum necessitatibus voluptates facilis temporibus magnam dolor tempore nulla. Aliquid, sed? Itaque magni cupiditate voluptatibus consequatur ullam ab, vel possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolores, veniam vel fugit sit accusantium animi cumque. Ab eaque non illo necessitatibus sed doloremque, voluptates reiciendis accusamus dolores sapiente sunt aperiam eius natus animi explicabo laboriosam nemo voluptatem ea dolore repellendus officiis culpa nulla laborum ipsa! Deserunt, accusantium repudiandae aspernatur unde, nobis doloribus harum quaerat nemo consequatur eos incidunt iure, quod ab odio laboriosam? Ratione ipsum eligendi earum consequuntur voluptate doloremque eaque, assumenda in, laudantium accusamus alias! Aspernatur animi repudiandae dolorum necessitatibus voluptates facilis temporibus magnam dolor tempore nulla. Aliquid, sed? Itaque magni cupiditate voluptatibus consequatur ullam ab, vel possimus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolores, veniam vel fugit sit accusantium animi cumque. Ab eaque non illo necessitatibus sed doloremque, voluptates reiciendis accusamus dolores sapiente sunt aperiam eius natus animi explicabo laboriosam nemo voluptatem ea dolore repellendus officiis culpa nulla laborum ipsa! Deserunt, accusantium repudiandae aspernatur unde, nobis doloribus harum quaerat nemo consequatur eos incidunt iure, quod ab odio laboriosam? Ratione ipsum eligendi earum consequuntur voluptate doloremque eaque, assumenda in, laudantium accusamus alias! Aspernatur animi repudiandae dolorum necessitatibus voluptates facilis temporibus magnam dolor tempore nulla. Aliquid, sed? Itaque magni cupiditate voluptatibus consequatur ullam ab, vel possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolores, veniam vel fugit sit accusantium animi cumque. Ab eaque non illo necessitatibus sed doloremque, voluptates reiciendis accusamus dolores sapiente sunt aperiam eius natus animi explicabo laboriosam nemo voluptatem ea dolore repellendus officiis culpa nulla laborum ipsa! Deserunt, accusantium repudiandae aspernatur unde, nobis doloribus harum quaerat nemo consequatur eos incidunt iure, quod ab odio laboriosam? Ratione ipsum eligendi earum consequuntur voluptate doloremque eaque, assumenda in, laudantium accusamus alias! Aspernatur animi repudiandae dolorum necessitatibus voluptates facilis temporibus magnam dolor tempore nulla. Aliquid, sed? Itaque magni cupiditate voluptatibus consequatur ullam ab, vel possimus.', 'T13'),
(b'0', '2025-01-03 19:38:03.000000', 16, '2025-01-05 00:15:01.000000', 5, 'darkolivegreen', 'Long Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolores, veniam vel fugit sit accusantium animi cumque. Ab eaque non illo necessitatibus sed doloremque, voluptates reiciendis accusamus dolores sapiente sunt aperiam eius natus animi expli', 'Today 8 pm'),
(b'0', '2025-01-03 22:10:43.000000', 17, '2025-01-05 00:08:23.000000', 5, '', 'Create Project in Microsoft Word. ', 'project report'),
(b'1', '2025-01-03 22:27:33.000000', 18, '2025-01-04 23:30:39.000000', 5, 'slategray', 'Date: January 3, 2025\n\nToday meeting focused on the progress of Project Alpha. The main points discussed were:\n\n1. **Progress Update:**\n   - The development team has completed the initial implementation of the core features, including the user authentication module and data storage layer. \n   - We are now moving into the integration phase, where we will start connecting the backend APIs to the frontend UI.\n\n2. **Challenges Faced:**\n   - We encountered some issues with the database schema design. The original design did not account for the future scaling of the application, so we had to make adjustments to accommodate additional data fields and relationships.\n   - The integration of third-party APIs has been slower than expected, causing delays in the feature release timeline.\n\n3. **Action Items:**\n   - The database team will work on optimizing the schema and ensure scalability for the next phase. This includes changing column types and optimizing indexes for faster query performance.\n   - The API integration team will prioritize the most critical endpoints and work with the external providers to resolve the delays.\n   \n4. **Next Steps:**\n   - Conduct another sprint review at the end of next week to evaluate progress.\n   - Begin user acceptance testing (UAT) once the API issues are resolved, with a focus on user workflows and system stability.\n\nThis note will be updated weekly to track the ongoing progress of the project and ensure that all stakeholders are aligned on the current status and action plans. ', 'Project Alpha - Status Update'),
(b'1', '2025-01-04 01:26:20.000000', 19, '2025-01-04 01:26:20.000000', 6, NULL, 'Milk, eggs, bread, fruits, veggies, and some snacks. Don not forget to check for discounts on cereals.', 'Grocery List'),
(b'1', '2025-01-04 01:26:44.000000', 20, '2025-01-04 01:26:44.000000', 6, 'springgreen', 'Discuss project milestones, budget approvals, team feedback, and upcoming deadlines.', 'Meeting Agenda'),
(b'0', '2025-01-04 01:27:04.000000', 21, '2025-01-04 01:27:04.000000', 6, NULL, 'Morning run: 3km, strength training: legs and core, evening: stretching and yoga.', 'Workout Plan'),
(b'0', '2025-01-04 01:27:28.000000', 22, '2025-01-04 01:33:22.000000', 6, 'coral', 'Begin each day with 10 minutes of meditation to improve focus and reduce stress. Commit to drinking at least 2 liters of water daily and tracking meals for balanced nutrition. Incorporate 30 minutes of exercise, alternating between cardio and strength training. Schedule a health checkup to monitor progress and address any concerns.', 'Health Goals for January'),
(b'0', '2025-01-04 01:27:49.000000', 23, '2025-01-04 01:27:49.000000', 6, NULL, 'Clean the house, finish the pending assignments, and plan a day trip to the mountains.\n\n', 'Weekend To-Do'),
(b'0', '2025-01-04 01:28:36.000000', 24, '2025-01-05 00:40:15.000000', 6, NULL, 'Date: January 4, 2025\n\nSummary of Today Stand-Up Meeting:\n\n1. **Key Achievements:**\n   - The marketing team successfully launched the social media campaign for the new product line, achieving a 25% increase in engagement within the first 48 hours.\n   - Development completed the beta testing phase of the new customer portal, resolving 85% of reported issues.\n\n2. **Challenges Discussed:**\n   - The sales department noted difficulties with the integration of the CRM system, causing delays in generating real-time sales reports.\n   - Logistics reported supply chain disruptions due to adverse weather conditions in the distribution region.\n\n3. **Action Points:**\n   - IT will expedite CRM system updates and provide sales with a temporary manual reporting workaround.\n   - Logistics to source alternative suppliers for critical regions and prepare a contingency plan for future disruptions.\n\n4. **Next Meeting Agenda:**\n   - Review the performance metrics of the social media campaign.\n   - Evaluate the impact of the updated customer portal and gather user feedback.\n   - Discuss the progress of the CRM system fixes and logistics contingency measures.\n\nThis note serves as a reference for all stakeholders to track current progress, challenges, and upcoming tasks. For any additions or updates, please contact the meeting coordinator before the next session.\n', 'Weekly Team Stand-Up - Summary Report'),
(b'0', '2025-01-04 01:29:09.000000', 25, '2025-01-04 01:29:09.000000', 6, 'darkolivegreen', '\"Atomic Habits\" by James Clear. A practical guide to building good habits and breaking bad ones.', 'Book Recommendation'),
(b'0', '2025-01-04 01:29:28.000000', 26, '2025-01-04 01:29:28.000000', 6, NULL, 'Clothes, toiletries, charger, passport, tickets, sunscreen, and travel guide.', 'Travel Packing List'),
(b'0', '2025-01-04 01:29:45.000000', 27, '2025-01-04 01:29:45.000000', 6, NULL, 'Spaghetti Aglio e Olio: Olive oil, garlic, chili flakes, parsley, and parmesan cheese. Quick and delicious!', 'Recipe Notes'),
(b'0', '2025-01-04 01:30:16.000000', 28, '2025-01-05 00:41:36.000000', 6, NULL, 'Date: January 3, 2025\n\nToday meeting focused on the progress of Project Alpha. The main points discussed were:\n\n1. **Progress Update:**\n   - The development team has completed the initial implementation of the core features, including the user authentication module and data storage layer. \n   - We are now moving into the integration phase, where we will start connecting the backend APIs to the frontend UI.\n\n2. **Challenges Faced:**\n   - We encountered some issues with the database schema design. The original design did not account for the future scaling of the application, so we had to make adjustments to accommodate additional data fields and relationships.\n   - The integration of third-party APIs has been slower than expected, causing delays in the feature release timeline.\n\n3. **Action Items:**\n   - The database team will work on optimizing the schema and ensure scalability for the next phase. This includes changing column types and optimizing indexes for faster query performance.\n   - The API integration team will prioritize the most critical endpoints and work with the external providers to resolve the delays.\n\n4. **Next Steps:**\n   - Conduct another sprint review at the end of next week to evaluate progress.\n   - Begin user acceptance testing (UAT) once the API issues are resolved, with a focus on user workflows and system stability.\n\nThis note will be updated weekly to track the ongoing progress of the project and ensure that all stakeholders are aligned on the current status and action plans.', 'Project Alpha - Status Update'),
(b'0', '2025-01-04 01:31:09.000000', 29, '2025-01-04 01:31:09.000000', 6, NULL, 'Research the topic, prepare a draft, review with the team, and finalize the presentation.', 'Project Outline'),
(b'0', '2025-01-04 01:31:23.000000', 30, '2025-01-04 01:34:11.000000', 6, NULL, 'Finalize the project topic by the end of this week, ensuring it aligns with the syllabus. Divide tasks among team members and create a shared timeline for progress tracking. Complete the initial research and gather data by mid-month. Allocate enough time for report writing, reviews, and practice presentations before submission.', 'College Project Timeline'),
(b'0', '2025-01-04 01:31:49.000000', 31, '2025-01-04 01:31:49.000000', 6, NULL, 'Plan a simple dinner: grilled chicken, roasted vegetables, and mashed potatoes. Keep it healthy but satisfying, and maybe try a new sauce recipe.', 'Dinner Ideas'),
(b'0', '2025-01-04 01:32:48.000000', 32, '2025-01-04 01:32:48.000000', 6, NULL, 'Start with repainting the living room walls, focusing on lighter shades for a fresh look. Replace the old curtains and consider adding some indoor plants for a cozy vibe. Check the flooring for repairs and decide on budget-friendly options. Do not forget to get quotes from multiple contractors for comparison.', 'Home Renovation Plan'),
(b'0', '2025-01-04 01:36:16.000000', 33, '2025-01-04 01:36:16.000000', 6, NULL, 'Toothpaste, shampoo, face wash, and detergent. Restock pantry basics too.', 'Buy Essentials'),
(b'0', '2025-01-04 01:36:40.000000', 34, '2025-01-04 01:36:40.000000', 6, NULL, 'Finish the slides by tonight, focusing on clear visuals and concise points. Review the data accuracy and rehearse twice to ensure smooth delivery. Check the projector and audio setup in the meeting room an hour before the presentation.\n\n', 'Office Presentation Prep'),
(b'0', '2025-01-04 01:37:47.000000', 35, '2025-01-04 01:37:47.000000', 6, NULL, '1. Skill Building: Enroll in a professional certification course related to software development and dedicate 5 hours per week to learning.\n2. Fitness: Set a goal of running 5 kilometers non-stop by June, practicing consistently three times a week.\n3. Reading Habit: Read one book per month, focusing on self-help, productivity, and fiction for a balanced perspective.\n4. Travel: Plan trips to at least two new destinations, immersing in local culture and capturing moments for a personal blog.\n5. Financial Planning: Save 30% of monthly income, and explore investment options for better returns.\n6. Mental Well-being: Practice gratitude daily by journaling three things I’m thankful for and meditating for 10 minutes each morning.\n7. Social Engagement: Reconnect with old friends, attend two networking events, and volunteer for community service at least once every quarter.', 'Personal Development Goals for 2025');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `create_date` datetime(6) NOT NULL,
  `id` bigint(20) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `updated_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`create_date`, `id`, `phone_number`, `first_name`, `last_name`, `email`, `password`, `updated_date`) VALUES
('2024-12-28 17:53:54.000000', 1, '98765432108', 'Darshann', 'Chudasama', 'vishal@gmail.com', '12345', '2024-12-31 16:42:31.000000'),
('2025-01-03 19:10:37.000000', 5, '8320343610', 'Vishal2', 'Chudasama', 'vishal2@gmail.com', '12345', '2025-01-03 19:14:47.000000'),
('2025-01-04 01:25:54.000000', 6, '8320343610', 'Vishal', 'Chudasama', 'vishal8@gmail.com', '12345', '2025-01-04 01:25:54.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK6dotkott2kjsp8vw4d0m25fb7` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
