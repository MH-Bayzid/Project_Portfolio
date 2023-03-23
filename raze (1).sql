-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 06:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raze`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ID` int(11) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ID`, `sub_title`, `title`, `desp`) VALUES
(1, 'Hello there..!', 'I am Hossain Mahmud..', 'I\'m Hossain Mahmud, professional CHILD specalist with long time experience in this field​.');

-- --------------------------------------------------------

--
-- Table structure for table `banner_photos`
--

CREATE TABLE `banner_photos` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_photos`
--

INSERT INTO `banner_photos` (`id`, `photo`, `status`) VALUES
(1, '1.png', 0),
(2, '2.jpg', 0),
(3, '3.jpg', 0),
(4, '4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `image1`, `status`) VALUES
(1, '1.jpg', 0),
(2, '2.jpg', 0),
(3, '3.jpg', 0),
(4, '4.jpg', 0),
(5, '5.jpg', 0),
(6, '6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `icon`, `number`, `sub_title`, `status`) VALUES
(1, 'fa fa-facebook-official', 10000, 'Facebook', NULL),
(2, 'fa fa-youtube-play', 24500, 'Youtube', NULL),
(3, 'fa fa-twitter', 13000, 'twitter', NULL),
(4, 'fa fa-instagram', 2000, 'Instagram', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `status`) VALUES
(1, '1.png', 0),
(2, '2.png', 0),
(3, '3.webp', 1),
(8, '8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `section_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `section_id`) VALUES
(1, 'Home', 'home'),
(2, 'About', 'about'),
(3, 'Service', 'service'),
(4, 'Portfolio', 'portfolio'),
(5, 'Contact', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `status`, `date`) VALUES
(1, 'Aiko Mckinney', 'bedok@mailinator.com', 'Non ipsum aut facere', 1, '22-12-11 02:34:56'),
(2, 'Raya Taylor', 'rimegenyk@mailinator.com', 'Maxime esse perfere', 0, '22-12-11 02:34:58'),
(3, 'Quin Waters', 'tume@mailinator.com', 'Cupiditate amet dol', 1, '22-12-11 02:34:59'),
(4, 'Maisie Dale', 'gola@mailinator.com', 'Est reiciendis assu', 0, '22-12-11 02:35:00'),
(5, 'Lamar Acevedo', 'podu@mailinator.com', 'Facilis non consequu', 0, '22-12-11 02:35:00'),
(6, 'Jaime Parks', 'rypyk@mailinator.com', 'Fugiat in est archi', 0, '22-12-11 02:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `title`, `comment`, `image`) VALUES
(1, 'Emerson Blair', 'Odio natus ad rerum ', 'Quam in sint dolorem', '1.jpg'),
(2, 'Graiden Dale', 'Velit sequi sequi c', 'Id quibusdam autem ', '2.jpg'),
(3, 'Ivor Gonzales', 'Ut eius inventore es', 'Enim eum quia conseq', '3.jpg'),
(4, 'Doller Vhai', 'Dollar Expert on Fiv', 'All solutions here. Now you can launch your amazing website within a week. Our mission is to satisfy every client.', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(2000) NOT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `desp`, `logo`) VALUES
(5, 'wgfw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt facere eius. Consequatur recusandae ab labore, saepe omnis eius.', 'fa fa-fire'),
(6, 'wfwg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt facere eius. Consequatur recusandae ab labore, saepe omnis eius.', 'fa fa-html5'),
(7, 'Light', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt facere eius. Consequatur recusandae ab labore, saepe omnis eius.', 'fa fa-html5'),
(8, 'EDIT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt facere eius. Consequatur recusandae ab labore, saepe omnis eius.', 'fa fa-edit'),
(9, 'SUPPORT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt facere eius. Consequatur recusandae ab labore, saepe omnis eius.', 'fa fa-support'),
(10, 'FIRE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt facere eius. Consequatur recusandae ab labore, saepe omnis eius.', 'fa fa-free-code-camp');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `desp`, `percentage`, `status`) VALUES
(1, 'Digital Marketing', 'I\'am very good on this topic!', 70, 1),
(6, 'HTML', 'I\'am Midfielder oon it.', 20, 1),
(7, 'CSS', 'Same here...!', 80, 1),
(8, 'PHP', 'I\'am Learning this topic!', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `icon`, `link`, `status`) VALUES
(1, 'fa fa-facebook-official', 'https://www.facebook.com/', 1),
(2, 'fa fa-youtube-play', 'https://www.youtube.com/', 1),
(3, 'fa fa-twitter', 'https://twitter.com/', 1),
(4, 'fa fa-instagram', 'https://www.instagram.com/', 0),
(8, 'fa fa-pinterest', 'https://www.pinterest.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`) VALUES
(1, 'Bethany Patrick', 'liloten@mailinator.com', '$2y$10$On1JbpOn8tey2gl3c4vvD.BAOyffwo0BIfLJacADdnCYYP/p9i7GK', '1.jpg'),
(6, 'Palmer Flynn', 'haqi@mailinator.com', '$2y$10$EOSmialvdGsw4ftBMbl/Wuf7AEYCM744OMx8851f806TgZBg5JGdW', '6.jpg'),
(12, 'Susan Key', 'cucele@mailinator.com', '$2y$10$2xvyNjII8g1r6YxLRcbiXu6hxFnZIZFeOFRbqt3HxcWthybFTA6XW', '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(1000) NOT NULL,
  `thumb` varchar(50) DEFAULT NULL,
  `feat_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `user_id`, `category`, `sub_title`, `title`, `desp`, `thumb`, `feat_image`) VALUES
(3, 6, 'Nulla rerum et nostr', 'Accusamus reiciendis', 'Deserunt consequatur', 'Want a superweapon to ignite your customer’s interest in a product? It’s right under your nose: Take your product’s unique features and turn them into benefits.\n\nWhat are features and benefits? Think about what gets you excited about your product that makes it different from your competitors’ products. It might be careful construction, ethically sourced materials, or all the bells and whistles you dreamed up over drinks one night. Those are features.\n\nNow, think about what those things do for your customer. Does careful construction mean that your product is safe for children? Do ethically sourced materials make the buyer feel good about purchasing your product? Do those bells and whistles make everyone who sees your customer with your product weep with envy? Those are benefits.\n\nIn product descriptions, it’s easy to fall into the trap of only describing the features of your products. But when you just list the features, you’re not actually helping your buyer understand how your produc', '3.jpg', '3.jpg'),
(5, 6, 'Eos earum porro at ', 'Tempor dicta accusan', 'Molestiae error et d', 'Want a superweapon to ignite your customer’s interest in a product? It’s right under your nose: Take your product’s unique features and turn them into benefits. What are features and benefits? Think about what gets you excited about your product that makes it different from your competitors’ products. It might be careful construction, ethically sourced materials, or all the bells and whistles you dreamed up over drinks one night. Those are features. Now, think about what those things do for your customer. Does careful construction mean that your product is safe for children? Do ethically sourced materials make the buyer feel good about purchasing your product? Do those bells and whistles make everyone who sees your customer with your product weep with envy? Those are benefits. In product descriptions, it’s easy to fall into the trap of only describing the features of your products. But when you just list the features, you’re not actually helping your buyer understand how your produc.', '5.jpg', '5.jpg'),
(7, 6, 'Explicabo Necessita', 'Lorem assumenda opti', 'Unde sit sint hic ', 'Want a superweapon to ignite your customer’s interest in a product? It’s right under your nose: Take your product’s unique features and turn them into benefits. What are features and benefits? Think about what gets you excited about your product that makes it different from your competitors’ products. It might be careful construction, ethically sourced materials, or all the bells and whistles you dreamed up over drinks one night. Those are features. Now, think about what those things do for your customer. Does careful construction mean that your product is safe for children? Do ethically sourced materials make the buyer feel good about purchasing your product? Do those bells and whistles make everyone who sees your customer with your product weep with envy? Those are benefits. In product descriptions, it’s easy to fall into the trap of only describing the features of your products. But when you just list the features, you’re not actually helping your buyer understand how your produc.', '7.png', '7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `banner_photos`
--
ALTER TABLE `banner_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_photos`
--
ALTER TABLE `banner_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
