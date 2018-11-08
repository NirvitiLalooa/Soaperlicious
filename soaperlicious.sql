-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 03:58 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soaperlicious`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_pwd` varchar(50) NOT NULL,
  `cust_contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_fname`, `cust_lname`, `cust_email`, `cust_pwd`, `cust_contact`) VALUES
('naja', 'radzi', 'era@yahoo.com', '123', 102258170),
('syeera', 'nor hasni', 'azi@gmail.com', '888', 102258170),
('nana', 'kaka', 'kaka07@gmail.com', '111', 102198863);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`email`, `pwd`) VALUES
('era@yahoo.com', '123'),
('azi@gmail.com', '888'),
('kaka07@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` varchar(5) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_img` text NOT NULL,
  `pro_price` double(10,2) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_img`, `pro_price`) VALUES
('A01', 'NEEM TEA TREE', '', 21.00),
('A02', 'ANISE BAMBOO CHARCOAL', '', 21.50),
('A03', 'SEA BUCKTHORN SATSUMA', '', 22.00),
('A04', 'PEPPERMINT BASIL', '', 22.50),
('A05', 'LEMON POPPY SEED', '', 23.00),
('A06', 'MIX & MATCH ORGANIC SOAP SET', '', 23.50),
('A07', 'ENTIRE ORGANIC SOAP COLLECTION', '', 24.00),
('A08', 'THE MAMA LOVE BOX', '', 24.50),
('B01', 'ROSEWOOD', '', 22.50),
('B02', 'OATMEAL CALENDULA', '', 22.00),
('B03', 'NEEM TEA TREE', '', 22.50),
('B04', 'LAVENDER LEMONGRASS', '', 22.50),
('B05', 'ORANGE PATCHOULI WALNUT', '', 22.50),
('B06', 'LEMON POPPY SEED', '', 22.00),
('B07', 'ANISE BAMBOO CHARCOAL', '', 22.50),
('B08', 'SEA BUCKTHORN SATSUMA', '', 22.00),
('C01', 'ORANGE PATCHOULI WALNUT', '', 22.00),
('C02', 'NEEM TEA TREE', '', 24.50),
('C03', 'ANISE BAMBOO CHARCOAL', '', 23.00),
('C04', 'LAVENDER LEMONGRASS', '', 22.50),
('C05', 'SEA BUCKTHORN SATSUMA', '', 22.50),
('C06', 'OATMEAL CALENDULA', '', 24.00),
('C07', 'LEMON POPPY SEED', '', 23.50),
('C08', 'PEPPERMINT BASIL', '', 22.00),
('D01', 'ROSEWOOD', '', 22.50),
('D02', 'LAVENDER LEMONGRASS', '', 22.00),
('D03', 'OATMEAL CALENDULA', '', 22.50),
('D04', 'SEA BUCKTHORN SATSUMA', '', 22.50),
('D05', 'NEEM TEA TREE', '', 22.00),
('D06', 'ORANGE PATCHOULI WALNUT', '', 23.00),
('D07', 'ENTIRE ORGANIC SOAP COLLECTION', '', 24.00),
('D08', 'ORGANIC HANDMADE SOAP SAMPLER', '', 22.00),
('GS01', 'MIX & MATCH ORGANIC SOAP SET', '', 69.90),
('GS02', 'ENTIRE ORGANIC SOAP COLLECTION', '', 69.90),
('GS03', 'AROMATHERAPY SOAP SET', '', 59.90),
('GS04', 'LIP LOVE + ORGANIC SOAP GIFT PACK', '', 69.90),
('GS05', 'ORGANIC BODY SOAP SET', '', 59.90),
('GS06', 'ORGANIC COMPLEXION SOAP SET', '', 59.90),
('GS07', 'ORGANIC BODY SOAP SAMPLER', '', 49.90),
('GS08', 'SWEET DREAM NIGHTTIME KIT', '', 49.90),
('M01', 'ROSEWOOD', '', 21.00),
('M02', 'LAVENDER LEMONGRASS', '', 21.50),
('M03', 'SEA BUCKTHORN SATSUMA', '', 22.00),
('M04', 'LEMON POPPY SEED', '', 22.50),
('M05', 'NEEM TEA TREE', '', 23.00),
('M06', 'OATMEAL CALENDULA', '', 23.50),
('M07', 'ORANGE PATCHOULI WALNUT', '', 24.00),
('M08', 'MIX & MATCH ORGANIC SOAP SET', '', 24.50),
('O01', 'PEPPERMINT BASIL', '', 23.50),
('O02', 'ANISE BAMBOO CHARCOAL', '', 22.00),
('O03', 'NEEM TEA TREE', '', 24.00),
('O04', 'LEMON POPPY SEED', '', 23.00),
('O05', 'SEA BUCKTHORN SATSUMA', '', 22.00),
('O06', 'ORANGE PATCHOULI WALNUT', '', 22.50),
('O07', 'MIX & MATCH ORGANIC SOAP SET', '', 21.50),
('O08', 'ENTIRE ORGANIC SOAP COLLECTION', '', 21.00),
('P01', 'NEEM TEA TREE', '', 24.00),
('P02', 'SEA BUCKTHORN SATSUMA', '', 24.50),
('P03', 'OATMEAL CALENDULA', '', 23.50),
('P04', 'MIX & MATCH ORGANIC SOAP SET', '', 23.00),
('P05', 'ENTIRE ORGANIC SOAP COLLECTION', '', 22.50),
('P06', 'THE MAMA LOVE BOX', '', 22.00),
('P07', 'LIP LOVE + ORGANIC SOAP GIFT PACK', '', 21.50),
('P08', 'SOAP MAKING WORKSHOP', '', 21.00),
('S01', 'OATMEAL CALENDULA', '', 21.50),
('S02', 'SEA BUCKTHORN SATSUMA', '', 23.50),
('S03', 'LAVENDER LEMONGRASS', '', 24.00),
('S04', 'MIX & MATCH ORGANIC SOAP SET', '', 22.00),
('S05', 'ENTIRE ORGANIC SOAP COLLECTION', '', 23.00),
('S06', 'ORGANIC HANDMADE SOAP SAMPLER', '', 23.50),
('S07', 'THE MAMA LOVE BOX', '', 24.00),
('S08', 'SOAP MAKING WORKSHOP', '', 22.50);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `sc_id` varchar(5) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `sc_price` double(10,2) NOT NULL,
  `sc_qty` int(5) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
