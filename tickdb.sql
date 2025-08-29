
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS admins;
CREATE TABLE `admins` (
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pword` varchar(30) NOT NULL,
  `login_type` int(10) NOT NULL,
  `avata` text NOT NULL
);

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `pword`, `login_type`, `avata`) VALUES
(1, 'emma', '1234', 0, 'images/emma.jpg'),
(2, 'pro', '12345678', 1, 'images/emma2.jpg'),
(3, 'lex', '12345', 0, '');

DROP TABLE IF EXISTS tickets;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `ticketno` int(11) NOT NULL,
  `status` int(11) NOT NULL
);


INSERT INTO `tickets` (`id`, `ticketno`, `status`) VALUES
(1, 1838133, 1),
(2, 7101911, 0),
(3, 4485113, 0),
(4, 3560319, 0);


ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `admins`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
