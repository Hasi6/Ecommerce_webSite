-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 06:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'MSI'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Nokia'),
(5, 'Tiro'),
(6, 'Hello'),
(7, 'Hi'),
(8, 'Ele');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops and Mobile'),
(2, 'Cameras'),
(3, 'iPads'),
(4, 'iPhones'),
(8, 'Hasi'),
(9, 'Baba'),
(10, 'Hasi'),
(11, 'Ele');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(250) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(6, '::1', 'Hasitha Chandula', 'hasitha.chandula@gmail.com', 'Freedom6@', 'Sri Lanka', '', '0768038988', '345,mabima,heiyanthuduwa', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, 1, 2, 'Galaxy s8', 500, '<p><strong style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">Galaxy S8</strong><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">&nbsp;is powered by 1.9GHz octa-core&nbsp;</span><strong style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">Samsung</strong><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">Exynos 8895 processor. It has 4GB RAM and packs 64GB internal storage, expandable up to 256GB via microSD card. The smartphone comes with what the company calls Infinity Display, featuring dual-edge curved display and 18.5:9 aspect ratio.</span></p>', '329201783846PM_635_samsung_galaxy_s8.webp', 'Galaxy S8'),
(3, 1, 1, 'MSI GL63 8RC', 900, '<p><strong style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">MSI GL63</strong><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">-</span><strong style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">8RC</strong><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">&nbsp;is a stylish and powerful Gaming Laptop and is powered by Intel HM370 processor clocked at a speed of 2.3 GHz with Turbo Boost Upto 4 GHz and sports a 15.6 inch Full HD LED Backlit Wideview Anti-glare TN Display that comes with a resolution of 1920 X 1080 pixels,so the picture quality is crisp and detailed ...</span></p>', '599206-meet-the-msi-gl63-8rc.jpg', 'MSI Gl63 8RC'),
(4, 1, 2, 'Pixel 3 XL', 700, '<p><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">The&nbsp;</span><strong style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">Google Pixel</strong><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">&nbsp;3 XL mobile features a 6.3" (16 cm) display with a screen resolution of 1440 x 2960 pixels and runs on Android v9.0 (Pie) operating system. The device is powered by Octa core (2.5 GHz, Quad core, Kryo 385 + 1.6 GHz, Quad core, Kryo 385) processor paired with 4 GB of RAM.</span></p>', 'dsc_6706-640x640.jpg', 'Pixel 3 XL'),
(5, 2, 2, 'Nikon D3200', 600, '<p><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">The Nikon D3200 is a 24.2-megapixel DX&nbsp;</span><strong style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">format</strong><span style="color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">&nbsp;DSLR Nikon F-mount camera officially launched by Nikon on April 19, 2012. It is marketed as an entry-level DSLR camera for beginners and experienced DSLR hobbyists who are ready for more advanced specs and performance.</span></p>', 'nikon-d3200-dslr-original-imaeyxfayjnxjvg9.jpeg', 'Nikon D3200'),
(6, 3, 3, 'iPad', 200, '<ul class="i8Z77e" style="margin: 0px; padding: 0px; border: 0px; color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">Released&nbsp;<strong>2018</strong>, March. 469g (Wi-Fi) / 478g (LTE), 7.5mm thickness. iOS 11.3, up to iOS 12.2. 32/128GB storage, no card slot.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">3.5% 1,177,454 hits.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">78 Become a fan.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">9.7" 1536x2048 pixels.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">8MP.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">2GB RAM. Apple A10 Fusion.</li>\r\n</ul>', 'ipadmini5applepencil-800x632.jpg', 'iPad Mini'),
(7, 2, 2, 'Gta V', 79, '<ul class="i8Z77e" style="margin: 0px; padding: 0px; border: 0px; color: #222222; font-family: arial, sans-serif; font-size: 16px; background-color: #ffffff;">\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">OS:&nbsp;<strong>Windows 8.1</strong>&nbsp;64 Bit,&nbsp;<strong>Windows 8</strong>&nbsp;64 Bit, Windows 7 64 Bit Service Pack 1.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;"><strong>Processor</strong>:&nbsp;<strong>Intel</strong>&nbsp;Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs)</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;"><strong>Memory</strong>: 8GB.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;"><strong>Video Card</strong>:&nbsp;<strong>NVIDIA</strong>&nbsp;GTX 660 2GB / AMD HD7870 2GB.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;"><strong>Sound Card</strong>: 100% DirectX 10 compatible.</li>\r\n<li class="TrT0Xe" style="margin: 0px 0px 4px; padding: 0px; border: 0px; list-style-type: disc;">HDD Space: 72GB.</li>\r\n</ul>', 'gtav_details09122014_003.jpg', 'Gta V'),
(8, 0, 0, '', 0, '', '', ''),
(9, 2, 1, 'Galaxy s8', 900, '<p>asdf a;of ;dfdvbas vav/ladbvsdbvhsdb bsfbasdgfba efasdfadfadfadfadf adfadfb sd d ds j dfadug f;agf; adgafld ugfadgdfilwdgflaudg af;ugf;aiudgafidlgf;adugad;ofgao;fga;odug;ugfad;ughf;adugf;adugafkjdgof;auga;oufoa;gugoad;faf;ugaoaf//guo;af;goa;aaf;o ug;aiuygadfgafo;aguaf;ougadoaf;ugadaf;yahp;fhnovvolgvgw;i gf;oadgoaf; gfoa;wilhfs adhvoaghofawegbafwbejgvfjkweabgvolwgbev</p>', 'Samsung-Galaxy-S10-plus-Prism-Blue-1-3x.jpg', 'Galaxy S8'),
(10, 1, 1, 'as', 500, '<p><span style="color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;">dia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. In addition to Wikipedia, there are tens of thousands of other wikis in use, both public and private, including wikis functioning as&nbsp;</span><a style="text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;" title="Knowledge management" href="https://en.wikipedia.org/wiki/Knowledge_management">knowledge management</a><span style="color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;">&nbsp;resources,&nbsp;</span><a class="mw-redirect" style="text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;" title="Notetaking software" href="https://en.wikipedia.org/wiki/Notetaking_software">notetaking</a><span style="color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;">&nbsp;tools,&nbsp;</span><a class="mw-redirect" style="text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;" title="Web community" href="https://en.wikipedia.org/wiki/Web_community">community websites</a><span style="color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;">, and&nbsp;</span><a style="text-decoration-line: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px;" title="Intranet" href="https://en.wikipedia.org/wiki/Intranet">intranets</a><span style="color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;">. The English-language Wikipedia has the largest collection of articles; as of September 2016</span></p>', 'Samsung-Galaxy-S10-plus-Prism-Blue-1-3x.jpg', 'asasa'),
(11, 1, 1, 'iPhone X', 800, '<p>ASDF ADfadfad fadfa dfadf df afdadfadfdf safadf dfADFS ADF DFAD&nbsp; DFADFDSFDF</p>', 'Samsung-Galaxy-S10-plus-Prism-Blue-1-3x.jpg', 'asasasasas'),
(12, 8, 1, 'Hasitha Chandula', 600, '<p>This is Me</p>', 'IMG_20190215_072855.jpg', 'Hasi'),
(13, 8, 2, 'Hasi', 600, '<p>This is Msi</p>', '4e5f3bc624911b7f5aa2a639765c96a0.jpg', 'Hasi_Leo'),
(14, 8, 3, 'Tiro', 600, '<p>Tirosha</p>', 'orig.jfif', 'Tirosha'),
(15, 2, 2, 'Galaxy s8', 700, '<p>Hello</p>', '329201783846PM_635_samsung_galaxy_s8.webp', 'Galaxy S8'),
(16, 1, 2, 'MBBS', 800, '<p>Hello Hasi</p>', 'images.jfif', 'iPhone X');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE IF NOT EXISTS `slideshows` (
`product_id` int(100) NOT NULL,
  `image_desc` text NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`product_id`, `image_desc`, `slide_image`) VALUES
(18, '<p>Image 1</p>', '1.jpg'),
(19, '<p>image 2</p>', '2.jpg'),
(20, '<p>Image 3</p>', '3.jpg'),
(21, '<p>MSI</p>', '4e5f3bc624911b7f5aa2a639765c96a0.jpg'),
(22, '<p>Hellow</p>', 'nikon-d3200-dslr-original-imaeyxfayjnxjvg9.jpeg'),
(23, '<p>MSI</p>', 'orig.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
