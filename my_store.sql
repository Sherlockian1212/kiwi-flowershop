-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 06:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Roses'),
(2, 'Tulips'),
(3, 'Peonies'),
(4, 'Lily'),
(5, 'Naruto');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(256) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_keywords` varchar(256) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `product_image`, `product_price`, `date`, `status`) VALUES
(1, '20 PINK ROSES BOUQUET', 'The Pink Sweet Avalanche Rose from our rose collection is a timeless classic and sure to delight with its beauty and simplicity.The Pink Sweet Avalanche Rose from our rose collection is a timeless classic and sure to delight with its beauty and simplicity.', '20, pink, rose, bouquet', 1, '20PinkRosesBouquet.jpg', 270000, '2023-05-23 14:56:42', '1'),
(5, '20 IVORY ROSES BOUQUET', 'The Ivory Avalanche rose from our rose collection is a timeless classic, symbolic of innocence and purity. This variety opens over time to reveal a beautiful full shape and prides itself on being a long-lasting floral choice.', '20, ivory, roses, bouquet', 1, '20IrovyRosesBouquet.jpg', 280000, '2023-05-23 14:57:54', '1'),
(6, 'TEQUILA SUNRISE ROSE', 'The Tequila Sunrise rose is tonal in colour, showcasing an orange centre with bright pink outer petals that create a stunning ombré effect.', 'tequila, sunrise, rose', 1, 'TequilaSunrise.jpg', 250000, '2023-05-23 15:01:33', '1'),
(7, '50 RED ROSES BOUQUET', 'A true romantic, the Red Naomi rose from our rose collection is sure to stir emotions of love with its deep red colour and soft, velvety petals.', '50, red, rose, bouquet', 1, '50RedRoseBouquet.jpg', 220000, '2023-05-23 15:12:38', '1'),
(8, 'WHITE HOT DUTCH TULIP', 'Embrace elevated simplicity, thanks to our White Hot Dutch tulip. With plenty of petals in an iconic shade, this bright white wonder is sure to suit any mood.', 'white, dutch, tulip', 2, 'TulipWhiteHotDutch.jpg', 250000, '2023-05-23 15:14:17', '1'),
(9, 'CANARY DUTCH TULIP', 'Evocative of the resplendent fields of Keukenhof and a national symbol of the Netherlands, the Dutch tulip is a humble flower variety with upright petals and an extensive range of bright and cheerful colours to their name.', 'canary, dutch, tulip', 2, 'TulipCanaryDutch.jpg', 250000, '2023-05-23 15:15:45', '1'),
(11, 'FLAMINGO FRENCH PEONY', 'A bestselling French variety with a cult following. No surprises here, pink peonies symbolise beauty, romance and luck.', 'flamingo, french, peony', 3, 'FlamingoFrenchPeony.jpg', 310000, '2023-05-23 15:26:11', '1'),
(12, 'COTTON CLOUD FRENCH PEONY', 'Pared-back elegance, white peonies symbolise purity, innocence, and honour', 'cotton, cloud, french, peony', 3, 'CottonCloudPeony.jpg', 290000, '2023-05-23 15:22:12', '1'),
(13, 'VICTORIAN PINK ROSELILY', 'The Victorian Pink RoseLily in swirls of pink and white speaks for itself with double flowering heads for twice as much impact, texture and beauty. As well as being a long-lasting flower, the double lily is pollen-free, making it a suitable floral choice for any home.', 'victorian, pink, lily', 4, 'VictorianWhiteLily.jpg', 145000, '2023-05-23 15:24:07', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
