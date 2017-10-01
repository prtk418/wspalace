-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 02:28 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_workshops`
--

CREATE TABLE `applied_workshops` (
  `student_id` int(15) NOT NULL,
  `workshop_id` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_workshops`
--

INSERT INTO `applied_workshops` (`student_id`, `workshop_id`) VALUES
(7, 1),
(8, 1),
(8, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(23, 3),
(24, 2),
(30, 1),
(30, 3),
(0, 2),
(0, 1),
(31, 1),
(31, 3),
(32, 2),
(32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`) VALUES
(9, 'pratik agarwal', 'prtkagawal15@gmail.com', '3dbe00a167653a1aaee01d93e77e730e'),
(10, 'yujyrt yjrtg', 'jnkm@dd.dd', '3dbe00a167653a1aaee01d93e77e730e'),
(11, 'ftgyuh ybu', 'vybu@gyg.ss', '15090b774a7b75177837d4abaa2bb6e6'),
(12, 'cfvghbjn cfvgbhnj', 'vgbhnj@cvgbh.dd', '75f1a46bff1e91813335242a36b9186a'),
(13, 'hjl vubinjmk', 'vbhnjmk@vgbh.ee', '04cac0540031555d7096726f9b3c0779'),
(14, 'CVGBHJN VGBHU', 'vbhnj@g.ss', '04cac0540031555d7096726f9b3c0779'),
(15, 'fvgbhjn fcvygb', 'hvG@vh.ww', '04cac0540031555d7096726f9b3c0779'),
(16, 'jyhtgrfe yhtg', 'ygt@dd.kk', '04cac0540031555d7096726f9b3c0779'),
(17, 'vtrc ytfr', 'vtrcex@d.ff', '04cac0540031555d7096726f9b3c0779'),
(18, 'cfvgubhnj cvygbu', 'hnjcvygbh@vgbh.ff', '04cac0540031555d7096726f9b3c0779'),
(19, 'cfvygbuh yuvubhnj', 'vubhinjo@ghs.ss', '04cac0540031555d7096726f9b3c0779'),
(20, 'cvygbuhij yub', 'cvubhiO@ww.ww', '04cac0540031555d7096726f9b3c0779'),
(21, 'cfvgbhj vgbh', 'vgbh@vghbj.ss', '75f1a46bff1e91813335242a36b9186a'),
(22, 'cfvgbhn cfvgbh', 'cfvygbuh@cvgbh.dd', '75f1a46bff1e91813335242a36b9186a'),
(23, 'gbhj fcvgbhjnk', 'cfvgbhnj@vgubh.ww', '75f1a46bff1e91813335242a36b9186a'),
(24, 'prtk agrwl', 'prtkagarwal16@gmail.com', '94b8cea57c49a3007225a0c70c475450'),
(25, 'sedfcvghb xcfvghb', 'adadadda@sdss.ss', '7c0c18f0dfa70cc37b8def0fec4248c6'),
(26, 'xfcvhjb cfvghb', 'cyvgubh@cvgh.eee', '04cac0540031555d7096726f9b3c0779'),
(27, 'cfvgbh xcfvygbuh', 'cyvgubhi@sss.ss', 'd9d1e3a5eb8b574d985dac435ea633ce'),
(28, 'fcvghbnj ytvubi', 'prtkagarwal15@gmail.com', '75f1a46bff1e91813335242a36b9186a'),
(29, 'xdcfvhbj xcfvghbjn', 'xfcvghjbknl@sss.ss', '04cac0540031555d7096726f9b3c0779'),
(30, 'xdfcghbjk dfghjkml', 'xdgfcvjhbkn@fcgvhb.eee', '04cac0540031555d7096726f9b3c0779'),
(31, 'cfvgbh vgbh', 'asasasas@as.as', '94b8cea57c49a3007225a0c70c475450'),
(32, 'Priya Agarwal', 'priyaagrwl30@gmail.com', 'ee82ba345f401c93819cc6e189ceef02');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(15) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `num_seats` int(50) NOT NULL,
  `date` datetime NOT NULL,
  `location` varchar(25) NOT NULL,
  `duration` time NOT NULL,
  `speakers` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `title`, `description`, `num_seats`, `date`, `location`, `duration`, `speakers`) VALUES
(1, 'Neural Networks', 'This workshop will give a brief idea about how artificial neural networks mimics the actual biological neural networks and greater insights will be given on the optimization algorithms.', 150, '2017-08-30 00:00:00', 'Kolkata', '03:00:00', 'Pratik Agarwal'),
(2, 'Photography Workshop', 'At Photography Workshop, we teach how to optimize the performance of your DSLR cameras. Learn to click masterpieces with ultimate control over aperture and shutter speed. Know more about Auto-focus and focus points, camera metering, depth of field and exposure compensations. Frame your photos the best you can with the after you learn the techniques of framing and composition, here at the Photography Workshop.', 150, '2017-08-30 00:00:00', 'Kolkata', '02:00:00', 'Pratik Agarwal'),
(3, 'Educating Global Citizens', 'This workshop provides strategies for promoting global competence in classrooms and schools, work that comes from the research of Professor Fernando Reimers and the Think Tank on Global Education.\r\nBased upon the research of HGSE Professor Paul Reville, director of the Education Redesign Lab, explore why current education reform efforts are failing and how we might work to design a new education system.', 150, '2017-08-31 00:00:00', 'Kolkata', '04:00:00', 'Pratik Agarwal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
