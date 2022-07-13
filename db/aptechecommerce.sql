-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 09:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptechecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(190) NOT NULL,
  `option_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_name`, `option_value`) VALUES
(1, 'site_url', 'http://localhost/wp'),
(2, 'site_name', 'My Ecommerce'),
(3, 'site_description', 'Just another site'),
(4, 'users_can_register', '0'),
(5, 'admin_email', 'devs@yopmail.com'),
(6, 'posts_per_page', '10'),
(7, 'default_role', 'customer'),
(8, 'site_icon', ''),
(9, 'site_logo', ''),
(10, 'paypal_setting', ''),
(11, 'admin_phone', '03242340583'),
(12, 'admin_address', 'Pakistan'),
(13, 'users_can_register', '0');

-- --------------------------------------------------------

--
-- Table structure for table `postmeta`
--

CREATE TABLE `postmeta` (
  `meta_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `post_password` varchar(255) NOT NULL,
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_name` varchar(200) NOT NULL COMMENT 'using url purpose',
  `post_parent` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) NOT NULL DEFAULT 'post'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `termmeta`
--

CREATE TABLE `termmeta` (
  `meta_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `taxonomy` varchar(32) NOT NULL DEFAULT 'category',
  `description` longtext NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `status` varchar(32) NOT NULL DEFAULT 'publish',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `name`, `slug`, `taxonomy`, `description`, `parent`, `status`, `date`) VALUES
(1, 'Uncategories', 'uncategories', 'category', '', 0, 'publish', '2022-07-05 05:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `usermeta`
--

CREATE TABLE `usermeta` (
  `umeta_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usermeta`
--

INSERT INTO `usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'first_name', 'Muhammad'),
(2, 1, 'last_name', 'Idrees'),
(3, 1, 'description', ''),
(4, 1, 'rich_editing', 'true'),
(5, 1, 'capabilities', 'administrator'),
(6, 4, 'description', ''),
(7, 4, 'first_name', 'Muhammad'),
(8, 4, 'last_name', 'Ahmer'),
(9, 4, 'website', 'ahmer.com'),
(10, 4, 'capabilities', 'subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user_login` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_nicename` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `user_registered` datetime NOT NULL DEFAULT current_timestamp(),
  `user_status` int(11) NOT NULL DEFAULT 1,
  `display_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_image`, `user_registered`, `user_status`, `display_name`) VALUES
(1, 'admin', '5a33ddc8bdd733c3f1ba2b506522c135', '', 'admin@yopmail.com', '', '2022-06-02 10:40:28', 1, ''),
(4, 'ahmer', 'e10adc3949ba59abbe56e057f20f883e', '', 'ahmer@gmail.com', '', '2022-07-02 09:22:34', 1, 'ahmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `postmeta`
--
ALTER TABLE `postmeta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `termmeta`
--
ALTER TABLE `termmeta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `postmeta`
--
ALTER TABLE `postmeta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `termmeta`
--
ALTER TABLE `termmeta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usermeta`
--
ALTER TABLE `usermeta`
  MODIFY `umeta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD CONSTRAINT `usermeta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
