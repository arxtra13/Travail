-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 07:56 PM
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
-- Database: `travail`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `post_id` int(10) NOT NULL,
  `post_user_id` int(10) NOT NULL,
  `added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `post_id`, `post_user_id`, `added`) VALUES
(28, 'hi 👌', 10, 1, '2024-07-11 12:40:11'),
(30, 'good job', 10, 18, '2024-07-11 16:12:26'),
(31, 'very true, shit country 💩', 15, 21, '2024-07-11 23:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `post_user_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `added` datetime NOT NULL DEFAULT current_timestamp(),
  `post_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_user_id`, `title`, `content`, `added`, `post_img`) VALUES
(10, 1, 'A Magical Journey Through Barcelona&#039;s Timeless Charm', 'Barcelona, a city that seamlessly blends history with modernity, offered me an unforgettable travel experience. Strolling through the narrow, winding streets of the Gothic Quarter, I felt as if I had stepped back in time, surrounded by centuries-old architecture and hidden courtyards. The vibrant energy of Las Ramblas, with its bustling markets and street performers, contrasted beautifully with the serene beauty of Park G&uuml;ell, where Gaud&iacute;&#039;s whimsical designs and colorful mosaics brought joy to every corner. Visiting the awe-inspiring Sagrada Familia left me speechless, its intricate details and towering spires a testament to human creativity and dedication. As the sun set over the Mediterranean, the beachside atmosphere of Barceloneta provided the perfect backdrop for relaxation, with the sound of waves and the scent of fresh seafood filling the air. Barcelona&#039;s rich culture, stunning landmarks, and welcoming locals made my journey truly magical.', '2024-07-10 20:45:42', 'Picsart_24-06-18_09-51-49-419.jpg'),
(11, 20, 'Exploring the Heart of Kolkata: A Journey Through Culture and Heritage', 'Kolkata, the vibrant capital of West Bengal, offers a unique blend of historical richness and cultural depth that makes it a must-visit destination for any traveler. As I wandered through the bustling streets, I was captivated by the city&#039;s colonial architecture, with landmarks like the iconic Victoria Memorial standing as grand reminders of its British Raj past. The Howrah Bridge, with its impressive steel structure, provided a breathtaking view of the Hooghly River, capturing the essence of the city&#039;s dynamic spirit.\r\n\r\nThe heart of Kolkata beats in its lively markets and colorful festivals. A visit to the New Market revealed a treasure trove of goods, from traditional Bengali sarees to tantalizing street food. The aroma of spicy puchkas and sweet rosogollas lingered in the air, offering a feast for the senses. As I indulged in a steaming plate of biryani at a local eatery, I couldn&#039;t help but appreciate the culinary diversity that Kolkata has to offer.\r\n\r\nKolkata&#039;s intellectual and artistic legacy is evident in every corner of the city. The Indian Museum, one of the oldest in the country, housed an impressive collection of artifacts that narrated India&#039;s rich history. A stroll through the serene grounds of the Indian Coffee House in College Street transported me to a bygone era, where the likes of Rabindranath Tagore and Satyajit Ray once gathered.\r\n\r\nWitnessing the Durga Puja festivities was the highlight of my trip. The city&#039;s energy peaked as beautifully crafted idols of Goddess Durga adorned pandals, and the streets came alive with music, dance, and lights. The sense of community and devotion was palpable, making it a deeply moving experience.\r\n\r\nKolkata&#039;s charm lies in its ability to embrace the old and the new, the traditional and the contemporary. It is a city where every street has a story, and every visit leaves you with a lasting impression. My journey through Kolkata was a vibrant tapestry of experiences that celebrated the city&#039;s enduring spirit and cultural heritage.', '2024-07-11 16:58:15', 'cheritageportfolio.jpg'),
(15, 20, 'Lost in Translation: A Challenging Journey Through France', 'My trip to France, anticipated with much excitement, unfortunately turned into a series of unfortunate events. Upon arriving in Paris, I was immediately confronted with a language barrier that made simple interactions challenging, as my limited French couldn&#039;t bridge the communication gap. The city&#039;s renowned metro system, typically praised for its efficiency, was marred by frequent delays and overcrowding, leading to hours of frustrating waits and missed connections. A mix-up with hotel bookings left me without accommodation for a night, forcing me to scramble for an overpriced last-minute option that was far from comfortable. To top it off, an unexpected bout of food poisoning from a seemingly reputable caf&eacute; put a damper on my plans, confining me to my room for days. Despite the beauty and charm that France undoubtedly holds, this particular trip was overshadowed by these misadventures, leaving me with a memorable but regretfully unpleasant experience.', '2024-07-11 20:43:25', 'main-qimg-cd8333098a23ea848c1cd3c5062b290f-lq.jpg'),
(16, 20, 'Lost in Translation: A Challenging Journey Through France', 'My trip to France, anticipated with much excitement, unfortunately turned into a series of unfortunate events. Upon arriving in Paris, I was immediately confronted with a language barrier that made simple interactions challenging, as my limited French couldn&#039;t bridge the communication gap. The city&#039;s renowned metro system, typically praised for its efficiency, was marred by frequent delays and overcrowding, leading to hours of frustrating waits and missed connections. A mix-up with hotel bookings left me without accommodation for a night, forcing me to scramble for an overpriced last-minute option that was far from comfortable. To top it off, an unexpected bout of food poisoning from a seemingly reputable caf&eacute; put a damper on my plans, confining me to my room for days. Despite the beauty and charm that France undoubtedly holds, this particular trip was overshadowed by these misadventures, leaving me with a memorable but regretfully unpleasant experience.', '2024-07-11 20:49:20', ''),
(17, 21, 'Sundarban: Deep experience', 'My journey to the Sundarbans, the world&#039;s largest mangrove forest spanning India and Bangladesh, was a thrilling immersion into the wild. The adventure began with a boat ride through the winding waterways, where the dense foliage created a serene, almost mystical atmosphere. The rhythmic hum of the boat&#039;s engine and the occasional call of exotic birds were the only sounds breaking the tranquil silence.\r\n\r\nNavigating deeper into the forest, I was captivated by the breathtaking scenery. The interlacing roots of mangrove trees formed intricate patterns, and the emerald green water reflected the lush canopy above. The air was thick with humidity and the scent of wet earth, enhancing the sense of being in a truly untouched part of the world.\r\n\r\nThe highlight of my trip was a guided safari, where the hope of spotting the elusive Royal Bengal Tiger kept everyone on edge. Although I didn&#039;t catch a glimpse of the majestic predator, the experience of seeing crocodiles basking on muddy banks and deer moving gracefully through the forest was equally rewarding. The sight of colorful kingfishers darting across the water and the distant call of the hornbill added to the enchantment.', '2024-07-11 23:06:41', 'Mangroves-in-Sunderbans-1-4.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `created_add` datetime NOT NULL DEFAULT current_timestamp(),
  `image_url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `fullname`, `email`, `password`, `phone`, `created_add`, `image_url`) VALUES
(1, 'aritra Sarkar', 'ar@gmail.com', 'abcde', 1234567890, '2024-06-16 12:23:02', 'christopher-goodwin-biAmQgBkWfQ-unsplash.webp'),
(17, 'soumalya mukherjee', 'abal@abal.com', 'abcde', 123978, '2024-07-02 16:11:50', 'IMG-20240617-WA0013.jpg'),
(18, 'Niladri Basak ', 'abcde@test.com', '$2y$10$N.iZ.HPVKkshEkj6GTNrX.Rc24SnwgFIEf2yw89ddci3V83SB.EFO', 1239874565, '2024-07-11 15:59:39', 'favicon.png.png'),
(20, 'Aritra Sarkar', 'aritrasarkar8770@gmail.com', '$2y$10$zzRWjeO15tOj0j1gx7vVh.B62oGoLpjAHelLNags0RlrAavMcAsRm', 8583988699, '2024-07-11 16:55:23', 'travailportfolio.jpg'),
(21, 'Deep Chatterjee', 'deep@test.com', '$2y$10$SB3KIRuSTMA5ISYvLsyvG.xsRizF.EYZJOTBpqLWDgj5Bj7NC9Bca', 9874562354, '2024-07-11 23:01:16', 'cheritageportfolio.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
