-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 mai 2021 à 00:17
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `market`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `reference` int(11) NOT NULL,
  `wording` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `quantity_min` int(11) DEFAULT NULL,
  `quantity_stock` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`reference`, `wording`, `description`, `unit_price`, `quantity_min`, `quantity_stock`, `category`) VALUES
(6, 'coffee', 'coffee', 12, 12, 100, 'Beverages'),
(7, 'juice', 'juice', 12, 13, 34, 'Beverages'),
(8, 'soda', 'soda', 12, 18, 10000, 'Beverages'),
(9, 'bagels', 'bagels', 19, 199, 2000, 'Bakery'),
(10, 'tortillas', 'tortillas', 12, 1621, 123, 'Bakery'),
(11, 'ketchup', 'ketchup', 171, 13, 123, 'Jarred Goods'),
(12, 'spaghetti sauce', 'spaghetti sauce', 213, 132, 1200, 'Jarred Goods'),
(13, 'cheeses', 'cheeses', 342, 788, 545, 'Dairy'),
(14, 'eggs', 'eggs', 15657, 7612, 12751, 'Dairy'),
(15, 'milk', 'milk', 723, 62, 6325, 'Dairy'),
(16, 'yogurt', 'yogurt', 13, 2144, 34234, 'Dairy'),
(17, ' laundry detergent,', ' laundry detergent', 121, 4124, 523325, 'Cleaners'),
(18, 'waffles', 'waffles', 1324, 14, 421, 'Frozen Foods');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'izikaoutar@gmail.com	', '$2y$10$z/bU/PTwEvGw3sRD9tJ0zu1SOBxDGES/LOWYE9zipMOCmwM0EO8QC'),
(6, 'izikaoutarr@gmail.com', '$2y$10$ta3C6tcn7IdPWF2AD0khT.vDzwHYP3sxOP7VuyUaLAHV8buUZxE3.'),
(7, 'izikaoutaar@gmail.com', '$2y$10$e.2QoD0fr1nTuaIRM6qrRuCbd0dThXjqs6J7nRVBq7Vg/AVU6WW8W'),
(8, 'izikaoutar@gmail.com', '$2y$10$sSdJHvaU1ewzK1r3/48E8OymhzZfPiwqGBYcCvmJdprZsbaPSyiuO'),
(9, 'izikaoutar@gmail.com', '$2y$10$H938fsLeSiwhggeuS.lZlu.Sw/W.fUNgns./nhN1Ibe5BZLELDkpy'),
(10, 'izikaouttar@gmail.com', '$2y$10$GnQtS5dryf7FiecAKoRgoOF3tU67FGDFA3X23y9TQXqD5itmv2oCq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
