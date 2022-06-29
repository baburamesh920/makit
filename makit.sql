-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 04:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Makit', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `blog_image`, `description`, `posted_at`) VALUES
(1, 'Standard blog post.7', '1.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters It is a long established fact that a reader will be distracted by the readable content of a page when looking its layout. The point of using Lorem Ipsum is tat it has a more Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..<br/>\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\r\n<br/>\r\n\r\nit to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2018-10-11 09:30:54'),
(2, 'Standard blog post.', '2.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters It is a long established fact that a reader will be distracted by the readable content of a page when looking its layout. The point of using Lorem Ipsum is tat it has a more Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..<br/>\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\r\n<br/>\r\n\r\nit to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2018-10-11 10:05:23'),
(3, 'Aravinda Sametha Collections beats Jai Lava Kusa', 'aarvindasametha_ml200518_c-252-696x467.jpg', 'Aaravinda Sametha Veera Raghava movie is directed by Trivikram Srinivas and produced by S.Radha Krishna under the banner of Haarika & Hassine Creations. Aravinda Sametha Veera Raghava starring Jr NTR and Pooja Hegde has finally hit the theaters today on 11th October 2018.\r\n\r\nThe powerful combo of Trivikram Srinivas and Jr NTR is winning the heart of audiences. According to the traders report, Aravinda Sametha has collected (52,529,960.98 INR) $707,698 from 194 locations and has crushed the record of Jr NTRâ€™s earlier released movies- Jai Lava Kusa, and Janatha Garage which had minted (43,735,676.91 INR) $589,219 and (43,348,288.70 INR) $584,000 respectively from its premier. The average gross per screen is a whopping (270,778.35 INR) $3,648.. Finally Aravinda Sametha Veera Raghava has become the highest US opener in the filmy career of Young Tiger Jr NTR.\r\n\r\nThe trade analyst Jeevi wrote on his Twitter, â€œHourly gross of #AravindaSametha premieres at 7:50 pm PST in USA is (52,529,960.98 INR) $707,698 from 194 locations with per location average of (270,778.35 INR) $3,648.. Itâ€™s HUGE.â€', '2018-10-11 11:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`) VALUES
(7, 'Full Time Employee'),
(8, 'Contract'),
(9, 'C2H'),
(10, 'In House');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`) VALUES
(11, 'HCL'),
(12, 'IBM'),
(13, 'WIPRO'),
(14, 'Tech Mahendra');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_description` text NOT NULL,
  `job_requirements` text NOT NULL,
  `job_benefits` text NOT NULL,
  `how_to_apply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `job_id`, `job_description`, `job_requirements`, `job_benefits`, `how_to_apply`) VALUES
(2, 10, 'orem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudantium, totam rem aperiam, eaque ipsa quae ab illo', '.voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur .sint occae cupidatat non proident, sunt in culpa qui officia deserunt .mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus .error sit voluptatem accusantium dolore laudantium, totam rem aperiam, eaque ipsa quae ab illo.', 'orem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor .incididunt ut labore et dolore magna aliqua. Ut enim ad minim .veniam, quis nostrud exerc ullamco laboris nisi ut aliquip ex ea .commodo consequat. Duis aute irure dolor in reprehenderit in .voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur .sint occae cupidatat non proident, sunt in culpa qui officia deserunt .mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus .error sit voluptatem accusantium dolore laudantium, totam rem aperiam, eaque ipsa quae ab illo.', 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n\r\nBACK');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `keywords` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `keywords`) VALUES
(7, 'Php Develop'),
(8, 'Java Analys'),
(9, 'SEO Analyst'),
(10, 'Full Stack');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'Hyderabad'),
(2, 'Washington'),
(3, 'North Carolina'),
(4, 'Florida'),
(5, 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `location` int(100) NOT NULL,
  `keyword` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `categories` int(10) NOT NULL,
  `company_id` int(20) NOT NULL,
  `posted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `location`, `keyword`, `image`, `categories`, `company_id`, `posted_at`, `title`, `designation`, `last_date`) VALUES
(10, 1, 7, 'ds.png', 7, 11, '2018-10-10 19:05:52', 'Java Developer', 'dgs', '2018-10-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `keyword` (`keyword`),
  ADD KEY `categories` (`categories`),
  ADD KEY `location` (`location`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_details`
--
ALTER TABLE `job_details`
  ADD CONSTRAINT `job_details_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`keyword`) REFERENCES `keywords` (`id`),
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_ibfk_4` FOREIGN KEY (`location`) REFERENCES `location` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
