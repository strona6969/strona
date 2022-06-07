-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Cze 2022, 19:03
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ubrania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konta`
--

CREATE TABLE `konta` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `data_zalozenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `konta`
--

INSERT INTO `konta` (`id`, `login`, `email`, `haslo`, `data_zalozenia`) VALUES
(5, 'admin', 'a@a.a', '$argon2id$v=19$m=65536,t=4,p=1$NjFuOUJUMUtjbVhqekY3cA$e+q/yqmE9anIbyeuDiFO+X1PgPo9GB2djmXmj8Lmus4', '0000-00-00'),
(6, 'admin1', 'aa@a.a', '$argon2id$v=19$m=65536,t=4,p=1$LmJrVGtkei8uQ1VrMWt2VQ$kVEgmLqS4aETmI9CFLB3E5b4X/B9fggYZshVYRBq6Sk', '0000-00-00'),
(7, 'admin2', 'b@b.b', '$argon2id$v=19$m=65536,t=4,p=1$T1duWHZLNFhQZ0tFMDNjbA$/fPwtK9+Rvb8XSk3MXEkRP3OMbaRALnAuOwTn9oIna8', '0000-00-00'),
(8, 'pawelik', 'testowanie@asd.asd', '$argon2id$v=19$m=65536,t=4,p=1$SkNuUjdxTFJTQ2g1cXhYUw$IodKY0BsEPV8guREaE+II9m8tHuX/BcvC+rK0PGI4iA', '0000-00-00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `konta`
--
ALTER TABLE `konta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `konta`
--
ALTER TABLE `konta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
