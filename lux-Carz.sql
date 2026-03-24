-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Janvier 2023 à 23:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lux-carz`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(1, 'https://files.hollmann.international/vehicle/22G2228/images/large/1/', 'Mercedes-Benz G 63 AMG', 430000, 'La nouvelle édition BRABUS 800 BLACK &amp; GOLD. Visuellement, le nouveau modèle spécial ravit avec la version à carrosserie large BRABUS WIDESTAR au style saisissant avec de nombreux éléments en carbone et des roues forgées de haute technologie BRABUS Monoblock Y &quot;Platinum Edition&quot; de 23 pouces peintes en or pour contraster avec la carrosserie noire du véhicule.'),
(2, 'https://files.hollmann.international/vehicle/23G0246/images/large/1/', 'Mercedes S680 Maybach', 340000, 'La Mercedes-Maybach S 680 Haute Voiture reçoit en effet une livrée bicolore combinant le bleu nautique métallisé pour sa partie supérieure, avec une teinte rose pour sa partie basse. Le véhicule repose par ailleurs sur un set de jantes également réalisé dans la teinte bleu nautique.'),
(3, 'https://files.hollmann.international/vehicle/22G1303/images/large/1/', 'Mercedes GLS 600 Maybach', 305000, 'Il est associé à un système 48 V « EQ Boost », qui ajoute 22 chevaux et 250 Nm de couple instantané lorsqu''il est activé. Cela permet au Mercedes-Maybach GLS 600 de 2,78 tonnes de passer de 0 à 100 km/h en seulement 4,9 secondes et d''atteindre une vitesse de pointe limitée électroniquement à 250 km/h.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
