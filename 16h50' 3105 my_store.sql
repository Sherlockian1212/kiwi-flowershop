-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 07:15 AM
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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(256) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(5, 'Naruto'),
(13, 'Sasuke');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 5, 749986090, 6, 4, 'pending'),
(2, 5, 1008552752, 6, 4, 'pending'),
(3, 6, 1625740984, 12, 3, 'pending'),
(4, 6, 149609188, 5, 2, 'pending'),
(5, 5, 89272567, 11, 1, 'pending'),
(6, 5, 748566868, 12, 1, 'pending'),
(7, 5, 1115582573, 5, 3, 'pending'),
(8, 5, 847334276, 7, 2, 'pending'),
(9, 5, 1346275687, 5, 3, 'pending'),
(10, 5, 1640519530, 9, 1, 'pending'),
(11, 4, 37870085, 7, 2, 'pending');

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
(13, 'VICTORIAN PINK ROSELILY', 'The Victorian Pink RoseLily in swirls of pink and white speaks for itself with double flowering heads for twice as much impact, texture and beauty. As well as being a long-lasting flower, the double lily is pollen-free, making it a suitable floral choice for any home.', 'victorian, pink, lily', 4, 'VictorianWhiteLily.jpg', 145000, '2023-05-23 15:24:07', '1'),
(15, 'ROYAL WINDSOR PEONY VASE SET', 'Your peonies will arrive with closed buds, blooming within 2- 4 days at home. Please keep this in mind when ordering peonies for a specific event or date.', 'Peony, Royal, Windsor, Set ', 3, 'RoyalWindsorPeonyVaseSet.jpg', 410000, '2023-06-05 13:38:46', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 5, 2080000, 261265502, 2, '2023-06-05 12:33:20', 'Completed'),
(3, 5, 2080000, 1509132842, 2, '2023-06-05 12:35:21', 'Completed'),
(4, 5, 2080000, 749986090, 2, '2023-06-05 12:37:14', 'Completed'),
(5, 5, 2080000, 1008552752, 2, '2023-06-05 12:46:58', 'Completed'),
(6, 6, 2370000, 1625740984, 3, '2023-06-04 04:24:01', 'pending'),
(7, 6, 1100000, 149609188, 2, '2023-06-04 04:27:44', 'pending'),
(8, 5, 810000, 89272567, 3, '2023-06-04 14:35:13', 'pending'),
(10, 5, 760000, 847334276, 2, '2023-06-04 14:47:03', 'pending'),
(12, 5, 1350000, 1640519530, 3, '2023-06-04 14:58:12', 'pending'),
(13, 4, 1260000, 37870085, 3, '2023-06-05 14:57:27', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(1, 1, 261265502, 2080000, '', '2023-06-05 12:33:19'),
(2, 3, 1509132842, 2080000, '', '2023-06-05 12:36:18'),
(3, 4, 749986090, 2080000, 'Paypal', '2023-06-05 12:37:14'),
(4, 5, 1008552752, 2080000, 'Momo', '2023-06-05 12:46:58'),
(5, 13, 37870085, 1260000, 'Momo', '2023-06-05 14:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_address`, `user_mobile`, `user_ip`) VALUES
(4, 'Hina', 'hinn@gmail.com', '$2y$10$QQgWeV0.Soov2j3HWmGO3OqQvhN2qx5nwcrh3GcKRULQ/2fGKA1TS', './user_images/hina.jpg', 'Taiki', '11222121123123', '127.0.0.1'),
(5, 'ava', 'ava123@gmail.com', '$2y$10$1whFXhiRvkR1i3XeKrThDOPBRWX0P7CWBtlKbtLnKRw.mcg8ySCvy', 'https://th.bing.com/th/id/OIP.W_XIkWBKqvpX2O-x85aaxgHaHa?pid=ImgDet&rs=1', 'Earth', '1111111111', '127.0.0.1'),
(6, 'Makima', 'makima@gmail.com', '$2y$10$ru9rqw2xDrFG6T.5u6CpV.OmvC3rI11Y4oDfz.izZACvqfZfIspXa', './user_images/makima.jpg', 'Venus', '1234567890', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
