-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2011 at 03:56 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pos1`
--

-- --------------------------------------------------------

--
-- Table structure for table `phppos_app_config`
--

CREATE TABLE IF NOT EXISTS `phppos_app_config` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_app_config`
--

INSERT INTO `phppos_app_config` (`key`, `value`) VALUES
('address', '123 Nowhere street'),
('company', 'Point Of Sale'),
('default_tax_1_name', 'Sales Tax'),
('default_tax_1_rate', ''),
('default_tax_2_name', 'Sales Tax 2'),
('default_tax_2_rate', ''),
('default_tax_rate', '8'),
('email', 'admin@phppointofsale.com'),
('fax', ''),
('language', 'english'),
('phone', '555-555-5555'),
('print_after_sale', '0'),
('return_policy', 'Test'),
('timezone', 'America/New_York'),
('website', '');

-- --------------------------------------------------------

--
-- Table structure for table `phppos_customers`
--

CREATE TABLE IF NOT EXISTS `phppos_customers` (
  `person_id` int(10) NOT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `taxable` int(1) NOT NULL DEFAULT '1',
  `deleted` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `account_number` (`account_number`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_customers`
--

INSERT INTO `phppos_customers` (`person_id`, `account_number`, `taxable`, `deleted`) VALUES
(2, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_employees`
--

CREATE TABLE IF NOT EXISTS `phppos_employees` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `person_id` int(10) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `username` (`username`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_employees`
--

INSERT INTO `phppos_employees` (`username`, `password`, `person_id`, `deleted`) VALUES
('admin', '439a6de57d475c1a0ba9bcb1c39f0af6', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_giftcards`
--

CREATE TABLE IF NOT EXISTS `phppos_giftcards` (
  `giftcard_id` int(11) NOT NULL AUTO_INCREMENT,
  `giftcard_number` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `value` double(15,2) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`giftcard_id`),
  UNIQUE KEY `giftcard_number` (`giftcard_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `phppos_giftcards`
--


-- --------------------------------------------------------

--
-- Table structure for table `phppos_inventory`
--

CREATE TABLE IF NOT EXISTS `phppos_inventory` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_items` int(11) NOT NULL DEFAULT '0',
  `trans_user` int(11) NOT NULL DEFAULT '0',
  `trans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trans_comment` text NOT NULL,
  `trans_inventory` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trans_id`),
  KEY `phppos_inventory_ibfk_1` (`trans_items`),
  KEY `phppos_inventory_ibfk_2` (`trans_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `phppos_inventory`
--

INSERT INTO `phppos_inventory` (`trans_id`, `trans_items`, `trans_user`, `trans_date`, `trans_comment`, `trans_inventory`) VALUES
(1, 1, 1, '2011-04-26 02:21:47', 'Manual Edit of Quantity', 50),
(2, 1, 1, '2011-04-26 02:22:53', 'Manual Edit of Quantity', 0),
(3, 1, 1, '2011-04-26 02:25:01', 'POS 1', -1),
(4, 1, 1, '2011-04-26 02:28:52', 'POS 2', -1),
(5, 1, 1, '2011-04-26 02:36:57', 'POS 3', -1),
(6, 1, 1, '2011-04-26 02:38:30', 'POS 4', -1),
(7, 1, 1, '2011-04-26 02:44:19', 'POS 5', -10),
(8, 1, 1, '2011-04-26 03:24:36', 'POS 6', -1),
(9, 1, 1, '2011-04-26 03:25:32', 'POS 7', -1),
(10, 1, 1, '2011-04-26 05:54:39', 'POS 8', -1),
(11, 1, 1, '2011-04-26 05:54:39', 'POS 8', -1);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_items`
--

CREATE TABLE IF NOT EXISTS `phppos_items` (
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `item_number` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `cost_price` double(15,2) NOT NULL,
  `unit_price` double(15,2) NOT NULL,
  `quantity` double(15,2) NOT NULL DEFAULT '0.00',
  `reorder_level` double(15,2) NOT NULL DEFAULT '0.00',
  `location` varchar(255) NOT NULL,
  `item_id` int(10) NOT NULL AUTO_INCREMENT,
  `allow_alt_description` tinyint(1) NOT NULL,
  `is_serialized` tinyint(1) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `item_number` (`item_number`),
  KEY `phppos_items_ibfk_1` (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phppos_items`
--

INSERT INTO `phppos_items` (`name`, `category`, `supplier_id`, `item_number`, `description`, `cost_price`, `unit_price`, `quantity`, `reorder_level`, `location`, `item_id`, `allow_alt_description`, `is_serialized`, `deleted`) VALUES
('item1', 'cat', NULL, '0001', '', 200.00, 210.00, 32.00, 2.00, '', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_items_taxes`
--

CREATE TABLE IF NOT EXISTS `phppos_items_taxes` (
  `item_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `percent` double(15,2) NOT NULL,
  PRIMARY KEY (`item_id`,`name`,`percent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_items_taxes`
--


-- --------------------------------------------------------

--
-- Table structure for table `phppos_item_kits`
--

CREATE TABLE IF NOT EXISTS `phppos_item_kits` (
  `item_kit_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`item_kit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phppos_item_kits`
--

INSERT INTO `phppos_item_kits` (`item_kit_id`, `name`, `description`) VALUES
(1, 'kashif', 'this is gift pak');

-- --------------------------------------------------------

--
-- Table structure for table `phppos_item_kit_items`
--

CREATE TABLE IF NOT EXISTS `phppos_item_kit_items` (
  `item_kit_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` double(15,2) NOT NULL,
  PRIMARY KEY (`item_kit_id`,`item_id`,`quantity`),
  KEY `phppos_item_kit_items_ibfk_2` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_item_kit_items`
--

INSERT INTO `phppos_item_kit_items` (`item_kit_id`, `item_id`, `quantity`) VALUES
(1, 1, 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_modules`
--

CREATE TABLE IF NOT EXISTS `phppos_modules` (
  `name_lang_key` varchar(255) NOT NULL,
  `desc_lang_key` varchar(255) NOT NULL,
  `sort` int(10) NOT NULL,
  `module_id` varchar(255) NOT NULL,
  PRIMARY KEY (`module_id`),
  UNIQUE KEY `desc_lang_key` (`desc_lang_key`),
  UNIQUE KEY `name_lang_key` (`name_lang_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_modules`
--

INSERT INTO `phppos_modules` (`name_lang_key`, `desc_lang_key`, `sort`, `module_id`) VALUES
('module_book', 'module_book_desc', 120, 'book'),
('module_config', 'module_config_desc', 100, 'config'),
('module_customers', 'module_customers_desc', 10, 'customers'),
('module_employees', 'module_employees_desc', 80, 'employees'),
('module_giftcards', 'module_giftcards_desc', 90, 'giftcards'),
('module_items', 'module_items_desc', 20, 'items'),
('module_item_kits', 'module_item_kits_desc', 30, 'item_kits'),
('module_receivings', 'module_receivings_desc', 60, 'receivings'),
('module_reports', 'module_reports_desc', 50, 'reports'),
('module_sales', 'module_sales_desc', 70, 'sales'),
('module_sales_credit', 'module_sales_credit_desc', 110, 'salescredit'),
('module_suppliers', 'module_suppliers_desc', 40, 'suppliers');

-- --------------------------------------------------------

--
-- Table structure for table `phppos_people`
--

CREATE TABLE IF NOT EXISTS `phppos_people` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `person_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `phppos_people`
--

INSERT INTO `phppos_people` (`first_name`, `last_name`, `phone_number`, `email`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`, `person_id`) VALUES
('John', 'Doe', '555-555-5555', 'admin@phppointofsale.com', 'Address 1', '', '', '', '', '', '', 1),
('hashim', 'abdullah', '', '', '', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_permissions`
--

CREATE TABLE IF NOT EXISTS `phppos_permissions` (
  `module_id` varchar(255) NOT NULL,
  `person_id` int(10) NOT NULL,
  PRIMARY KEY (`module_id`,`person_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_permissions`
--

INSERT INTO `phppos_permissions` (`module_id`, `person_id`) VALUES
('config', 1),
('customers', 1),
('employees', 1),
('giftcards', 1),
('items', 1),
('item_kits', 1),
('receivings', 1),
('reports', 1),
('sales', 1),
('salescredit', 1),
('suppliers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_receivings`
--

CREATE TABLE IF NOT EXISTS `phppos_receivings` (
  `receiving_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `supplier_id` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `receiving_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`receiving_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `phppos_receivings`
--


-- --------------------------------------------------------

--
-- Table structure for table `phppos_receivings_items`
--

CREATE TABLE IF NOT EXISTS `phppos_receivings_items` (
  `receiving_id` int(10) NOT NULL DEFAULT '0',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `description` varchar(30) DEFAULT NULL,
  `serialnumber` varchar(30) DEFAULT NULL,
  `line` int(3) NOT NULL,
  `quantity_purchased` int(10) NOT NULL DEFAULT '0',
  `item_cost_price` decimal(15,2) NOT NULL,
  `item_unit_price` double(15,2) NOT NULL,
  `discount_percent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`receiving_id`,`item_id`,`line`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_receivings_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales`
--

CREATE TABLE IF NOT EXISTS `phppos_sales` (
  `sale_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `sale_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `phppos_sales`
--

INSERT INTO `phppos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_id`, `payment_type`) VALUES
('2011-04-26 02:25:01', NULL, 1, '', 1, 'Cash: $189.00<br />'),
('2011-04-26 02:28:52', NULL, 1, '', 2, 'Cash: $210.00<br />'),
('2011-04-26 02:36:57', NULL, 1, '', 3, 'Cash: Rs400.00<br />'),
('2011-04-26 02:38:30', NULL, 1, '', 4, 'Cash: Rs 600.00<br />'),
('2011-04-26 02:44:19', NULL, 1, '', 5, 'Cash: Rs 4000.00<br />'),
('2011-04-26 03:24:36', NULL, 1, '', 6, 'Cash: Rs 20.00<br />Check: Rs 100.00<br />Debit Card: Rs 90.00<br />'),
('2011-04-26 03:25:32', NULL, 1, '', 7, 'Cash: Rs 50.00<br />Credit Sale: Rs 160.00<br />'),
('2011-04-26 05:54:39', 2, 1, '', 8, 'Cash: Rs 840.00<br />');

-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_items`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_items` (
  `sale_id` int(10) NOT NULL DEFAULT '0',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `description` varchar(30) DEFAULT NULL,
  `serialnumber` varchar(30) DEFAULT NULL,
  `line` int(3) NOT NULL DEFAULT '0',
  `quantity_purchased` double(15,2) NOT NULL DEFAULT '0.00',
  `item_cost_price` decimal(15,2) NOT NULL,
  `item_unit_price` double(15,2) NOT NULL,
  `discount_percent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sale_id`,`item_id`,`line`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sales_items`
--

INSERT INTO `phppos_sales_items` (`sale_id`, `item_id`, `description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount_percent`) VALUES
(1, 1, '', '', 1, 1.00, 200.00, 210.00, 10),
(2, 1, '', '', 1, 1.00, 200.00, 210.00, 0),
(3, 1, '', '', 1, 1.00, 200.00, 310.00, 0),
(4, 1, '', '', 1, 1.00, 200.00, 210.00, 0),
(5, 1, '', '', 1, 10.00, 200.00, 310.00, 0),
(6, 1, '', '', 1, 1.00, 200.00, 210.00, 0),
(7, 1, '', '', 1, 1.00, 200.00, 210.00, 0),
(8, 1, '', '', 1, 1.00, 200.00, 210.00, 0),
(8, 1, '', '', 2, 1.00, 200.00, 210.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_items_taxes`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_items_taxes` (
  `sale_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `line` int(3) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `percent` double(15,2) NOT NULL,
  PRIMARY KEY (`sale_id`,`item_id`,`line`,`name`,`percent`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sales_items_taxes`
--


-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_payments`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_payments` (
  `sale_id` int(10) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_amount` decimal(15,2) NOT NULL,
  PRIMARY KEY (`sale_id`,`payment_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sales_payments`
--

INSERT INTO `phppos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`) VALUES
(1, 'Cash', 189.00),
(2, 'Cash', 210.00),
(3, 'Cash', 400.00),
(4, 'Cash', 600.00),
(5, 'Cash', 4000.00),
(6, 'Cash', 20.00),
(6, 'Check', 100.00),
(6, 'Debit Card', 90.00),
(7, 'Cash', 50.00),
(7, 'Credit Sale', 160.00),
(8, 'Cash', 840.00);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_suspended`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_suspended` (
  `sale_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `sale_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phppos_sales_suspended`
--

INSERT INTO `phppos_sales_suspended` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_id`, `payment_type`) VALUES
('2011-04-26 03:22:47', NULL, 1, '', 1, 'Credit Sale: Rs 210.00<br />');

-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_suspended_items`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_suspended_items` (
  `sale_id` int(10) NOT NULL DEFAULT '0',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `description` varchar(30) DEFAULT NULL,
  `serialnumber` varchar(30) DEFAULT NULL,
  `line` int(3) NOT NULL DEFAULT '0',
  `quantity_purchased` double(15,2) NOT NULL DEFAULT '0.00',
  `item_cost_price` decimal(15,2) NOT NULL,
  `item_unit_price` double(15,2) NOT NULL,
  `discount_percent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sale_id`,`item_id`,`line`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sales_suspended_items`
--

INSERT INTO `phppos_sales_suspended_items` (`sale_id`, `item_id`, `description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount_percent`) VALUES
(1, 1, '', '', 1, 1.00, 200.00, 210.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_suspended_items_taxes`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_suspended_items_taxes` (
  `sale_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `line` int(3) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `percent` double(15,2) NOT NULL,
  PRIMARY KEY (`sale_id`,`item_id`,`line`,`name`,`percent`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sales_suspended_items_taxes`
--


-- --------------------------------------------------------

--
-- Table structure for table `phppos_sales_suspended_payments`
--

CREATE TABLE IF NOT EXISTS `phppos_sales_suspended_payments` (
  `sale_id` int(10) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_amount` decimal(15,2) NOT NULL,
  PRIMARY KEY (`sale_id`,`payment_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sales_suspended_payments`
--

INSERT INTO `phppos_sales_suspended_payments` (`sale_id`, `payment_type`, `payment_amount`) VALUES
(1, 'Credit Sale', 210.00);

-- --------------------------------------------------------

--
-- Table structure for table `phppos_sessions`
--

CREATE TABLE IF NOT EXISTS `phppos_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_sessions`
--

INSERT INTO `phppos_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('5adffccfa66780d4d57d713d34abb9e5', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv', 1303715922, 'a:4:{s:9:"person_id";s:1:"1";s:8:"cartRecv";a:1:{i:1;a:10:{s:7:"item_id";s:1:"1";s:4:"line";i:1;s:4:"name";s:5:"item1";s:11:"description";s:0:"";s:12:"serialnumber";s:0:"";s:21:"allow_alt_description";s:1:"1";s:13:"is_serialized";s:1:"1";s:8:"quantity";i:-1;s:8:"discount";i:0;s:5:"price";s:6:"200.00";}}s:9:"recv_mode";s:7:"receive";s:8:"supplier";s:2:"-1";}'),
('6692ea0014df5deabf507760eb8fa767', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1;', 1303737546, 'a:1:{s:9:"person_id";s:1:"1";}'),
('bfd7743463c2d6c7fb359c81c62e5ee9', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv', 1303211108, 'a:5:{s:9:"person_id";s:1:"1";s:4:"cart";a:0:{}s:9:"sale_mode";s:4:"sale";s:8:"customer";s:2:"-1";s:8:"payments";a:0:{}}');

-- --------------------------------------------------------

--
-- Table structure for table `phppos_suppliers`
--

CREATE TABLE IF NOT EXISTS `phppos_suppliers` (
  `person_id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `account_number` (`account_number`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phppos_suppliers`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `phppos_customers`
--
ALTER TABLE `phppos_customers`
  ADD CONSTRAINT `phppos_customers_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `phppos_people` (`person_id`);

--
-- Constraints for table `phppos_employees`
--
ALTER TABLE `phppos_employees`
  ADD CONSTRAINT `phppos_employees_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `phppos_people` (`person_id`);

--
-- Constraints for table `phppos_inventory`
--
ALTER TABLE `phppos_inventory`
  ADD CONSTRAINT `phppos_inventory_ibfk_1` FOREIGN KEY (`trans_items`) REFERENCES `phppos_items` (`item_id`),
  ADD CONSTRAINT `phppos_inventory_ibfk_2` FOREIGN KEY (`trans_user`) REFERENCES `phppos_employees` (`person_id`);

--
-- Constraints for table `phppos_items`
--
ALTER TABLE `phppos_items`
  ADD CONSTRAINT `phppos_items_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `phppos_suppliers` (`person_id`);

--
-- Constraints for table `phppos_items_taxes`
--
ALTER TABLE `phppos_items_taxes`
  ADD CONSTRAINT `phppos_items_taxes_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`) ON DELETE CASCADE;

--
-- Constraints for table `phppos_item_kit_items`
--
ALTER TABLE `phppos_item_kit_items`
  ADD CONSTRAINT `phppos_item_kit_items_ibfk_1` FOREIGN KEY (`item_kit_id`) REFERENCES `phppos_item_kits` (`item_kit_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `phppos_item_kit_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`) ON DELETE CASCADE;

--
-- Constraints for table `phppos_permissions`
--
ALTER TABLE `phppos_permissions`
  ADD CONSTRAINT `phppos_permissions_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `phppos_employees` (`person_id`),
  ADD CONSTRAINT `phppos_permissions_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `phppos_modules` (`module_id`);

--
-- Constraints for table `phppos_receivings`
--
ALTER TABLE `phppos_receivings`
  ADD CONSTRAINT `phppos_receivings_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `phppos_employees` (`person_id`),
  ADD CONSTRAINT `phppos_receivings_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `phppos_suppliers` (`person_id`);

--
-- Constraints for table `phppos_receivings_items`
--
ALTER TABLE `phppos_receivings_items`
  ADD CONSTRAINT `phppos_receivings_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`),
  ADD CONSTRAINT `phppos_receivings_items_ibfk_2` FOREIGN KEY (`receiving_id`) REFERENCES `phppos_receivings` (`receiving_id`);

--
-- Constraints for table `phppos_sales`
--
ALTER TABLE `phppos_sales`
  ADD CONSTRAINT `phppos_sales_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `phppos_employees` (`person_id`),
  ADD CONSTRAINT `phppos_sales_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `phppos_customers` (`person_id`);

--
-- Constraints for table `phppos_sales_items`
--
ALTER TABLE `phppos_sales_items`
  ADD CONSTRAINT `phppos_sales_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`),
  ADD CONSTRAINT `phppos_sales_items_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `phppos_sales` (`sale_id`);

--
-- Constraints for table `phppos_sales_items_taxes`
--
ALTER TABLE `phppos_sales_items_taxes`
  ADD CONSTRAINT `phppos_sales_items_taxes_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `phppos_sales_items` (`sale_id`),
  ADD CONSTRAINT `phppos_sales_items_taxes_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`);

--
-- Constraints for table `phppos_sales_payments`
--
ALTER TABLE `phppos_sales_payments`
  ADD CONSTRAINT `phppos_sales_payments_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `phppos_sales` (`sale_id`);

--
-- Constraints for table `phppos_sales_suspended`
--
ALTER TABLE `phppos_sales_suspended`
  ADD CONSTRAINT `phppos_sales_suspended_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `phppos_employees` (`person_id`),
  ADD CONSTRAINT `phppos_sales_suspended_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `phppos_customers` (`person_id`);

--
-- Constraints for table `phppos_sales_suspended_items`
--
ALTER TABLE `phppos_sales_suspended_items`
  ADD CONSTRAINT `phppos_sales_suspended_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`),
  ADD CONSTRAINT `phppos_sales_suspended_items_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `phppos_sales_suspended` (`sale_id`);

--
-- Constraints for table `phppos_sales_suspended_items_taxes`
--
ALTER TABLE `phppos_sales_suspended_items_taxes`
  ADD CONSTRAINT `phppos_sales_suspended_items_taxes_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `phppos_sales_suspended_items` (`sale_id`),
  ADD CONSTRAINT `phppos_sales_suspended_items_taxes_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `phppos_items` (`item_id`);

--
-- Constraints for table `phppos_sales_suspended_payments`
--
ALTER TABLE `phppos_sales_suspended_payments`
  ADD CONSTRAINT `phppos_sales_suspended_payments_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `phppos_sales_suspended` (`sale_id`);

--
-- Constraints for table `phppos_suppliers`
--
ALTER TABLE `phppos_suppliers`
  ADD CONSTRAINT `phppos_suppliers_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `phppos_people` (`person_id`);
