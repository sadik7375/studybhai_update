-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 08:36 AM
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
-- Database: `test_studybhai`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigncourses`
--

CREATE TABLE `assigncourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assigncourses`
--

INSERT INTO `assigncourses` (`id`, `course_id`, `trainer_id`, `created_at`, `updated_at`) VALUES
(34, 7, 4, '2024-02-10 23:30:33', '2024-02-10 23:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discounted_price` varchar(255) DEFAULT NULL,
  `timeline` varchar(255) DEFAULT NULL,
  `class_starts` varchar(255) DEFAULT NULL,
  `admission_ends` varchar(255) DEFAULT NULL,
  `lesson` varchar(300) NOT NULL,
  `student` varchar(300) NOT NULL,
  `foundation` text DEFAULT NULL,
  `intermediate` text DEFAULT NULL,
  `advanced` text DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `image`, `duration`, `price`, `discounted_price`, `timeline`, `class_starts`, `admission_ends`, `lesson`, `student`, `foundation`, `intermediate`, `advanced`, `availability`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Web Development', '<p>This is a good project</p>', 'photos/iKfrNrnzzV3v86fjX4RIZGUnTEy4ysYa8rJi13kW.png', '5 month', '30000', '10000', '4', '12 january 2024', '10 january 2024', '60', '23', '<p>html</p>', '<p>css</p>', '<p>js</p>', 'available', '8', '2024-01-04 04:07:23', '2024-02-11 00:14:50'),
(7, 'Machine Learning', '<p>This is our ML course</p>', 'photos/KbipzGet8hTvJnz7WpJO0BO6vHp3T5RBLcaMhhEA.jpg', '6 month', '20000', '40000', '4', '12 january 2024', '10 january 2024', '60', '30', '<p>python</p>', '<p>CNN</p>', '<p>SVM</p>', 'available', '8', '2024-01-14 01:55:38', '2024-02-11 00:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `image`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tahmid Ferdous', 'photos/Haa0d8e1TdEeEMQqp6NLxkrT1v5puNpjSNzqSs2q.jpg', 'Incorporate interactive features like forums, discussion boards, and live chat support for students to engage with each other and instructors. Utilize gamification elements to enhance user engagement and motivation.', '25', '2024-02-08 00:52:50', '2024-02-11 00:03:26'),
(2, 'wahid sadik', 'photos/yxk618UrMz9200eGU4cAcYxvhi4aFaBcIcoLkvLI.jpg', 'Incorporate interactive features like forums, discussion boards, and live chat support for students to engage with each other and instructors. Utilize gamification elements to enhance user engagement and motivation.', '25', '2024-02-08 00:53:14', '2024-02-11 00:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `phone`, `email`, `location`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '+880 1959-938009', 'studybhai@gmail.com', 'Monsurabad,Adabar,Dhaka', '25', '2024-02-08 00:50:09', '2024-02-11 00:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(7, 'ML Events', 'photos/JPCwgFbWEWwzuWr6x17goGLXyUekSF6ZnOuPwtNB.jpg', '2024-02-08 03:48:30', '2024-02-10 23:58:31'),
(10, 'Deep Learning Events', 'photos/5OSmj4W87qkkirIt9q9mYM8Qs88xXKDyikGbh65s.jpg', '2024-02-10 23:58:02', '2024-02-10 23:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_11_22_074534_create_courses_table', 1),
(22, '2023_11_23_083011_create_feedback_table', 1),
(23, '2023_12_03_054135_create_teams_table', 1),
(24, '2023_12_04_072921_create_footers_table', 1),
(25, '2023_12_14_105404_create_orders', 1),
(26, '2024_01_03_095011_create_profiles_table', 2),
(27, '2024_01_04_093351_create_assigncourses_table', 3),
(28, '2024_02_08_074447_create_gallery_table', 4),
(29, '2024_02_08_084123_create_galleries_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `status`, `course_id`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(100, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Processing', 5, '65ba379d1247b', 'BDT', NULL, NULL),
(101, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Processing', 5, '65bb3065133a4', 'BDT', NULL, NULL),
(102, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Processing', 5, '65bb308d25ad0', 'BDT', NULL, NULL),
(103, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Processing', 5, '65bb70ec6882e', 'BDT', NULL, NULL),
(104, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Pending', 5, '65be20a4bce04', 'BDT', NULL, NULL),
(105, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Pending', 5, '65be213bd7bf3', 'BDT', NULL, NULL),
(106, 'sadik', 'wahid7375@gmail.com', '017615275246', 30000.00, 'Processing', 5, '65be2150614bc', 'BDT', NULL, NULL),
(107, 'sadik', 'wahid7375@gmail.com', '017615275246', 15000.00, 'Processing', 5, '65be243a96b98', 'BDT', NULL, NULL),
(108, 'sadik', 'wahid7375@gmail.com', '017615275246', 15000.00, 'Processing', 5, '65be2524afb31', 'BDT', NULL, NULL),
(109, 'sadik', 'wahid7375@gmail.com', '017615275246', 15000.00, 'Processing', 5, '65be2727513c9', 'BDT', NULL, NULL),
(110, 'sadik', 'wahid7375@gmail.com', '017615275246', 15000.00, 'Pending', 5, '65be28b249a6a', 'BDT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `institute_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `current_status` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `full_name`, `institute_name`, `phone_number`, `address`, `current_status`, `created_at`, `updated_at`) VALUES
(4, 12, 'sadik', 'Aiub', '01701737576', 'Dhaka', 'Student', '2024-01-14 00:25:50', '2024-01-31 23:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `institution` varchar(300) DEFAULT NULL,
  `profession` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `t_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `institution`, `profession`, `expertise`, `category`, `address`, `user_id`, `t_id`, `created_at`, `updated_at`) VALUES
(2, 'Sheikh Abujar', 'photos/BZ5MdsrpjTun613b2ax8YrRoUe9QCcGnQtlbMSTM.jpg', '', 'Doctoral Student at The University of Alabama', 'Data Science,Computer Vision', 'trainer', 'Birmingham, Alabama, United States', '1', '', '2023-12-21 13:02:42', '2024-02-10 23:35:21'),
(3, 'Nushrat Jahan Ria', 'photos/LSsM1gN6DZRU4Vxrx7Jh5v1tL5urcvjag4O1mQxJ.jpg', '', 'Ph.D. Student at louisiana state university', 'Machine Learning,Artificial Intelligence', 'trainer', 'louisiana , United States', '1', '', '2023-12-21 13:12:06', '2024-02-10 23:31:39'),
(4, 'Mr. Abu Kaisar', 'photos/Uua3myHNbz5LtOndMDb88bm0zLVXOuVWrQq0lZ9P.jpg', '', 'Ph.D. Student at Florida Institute of Technology', 'Machine Learning,Artificial Intelligence', 'advisor', 'Melbourne, Florida, United States', '1', '', '2023-12-23 10:34:51', '2024-02-10 23:31:48'),
(12, 'Muntaser Syed', 'photos/JVeXdBfBCHZ7knPHotZobd3m9kHiUfTxeGoxGIpr.png', NULL, 'GPU developer at Nividia', 'GPU developer', 'trainer', 'USA', '25', '26', '2024-02-07 03:41:34', '2024-02-10 23:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 's',
  `phone_number` varchar(300) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'sadik', 'wahid@gmail.com', NULL, '$2y$10$I9tW2ePCNUs7omccYNWNrOeVFfcGI20bXcBDsl3Oppv6kspgl23K2', 's', '0107586645', NULL, '2023-12-26 05:50:17', '2024-01-03 01:44:24'),
(11, 'sadik', 'sadik22@gmail.com', NULL, '$2y$10$5aZhXZFvW3zGACUNPMYsBuLVuQWM4MbBJ1LgCLTFGtou3x6OTdnwe', 's', '01701737576', NULL, '2024-01-11 02:16:26', '2024-01-11 02:16:26'),
(12, 'sadik', 'wahid7375@gmail.com', NULL, '$2y$10$USWWMVHmsK0qk0J.086X9eRDzuwxcB7zhTg4GYKIXVkM2layeNiy.', 's', '017615275246', NULL, '2024-01-14 00:12:51', '2024-01-14 00:12:51'),
(14, 'sadik', 'wahidsadik7375@gmail.com', NULL, '$2y$10$6oGdSFcp2/s9nWxGx86zGOFiMKh1nLFKKD4YRUP9r5i9vqbsqdota', 'a', '014254724435', NULL, '2024-01-23 22:40:40', '2024-01-23 22:40:40'),
(25, 'sadik', 'sadik123@gmail.com', NULL, '$2y$10$RVl7eZ1I5MXhhH3Rm5wlee.M4klaG8Y7/6zDm5eb7WxfhV7bbykmq', 'a', '01701737576', NULL, '2024-01-29 22:28:18', '2024-01-29 22:28:18'),
(26, 'Muntaser Syed', 'wahidsadik123@gmail.com', NULL, '$2y$10$ZIyKJDl.Yx8Nq0ljRijIP.kq6ynEndeEmaB2BkXlY5wAQB9RvTZ2q', 't', '12345678', NULL, '2024-02-07 03:41:34', '2024-02-07 03:41:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigncourses`
--
ALTER TABLE `assigncourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigncourses_course_id_foreign` (`course_id`),
  ADD KEY `assigncourses_trainer_id_foreign` (`trainer_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_course_id_foreign` (`course_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_user_id_unique` (`user_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigncourses`
--
ALTER TABLE `assigncourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigncourses`
--
ALTER TABLE `assigncourses`
  ADD CONSTRAINT `assigncourses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assigncourses_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
