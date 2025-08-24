-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2025 at 04:47 PM
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
-- Database: `nerdblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `username`, `title`, `content`, `created_at`) VALUES
(5, 'ag', 'edited 1', 'new post', '2025-08-22 11:58:56'),
(7, 'red', 'reds', 'red', '2025-08-24 13:24:04'),
(11, 'ag', '200 words', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec massa vitae justo hendrerit aliquam. Suspendisse dui nisi, congue quis dignissim vel, pellentesque non augue. Etiam semper ultrices neque, vel luctus ligula accumsan ac. Suspendisse et quam eget ex eleifend pellentesque eget et ex. Cras mollis ex eu orci dictum ultrices. Sed congue nec ligula vitae ultricies. Etiam eget pulvinar lacus, ut mollis turpis. Duis lobortis neque id metus hendrerit, ultrices tincidunt erat hendrerit.\r\n\r\nFusce eget lobortis felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut faucibus aliquet diam ac gravida. Pellentesque leo nisl, faucibus sit amet molestie at, efficitur sed dui. Cras aliquet metus eros. Pellentesque quis neque erat. Pellentesque a laoreet erat. Vivamus cursus euismod sem quis commodo. Sed iaculis libero ut mattis semper. Curabitur elementum commodo justo eget dapibus. Sed facilisis, turpis vel maximus tincidunt, arcu nulla imperdiet ante, in maximus velit augue eu nibh. Phasellus sit amet rutrum justo, a elementum dolor. Donec velit purus, faucibus sit amet massa a, placerat tincidunt tortor. Duis sit amet arcu pharetra, fermentum risus eget, euismod nisl. Donec vel ipsum dapibus dui dictum rhoncus eget a velit. Donec porttitor at est vel laoreet. Aliquam.', '2025-08-24 14:39:08'),
(12, 'ag', '50 words', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer justo metus, consectetur at auctor nec, tristique nec ligula. Suspendisse in turpis erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris rhoncus ipsum ante, nec fringilla mauris dapibus vitae. Interdum et malesuada fames ac ante.', '2025-08-24 14:39:42'),
(13, 'red', '250 words', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique urna orci, molestie accumsan mauris eleifend eget. In a porttitor lacus. Nam sapien metus, sodales a semper at, malesuada ac ligula. Suspendisse potenti. Nullam semper, dui sit amet facilisis molestie, nunc nunc consectetur ante, vitae imperdiet arcu diam ut lacus. Suspendisse pellentesque massa eget magna ultricies, ut ultricies lorem pulvinar. Phasellus neque nulla, congue eu arcu scelerisque, cursus ullamcorper leo. Nulla sit amet quam tincidunt, ullamcorper dolor eu, egestas erat. Etiam a ligula nunc. Suspendisse gravida eros quam, in tincidunt mi blandit a. Maecenas pretium ipsum in sem porttitor laoreet at ut dui. Proin vel nunc eu odio venenatis ullamcorper sed sit amet quam. Integer dapibus velit efficitur sapien aliquet convallis. Curabitur et augue lacinia, mattis ipsum vel, pulvinar risus. Phasellus porta pharetra nisl sit amet iaculis.\r\n\r\nUt massa tellus, fringilla id bibendum et, posuere in odio. Vestibulum ultrices nisl velit, non ultricies tellus varius et. Suspendisse facilisis augue vel pellentesque blandit. Morbi auctor convallis lorem. Pellentesque eu eleifend libero. Curabitur vestibulum volutpat sodales. Phasellus ac varius velit. Proin felis metus, sagittis ac nisi nec, mattis dapibus lectus. Nulla volutpat est non nulla rhoncus, et auctor nibh aliquam. Ut hendrerit, nunc sit amet faucibus sagittis, mi tortor tempor dui, lobortis imperdiet nisl dolor vel purus. Maecenas efficitur ex sit amet mauris aliquam cursus. Mauris tortor nisl, fringilla pulvinar hendrerit at, commodo sed nulla. Curabitur nec semper est, eget bibendum tortor. Phasellus nec libero luctus, lobortis enim auctor, rutrum neque. Cras.', '2025-08-24 14:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` char(255) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `reg_date`) VALUES
(1, 'ag', '$2y$10$xzSbUD5Kq.X.s92gwe2cz.KrdgcNbSibgxa.4kbikLbwO5j0gNw2e', '0000-00-00 00:00:00'),
(2, 'red', '$2y$10$emmi.br4xklbNULaqOXU5.S3zkJIZGijsmJ6.iw8uXG4Gg4dtFPFK', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
