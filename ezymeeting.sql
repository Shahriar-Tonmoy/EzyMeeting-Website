-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 10:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezymeeting`
--

-- --------------------------------------------------------

--
-- Table structure for table `explore_app_description`
--

CREATE TABLE `explore_app_description` (
  `id` int(100) NOT NULL,
  `description` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `explore_app_images`
--

CREATE TABLE `explore_app_images` (
  `id` int(100) NOT NULL,
  `image_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(100) NOT NULL,
  `name` int(255) NOT NULL,
  `description` int(255) NOT NULL,
  `icon_link` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_section_bg_image`
--

CREATE TABLE `hero_section_bg_image` (
  `id` int(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_section_button_link`
--

CREATE TABLE `hero_section_button_link` (
  `id` int(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_section_content`
--

CREATE TABLE `hero_section_content` (
  `id` int(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_section_title`
--

CREATE TABLE `hero_section_title` (
  `id` int(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(100) NOT NULL,
  `images` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `images`) VALUES
(7, '20210602_093032.jpg'),
(10, 'V-LIFE-ROLEPLAY-LOGO-PNG.png'),
(11, '12th.png');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriber`
--

CREATE TABLE `newsletter_subscriber` (
  `id` int(100) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_subscriber`
--

INSERT INTO `newsletter_subscriber` (`id`, `email_address`) VALUES
(1, 'kawsarkhan@gmail.com'),
(2, 'shahriartonmoy22@gmail.com'),
(3, 'shahriartonmoy22@gmail.com'),
(4, 'shahariartonmoy17@gmail.com'),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `video_section_description`
--

CREATE TABLE `video_section_description` (
  `id` int(100) NOT NULL,
  `description` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_section_video_link`
--

CREATE TABLE `video_section_video_link` (
  `id` int(100) NOT NULL,
  `link` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whole_hero_section`
--

CREATE TABLE `whole_hero_section` (
  `id` int(10) NOT NULL,
  `bg_image` int(255) NOT NULL,
  `title` int(255) NOT NULL,
  `description` int(255) NOT NULL,
  `button_link` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `explore_app_description`
--
ALTER TABLE `explore_app_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explore_app_images`
--
ALTER TABLE `explore_app_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_section_bg_image`
--
ALTER TABLE `hero_section_bg_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_section_button_link`
--
ALTER TABLE `hero_section_button_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_section_content`
--
ALTER TABLE `hero_section_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_section_title`
--
ALTER TABLE `hero_section_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriber`
--
ALTER TABLE `newsletter_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_section_description`
--
ALTER TABLE `video_section_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_section_video_link`
--
ALTER TABLE `video_section_video_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whole_hero_section`
--
ALTER TABLE `whole_hero_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `explore_app_description`
--
ALTER TABLE `explore_app_description`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `explore_app_images`
--
ALTER TABLE `explore_app_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_section_bg_image`
--
ALTER TABLE `hero_section_bg_image`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_section_button_link`
--
ALTER TABLE `hero_section_button_link`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_section_content`
--
ALTER TABLE `hero_section_content`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_section_title`
--
ALTER TABLE `hero_section_title`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newsletter_subscriber`
--
ALTER TABLE `newsletter_subscriber`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_section_description`
--
ALTER TABLE `video_section_description`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_section_video_link`
--
ALTER TABLE `video_section_video_link`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whole_hero_section`
--
ALTER TABLE `whole_hero_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
