-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 06:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `sessionkey` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(5) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `subject6` varchar(255) NOT NULL,
  `subject7` varchar(255) NOT NULL,
  `subject8` varchar(255) NOT NULL,
  `subject9` varchar(255) NOT NULL,
  `subject10` varchar(255) NOT NULL,
  `subject11` varchar(255) NOT NULL,
  `subject12` varchar(255) NOT NULL,
  `subject13` varchar(255) NOT NULL,
  `subject14` varchar(255) NOT NULL,
  `subject15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `sessionkey`, `profilepic`, `firstname`, `secondname`, `lastname`, `gender`, `email`, `code`, `phonenumber`, `password`, `country`, `level`, `class`, `school`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `subject13`, `subject14`, `subject15`) VALUES
(10, '1b358d3bc0fae9fa8e2553b07eebb41c', 'Not Yet Updated', 'test', '', '123', 'Female', 'test123@developer.com', '+254', '+254740946326', '$2y$10$G3q2E3lw6liQdmjglOUA1uqeUciRdaJjzsBrwRI6zIViMe9Ci3dt6', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `cclass` varchar(255) NOT NULL,
  `levid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `cclass`, `levid`) VALUES
(1, 'Class One', 1),
(2, 'Class Two', 1),
(3, 'Class Three', 1),
(4, 'Class Four', 1),
(5, 'Class Five', 1),
(6, 'Class Six', 1),
(7, 'Class Seven', 1),
(8, 'Class Eight', 1),
(9, 'Form One', 2),
(10, 'Form Two', 2),
(11, 'Form Three', 2),
(12, 'Form Four', 2),
(13, '', 0),
(14, '', 0),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '', 0),
(19, '', 0),
(20, '', 0),
(21, '', 0),
(22, '', 0),
(23, '', 0),
(24, '', 0),
(25, '', 0),
(26, '', 0),
(27, '', 0),
(28, '', 0),
(29, '', 0),
(30, '', 0),
(31, '', 0),
(32, '', 0),
(33, '', 0),
(34, '', 0),
(35, '', 0),
(36, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `bio`) VALUES
(3, 'aggreyjames92@gmail.com', 'For any suggestions, queries or anything you want to put across, reach us by filling in the form below and we will get back to you via the submitted email address.'),
(4, 'aggreykiprop60@gmail.com', 'This is a great site. Complete it on time for our kids to enjoy the greatest learning experience. 😊'),
(5, 'aggreyjames92@gmail.com', 'For any suggestions, queries or anything you want to put across, reach us by filling in the form below and we will get back to you via the submitted email address.'),
(6, 'aggreyjames92@gmail.com', 'For any suggestions, queries or anything you want to put across, reach us by filling in the form below and we will get back to you via the submitted email address.'),
(11, 'aggreyjames92@gmail.com', 'For any suggestions, queries or anything you want to put across, reach us by filling in the form below and we will get back to you via the submitted email address.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `bio`) VALUES
(1, 'Aggrey', 'James', 'aggreyjames92@gmail.com', 'You can also reach us via the form below'),
(2, 'Kiprop', 'Aggrey', 'aggreyjames92@gmail.com', 'Write something in the below field:'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `docs` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uplddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `level` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `upldby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Primary School'),
(2, 'Secondary School');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `type`, `link`) VALUES
(1, 'Notes', 'all-notes.php'),
(2, 'Exams', 'all-exams.php'),
(3, 'Revision C.A.T.S', 'revision-cats.php');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(12) NOT NULL,
  `uid` int(12) NOT NULL,
  `action` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `logdate` varchar(50) NOT NULL,
  `logtime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `uid`, `action`, `status`, `logdate`, `logtime`) VALUES
(1, 1, 'Login', 'Successfully', '13/05/2022', ''),
(2, 2, 'Login', 'Unsuccessfully', '', ''),
(3, 2, 'Login', 'Successfully', '13/05/2022', ''),
(4, 2, 'Login', 'Unsuccessfully', '', ''),
(5, 1, 'Login', 'Successfully', '13/05/2022', ''),
(6, 1, 'Login', 'Successfully', '13/05/2022', ''),
(7, 1, 'Logout', 'Successfully', '13/05/2022', ''),
(8, 2, 'Login', 'Unsuccessfully', '13/05/2022', ''),
(9, 2, 'Login', 'Successfully', '27/05/2022', '00:07:+02:00am'),
(10, 2, 'Login', 'Successfully', '01/06/2022', '21:05:+02:00pm'),
(11, 2, 'Login', 'Successfully', '03/06/2022', '15:17:+02:00pm'),
(12, 2, 'Login', 'Successfully', '03/06/2022', '15:27:+02:00pm'),
(13, 1, 'Login', 'Successfully', '04/06/2022', '08:00:+02:00am'),
(14, 2, 'Login', 'Successfully', '04/06/2022', '08:19:+02:00am'),
(15, 2, 'Login', 'Successfully', '04/06/2022', '08:54:+02:00am'),
(16, 2, 'Login', 'Successfully', '05/06/2022', '12:09:+02:00pm'),
(17, 2, 'Login', 'Successfully', '05/06/2022', '13:28:+02:00pm'),
(18, 2, 'Login', 'Successfully', '05/06/2022', ''),
(19, 1, 'Login', 'Successfully', '05/06/2022', ''),
(20, 2, 'Login', 'Unsuccessfully', '05/06/2022', '14:15:+02:00pm'),
(21, 1, 'Login', 'Successfully', '05/06/2022', ''),
(22, 2, 'Login', 'Successfully', '05/06/2022', ''),
(23, 2, 'Logout', 'Successfully', '05/06/2022', ''),
(24, 1, 'Login', 'Successfully', '05/06/2022', ''),
(25, 2, 'Login', 'Successfully', '12/06/2022', ''),
(26, 2, 'Login', 'Successfully', '12/06/2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `msg1` varchar(3000) NOT NULL,
  `msg2` varchar(3000) NOT NULL,
  `sid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `email`, `cid`, `msg1`, `msg2`, `sid`, `time`) VALUES
(1, 'Aggrey', 'Manyu', 'aggreyjames92@gmail.com', 2, 'A female tiger gives birth to a litter of three or four cubs, who she will care for until they are a year-and-a-half old. These cubs quadruple in size during their first month!\n\nThe powerful predator generally hunts alone, able to bring down prey such as deer and antelope. Tigers wait until dark to hunt. The tiger sprints to an unsuspecting animal, usually pulling it off its feet with its teeth and claws. If the prey animal is large, the tiger bites its throat to kill it; smaller prey is usually killed when the tiger breaks its neck. Tigers have been known to eat up to 60 pounds of meat in one night, but more often they consume about 12 pounds during a meal. It may take days for a tiger to finish eating its kill. The cat eats until it\'s full, and then covers the carcass with leaves and dirt. The tiger comes back to feed some more.\n\nTigers live far apart from each other. A tiger knows if it is in another tiger’s territory based on the trees around him. Each tiger marks the trees in its area with urine and special scratches.', 'A male tiger gives birth to a litter of three or four cubs, who she will care for until they are a year-and-a-half old. These cubs quadruple in size during their first month!  The powerful predator generally hunts alone, able to bring down prey such as deer and antelope. Tigers wait until dark to hunt. The tiger sprints to an unsuspecting animal, usually pulling it off its feet with its teeth and claws. If the prey animal is large, the tiger bites its throat to kill it; smaller prey is usually killed when the tiger breaks its neck. Tigers have been known to eat up to 60 pounds of meat in one night, but more often they consume about 12 pounds during a meal. It may take days for a tiger to finish eating its kill. The cat eats until it\'s full, and then covers the carcass with leaves and dirt. The tiger comes back to feed some more.  Tigers live far apart from each other. A tiger knows if it is in another tiger’s territory based on the trees around him. Each tiger marks the trees in its area with urine and special scratches.', 1, '2022-02-19 02:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `pands`
--

CREATE TABLE `pands` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `link` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `uplddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pands`
--

INSERT INTO `pands` (`id`, `img`, `type`, `bio`, `link`, `level`, `class`, `subject`, `uplddate`) VALUES
(12, '36951541-welcome-library.png', 'News', 'WELCOME TO JREY LIBRARY. WE ARE HAPPY TO HAVE YOU ON BOARD.', 'get-started.php', 'Not Yet Updated', 'Not Yet Updated', 'Not Yet Updated', '2022-07-07 13:25:59'),
(16, '54179456-shopping-data.jpg', 'Revision C.A.T.S', 'Revision materials for Business Studies', 'revision-cats.php', '2', 'Form Four', 'Business Studies', '2022-07-10 09:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `levelid` varchar(255) NOT NULL,
  `classid` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL,
  `sub5` varchar(255) NOT NULL,
  `sub6` varchar(255) NOT NULL,
  `sub7` varchar(255) NOT NULL,
  `sub8` varchar(255) NOT NULL,
  `sub9` varchar(255) NOT NULL,
  `sub10` varchar(255) NOT NULL,
  `sub11` varchar(255) NOT NULL,
  `sub12` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `stdid`, `levelid`, `classid`, `school`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sub11`, `sub12`) VALUES
(1, 2, '2', 'Form Four', 'Friends School Kimabole ', 'Mathematics', 'English', 'Kiswahili', 'Biology', 'Chemistry', 'Physics', 'Geography', '', '', '', 'Business Studies', ''),
(2, 1, '2', 'Form One', 'Friends School Bokoli', 'Mathematics', 'English', 'Kiswahili', 'Biology', 'Chemistry', 'Physics', 'Geography', 'History and Government', 'Chistian Religious Education', 'Agriculture', 'Business Studies', 'Computer Studies'),
(3, 20, '2', 'Form Two', 'Maseno School ', 'Mathematics', 'English', 'Kiswahili', 'Biology', 'Chemistry', 'Physics', '', 'History and Government', 'Chistian Religious Education', '', '', ''),
(4, 21, '2', 'Form Four', 'Kimabole Secondary School', 'Mathematics', 'English', 'Kiswahili', 'Biology', 'Chemistry', 'Physics', 'Geography', 'History and Government', '', 'Agriculture', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(5) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `profilepic`, `firstname`, `secondname`, `lastname`, `gender`, `email`, `code`, `phonenumber`, `password`, `terms`, `country`) VALUES
(1, 'user.png', 'Aggrey', 'James', 'Kiprop', 'Male', 'aggreykiprop60@gmail.com', '+254', '+254740946326', '$2y$10$6k6J453G.6wXGlLwQ4bg4eEDQoSOjduK9mSZb9CtcgdDDnCR75HTS', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(2, '25648565-FB_IMG_16566559167218992.jpg', 'Aggrey ', 'James ', 'Manyu', 'Male', 'aggreyjames92@gmail.com', '+254', '+254740946326', '$2y$10$7S9cFNrODIh22AMSTeFnweNdEG/qxzy8BcDCNozK4CHd3r974IN.C', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(3, 'user.png', 'Felistus', 'Opiyo', 'Odongo', 'Male', 'festusodongo@gmail.com', '+256', '+256745544553', '$2y$10$2Wq.BxMJQfHgkL/r7y/2Meg4Q7WckAo7U6DHwnBkkaAXpgRBNKHN.', 'I agree to Jrey Library Terms and Conditions', 'Uganda'),
(5, 'user.png', 'Janet', 'Cheptoo', 'Kiprop', 'Female', 'janetCheptoo@gmail.com', '+254', '+2547888888997', '$2y$10$4eoPurayi8XQv43s0qMhwODnCPhk4F5NuNJVF5jcxhVB3a3F4hxmm', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(6, 'user.png', 'Phenny', 'Mbuche', 'Kazungu', 'Female', 'phennykazungu00@gmail.com', '+254', '+254', '$2y$10$8clhTYRTmHbqqZx3RBXngOtnjdoUMr.zt2hGCUJElo81wJS8ISORW', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(7, 'user.png', 'Peter', 'Osman', 'Ahmed', 'Male', 'peterahmed@gmail.com', '+254', '+254799221334', '$2y$10$wj9OaGocMPCwtjQcO2LG6.j4tFKhqlEphYAmpCmcXDjDaWkVl9oWK', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(8, 'user.png', 'Vic', 'Amunga', 'Amunga', 'Male', 'Vicamunga@gmail.com', '+254', '+254070000000', '$2y$10$FZqAZZ8ikgyFIlcY87FrF.I954LK4NTk7LeFGUtPZuEme2TYT85sK', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(9, 'user.png', 'John', '', 'Mark', 'Male', 'jm@gmail.com', '+254', '+254777777777', '$2y$10$pusRegoB.5e7KeuuURMh/uJoDyssNvYyuTJUwSX9gipNixtTBTxkO', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(12, 'user.png', 'Aggrey', 'James', 'Orengo', 'Male', 'jorengo@gmail.com', '+254', '+2547665544332', '$2y$10$hsSWBa/iYNHJPSoLiwiJGuKq/aJrNn8N6TXmZ47dXnUVPjzaPcJYm', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(13, 'user.png', 'Jenny', '', 'Adams', 'Female', 'jennya@gmail.com', '+254', '+2547665544332', '$2y$10$3a6z1mqObtRcW/YN69Lzg.7t6GZZwG1cwmPhHqDhv/sNYeo3aS42y', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(14, 'user.png', 'Love', '', 'Learn', 'Male', 'll@gmail.com', '+254', '+2547665544332', '$2y$10$QDYyBqu.bAw3Zl/n33sFxecCBR037Uf9d4dl2vteEvOJ69uI24Die', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(16, 'user.png', 'Oscar', '', 'Makweche', 'Male', 'om@gmail.com', '+254', '+254700889900', '$2y$10$mAWWzdiFFGkUxQtKMCjTou/zPQmDEJL/ZuTZThF.BoFVKihXNNLFu', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(17, 'user.png', 'Oscar', '', 'Makweche', 'Male', 'oms@gmail.com', '+254', '+254700889900', '$2y$10$Secmgt5VLFk545tUYxjqkui/6Lr4bO0VK5f9RejPsOXPGPjlAOd0a', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(20, 'user.png', 'Justin', '', 'Muturi', 'Male', 'jmu@gmail.com', '+254', '+254777766548', '$2y$10$ZcQp0uLJNenaLf9qH1pbhe8QlKcrZruvBWE5LMVbsaPX0TQr0uHwW', 'I agree to Jrey Library Terms and Conditions', 'Kenya'),
(21, 'user.png', 'Kim', '', 'Kung\'u', 'Female', 'kk@gmail.com', '+254', '+254700000000', '$2y$10$TLgxWW8zl1UhjIEqxKn//eZNvW4xDBP5LyqNVrgLLQRP4is3JzTJS', 'I agree to Jrey Library Terms and Conditions', 'Kenya');

-- --------------------------------------------------------

--
-- Table structure for table `subject1`
--

CREATE TABLE `subject1` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject1`
--

INSERT INTO `subject1` (`id`, `subject`, `level`) VALUES
(1, 'Mathematics', 1),
(8, 'Mathematics', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject2`
--

CREATE TABLE `subject2` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject2`
--

INSERT INTO `subject2` (`id`, `subject`, `level`) VALUES
(2, 'English', 1),
(9, 'English', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject3`
--

CREATE TABLE `subject3` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject3`
--

INSERT INTO `subject3` (`id`, `subject`, `level`) VALUES
(3, 'Kiswahili', '1'),
(10, 'Kiswahili', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject4`
--

CREATE TABLE `subject4` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject4`
--

INSERT INTO `subject4` (`id`, `subject`, `level`) VALUES
(4, 'Science', '1'),
(11, 'Biology', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject5`
--

CREATE TABLE `subject5` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject5`
--

INSERT INTO `subject5` (`id`, `subject`, `level`) VALUES
(5, 'Social Studies', '1'),
(12, 'Chemistry', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject6`
--

CREATE TABLE `subject6` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject6`
--

INSERT INTO `subject6` (`id`, `subject`, `level`) VALUES
(6, 'Chistian Religious Education', '1'),
(13, 'Physics', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject7`
--

CREATE TABLE `subject7` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject7`
--

INSERT INTO `subject7` (`id`, `subject`, `level`) VALUES
(7, 'Islam Religious Education', '1'),
(14, 'Geography', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject8`
--

CREATE TABLE `subject8` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject8`
--

INSERT INTO `subject8` (`id`, `subject`, `level`) VALUES
(15, 'History and Government', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject9`
--

CREATE TABLE `subject9` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject9`
--

INSERT INTO `subject9` (`id`, `subject`, `level`) VALUES
(16, 'Chistian Religious Education', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject10`
--

CREATE TABLE `subject10` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject10`
--

INSERT INTO `subject10` (`id`, `subject`, `level`) VALUES
(17, 'Agriculture', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject11`
--

CREATE TABLE `subject11` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject11`
--

INSERT INTO `subject11` (`id`, `subject`, `level`) VALUES
(18, 'Business Studies', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject12`
--

CREATE TABLE `subject12` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject12`
--

INSERT INTO `subject12` (`id`, `subject`, `level`) VALUES
(19, 'Computer Studies', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `level`) VALUES
(1, 'Mathematics', '1'),
(8, 'English', '1'),
(20, 'Kiswahili', '1'),
(21, 'Science', '1'),
(22, 'Social Studies', '1'),
(23, 'Christian Religious Education', '1'),
(24, 'Mathematics', '2'),
(25, 'English', '2'),
(26, 'Kiswahili', '2'),
(27, 'Biology', '2'),
(28, 'Chemistry', '2'),
(29, 'Physics', '2'),
(30, 'Geography', '2'),
(31, 'History and Government', '2'),
(32, 'Christian Religious Education ', '2'),
(33, 'Agriculture', '2'),
(34, 'Business Studies', '2'),
(35, 'Computer Studies', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `period` varchar(255) NOT NULL,
  `subscription` varchar(255) NOT NULL,
  `accname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `period`, `subscription`, `accname`) VALUES
(1, '1 Month', '800', 'Golden Account'),
(2, '1 Year', '6699', 'Golden Account'),
(3, '1 Month', '3150', 'Platinum Account'),
(4, '1 Year', '22050', 'Platinum Account');

-- --------------------------------------------------------

--
-- Table structure for table `taken`
--

CREATE TABLE `taken` (
  `id` int(20) NOT NULL,
  `stdid` int(20) NOT NULL,
  `clid` int(20) NOT NULL,
  `subid` int(20) NOT NULL,
  `subdate` varchar(50) NOT NULL,
  `subtime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pands`
--
ALTER TABLE `pands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taken`
--
ALTER TABLE `taken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pands`
--
ALTER TABLE `pands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taken`
--
ALTER TABLE `taken`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
