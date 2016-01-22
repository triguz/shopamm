-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 alle 14:36
-- Versione del server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopamm`
--

-- --------------------------------------------------------



--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `street` varchar(20) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `email_3` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`ID`, `email`, `username`, `password`, `name`, `surname`, `street`, `number`, `city`, `postalCode`, `state`) VALUES
(1, 'rossi@gmail.com', 'user', 'password', 'Mario', 'Rossi', 'via Cagliari', 11, 'Assemini', '9032', 'Italy'),
(3, 'methmethmeth@fring.us', 'Heisenberg', 'Malcom', 'Walter', 'White', 'Blue street', 5, 'Alberquerque', '2943', 'USA'),
(4, 'margeiloveu@outlook.com', 'Homer', 'Bartolomeo', 'Homer', 'Simpson', 'boe', 0, 'Springfield', '99999', 'USA'),
(9, 'giova@gmail.com', '2sdfghj', '1234567', 'giovanni', 'ccciaoopinna', 'sayuyt', 85, 'ertyju', '12345', 'uita'),
(29, 'prova@gmail.com', 'prova88', '12345', 'provola', 'ccciaooprova', '', 23, 'Cagliari', '09022', 'Italia'),
(30, 'rgdx@fg.it', 'h79h', 'uih9', 'ibihjbi', 'ccciaooibyubib', 'viaaa', 0, 'jhvbjh', '978998', 'innijun'),
(32, 'roihg@gmail.com', 'gfeswgsde', 'aaaaa', 'dfhfhdfhfdhdfh', 'ccciaoodhgfhfdhfdhfd', 'fdhdfhfdhfdhdf', 43543543, 'fdhgfdhfdhfd', '67876986', 'fdhfhfdhf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
