-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 14. 21:39
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `filmdb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `length` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `picturedesc` varchar(50) NOT NULL,
  `mod` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `films`
--

INSERT INTO `films` (`id`, `title`, `length`, `description`, `link`, `picture`, `picturedesc`, `mod`) VALUES
(1, 'Venom', 112, 'Action, violance', 'https://www.imdb.com/title/tt1270797/?ref_=fn_al_tt_1', 'img/m1.jpg', 'Venom movie cover', 'thisweek'),
(2, 'Dunkirk', 106, 'Violance, war', 'https://www.imdb.com/title/tt5013056/?ref_=fn_al_tt_1', 'img/m2.jpg', 'Dunkirk movie cover', 'thisweek'),
(3, 'Batman vs Superman:\r\nDawn of Justice', 151, 'Action', 'https://www.imdb.com/title/tt2975590/?ref_=fn_al_tt_1', 'img/m3.jpg', 'Batman vs Superman: Dawn of Justice movie cover', 'thisweek'),
(4, 'John Wick: Chapter 2', 122, 'Adventure', 'https://www.imdb.com/title/tt4425200/?ref_=fn_al_tt_3', 'img/m4.jpg', 'John Wick: Chapter 2 movie cover', 'thisweek'),
(5, 'Aquaman', 143, 'Action', 'https://www.imdb.com/title/tt1477834/?ref_=fn_al_tt_1', 'img/m5.jpg', 'Aquaman movie cover', 'thisweek'),
(6, 'Black Panther', 134, 'Action', 'https://www.imdb.com/title/tt1825683/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_black%2520panther', 'img/m6.jpg', 'Black Panther movie cover', 'thisweek'),
(7, 'Thor', 115, 'Violance, action', 'https://www.imdb.com/title/tt0800369/?ref_=fn_al_tt_1', 'img/m7.jpg', 'Thor movie cover', 'thisweek'),
(8, 'Bumblebee', 114, 'Adventure', 'https://www.imdb.com/title/tt4701182/?ref_=fn_al_tt_1', 'img/m8.png', 'Bumblebee movie cover', 'thisweek'),
(9, 'Mortal Engines', 128, 'Action', 'https://www.imdb.com/title/tt1571234/?ref_=fn_al_tt_1', 'img/m9.jpg', 'Mortal Engines movie cover', 'thisweek'),
(10, 'UnderWorld Blood Wars', 93, 'Action, war', 'https://www.imdb.com/title/tt3717252/?ref_=fn_al_tt_1', 'img/m10.jpg', 'UnderWorld Blood Wars movie cover', 'thisweek'),
(11, 'Jhonny English', 97, 'Action, violance', 'https://www.imdb.com/title/tt0274166/?ref_=fn_al_tt_1', 'img/coming1.jpg', 'Jhony English movie cover', 'coming'),
(12, 'Warcraft', 123, 'Violance, war', 'https://www.imdb.com/title/tt0803096/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_warcra', 'img/coming2.jpg', 'Warcraft movie cover', 'coming'),
(13, 'Rampage', 107, 'Action', 'https://www.imdb.com/title/tt2231461/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_rampage', 'img/coming3.jpg', 'Rampage movie cover', 'coming'),
(14, 'Iron Lady', 105, 'Adventure', 'https://www.imdb.com/title/tt1007029/?ref_=fn_al_tt_1', 'img/coming4.jpg', 'Iron Lady movie cover', 'coming'),
(15, 'Justice League', 120, 'Action', 'https://www.imdb.com/title/tt0974015/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_justice%2520le', 'img/coming5.jpg', 'Justice League movie cover', 'coming'),
(16, 'Doctor Strange', 115, 'Action', 'https://www.imdb.com/title/tt1211837/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_doctor%2520str', 'img/coming6.jpeg', 'Doctor Strange movie cover', 'coming'),
(17, 'Captain Marvel', 123, 'Violance, action', 'https://www.imdb.com/title/tt4154664/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_captain%2520marve', 'img/coming7.jpg', 'Captain Marvel movie cover', 'coming'),
(18, 'Black Widow', 134, 'Adventure', 'https://www.imdb.com/title/tt3480822/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_black%2520wi', 'img/coming8.jpg', 'Black Widow movie cover', 'coming'),
(19, 'Ant-man', 117, 'Action', 'https://www.imdb.com/title/tt0478970/?ref_=nv_sr_srsg_3_tt_3_nm_5_q_ant', 'img/coming9.jpg', 'Ant-man movie cover', 'coming'),
(20, 'Guardians of the Galaxy', 121, 'Action, war', 'https://www.imdb.com/title/tt2015381/?ref_=nv_sr_srsg_3_tt_8_nm_0_q_guardian', 'img/coming10.jpg', 'Guardians of the Galaxy movie cover', 'coming');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(14, 'Zaza', 'zaza@gmail.com', '$2y$10$aItUSewgIM9oJqlR3kOqWOSUocTgT4qfo1oZ4NmsnMWO8iPNx1CCi');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
