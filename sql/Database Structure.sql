-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 26 Mars 2019 à 09:12
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vincent_belotti`
--

-- --------------------------------------------------------

--
-- Structure de la table `ATTRIBUER`
--

CREATE TABLE `ATTRIBUER` (
  `ID_REPONSE` int(11) NOT NULL,
  `ID_CHOIX` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `AVOIR`
--

CREATE TABLE `AVOIR` (
  `ID_QUESTION` int(11) NOT NULL,
  `TAG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `CHOIX`
--

CREATE TABLE `CHOIX` (
  `ID_CHOIX` int(11) NOT NULL,
  `ID_QUESTION` int(11) DEFAULT NULL,
  `TEXTE` text NOT NULL,
  `COLONNE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `CREER_QUESTION`
--

CREATE TABLE `CREER_QUESTION` (
  `MAIL` varchar(50) NOT NULL,
  `ID_QUESTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ENSEIGNER`
--

CREATE TABLE `ENSEIGNER` (
  `MAIL` varchar(50) NOT NULL,
  `ID_MATIERE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `INVITER`
--

CREATE TABLE `INVITER` (
  `ID_QUESTIONNAIRE` int(11) NOT NULL,
  `MAIL_USER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `LIER`
--

CREATE TABLE `LIER` (
  `CHO_ID_CHOIX` int(11) NOT NULL,
  `ID_CHOIX` int(11) NOT NULL,
  `VALEUR_RELATION` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `MATIERE`
--

CREATE TABLE `MATIERE` (
  `INTITULE` varchar(50) DEFAULT NULL,
  `ID_MATIERE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `NOTER`
--

CREATE TABLE `NOTER` (
  `MAIL_ETUDIANT` varchar(50) NOT NULL,
  `ID_QUESTIONNAIRE` int(11) NOT NULL,
  `NOTE` decimal(10,0) DEFAULT NULL,
  `STATUT` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `POSSEDER_QUESTION`
--

CREATE TABLE `POSSEDER_QUESTION` (
  `ID_QUESTIONNAIRE` int(11) NOT NULL,
  `ID_QUESTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `QUESTION`
--

CREATE TABLE `QUESTION` (
  `ENONCER` text,
  `TYPE` varchar(50) NOT NULL,
  `CORRECTION` varchar(500) NOT NULL,
  `ID_QUESTION` int(11) NOT NULL,
  `POINTS_MAX` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `QUESTIONNAIRE`
--

CREATE TABLE `QUESTIONNAIRE` (
  `MAIL` varchar(50) NOT NULL,
  `ID_QUESTIONNAIRE` int(11) NOT NULL,
  `TITRE` varchar(50) DEFAULT NULL,
  `DATE_CREATION` datetime DEFAULT NULL,
  `DATE_FIN` datetime DEFAULT NULL,
  `DESCRIPTION` text,
  `DATE_OUVERTURE` datetime DEFAULT NULL,
  `TYPE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `REPONSE`
--

CREATE TABLE `REPONSE` (
  `ID_QUESTIONNAIRE` int(11) NOT NULL,
  `ID_QUESTION` int(11) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `ID_REPONSE` int(11) NOT NULL,
  `TEXTE` text,
  `POINTS` float DEFAULT NULL,
  `DATE_PARTICIPATION` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `TAG`
--

CREATE TABLE `TAG` (
  `TAG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `ROLE` varchar(50) DEFAULT NULL,
  `PROMO` varchar(50) DEFAULT NULL,
  `INE` varchar(50) DEFAULT NULL,
  `MATRICULE` varchar(50) DEFAULT NULL,
  `INTEXT` varchar(50) DEFAULT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ATTRIBUER`
--
ALTER TABLE `ATTRIBUER`
  ADD PRIMARY KEY (`ID_REPONSE`,`ID_CHOIX`),
  ADD KEY `ID_REPONSE` (`ID_REPONSE`),
  ADD KEY `ID_CHOIX` (`ID_CHOIX`);

--
-- Index pour la table `AVOIR`
--
ALTER TABLE `AVOIR`
  ADD PRIMARY KEY (`ID_QUESTION`,`TAG`),
  ADD KEY `FK_AVOIR2` (`TAG`);

--
-- Index pour la table `CHOIX`
--
ALTER TABLE `CHOIX`
  ADD PRIMARY KEY (`ID_CHOIX`),
  ADD KEY `FK_POSSEDER_CHOIX` (`ID_QUESTION`);

--
-- Index pour la table `CREER_QUESTION`
--
ALTER TABLE `CREER_QUESTION`
  ADD PRIMARY KEY (`MAIL`,`ID_QUESTION`),
  ADD KEY `FK_CREER_QUESTION2` (`ID_QUESTION`);

--
-- Index pour la table `ENSEIGNER`
--
ALTER TABLE `ENSEIGNER`
  ADD PRIMARY KEY (`MAIL`,`ID_MATIERE`),
  ADD KEY `FK_ENSEIGNER2` (`ID_MATIERE`);

--
-- Index pour la table `INVITER`
--
ALTER TABLE `INVITER`
  ADD KEY `ID_QUESTIONNAIRE` (`ID_QUESTIONNAIRE`),
  ADD KEY `MAIL_USER` (`MAIL_USER`);

--
-- Index pour la table `LIER`
--
ALTER TABLE `LIER`
  ADD PRIMARY KEY (`CHO_ID_CHOIX`,`ID_CHOIX`),
  ADD KEY `FK_LIER2` (`ID_CHOIX`);

--
-- Index pour la table `MATIERE`
--
ALTER TABLE `MATIERE`
  ADD PRIMARY KEY (`ID_MATIERE`);

--
-- Index pour la table `NOTER`
--
ALTER TABLE `NOTER`
  ADD PRIMARY KEY (`MAIL_ETUDIANT`,`ID_QUESTIONNAIRE`),
  ADD KEY `FK_NOTER2` (`ID_QUESTIONNAIRE`),
  ADD KEY `MAIL_ETUDIANT` (`MAIL_ETUDIANT`);

--
-- Index pour la table `POSSEDER_QUESTION`
--
ALTER TABLE `POSSEDER_QUESTION`
  ADD PRIMARY KEY (`ID_QUESTIONNAIRE`,`ID_QUESTION`),
  ADD KEY `FK_POSSEDER_QUESTION2` (`ID_QUESTION`);

--
-- Index pour la table `QUESTION`
--
ALTER TABLE `QUESTION`
  ADD PRIMARY KEY (`ID_QUESTION`);

--
-- Index pour la table `QUESTIONNAIRE`
--
ALTER TABLE `QUESTIONNAIRE`
  ADD PRIMARY KEY (`ID_QUESTIONNAIRE`),
  ADD KEY `FK_CREER_QUESTIONNAIRE` (`MAIL`);

--
-- Index pour la table `REPONSE`
--
ALTER TABLE `REPONSE`
  ADD PRIMARY KEY (`ID_REPONSE`),
  ADD KEY `FK_ASSOCIER` (`ID_QUESTION`),
  ADD KEY `FK_RECEVOIR` (`ID_QUESTIONNAIRE`),
  ADD KEY `FK_REPONDRE` (`MAIL`);

--
-- Index pour la table `TAG`
--
ALTER TABLE `TAG`
  ADD PRIMARY KEY (`TAG`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `unique` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `AVOIR`
--
ALTER TABLE `AVOIR`
  MODIFY `ID_QUESTION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `CHOIX`
--
ALTER TABLE `CHOIX`
  MODIFY `ID_CHOIX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `MATIERE`
--
ALTER TABLE `MATIERE`
  MODIFY `ID_MATIERE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `QUESTION`
--
ALTER TABLE `QUESTION`
  MODIFY `ID_QUESTION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `REPONSE`
--
ALTER TABLE `REPONSE`
  MODIFY `ID_REPONSE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ATTRIBUER`
--
ALTER TABLE `ATTRIBUER`
  ADD CONSTRAINT `ATTRIBUER_ibfk_1` FOREIGN KEY (`ID_REPONSE`) REFERENCES `REPONSE` (`ID_REPONSE`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ATTRIBUER_ibfk_2` FOREIGN KEY (`ID_CHOIX`) REFERENCES `CHOIX` (`ID_CHOIX`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `AVOIR`
--
ALTER TABLE `AVOIR`
  ADD CONSTRAINT `FK_AVOIR` FOREIGN KEY (`ID_QUESTION`) REFERENCES `QUESTION` (`ID_QUESTION`),
  ADD CONSTRAINT `FK_AVOIR2` FOREIGN KEY (`TAG`) REFERENCES `TAG` (`TAG`);

--
-- Contraintes pour la table `CHOIX`
--
ALTER TABLE `CHOIX`
  ADD CONSTRAINT `FK_POSSEDER_CHOIX` FOREIGN KEY (`ID_QUESTION`) REFERENCES `QUESTION` (`ID_QUESTION`);

--
-- Contraintes pour la table `CREER_QUESTION`
--
ALTER TABLE `CREER_QUESTION`
  ADD CONSTRAINT `FK_CREER_QUESTION` FOREIGN KEY (`MAIL`) REFERENCES `users` (`MAIL`),
  ADD CONSTRAINT `FK_CREER_QUESTION2` FOREIGN KEY (`ID_QUESTION`) REFERENCES `QUESTION` (`ID_QUESTION`);

--
-- Contraintes pour la table `ENSEIGNER`
--
ALTER TABLE `ENSEIGNER`
  ADD CONSTRAINT `FK_ENSEIGNER` FOREIGN KEY (`MAIL`) REFERENCES `users` (`MAIL`),
  ADD CONSTRAINT `FK_ENSEIGNER2` FOREIGN KEY (`ID_MATIERE`) REFERENCES `MATIERE` (`ID_MATIERE`);

--
-- Contraintes pour la table `INVITER`
--
ALTER TABLE `INVITER`
  ADD CONSTRAINT `INVITER_ibfk_1` FOREIGN KEY (`ID_QUESTIONNAIRE`) REFERENCES `QUESTIONNAIRE` (`ID_QUESTIONNAIRE`) ON UPDATE CASCADE,
  ADD CONSTRAINT `INVITER_ibfk_2` FOREIGN KEY (`MAIL_USER`) REFERENCES `users` (`MAIL`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `LIER`
--
ALTER TABLE `LIER`
  ADD CONSTRAINT `FK_LIER` FOREIGN KEY (`CHO_ID_CHOIX`) REFERENCES `CHOIX` (`ID_CHOIX`),
  ADD CONSTRAINT `FK_LIER2` FOREIGN KEY (`ID_CHOIX`) REFERENCES `CHOIX` (`ID_CHOIX`);

--
-- Contraintes pour la table `NOTER`
--
ALTER TABLE `NOTER`
  ADD CONSTRAINT `FK_NOTER` FOREIGN KEY (`MAIL_ETUDIANT`) REFERENCES `users` (`MAIL`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NOTER2` FOREIGN KEY (`ID_QUESTIONNAIRE`) REFERENCES `QUESTIONNAIRE` (`ID_QUESTIONNAIRE`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `POSSEDER_QUESTION`
--
ALTER TABLE `POSSEDER_QUESTION`
  ADD CONSTRAINT `FK_POSSEDER_QUESTION` FOREIGN KEY (`ID_QUESTIONNAIRE`) REFERENCES `QUESTIONNAIRE` (`ID_QUESTIONNAIRE`),
  ADD CONSTRAINT `FK_POSSEDER_QUESTION2` FOREIGN KEY (`ID_QUESTION`) REFERENCES `QUESTION` (`ID_QUESTION`);

--
-- Contraintes pour la table `QUESTIONNAIRE`
--
ALTER TABLE `QUESTIONNAIRE`
  ADD CONSTRAINT `FK_CREER_QUESTIONNAIRE` FOREIGN KEY (`MAIL`) REFERENCES `users` (`MAIL`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `REPONSE`
--
ALTER TABLE `REPONSE`
  ADD CONSTRAINT `FK_ASSOCIER` FOREIGN KEY (`ID_QUESTION`) REFERENCES `QUESTION` (`ID_QUESTION`),
  ADD CONSTRAINT `FK_RECEVOIR` FOREIGN KEY (`ID_QUESTIONNAIRE`) REFERENCES `QUESTIONNAIRE` (`ID_QUESTIONNAIRE`),
  ADD CONSTRAINT `FK_REPONDRE` FOREIGN KEY (`MAIL`) REFERENCES `users` (`MAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
