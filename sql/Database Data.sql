-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 26 Mars 2019 à 09:13
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

--
-- Contenu de la table `ATTRIBUER`
--

INSERT INTO `ATTRIBUER` (`ID_REPONSE`, `ID_CHOIX`) VALUES
(2, 1),
(4, 1);

--
-- Contenu de la table `AVOIR`
--

INSERT INTO `AVOIR` (`ID_QUESTION`, `TAG`) VALUES
(1, 'magnetique '),
(2, '3D'),
(4, 'Algorithmes');

--
-- Contenu de la table `CHOIX`
--

INSERT INTO `CHOIX` (`ID_CHOIX`, `ID_QUESTION`, `TEXTE`, `COLONNE`) VALUES
(1, 2, '6', NULL),
(2, 2, '5', NULL),
(3, 2, '8', NULL),
(4, 2, '10', NULL),
(5, 4, 'Toutes les solutions à un problème', NULL),
(6, 4, 'Une solution optimale', NULL);

--
-- Contenu de la table `CREER_QUESTION`
--

INSERT INTO `CREER_QUESTION` (`MAIL`, `ID_QUESTION`) VALUES
('b.t@mines-douai.fr', 2),
('g.l@mines-douai.fr', 1);

--
-- Contenu de la table `ENSEIGNER`
--

INSERT INTO `ENSEIGNER` (`MAIL`, `ID_MATIERE`) VALUES
('b.t@mines-douai.fr', 2),
('g.l@mines-douai.fr', 1);

--
-- Contenu de la table `INVITER`
--

INSERT INTO `INVITER` (`ID_QUESTIONNAIRE`, `MAIL_USER`) VALUES
(1, 'v.b@mines-Douai.com'),
(1, 'y.j@mines-douai.fr'),
(2, 'v.b@mines-Douai.com'),
(2, 'y.j@mines-douai.fr');

--
-- Contenu de la table `MATIERE`
--

INSERT INTO `MATIERE` (`INTITULE`, `ID_MATIERE`) VALUES
('DAO', 1),
('Physique', 2);

--
-- Contenu de la table `NOTER`
--

INSERT INTO `NOTER` (`MAIL_ETUDIANT`, `ID_QUESTIONNAIRE`, `NOTE`, `STATUT`) VALUES
('v.b@mines-Douai.com', 1, '5', 1),
('y.j@mines-douai.fr', 1, '3', 1);

--
-- Contenu de la table `POSSEDER_QUESTION`
--

INSERT INTO `POSSEDER_QUESTION` (`ID_QUESTIONNAIRE`, `ID_QUESTION`) VALUES
(1, 1),
(1, 2),
(1, 4),
(2, 1),
(3, 4);

--
-- Contenu de la table `QUESTION`
--

INSERT INTO `QUESTION` (`ENONCER`, `TYPE`, `CORRECTION`, `ID_QUESTION`, `POINTS_MAX`) VALUES
('Énoncer la loi de Lenz', 'Texte', 'le courant induit s\'oppose par ses effets à la cause qui lui a donné naissance ', 1, 1),
('combien de faces existent-ils dans un cube?', 'QCM', '6', 2, 1),
('Un algorithme génétique recherche : \r\n   - Toutes les solutions à un problème\r\n   - Une solution optimale', 'QCM', 'Une solution optimale', 4, 2);

--
-- Contenu de la table `QUESTIONNAIRE`
--

INSERT INTO `QUESTIONNAIRE` (`MAIL`, `ID_QUESTIONNAIRE`, `TITRE`, `DATE_CREATION`, `DATE_FIN`, `DESCRIPTION`, `DATE_OUVERTURE`, `TYPE`) VALUES
('b.t@mines-douai.fr', 1, 'DAO ', '2019-03-04 00:00:00', '2019-03-31 00:00:00', 'questionnaire DAO', '2019-03-05 00:00:00', 'public'),
('g.l@mines-douai.fr', 2, 'Lenz', '2019-03-04 00:00:00', '2019-03-31 00:00:00', 'questionnaire physique', '2019-03-06 00:00:00', 'public'),
('g.l@mines-douai.fr', 3, 'QCM MAD', '2019-03-11 00:00:00', '2019-03-28 00:00:00', 'Questionnaire de MAD.', '2019-03-20 00:00:00', 'QCM');

--
-- Contenu de la table `REPONSE`
--

INSERT INTO `REPONSE` (`ID_QUESTIONNAIRE`, `ID_QUESTION`, `MAIL`, `ID_REPONSE`, `TEXTE`, `POINTS`, `DATE_PARTICIPATION`) VALUES
(1, 1, 'y.j@mines-douai.fr', 1, 'je sais pas', 0, '2019-03-12 11:00:00'),
(1, 2, 'y.j@mines-douai.fr', 2, '6', 1, '2019-03-12 11:10:00'),
(1, 1, 'v.b@mines-Douai.com', 3, 'le courant induit s\'oppose par ses effets à la cause qui lui a donné naissance ', 5, '2019-03-19 02:00:00'),
(2, 2, 'v.b@mines-Douai.com', 4, '6', 1, '2019-03-19 02:00:00'),
(1, 4, 'y.j@mines-douai.fr', 5, 'Une solution optimale', 1, '2019-03-20 06:18:00');

--
-- Contenu de la table `TAG`
--

INSERT INTO `TAG` (`TAG`) VALUES
('3D'),
('Algorithmes'),
('magnetique '),
('merise'),
('thermique');

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `password`, `ROLE`, `PROMO`, `INE`, `MATRICULE`, `INTEXT`, `login`) VALUES
(30, 'a', 'a', 'a', 'a', NULL, NULL, NULL, NULL, NULL, 'a'),
(32, 'az', 'erty', 'az.erty@outlook.com', 'ytreza', NULL, NULL, NULL, NULL, NULL, 'azerty'),
(2, 'Thery', 'Bruno', 'b.t@mines-douai.fr', 'bruno', 'Enseignant ', NULL, NULL, '0002', 'interne', 'BrunoLinux'),
(5, 'Lozenguez', 'Guillaume', 'g.l@mines-douai.fr', 'guillaume', 'Enseignant ', NULL, NULL, '0001', 'interne', 'GLozenguez'),
(31, 'solo', 'han', 'han.solo@laposte.net', 'solo', NULL, NULL, NULL, NULL, NULL, 'han'),
(17, 'Test', 'Test', 'test@yahoo.com', 'test', NULL, NULL, NULL, NULL, NULL, 'test'),
(6, 'Belotti', 'Vincent', 'v.b@mines-Douai.com', 'vincent', 'Etudiant', '2020', '123456789', NULL, NULL, 'VBelotti'),
(33, 'Leeb', 'Théodule', 'verdier@secrétaire.fr', 'montagner', NULL, NULL, NULL, NULL, NULL, 'CaPencheADroite'),
(7, 'Jaka', 'Yassir', 'y.j@mines-douai.fr', 'yassir', 'Etudiant', '2020', '123456788', NULL, NULL, 'YassirJaka'),
(29, 'ZAP', 'ZAP', 'ZAP', 'ZAP', NULL, NULL, NULL, NULL, NULL, 'ZAP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
