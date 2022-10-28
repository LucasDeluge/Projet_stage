-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 11:11
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT/;
/!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS/;
/!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION/;
/!40101 SET NAMES utf8mb4/;

--
-- Base de données : association
--

-- --------------------------------------------------------

--
-- Structure de la table article
--

CREATE TABLE article (
  id int(11) NOT NULL,
  titre varchar(100) NOT NULL,
  image varchar(500) NOT NULL,
  texte varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table article
--
phpMyAdmin
phpMyAdmin
Image
INSERT INTO article (id, titre, image, texte) VALUES
(9, 'Noël Solidaire', './assets/stockIMG/img article.jpg', 'Comme chaque année pour Noël L’île de Solidarité a tenu à partager un moment de convivialité avec les personnes de la rue, en respectant bien sûr les mesures sanitaires COVID en vigueur.\r\n\r\nAu programme, distribution alimentaire assuré par notre partenaire FoodBox qui offre depuis plusieurs mois chaque semaine des repas chauds.\r\nEgalement le restaurant Chez Raoul nous a fait don de 200 délicieux poulet-maroille, carbonnade flamande et tiramisú speculoos !\r\nDans une ambiance festive et conviviale, des chocolats, vêtements chauds, fruits, produits d’hygiènes et boîtes de Noël fournies par Help Assos et la bulle inattendue furent distribués lors de cette événement chaleureux et inédit !\r\n\r\nNous remercions également nos partenaires : magasins Match, La Ville de Lille, la brasserie Lamblin, Interresto, Decathlon, Degrave Evénement, et également les bénévoles et donateurs qui nous suivent toute l’année !'),
(11, 'qedfsdfdsdf', './assets/stockIMG/logoids-modified.png', 'sdfsdfsdfsdfdfdsf');

-- --------------------------------------------------------

--
-- Structure de la table users
--

CREATE TABLE users (
  id int(11) NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(200) NOT NULL,
  email varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table users
--

INSERT INTO users (id, username, password, email) VALUES
(2, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$aDRsU1UyNUxmVDU3ZEwuMA$lpRXT9sMW9eCV1MkYR79o4+4yOs4KEwstARK50f2CaU', 'theo.courbot59@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table article
--
ALTER TABLE article
  ADD PRIMARY KEY (id);

--
-- Index pour la table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table article
--
ALTER TABLE article
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table users
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT/;
/!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS/;
/!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION/;