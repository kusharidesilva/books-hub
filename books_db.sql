-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 08:33 AM
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
-- Database: `books_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(10) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `story` text NOT NULL,
  `book_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `book_name`, `img`, `title`, `story`, `book_type`) VALUES
(21, 'THE MERMAID STORY', 'mermaid.png', '', 'Once upon a time, deep down under the sea, lived a little mermaid. She lived with her father, the Sea King, in a palace made of blue coral. Her favourite food was seabiscuits.\r\n', 'ShortStory'),
(24, 'PETER PAN', 'peter_pan_adventure.png', '', 'Peter Pan is a boy living in Neverland, surrounded by fairies and angry pirates. He doesn’t wish to grow and soon goes on an exploration with his cousins to discover the beauty of Neverland. ', 'Adventure'),
(25, 'HARRY POTTER', 'harry potter.png', '', 'A young boy goes into the school of wizards and soon learns more about his personality and family background. The story revolves around Harry and his friends conquering the demons of the wizarding world, striving to take Harry down.', 'Adventure'),
(26, 'ADALINA', 'adalina.png', '', 'Adalina was no ordinary fairy. No one knew why, but she had no wings. And, what’s more, she was a Princess, daughter of the Great Fairy Queen.', 'Fantacy'),
(27, 'THE CHAIR', 'horror2.png', '', 'This short tale starts benignly enough, with a friendly-seeming ghost playing with children, but when you learn the origins of the ghost – and just why the ghost is moving the object around the room, it quickly gets a lot creepier. ', 'Horror'),
(28, 'THE PARTY', 'party.png', '', 'I opened my photos app to find the picture Maya had requested. It was a group shot I had no memory of taking. It wasn’t everyone who’d been at the party - just the girls who’d dressed up, all five of them smiling cheesily. ', 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`, `type`) VALUES
(1, 'kushi', 'kushi02@gmail.com', 21, '123', 1),
(2, 'para', 'para@gmail.com', 22, '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
