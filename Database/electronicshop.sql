-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 06:23 AM
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
-- Database: `electronicshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Apple'),
(4, 'Samsung'),
(5, 'Panasonic'),
(6, 'Mi'),
(7, 'Redmi Note 5'),
(8, 'Realme'),
(11, 'LG'),
(12, 'Philips'),
(13, 'Bajaj'),
(14, 'Quto'),
(15, 'Prestige'),
(16, 'Morphy'),
(17, 'Nikon'),
(18, 'Ariete'),
(19, 'Instax'),
(20, 'Godrej'),
(21, 'Haier'),
(22, 'HP'),
(23, 'WonderCheff'),
(24, 'Lenovo'),
(25, 'Asus'),
(26, 'Dell'),
(27, 'Sony'),
(28, 'Acer'),
(29, 'Canon'),
(30, 'OnePlus');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `user_id`, `product_id`, `qty`) VALUES
(40, 4, 0, 0),
(49, 4, 2, 1),
(50, 4, 13, 1),
(51, 12, 2, 1),
(59, 13, 1, 5),
(60, 14, 2, 1),
(61, 14, 7, 1),
(65, 15, 13, 1),
(68, 16, 7, 1),
(69, 16, 2, 1),
(70, 16, 1, 1),
(71, 16, 2, 1),
(72, 16, 2, 1),
(73, 16, 2, 1),
(74, 16, 2, 1),
(75, 16, 2, 1),
(76, 16, 2, 1),
(77, 16, 8, 1),
(78, 11, 2, 1),
(79, 11, 4, 1),
(81, 17, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Mobile Phone'),
(2, 'Television'),
(3, 'Washing Machine'),
(9, 'Kitchen Appliances'),
(10, 'Camera'),
(11, 'Laptop'),
(12, 'Bluetooth'),
(13, 'Airpods'),
(14, 'Air conditonar');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `discount` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_code`, `discount`, `status`) VALUES
(1, '', 20, 'Valid'),
(2, 'PRYCB30MAP', 10, 'Valid'),
(3, 'PR6RYI8VGG', 30, 'Valid'),
(4, 'PR0GCJQ288', 10, 'Valid'),
(5, 'PR6G9L2FHS', 20, 'Valid'),
(6, 'coupon_code', 0, 'status'),
(7, 'coupon_code', 0, 'status'),
(8, 'First60', 100, 'active'),
(9, 'First50', 1000, 'active'),
(10, '1111', 2000, 'active'),
(11, '1111', 100, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pwd`) VALUES
(1, 'admin111@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `created_at`, `status`) VALUES
(26, 'TRKtracker242598987676', 11, 'riya mistry', 'riya123@gmail.com', '9898987676', 'mannagar', 343434, 80900, 'COD', NULL, '2024-03-07 08:58:56', 0),
(27, 'TRKtracker491587656545', 13, 'pooja vaniya', 'pooja123@gmail.com', '8987656545', 'ved darwaja', 0, 74900, 'COD', NULL, '2024-03-09 08:04:09', 0),
(28, 'TRKtracker480087656545', 13, 'pooja vaniya', 'pooja123@gmail.com', '8987656545', 'ved darwaja', 232323, 80900, 'COD', NULL, '2024-03-09 08:04:56', 1),
(29, 'TRKtracker545687656545', 13, 'pooja vaniya', 'pooja123@gmail.com', '8987656545', 'ved darwaja', 34444, 80900, 'COD', NULL, '2024-03-09 09:17:00', 0),
(30, 'TRKtracker912187656545', 13, 'pooja vaniya', 'pooja123@gmail.com', '8987656545', 'ved darwaja', 4545, 80900, 'COD', NULL, '2024-03-09 09:22:21', 1),
(31, 'TRKtracker856998987676', 11, 'riya mistry', 'riya123@gmail.com', '9898987676', 'mannagar', 0, 89999, 'COD', NULL, '2024-03-12 12:56:17', 0),
(32, 'TRKtracker519898987676', 11, 'riya mistry', 'riya123@gmail.com', '9898987676', 'mannagar', 12345, 70000, 'COD', NULL, '2024-03-12 12:56:51', 0),
(33, 'TRKtracker377678987654', 17, 'rehan patel', 'rehan22@gmail.com', '9878987654', 'Mumbai', 454545, 60999, 'COD', NULL, '2024-03-13 07:21:57', 0),
(34, 'TRKtracker381575643545', 18, 'Prisha Patel', 'prisha12@gmail.com', '6975643545', 'Athwagate,surat', 654345, 4995, 'COD', NULL, '2024-03-15 15:08:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(1, 1, 23, 4, '1800'),
(2, 1, 13, 1, '140000'),
(3, 1, 8, 1, '10290'),
(4, 1, 1, 3, '80900'),
(5, 1, 2, 1, '70000'),
(6, 2, 23, 4, '1800'),
(7, 2, 13, 1, '140000'),
(8, 2, 8, 1, '10290'),
(9, 2, 1, 3, '80900'),
(10, 3, 1, 8, '80900'),
(11, 4, 3, 3, '60999'),
(12, 5, 20, 6, '4500'),
(13, 6, 5, 1, '80000'),
(14, 6, 7, 1, '89999'),
(15, 6, 1, 1, '80900'),
(16, 8, 2, 8, '70000'),
(17, 9, 3, 6, '60999'),
(18, 10, 21, 7, '999'),
(19, 11, 2, 1, '70000'),
(20, 12, 5, 1, '80000'),
(21, 13, 1, 1, '80900'),
(22, 14, 2, 1, '70000'),
(23, 15, 2, 1, '70000'),
(24, 16, 1, 1, '80900'),
(25, 17, 2, 1, '70000'),
(26, 18, 3, 1, '60999'),
(27, 19, 2, 1, '70000'),
(28, 20, 2, 1, '70000'),
(29, 21, 2, 1, '70000'),
(30, 22, 1, 1, '80900'),
(31, 22, 2, 1, '70000'),
(32, 23, 8, 1, '10290'),
(33, 23, 1, 1, '80900'),
(34, 23, 2, 1, '70000'),
(35, 24, 23, 1, '1800'),
(36, 26, 1, 1, '80900'),
(37, 27, 16, 1, '61900'),
(38, 27, 17, 1, '13000'),
(39, 28, 1, 1, '80900'),
(40, 29, 1, 1, '80900'),
(41, 30, 1, 1, '80900'),
(42, 31, 7, 1, '89999'),
(43, 32, 2, 1, '70000'),
(44, 33, 3, 1, '60999'),
(45, 34, 21, 5, '999');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `selling_price` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `brand`, `category`, `price`, `selling_price`, `qty`, `description`, `image`) VALUES
(1, 'iPhone 15 (256 GB ,pink)', 'Apple', 'Mobile Phone', '90900', '80900', '-6', 'Durable colour-infused glass and aluminium design.\r\nSuper-High-resolution photos 2x telephoto.', 'iphone15Pink.jpg'),
(2, 'Apple iPhone 15 (128 GB Storage, Green)', 'Apple', 'Mobile Phone', '71155', '70000', '-5', 'Durable colour-infused glass and aluminium design. Super-High-resolution photos 2x telephoto.', 'iphone15green.jpg'),
(3, 'Apple iPhone 14 Plus (128 GB, Midnight)', 'Apple', 'Mobile Phone', '71100', '60999', '-4', 'Durable colour-infused glass and aluminium design. Super-High-resolution photos 2x telephoto.\r\niOS 17 Operating System\r\nApple A15 Bionic chip\r\n128 GB Internal Memory\r\n6.7-inch OLED Display\r\nDual 12MP ', 'iphone14Midnight.jpg'),
(4, 'SAMSUNG Galaxy A54 5G', 'Samsung', 'Mobile Phone', '150000', '130999', '10', 'SAMSUNG Galaxy A54 5G A Series Cell Phone, Unlocked Android Smartphone, 128GB, 6.4” Fluid Display Screen, Pro Grade Camera, Long Battery Life, Refined Design, US Version, 2023, Awesome Black', 'samsungGalaxyA54.jpg'),
(5, 'BAOWU I14 Pro Max 5G(Black)', 'Apple', 'Mobile Phone', '90900', '80000', '10', 'BAOWU I14 Pro Max 5G Unlocked Smartphone, 6+256GB Android 13.0 Smartphone Unlocked Cell Phones, 6.82\" HD Screen, Battery 6800mAH with 128GB Memory Card/Face ID/Fingerprint Lock/Dual SIM Phone (Black)', 'BAOWUl14promax.jpg'),
(7, 'BAOWU I14 Pro Max 5G (Gold)', 'Apple', 'Mobile Phone', '100000', '89999', '18', 'BAOWU I14 Pro Max 5G Unlocked Smartphone, 6+256GB Android 13.0 Smartphone Unlocked Cell Phones, 6.82\" HD Screen, Battery 6800mAH with 128GB Memory Card/Face ID/Fingerprint Lock/Dual SIM Phone (Gold)', 'BAOWUl14promaxGold.jpg'),
(8, 'Philips Viva Collection Juicer with QuickClean Technology', 'Philips', 'Kitchen Appliances', '13995', '10290', '29', 'Pre-clean Function Rinses away the Unwanted Fibers\r\nQuickClean Technology\r\nAll Pulp Collected in One Place for Easy Disposal\r\nQuickClean Sieve\r\nQuick and Easy Assembly of all Parts\r\nEasy Checking of t', 'PhilipsVivaJuicer.jpg'),
(10, 'Apple iPhone 13, Midnight.jpg', 'Apple', 'Mobile Phone', '40000', '30000', '13', 'Apple iPhone 13, 128GB, Midnight - Unlocked (Renewed) ', 'Apple iPhone 13, Midnight.jpg'),
(11, 'Fujifilm instax Mini 11 Instant Camera with Built in Lens, Automatic Exposure, Close-up Shooting, Se', 'instax', 'Camera', '8000', '7560', '20', 'Film format: FUJIFILM INSTAX Mini film\r\nImage size: 62 mm × 46 mm\r\nLens: Built-in Lens\r\nShutter speed: 1/2 to 1/250 sec\r\nFlash: Built-in flash\r\nBattery: 2 x AA batteries\r\n', 'Fujifilminstaxmini11Black.jpg'),
(12, 'Fujifilm instax Mini 12 EXD Instant Camera with Automatic Exposure, Close-up Shooting, Selfie Mirror', 'Instax', 'Camera', '9000', '8500', '12', 'Automatic exposure\r\nClose-up shooting\r\nHigh-key mode\r\nParty mode\r\nSelfie mirror\r\nFilm format: FUJIFILM INSTAX Mini film\r\nImage size: 62 x 46 mm\r\nLens: 60 mm focal length, f/12.7 aperture', 'Fujifilminstaxmini12Blue.jpg'),
(13, 'SAMSUNG Galaxy S24 Ultra', 'Samsung', 'Mobile Phone', '150000', '140000', '15', 'SAMSUNG Galaxy S24 Ultra Cell Phone, 256GB AI Smartphone, Unlocked Android, 50MP Zoom Camera, Long Battery Life, S Pen, US Version, 2024, Titanium Yellow', 'SAMSUNG Galaxy S24 Ultra Cell Yellow.jpg'),
(14, 'Apple iPhone 14 Plus (128 GB, Blue)', 'Apple', 'Mobile Phone', '79900', '71155', '0', 'iOS 17 Operating System\r\nApple A15 Bionic chip\r\n128 GB Internal Memory\r\n6.7-inch OLED Display\r\nDual 12MP Primary Camera\r\n12 MP Front Camera\r\nEmergency SOS', 'iphone14plusBlue.jpg'),
(15, 'iphone13Green', 'Apple', 'Mobile Phone', '66999', '62999', '8', 'iOS 17 Operating System\r\n5G Supported\r\nApple A15 Bionic Chipset\r\n6.1-inch OLED Display\r\n256 GB Internal Memory\r\nDual 12MP Primary Camera\r\n12 MP Front Camera', 'iphone13Green.jpg'),
(16, 'Apple iPhone 13 (256 GB Storage, (Product) Red)', 'Apple', 'Mobile Phone', '69900', '61900', '3', 'iOS 17 Operating System\r\n5G Supported\r\nApple A15 Bionic Chipset\r\n6.1-inch OLED Display\r\n256 GB Internal Memory\r\nDual 12MP Primary Camera\r\n12 MP Front Camera', 'iphone13red.jpg'),
(17, 'Godrej 20 Litres Convection Microwave Oven', 'Godrej', 'Kitchen Appliances', '16100', '13000', '1', '20 Litres\r\nConvection Microwave\r\nDigiutal Display\r\nDeodorizer Function\r\nChild Lock\r\nDefrost\r\n255 instacook recipes\r\nOil-Free Recipes\r\nPaneer, Ghee and Curd\r\nSteam Clean', 'Godrej20LitersOven.jpg'),
(18, 'LG 32 Litres Wi-Fi Enabled Charcoal Microwave Oven ', 'LG', 'Kitchen Appliances', '40990', '30330', '6', '32 Litres Capacity\r\n401 Auto cook menu\r\nCharcoal Lighting Heater™\r\n30 Healthy Heart™ Auto Cook Menu/30 Heart Friendly Recipes\r\nChild Lock\r\nAuto Cook, Defrost, Warm Cooking Modes\r\nStainless Steel Cavit', 'LG32LitresOven.jpg'),
(19, 'LG 28 Litres Convection Microwave with Glass Door', 'LG', 'Kitchen Appliances', '19599', '16450', '2', 'Convection\r\n28 Ltr.\r\nTact Dial\r\n251 Auto Cook Menu\r\nIntellowave Technology\r\nCooking Completion Alarm\r\n1 Year Manufacturer Warranty', 'LGlitererMicrowave.jpg'),
(20, 'Wonderchef Nutri Blend 2 Jars ', 'WonderCheff', 'Kitchen Appliances', '5800', '4500', '0', '400 watts Motor\r\nCompact and Consumes Less Space\r\nSuperfast Motor 20000RPM Speed\r\nTwo jars (500ml and 300ml)\r\n2 Sets of Stainless Steel Blades\r\nSuitable for Dry Grinding, Juicing, Blending\r\nTrademark ', 'wonderchefNutriMixer.jpg'),
(21, 'Wonderchef Regalia French Press Coffee Maker', 'WonderChef', 'Kitchen Appliances', '2000', '999', '-5', 'Regalia French Press\r\nDurable German Borosilicate Glass\r\nUnique Filter System\r\nInspired by Italian Design\r\nGerman Quality Standards.\r\n', 'WonderchefRegaliaFrenchCoffeeMaker.jpg'),
(22, 'Wonderchef Regenta Automatic Coffee Maker ', 'WonderCheff', 'Kitchen Appliances', '33000', '19999', '5', 'One-Touch Coffee Experience: Wonderchef Regenta 20-Bar Automatic Coffee Maker allows you to enjoy your favourite coffee with simple touch of a button. Just Choose your favourite coffee on the LCD pane', 'WonderchefCoffeeMaker.jpg'),
(23, 'Morphy Richards Europa Drip Espresso Coffee Machine ', 'Morphy', 'Kitchen Appliances', '3995', '1800', '0', '600 Watts Power\r\nReusable Filter Type\r\nAnti Drip Function\r\nWarming Plate\r\nRemovable Filter\r\nDry Heat Protection\r\n2 Years Manufacturer Warranty', 'MorphyRechardsEuropaCoffeeMaker.jpg'),
(24, 'LG 80cm (32 Inch) HD Ready LED Smart TV with DTS Virtual:X', 'LG', 'Television', '14490.00', '13990.00', '20', 'Display: HD Ready, 1366 x 768\r\nRefresh Rate: 60 Hz\r\nConnectivity: 2 HDMI | 1 USB\r\nSound: 10 W Speaker, 2.0 Channel\r\nUSP: Dynamic Color Enhancer​, AI Features\r\n', 'LG1.webp'),
(25, 'LG UQ7500 139 cm (55 inch) 4K Ultra HD', 'LG', 'Television', '43990.00', '42990.00', '10', 'Display: 4K Ultra HD LED, 3840 x 2160 pixels, 60 Hz Refresh Rate​\r\nConnectivity: 3 HDMI | 1 USB | WiFi\r\nOperating System: WebOS\r\nApps: Netflix, Youtube, Prime Video, Disney Plus Hotstar\r\nSound: 20 W S', 'LG2.webp'),
(26, 'LG QNED83 139 cm (55 inch) QNED 4K Ultra HD', 'LG', 'Television', '94990.00', '90990.00', '12', 'Display: Quantum Dot NanoCell 4K Ultra HD, 3840 x 2160 pixels, 120 Hz Refresh Rate\r\nConnectivity: 4 HDMI | 2 USB | WiFi\r\nOperating System: WebOS 23\r\nApps: Apple TV, Netflix, Prime Video, Disney Plus H', 'LG3.webp'),
(27, 'SAMSUNG Series 4 80 cm (32 inch) HD Ready ', 'Samsung', 'Television', '13490.00', '12490.00', '4', 'Display: LED HD Ready, 1366 x 768 pixels, 60 Hz Refresh Rate\r\nConnectivity: 2 HDMI | 1 USB | Wi-Fi\r\nOperating System: Tizen\r\nApps: Sony Liv, Eros Now, Jio Cinema, Gaana\r\nSound: 20 W Speaker, Dolby Dig', 'Samsung1.webp'),
(28, 'SAMSUNG CUE60 108 cm (43 inch) 4K Ultra HD LED', 'Samsung', 'Television', '28990.00', '27890.00', '4', 'Display: 4K Ultra HD, 3840 x 2160 pixels, 50 Hz Refresh Rate​\r\nConnectivity: 3 HDMI | 1 USB | Wi-Fi\r\nOperating System: Tizen\r\nApps: Netflix, Prime Video, Disney Plus Hotstar, Youtube\r\nSound: 20 W Spea', 'Samsung2.webp'),
(29, 'SAMSUNG CUE60 138 cm (55 inch) 4K Ultra HD', 'Samsung', 'Television', '42990.00', '40990.00', '2', 'Display: 4K Ultra HD, 3840 x 2160 pixels, 50 Hz Refresh Rate​\r\nConnectivity: 3 HDMI | 1 USB | Wi-Fi\r\nOperating System: Tizen\r\nApps: Netflix, Prime Video, Disney Plus Hotstar, Youtube\r\nSound: 20 W Spea', 'Samsung3.webp'),
(30, 'SONY X75L 126 cm (50 inch) 4K Ultra HD LED ', 'Sony', 'Television', '57940.00', '45999.00', '4', 'Display: 4K Ultra HD, 3840 x 2160 pixels, 50 Hz Refresh Rate​\r\nConnectivity: 3 HDMI | 2 USB | WiFi\r\nOperating System: Google\r\nApps: Apple TV, Netflix, Prime Video, Disney Plus Hotstar, YouTube\r\nSound:', 'Sony1.jpg'),
(31, 'SONY Bravia W830K 80 cm (32 inch) ', 'Sony', 'Television', '26990.00', '25990.00', '5', 'Display: LED HD Ready, 1366 x 768 pixels, 60 Hz Refresh Rate\r\nConnectivity: 3 HDMI | 2 USB | Wi-Fi\r\nOperating System: Android\r\nApps: Netflix, Prime Video, YouTube, Google Play Store, Google TV\r\nSound:', 'Sony2.jpg'),
(32, 'HP Victus Gaming Laptop 15-fa1128TX', 'HP', 'Laptop', '80338.00', '70499', '5', '13th Generation Intel® Core™ i5 processor\r\nWindows 11 Home\r\n39.6 cm (15.6) diagonal, FHD, 144 Hz refresh rate, 9 ms response time display\r\nNVIDIA® GeForce RTX™ 2050\r\n16 GB DDR4\r\n512 GB SSD Solid State', 'HpLaptop1.jpg'),
(33, 'HP Pavilion Laptop 15-eh3102AU', 'HP', 'Laptop', '75794', '63499', '7', 'AMD Ryzen™ 7 processor\r\nWindows 11 Home\r\n39.6 cm (15.6) diagonal FHD display with AMD Radeon™ Graphics\r\n16 GB DDR4\r\n512 GB SSD Solid State Drive\r\nFull-size, backlit, cloud blue keyboard with numeric k', 'HpLaptop2.jpg'),
(34, 'HP Spectre 35.6 cm x360 2-in-1 Laptop OLED 14-eu0556TU - Blue', 'HP', 'Laptop', '185478', '172999', '10', 'Intel® Evo™ platform Powered by Intel® Core™ Ultra 7 processor\r\nWindows 11 Home\r\n35.6 cm (14) diagonal, 2.8K (2880 x 1800) OLED display with Intel® Arc™ Graphics\r\n32 GB LPDDR5x\r\n1 TB SSD Solid State D', 'HpLaptop3.jpg'),
(35, 'Dell 14 Laptop, 12th Gen Intel Core i5', 'Dell', 'Laptop', '62511', '48990', '4', 'Processor: Intel Core i5-1235U (up to 4.40 GHz, 12MB Cache, 10 Cores)\r\nRAM: 16 GB, 2 x 8 GB, DDR4, 2666 MHz // Storage: 512GB SSD\r\nSoftware: Pre-Loaded Windows 11 Home with Lifetime Validity | MS Offi', 'dell1.webp'),
(36, 'Dell 15 Laptop, Intel Core i5-1135G7 Processor', 'Dell', 'Laptop', '66349', '46990', '6', 'Processor: Intel Core i5-1135G7 11th Generation (up to 4.20 GHz, 8MB 4 Cores)\r\nRAM & Storage: 16 GB, 2 x 8 GB, DDR4, 2666 MHz & 512GB SSD\r\nSoftware: Pre-Loaded Windows 11 Home with Lifetime Validity |', 'dell2.webp'),
(37, 'Dell Inspiron 7430 2in1 Touch Laptop,', 'Dell', 'Laptop', '101567', '69990', '7', 'Processor: 13th Gen Intel Core i5-1335U (up to 4.60 GHz, 12MB Cache, 10 Cores) // RAM: 8 GB, LPDDR5, 4800 MHz, integrated // Storage: 1TB SSD\r\nSoftware: Pre-Loaded Windows 11 Home with Lifetime Validi', 'dell3.webp'),
(38, 'ASUS VivoBook 15 (2021), 15.6-inch (39.62 cm) HD', 'Asus', 'Laptop', '33990', '19990', '3', 'Processor: Intel Celeron N4020, 1.1 GHz base speed, Up to 2.8 GHz Turbo Speed, 2 cores, 2 Threads, 4MB Cache\r\nMemory & Storage: 4GB SO-DIMM DDR4 2400MHz RAM, Support up to 8GB using 1x SO-DIMM Slot wi', 'asus1.webp'),
(39, 'ASUS Vivobook 15, Intel Core i3-1220P 12th Gen', 'Asus', 'Laptop', '60990', '38900', '7', 'Processor: 12th Gen Intel Core i3-1220P Processor 1.1 GHz (12M Cache, up to 4.4 GHz, 10 cores)\r\nMemory: 8GB DDR4 on board 3200MHz with | Storage: 512GB M.2 NVMe PCIe 3.0 SSD\r\nDisplay: 15.6-inch (39.62', 'asus2.webp'),
(40, 'SUS TUF Gaming F15, 15.6\"(39.62 cms) FHD 144Hz, Intel Core i7-11800H 11th Gen', 'Asus', 'Laptop', '101897', '74990', '5', 'Processor: Intel Core i7-11800H Processor 2.3 GHz (24M Cache, up to 4.6 GHz, 8 Cores)\r\nPlay over 100 high-quality PC games, plus new and upcoming blockbusters on day one like Halo Infinite, Forza Hori', 'asus3.webp'),
(41, 'Lenovo Ideapad 3 AMD Ryzen 5 5500U 15.6\" (39.62cm) FHD Thin & Light Laptop', 'Lenovo', 'Laptop', '68997', '37600', '7', 'Lenovo Ideapad 3 AMD Ryzen 5 5500U 15.6\" FHD Thin & Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/Backlit Keyboard/2Yr Warranty/Arctic Grey/1.65Kg), 82KU017KIN', 'Lenovo1.webp'),
(42, 'Lenovo Yoga Slim 6 Intel Evo Core i5 ', 'Lenovo', 'Laptop', '78500', '65000', '5', 'Processor: Intel Core i5-1240P | Speed: 1.7Hz (Base) - 4.4GHz (Max) | 12 Cores | 16 Threads | 12MB Cache\r\nOS: Pre-Loaded Windows 11 Home with Lifetime Validity |MS Office Home and Student 2021 | Xbox ', 'Lenovo2.webp'),
(43, 'Apple MacBook Air Laptop M1 chip, 13.3-inch/33.74 cm Retina Display, 8GB RAM, 256GB SSD Storage', 'Apple', 'Laptop', '99900', '74990', '4', 'All-Day Battery Life – Go longer than ever with up to 18 hours of battery life.\r\nPowerful Performance – Take on everything from professional-quality editing to action-packed gaming with ease. The Appl', 'macbook1.webp'),
(44, 'Apple 2024 MacBook Air (13-inch, M3 chip with 8‑core CPU and 8‑core GPU, 8GB Unified Memory, 256GB) ', 'Apple', 'Laptop', '114900', '112890', '4', 'LEAN. MEAN. M3 MACHINE—The blazing-fast MacBook Air with the M3 chip is a superportable laptop that sails through work and play.\r\nPORTABLE DESIGN—Lightweight and under half an inch thin, so you can ta', 'macbook2.webp'),
(45, 'Apple Macbook Air 2024 (M3 Chip / 8GB RAM / 256 GB SSD / 8 Core CPU 8 CORE GPU', 'Apple', 'Laptop', '115900', '113000', '3', 'macOS is the most advanced desktop operating system in the world\r\nApple M3 chip\r\n13.6-inch (34.46 cm)(diagonal) Liquid Retina display\r\n8GB RAM, 256GB SSD\r\n8-core CPU\r\n8-core GPU\r\n16-core Neural Engine', 'macbook3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tblreg`
--

CREATE TABLE `tblreg` (
  `user_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblreg`
--

INSERT INTO `tblreg` (`user_id`, `name`, `email`, `password`, `contactno`, `address`, `date`) VALUES
(4, 'Twinkal Panchal', 'admin123@gmail.com', '12345', '8989765654', 'vedroad surat', '2024-02-14'),
(5, 'user', 'user12@gmail.com', 'user', '2345678912', 'Surat,adajan', '2024-02-15'),
(7, 'bdsbhc', 'abcd@123gmail.com', 'ahbfg', '5656565656', 'jhdjehhfde', '2024-03-01'),
(8, 'test', 'test123@gmail.com', '567', '7878787878', 'vedroad surat', '2024-02-24'),
(10, 'khushi salat', 'khushi123@gmail.com', '123', '66666666666', 'surat', '2024-02-16'),
(11, 'riya mistry', 'riya123@gmail.com', 'riya123', '9898987676', 'mannagar', '2024-03-16'),
(12, 'Twinkal Panchal', 'twinkal123@gmail.com', '123', '7878787878', 'surat', '2024-03-29'),
(13, 'pooja vaniya', 'pooja123@gmail.com', 'pooja', '8987656545', 'ved darwaja', '2024-03-08'),
(14, 'Asmitaben Panchal', 'asmita123@gmail.com', '123', '8976543434', 'surat', '2024-10-12'),
(15, 'tiya patel', 'tiya123@gmail.com', '12345', '89865435454e', 'Kinkhload,near temple ,ta bors', '2024-02-29'),
(16, 'nandini salaya', 'nandini111@gmail.com', '12345', '6765443434', 'dabholi,surat', '2024-03-15'),
(17, 'rehan patel', 'rehan22@gmail.com', '6789', '9878987654', 'Mumbai', '2024-10-15'),
(18, 'Prisha Patel', 'prisha12@gmail.com', '123', '6975643545', 'Athwagate,surat', '2024-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `name`, `email`, `msg`) VALUES
(2, 'Twinkal Panchal', 'admin123@gmail.com', 'hii nice product');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fb`
--

CREATE TABLE `tbl_fb` (
  `ID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_no` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fb`
--

INSERT INTO `tbl_fb` (`ID`, `Name`, `Phone_no`, `Email`, `Message`, `Date`) VALUES
(2, 'Asmitaben Panchal', '07876543456', 'asmita123@gmail.com', 'jhdsfjhfdhj', '2024-03-29'),
(3, 'Twinkal Panchal', '09090876543', 'admin123@gmail.com', 'hjgfgredyhj', '2024-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`) VALUES
(6, 11, 2),
(8, 11, 0),
(9, 11, 7),
(10, 4, 0),
(11, 4, 13),
(12, 13, 17),
(13, 13, 1),
(15, 16, 2),
(16, 18, 2),
(17, 18, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tblreg`
--
ALTER TABLE `tblreg`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fb`
--
ALTER TABLE `tbl_fb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tblreg`
--
ALTER TABLE `tblreg`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fb`
--
ALTER TABLE `tbl_fb`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
