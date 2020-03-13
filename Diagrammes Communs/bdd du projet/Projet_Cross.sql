-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 13 Mars 2020 à 14:21
-- Version du serveur :  10.1.44-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Projet_Cross`
--

-- --------------------------------------------------------

--
-- Structure de la table `Course`
--

CREATE TABLE `Course` (
  `IdCourse` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Distance` int(11) NOT NULL,
  `NbTours` int(11) NOT NULL,
  `TempsDebutCourse` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table Course';

--
-- Contenu de la table `Course`
--

INSERT INTO `Course` (`IdCourse`, `Nom`, `Date`, `Distance`, `NbTours`, `TempsDebutCourse`, `State`) VALUES
(4, 'course', '2020-03-18', 0, 0, '', ''),
(9, 'Course marathon', '2020-03-18', 10, 10, '', ''),
(13, 'azerty', '2020-03-11', 2, 4, '', ''),
(14, 'serge', '2020-03-15', 1, 5, '', ''),
(15, 'ser', '2020-03-13', 1, 5, '', ''),
(16, 'ser', '2020-03-13', 1, 5, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `CourseActuelle`
--

CREATE TABLE `CourseActuelle` (
  `IdCourse` int(11) NOT NULL,
  `IdCourseActuelle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `CourseActuelle`
--

INSERT INTO `CourseActuelle` (`IdCourse`, `IdCourseActuelle`) VALUES
(14, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Participant`
--

CREATE TABLE `Participant` (
  `IdUtilisateur` int(11) NOT NULL,
  `IdCourse` int(11) NOT NULL,
  `IdDossard` int(11) NOT NULL,
  `IdParticipant` int(11) NOT NULL,
  `tempsTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Participant`
--

INSERT INTO `Participant` (`IdUtilisateur`, `IdCourse`, `IdDossard`, `IdParticipant`, `tempsTotal`) VALUES
(1, 4, 52, 0, 0),
(1, 14, 44, 0, 0),
(29, 14, 0, 0, 0),
(56, 14, 0, 0, 0),
(57, 14, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ParticipantTempsTour`
--

CREATE TABLE `ParticipantTempsTour` (
  `IdParticipantTempsTour` int(11) NOT NULL,
  `IdParticipant` int(11) NOT NULL,
  `IdCourse` int(11) NOT NULL,
  `numTour` int(11) NOT NULL,
  `tempsTour` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `ParticipantTempsTour`
--

INSERT INTO `ParticipantTempsTour` (`IdParticipantTempsTour`, `IdParticipant`, `IdCourse`, `numTour`, `tempsTour`) VALUES
(3, 1, 4, 3, 49),
(5, 57, 14, 0, 40),
(6, 57, 14, 2, 33),
(7, 29, 14, 3, 22),
(8, 56, 14, 0, 222),
(9, 56, 14, 2, 11),
(10, 29, 14, 0, 33);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `IdUtilisateur` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Mdp` varchar(50) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Classe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table utilisateur';

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`IdUtilisateur`, `Nom`, `Prenom`, `Mail`, `Mdp`, `Admin`, `Classe`) VALUES
(1, 'vic', 'vic', 'vic@la-providence.net', 'vic', 1, 'SN2'),
(29, 'videze', 'gt', 'hh', 'hh', 0, 'h'),
(56, 'gfgffdf', '', '', '', 0, ''),
(57, 'Jouen', 'Matthias', 'matthias.jouen23@gmail.com', 'matt', 1, 'SN2'),
(58, 'dd', 'brfg', 'eb', 'a', 0, 'bd'),
(59, 'azerty', 'treza', 'q@lapro', 'fd', 0, 'fd');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`IdCourse`);

--
-- Index pour la table `CourseActuelle`
--
ALTER TABLE `CourseActuelle`
  ADD PRIMARY KEY (`IdCourseActuelle`),
  ADD KEY `IdCourse` (`IdCourse`);

--
-- Index pour la table `Participant`
--
ALTER TABLE `Participant`
  ADD PRIMARY KEY (`IdUtilisateur`,`IdCourse`,`IdDossard`),
  ADD KEY `IdCourse` (`IdCourse`);

--
-- Index pour la table `ParticipantTempsTour`
--
ALTER TABLE `ParticipantTempsTour`
  ADD PRIMARY KEY (`IdParticipantTempsTour`),
  ADD KEY `IdParticipant` (`IdParticipant`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Course`
--
ALTER TABLE `Course`
  MODIFY `IdCourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `CourseActuelle`
--
ALTER TABLE `CourseActuelle`
  MODIFY `IdCourseActuelle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ParticipantTempsTour`
--
ALTER TABLE `ParticipantTempsTour`
  MODIFY `IdParticipantTempsTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CourseActuelle`
--
ALTER TABLE `CourseActuelle`
  ADD CONSTRAINT `CourseActuelle_ibfk_1` FOREIGN KEY (`IdCourse`) REFERENCES `Course` (`IdCourse`);

--
-- Contraintes pour la table `Participant`
--
ALTER TABLE `Participant`
  ADD CONSTRAINT `Participant_ibfk_1` FOREIGN KEY (`IdUtilisateur`) REFERENCES `Utilisateur` (`IdUtilisateur`),
  ADD CONSTRAINT `Participant_ibfk_2` FOREIGN KEY (`IdCourse`) REFERENCES `Course` (`IdCourse`);

--
-- Contraintes pour la table `ParticipantTempsTour`
--
ALTER TABLE `ParticipantTempsTour`
  ADD CONSTRAINT `ParticipantTempsTour_ibfk_1` FOREIGN KEY (`IdParticipant`) REFERENCES `Participant` (`IdUtilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
