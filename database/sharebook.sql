-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` int(50) NOT NULL,
  `email` int(50) NOT NULL,
  `password` int(8) NOT NULL,
  `image` int(255) NOT NULL,
  `activationStatus` tinyint(1) NOT NULL,
  `deletionStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `adsPic` varchar(255) NOT NULL,
  `adsText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `postId` int(255) NOT NULL,
  `commentWriterId` int(255) NOT NULL,
  `deletionStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(255) NOT NULL,
  `senderId` int(255) NOT NULL,
  `receiverId` int(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `dateAndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `senderId`, `receiverId`, `msg`, `dateAndTime`) VALUES
(1, 1, 2, 'how are you?', '0000-00-00 00:00:00'),
(2, 2, 1, 'fine', '0000-00-00 00:00:00'),
(3, 2, 1, 'and you?', '0000-00-00 00:00:00'),
(4, 1, 2, 'pretty good', '0000-00-00 00:00:00'),
(5, 2, 1, 'tai naki', '0000-00-00 00:00:00'),
(6, 1, 2, 'hmm. i am very fine.', '0000-00-00 00:00:00'),
(7, 2, 1, 'and i am also', '0000-00-00 00:00:00'),
(8, 1, 2, 'very good', '0000-00-00 00:00:00'),
(9, 2, 1, 'hmm', '0000-00-00 00:00:00'),
(10, 1, 2, 'some text 2', '0000-00-00 00:00:00'),
(11, 2, 1, 'some text 3', '0000-00-00 00:00:00'),
(12, 2, 1, 'fasfasdf', '0000-00-00 00:00:00'),
(13, 1, 3, 'hi', '0000-00-00 00:00:00'),
(14, 1, 3, 'how are you?', '0000-00-00 00:00:00'),
(15, 2, 3, 'hi', '0000-00-00 00:00:00'),
(16, 2, 3, 'how are you?', '0000-00-00 00:00:00'),
(17, 1, 2, 'aaaaaaaa', '0000-00-00 00:00:00'),
(18, 1, 2, 'aaaaaaaa', '0000-00-00 00:00:00'),
(19, 1, 2, 'asdfad', '0000-00-00 00:00:00'),
(20, 1, 2, 'asdfad', '0000-00-00 00:00:00'),
(21, 1, 2, 'asdfad', '0000-00-00 00:00:00'),
(22, 1, 2, 'asdfad', '0000-00-00 00:00:00'),
(23, 1, 2, 'aa', '0000-00-00 00:00:00'),
(24, 1, 3, 'asdfdsaf', '0000-00-00 00:00:00'),
(25, 1, 2, 'ASFASFASD', '0000-00-00 00:00:00'),
(26, 1, 1, 'hi', '0000-00-00 00:00:00'),
(27, 1, 3, 'xzcx', '0000-00-00 00:00:00'),
(28, 2, 1, 'hi', '0000-00-00 00:00:00'),
(29, 2, 3, 'hi', '0000-00-00 00:00:00'),
(30, 2, 1, 'hello', '0000-00-00 00:00:00'),
(31, 2, 1, 'hi', '0000-00-00 00:00:00'),
(32, 1, 1, 'afa', '0000-00-00 00:00:00'),
(33, 2, 3, 'hi', '0000-00-00 00:00:00'),
(34, 1, 2, 'hi', '0000-00-00 00:00:00'),
(35, 1, 2, 'hi', '0000-00-00 00:00:00'),
(36, 1, 1, 'hi', '0000-00-00 00:00:00'),
(37, 2, 1, 'hi', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `msgserial`
--

CREATE TABLE `msgserial` (
  `id` int(255) NOT NULL,
  `myId` int(255) NOT NULL COMMENT 'step2',
  `frndId` int(255) NOT NULL COMMENT 'step2',
  `time` time NOT NULL,
  `date` date NOT NULL,
  `deletionStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgserial`
--

INSERT INTO `msgserial` (`id`, `myId`, `frndId`, `time`, `date`, `deletionStatus`) VALUES
(13, 1, 3, '00:00:00', '0000-00-00', 0),
(21, 2, 3, '00:00:00', '0000-00-00', 0),
(22, 3, 2, '00:00:00', '0000-00-00', 0),
(28, 1, 1, '00:00:00', '0000-00-00', 0),
(29, 2, 1, '00:00:00', '0000-00-00', 0),
(30, 1, 2, '00:00:00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `writerId` int(255) NOT NULL,
  `postText` varchar(255) NOT NULL,
  `postImage` varchar(255) NOT NULL,
  `deletionStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `writerId`, `postText`, `postImage`, `deletionStatus`) VALUES
(4, 1, 'some text', '', 0),
(5, 1, 'zahid', '', 0),
(6, 1, 'joynab', '', 0),
(7, 1, 'success', '', 0),
(8, 1, 'aaaaaaaaaaaa', '', 0),
(9, 1, 'i am writing', '', 0),
(11, 1, 'I AM WRITING', '', 0),
(12, 1, 'I am writing', '', 0),
(14, 1, 'zahid hasan', '', 0),
(15, 1, 'zoynab', '', 0),
(16, 2, 'zahid', '', 0),
(17, 2, 'joynab', '', 0),
(18, 1, 'some text', '', 0),
(19, 2, 'thisis also some text', '', 0),
(20, 1, 'this is onother text', '', 0),
(21, 1, 'zahid', 'assets/frontend/img/user/z.jpg', 0),
(24, 2, 'joynab', 'assets/frontend/img/user/j.jpg', 0),
(25, 1, 'à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à¦¾à¥¤ à¦•à¦¿à¦›à§ à¦²à§‡à¦–à', '', 0),
(26, 1, 'texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext texttexttexttexttextt', '', 0),
(27, 2, 'â¤', '', 0),
(28, 1, 'â¤', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deletionStatus` tinyint(1) NOT NULL,
  `activeStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `deletionStatus`, `activeStatus`) VALUES
(1, 'zahid', 'zahid@gmail.com', 'admin', 'assets/frontend/img/user/z.jpg', 0, 1),
(2, 'joynab', 'joynab@gmail.com', 'admin', 'assets/frontend/img/user/j.jpg', 0, 1),
(3, 'USER', 'user@gmail.com', 'admin', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `virtualid`
--

CREATE TABLE `virtualid` (
  `usrId` int(255) NOT NULL,
  `VirtualId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgserial`
--
ALTER TABLE `msgserial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virtualid`
--
ALTER TABLE `virtualid`
  ADD PRIMARY KEY (`VirtualId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `msgserial`
--
ALTER TABLE `msgserial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `virtualid`
--
ALTER TABLE `virtualid`
  MODIFY `VirtualId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
