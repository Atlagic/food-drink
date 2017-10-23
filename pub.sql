-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2016 at 02:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pub`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answers_id` int(5) NOT NULL,
  `polls_id` int(5) NOT NULL,
  `answers` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answers_id`, `polls_id`, `answers`) VALUES
(1, 1, 'This is awesome!'),
(2, 1, 'Yeah!');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drinks_id` int(2) NOT NULL,
  `drinks_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drinks_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `drinks_pic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `drinks_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinks_id`, `drinks_name`, `drinks_title`, `drinks_pic`, `drinks_type`) VALUES
(1, 'BUDWEISER', 'Discover Budweiser, the Great American Lager beer. Our beer refreshes better than anything under the hot sun or after a hard day of work\r\n$3', 'pictures/budweiser.jpg', 'beer'),
(2, 'COORS', 'The beer brands that have made Molson Coors famous in the beer industry and around the world. One taste and you''ll see why.\r\n$2', 'pictures/coors.jpg', 'beer'),
(3, 'AMASTEL LIGHT', 'The distinctive, golden Amstel beer with its mildly bitter taste and excellent extensions available, including Amstel Light, Amstel Lager, Amstel Premium etc.\r\n$1.8', 'pictures/amstel.jpg', 'beer'),
(4, 'SAUVIGNON BLANC', 'Often called simply Sauvignon (while Cabernet Sauvignon is often called just Cabernet), extremely popular variety making crisp, dry, aromatic and extremely distinctive wines all over the world.\r\n$150', 'pictures/sauvignon.jpg', 'white wine'),
(5, 'SEMILLON', 'Semillon, is one of those grapes like Riesling which tends to be much more appreciated by wine insiders than by the average wine drinker.\r\n$200', 'pictures/semillon.jpg', 'white wine'),
(6, 'CHARDONNAY', 'Chardonnay is the "Big Daddy" of white wine grapes and one of the most widely planted in the world. It is suited to a wide variety of soils.\r\n$100', 'pictures/chardonnay.jpg', 'white wine'),
(7, 'MERLOT', 'Our Merlot Wine is the perfect taste for evenings in or out. Merlot food pairings include beef, poultry and desserts. Try the best Merlot red wine around.\r\n$170', 'pictures/merlot.jpg', 'red wine'),
(8, 'CABARNET SAUVIGNON', 'Cabernet Sauvignon is one of the world''s most widely recognized red wine grape varieties. It is grown in nearly every major wine producing country among a diverse spectrum.\r\n$180', 'pictures/cabarnet.jpg', 'red wine'),
(9, 'PINOT NOIR', 'Pinot noir is arguably the most charismatic of all grape varieties, and without doubt the hardest to get right. It''s responsible for some of the world''s best red wines and some of the worst.\r\n$140', 'pictures/pinot.jpg', 'red wine'),
(10, 'CLASSIC COSMO', 'Not overly sweet or too tart, our cosmopolitan cocktail is perfect to shake up for one or even prepare in advance for a crowd.\r\n$26', 'pictures/cosmo.jpg', 'cocktails'),
(11, 'MANHATTAN', 'When properly built, the Manhattan is the only cocktail that can slug it out toe-to-toe with the martini. It''s bold and fortifying, yet as relaxing as a deep massage.$18', 'pictures/manhattan.jpg', 'cocktails'),
(12, 'MARTINI', 'The Martini is a cocktail made with gin and vermouth, and garnished with an olive or a lemon twist. Over the years, the Martini has become one of the best-known mixed alcoholic beverages.\r\n$24', 'pictures/martini.jpg', 'cocktails'),
(17, 'Example', 'This is example for texting', 'pictures/martini.jpg', 'cocktails'),
(18, 'Example', 'This is example for texting', 'pictures/martini.jpg', 'cocktails'),
(19, 'Example', 'This is example for texting', 'pictures/martini.jpg', 'cocktails'),
(20, 'Example', 'This is example for texting', 'pictures/martini.jpg', 'cocktails'),
(21, 'Example', 'This is example for texting', 'pictures/martini.jpg', 'cocktails');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(2) NOT NULL,
  `event_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `event_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `event_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `event_name`, `event_title`, `event_pic`, `event_time`) VALUES
(1, 'Karaoke Night', 'If you''ve ever fancied yourself as singer, here''s your chance to act out some music fantasies.', 'pictures/karaoke.jpg', ' Every Thursday from 8pm'),
(2, 'Happy Hour', 'Drinking and saving money are two things that give you smiling ear-to-ear.', 'pictures/happy.jpg', 'Weekdays between 5-7pm'),
(3, 'Sunday Brunch', 'Inspired by our location, expect tropical vibes, Caribbean music and the island spirit.', 'pictures/brunch.jpg', 'From 11am-3pm we serve your favorite Sunday roast'),
(4, 'Buy One Get One Free', 'Buy one of ours best cocktails (according to your taste) and we''ll give you one for free!', 'pictures/bogof.jpg', 'Saturdays between 1-3pm');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(2) NOT NULL,
  `food_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `food_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `food_pic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `food_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_title`, `food_pic`, `food_type`) VALUES
(1, 'POTATO WEDGES', 'These chunky, peppery golden potato wedges are always a winner at parties and barbecues.\r\n$9', 'pictures/wedges.jpg', 'appetizers'),
(2, 'POTATO BOATS', 'Crispy cheese potato boats, baked to a crisp, then topped with cheddar cheese, bacon. $12', 'pictures/boats.jpg', 'appetizers'),
(3, 'NACHOS', 'Little Tex-Mex magic with top-rated nacho recipes,from the traditional to the downright loco.$15\r\n', 'pictures/nachos.jpg', 'appetizers'),
(4, 'BEATROOT SALAD', 'Team tender roasted beetroot with toasted hazelnuts and a balsamic syrup for this health salad.$5', 'pictures/beatroot.jpg', 'appetizers'),
(5, 'SHRIMPS SALAD', 'Shrimp salad is an ideal filler for a lunch roll-up.Serve a scoop of the salad,and enjoy.\r\n$10', 'pictures/shrimps.jpg', 'appetizers'),
(7, 'MIXED SALAD', 'Mixed salad is a dish consisting of small pieces of food, which may be mixed with a sauce or salad dressing.\r\n$7', 'pictures/mixed.jpg', 'appetizers'),
(8, 'CLASSIC BURGER', 'Flame-grilled with passion, Classic Burger Joint serves burgers that cook up a gourmet. Luxury burgers transform this timeless classic into a connoisseur''s delight.\r\n$15', 'pictures/classic.jpg', 'mains'),
(9, 'SPICY BURGER', 'These burgers are chock full of spicy peppers. When handling the chile peppers be sure to wear gloves, and don''t let the pepper oils come in contact with your eyes.\r\n$18', 'pictures/spicy.jpg', 'mains'),
(10, 'ROOSTER SANDWICH', 'We pride ourselves on producing a delicious range of classic and gourmet sandwiches, as well as weekly and seasonal specials, freshly prepared and made on promises.\r\n$8', 'pictures/rooster.jpg', 'mains'),
(11, 'NY STRIP STEAK', 'New York Strips or Kansas City strips our strip steaks are a customer favorite. Try boneless or bone-in strips today! $25', 'pictures/steak.jpg', 'mains'),
(12, 'GRILLED SALMON', 'A simple soy sauce and brown sugar marinade, with hints of lemon and garlic, are the perfect salty-sweet complement to rich salmon fillets.\r\n$14', 'pictures/salmon.jpg', 'mains'),
(13, 'FISH N CHIPS', 'Freshly cooked, piping hot fish and chips, smothered in salt and soused with vinegar, wrapped in newspaper and eaten out-of-doors on a cold and wintry day - it simply cannot be beaten!\r\n$16', 'pictures/fnc.jpg', 'mains'),
(16, 'Example', 'This is an example made for testing', 'pictures/fnc.jpg', 'mains'),
(17, 'Example', 'This is an example made for testing', 'pictures/fnc.jpg', 'mains'),
(18, 'Example', 'This is an example made for testing', 'pictures/fnc.jpg', 'mains'),
(20, 'Edited', 'This is edited via Admin Panel', 'pictures/fnc.jpg', 'mains');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_log` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_log`, `username`, `password`, `id_role`, `name`, `lastname`, `email`) VALUES
(3, 'Admin', '38b3d1e45e1e360effa862edc4609f5b', 1, 'Admin', 'Adminovic', 'admin@admin.admin'),
(4, 'User', '38b3d1e45e1e360effa862edc4609f5b', 2, 'User', 'Userovic', 'user@user.user'),
(5, 'Coja', '88989ddd104c080b99814b9cb03c1848', 2, 'Coja', 'Coja', 'coja@coja.com'),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', 2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nesto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nesto2` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `name`, `nesto`, `nesto2`) VALUES
(1, 'home', 'Home', '', ''),
(2, 'menu', 'Menu', '', ''),
(3, 'order', 'Order', '', ''),
(4, 'events', 'Events', '', ''),
(5, 'about', 'About', '', ''),
(6, 'author', 'Author', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `polls_id` int(5) NOT NULL,
  `question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`polls_id`, `question`, `active`) VALUES
(1, 'Do you like website?', 1),
(2, 'What''s your favorite food?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id_reg` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `confirm` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(5) NOT NULL,
  `polls_id` int(5) NOT NULL,
  `answers_id` int(5) NOT NULL,
  `result` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `polls_id`, `answers_id`, `result`) VALUES
(1, 1, 1, 71),
(2, 1, 2, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answers_id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drinks_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`polls_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answers_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drinks_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `polls_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
