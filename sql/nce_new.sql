-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 08:53 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nce`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'amulya', 'xeron', 'amulya', 'Budhthoki'),
(3, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `admin_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`admin_log_id`, `username`, `login_date`, `logout_date`, `admin_id`) VALUES
(1, 'amulya', '2015-08-29 14:58:51', '', 0),
(2, 'admin', '2015-08-29 14:42:31', '', 0),
(3, 'admin', '2015-08-29 15:01:29', '', 0),
(4, 'admin', '2015-08-29 15:43:48', '2015-08-29 16:44:00', 3),
(5, 'amulya', '2015-08-29 15:44:14', '', 1),
(6, 'amulya', '2015-08-29 15:46:34', '', 1),
(7, 'amulya', '2015-08-29 15:49:39', '', 1),
(8, 'amulya', '2015-08-29 15:52:09', '', 1),
(9, 'amulya', '2015-08-29 16:01:47', '', 1),
(10, 'admin', '2015-08-29 16:07:38', '2015-08-29 16:44:00', 3),
(11, 'amulya', '2015-08-29 16:38:30', '', 1),
(12, 'admin', '2015-08-29 16:39:31', '2015-08-29 16:44:00', 3),
(13, 'admin', '2015-08-29 16:39:51', '2015-08-29 16:44:00', 3),
(14, 'admin', '2015-08-29 16:43:02', '2015-08-29 16:44:00', 3),
(15, 'admin', '2015-08-29 16:43:54', '2015-08-29 16:44:00', 3),
(16, 'admin', '2015-08-29 16:45:14', '', 3),
(17, 'admin', '2015-08-29 16:58:20', '', 3),
(18, 'admin', '2015-08-29 16:58:51', '', 3),
(19, 'admin', '2015-08-30 10:01:33', '', 3),
(20, 'admin', '2015-09-01 00:38:28', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(100) NOT NULL,
  `choices` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int(11) NOT NULL,
  `floc` varchar(300) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_subject_overview`
--

CREATE TABLE IF NOT EXISTS `class_subject_overview` (
  `faculty_subject_overview_id` int(11) NOT NULL,
  `teacher_faculty_id` int(11) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department` varchar(3) NOT NULL,
  `hod` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department`, `hod`) VALUES
(1, 'BCT', 'Pradip');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `teacher_faculty_id` int(11) NOT NULL,
  `date_start` varchar(100) NOT NULL,
  `date_end` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_class`
--

CREATE TABLE IF NOT EXISTS `faculty_class` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(50) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `message_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message_sent`
--

CREATE TABLE IF NOT EXISTS `message_sent` (
  `message_sent_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(14, 'amulya@mail,com'),
(16, 'bikram@nce.com'),
(10, 'budhathoki.amulya@gmail.com'),
(24, 'hahaah'),
(13, 'hello@nomail.com'),
(1, 'jusmeamulya@gmail.com'),
(15, 'nce@email.com'),
(18, 'new@gmail.com'),
(22, 'ravi@galkm');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `subject`, `detail`, `datetime`) VALUES
(1, 'asdasd', 'asdasdasdasdasdasdasdcascascascas', 'asaassaasas'),
(2, 'Project Mid Defence', 'It is hereby,notified that the Mid Defence of the minor project ko BCT and BEX III/II is going to be held today.\r\nBest of Luck', '28th August');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL,
  `teacher_faculty_id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_read_teacher`
--

CREATE TABLE IF NOT EXISTS `notification_read_teacher` (
  `notification_read_teacher_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_read` varchar(100) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_username` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`question_id`, `a_id`, `a_username`, `a_answer`, `a_datetime`) VALUES
(8, 3, 'sandip', 'we gonna rock it.', '2015-08-26 18:40:51'),
(8, 4, 'ravi', 'be there on time', '2015-08-27 5:01:27'),
(8, 5, '', '', ''),
(0, 1, '', '', ''),
(0, 2, '', '', ''),
(8, 6, '', '', ''),
(4, 1, '', '', ''),
(4, 2, '', '', ''),
(4, 3, '', '', ''),
(4, 4, '', '', ''),
(4, 5, '', 'jhgbj', ''),
(4, 6, '', '', ''),
(7, 1, 'amulya', 'yooo', ''),
(7, 1, 'amulya', 'efwefwefwfwefew', ''),
(7, 1, 'amulya', 'efefefefefef', ''),
(7, 1, 'amulya', 'why', '2015-08-30 17:20:17'),
(7, 1, 'sandeep', 'whats the problem ??', '2015-08-30 17:20:49'),
(7, 1, 'sandeep', 'efefe', '2015-08-30 17:20:57'),
(7, 2, 'sandeep', 'efefe', '2015-08-30 17:21:14'),
(9, 1, 'amulya', 'aaaaaaaaaaaaaaaaaaa', '2015-08-31 12:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `year` year(4) NOT NULL DEFAULT '0000',
  `faculty` varchar(30) NOT NULL,
  `roll` int(3) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `t_address` varchar(30) NOT NULL,
  `p_address` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user`, `pass`, `fname`, `mname`, `lname`, `email`, `year`, `faculty`, `roll`, `contact`, `t_address`, `p_address`, `image`) VALUES
(3, 'amulya', 'amulya', 'Amulya', 'Raj ', 'Budhathoki', 'jusmeamulya@gmail.com', 2069, 'BCT', 111, '9808659941', 'Bishalnagar', '', 'uploads/699.jpg'),
(4, 'sandeep', 'sandy', 'Sandeep', '', 'Shrestha', 'sando_lkenf@gmail.com', 2069, 'BCT', 104, '9845670393', 'klnma', 'sweknmo', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE IF NOT EXISTS `student_assignment` (
  `student_assignment_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `floc` varchar(100) NOT NULL,
  `assignment_fdatein` varchar(50) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `unit` int(11) NOT NULL,
  `Pre_req` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `about` varchar(500) NOT NULL,
  `teacher_status` varchar(20) NOT NULL,
  `teacher_stat` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `department_id`, `location`, `about`, `teacher_status`, `teacher_stat`, `image`) VALUES
(20, 'ram', 'ramm', 'afaffwew', 'wfwewe', 1, 'ddsfds', 'dfsdf', 'res', 'adsdas', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_announcements`
--

CREATE TABLE IF NOT EXISTS `teacher_announcements` (
  `teacher_faculty_announcements_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `teacher_faculty_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_faculty_student`
--

CREATE TABLE IF NOT EXISTS `teacher_faculty_student` (
  `teacher_faculty_student_id` int(11) NOT NULL,
  `teacher_faculty_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notification`
--

CREATE TABLE IF NOT EXISTS `teacher_notification` (
  `teacher_notification_id` int(11) NOT NULL,
  `teacher_faculty_id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_shared`
--

CREATE TABLE IF NOT EXISTS `teacher_shared` (
  `teacher_shared_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `shared_teacher_id` int(11) NOT NULL,
  `floc` varchar(100) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(4) NOT NULL,
  `question` text CHARACTER SET utf8 NOT NULL,
  `detail` longtext NOT NULL,
  `categories` varchar(3) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `question`, `detail`, `categories`, `username`, `datetime`, `view`, `reply`) VALUES
(1, 'fgdfgd', 'gdgdgdgdgdgdgdgdfgdfgdgdgdfgdfgdfgdfg', 'bct', 'sdfsdf', 'fsdf', 2, 1),
(2, 'tyhrthtrh', 'rthtrhtrhtrhrt', '', '', '2015-08-30 9:50:28', 0, 0),
(3, 'erfgergf', 'ergergergergergerg', '', 'amulya', '2015-08-30 9:54:15', 0, 0),
(4, 'refgerger', 'regergerger', '', 'sandeep', '2015-08-30 9:55:33', 20, 6),
(5, 'wtf', 'wthjnknlk', '', 'amulya', '2015-08-30 10:20:01', 2, 0),
(6, 'amulyaaaa', 'saasdasdasdas', 'BCT', 'amulya', '2015-08-30 10:31:13', 1, 0),
(7, 'what the fuck', 'what the fuck', 'BCT', 'amulya', '2015-08-30 13:32:01', 10, 2),
(8, 'cbdbdfb', 'dfdfdfdf', 'BCT', 'amulya', '2015-08-31 8:44:41', 2, 0),
(9, 'aaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'BCT', 'amulya', '2015-08-31 8:45:29', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`admin_log_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `class_subject_overview`
--
ALTER TABLE `class_subject_overview`
  ADD PRIMARY KEY (`faculty_subject_overview_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `department` (`department`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faculty_class`
--
ALTER TABLE `faculty_class`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `message_sent`
--
ALTER TABLE `message_sent`
  ADD PRIMARY KEY (`message_sent_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`notification_read_id`);

--
-- Indexes for table `notification_read_teacher`
--
ALTER TABLE `notification_read_teacher`
  ADD PRIMARY KEY (`notification_read_teacher_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`student_assignment_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_announcements`
--
ALTER TABLE `teacher_announcements`
  ADD PRIMARY KEY (`teacher_faculty_announcements_id`);

--
-- Indexes for table `teacher_faculty_student`
--
ALTER TABLE `teacher_faculty_student`
  ADD PRIMARY KEY (`teacher_faculty_student_id`);

--
-- Indexes for table `teacher_notification`
--
ALTER TABLE `teacher_notification`
  ADD PRIMARY KEY (`teacher_notification_id`);

--
-- Indexes for table `teacher_shared`
--
ALTER TABLE `teacher_shared`
  ADD PRIMARY KEY (`teacher_shared_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `admin_log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_subject_overview`
--
ALTER TABLE `class_subject_overview`
  MODIFY `faculty_subject_overview_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_class`
--
ALTER TABLE `faculty_class`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message_sent`
--
ALTER TABLE `message_sent`
  MODIFY `message_sent_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `notification_read_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification_read_teacher`
--
ALTER TABLE `notification_read_teacher`
  MODIFY `notification_read_teacher_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_assignment`
--
ALTER TABLE `student_assignment`
  MODIFY `student_assignment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `teacher_announcements`
--
ALTER TABLE `teacher_announcements`
  MODIFY `teacher_faculty_announcements_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher_faculty_student`
--
ALTER TABLE `teacher_faculty_student`
  MODIFY `teacher_faculty_student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher_notification`
--
ALTER TABLE `teacher_notification`
  MODIFY `teacher_notification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher_shared`
--
ALTER TABLE `teacher_shared`
  MODIFY `teacher_shared_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
