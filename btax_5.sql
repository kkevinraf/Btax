-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 27 Avril 2022 à 23:36
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `btax_5`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cooperative_id` int(11) NOT NULL,
  `Avis` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Note` int(11) NOT NULL,
  `Statut` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2FA304CE8D0C5D40` (`cooperative_id`),
  KEY `IDX_2FA304CEFB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `avis`
--

INSERT INTO `avis` (`id`, `cooperative_id`, `Avis`, `Note`, `Statut`, `utilisateur_id`) VALUES
(1, 1, 'L''une des principales fonctions de la couche Modèle dans une application MVC, c''est la récupération des données. Récupérer\r\ndes données n''est pas toujours évident, surtout lorsqu''on veut récupérer seulement certaines données, les classer selon des\r\ncritères, etc. Tout cela se fait grâce aux repositories, que nous étudions dans ce chapitre. Bonne lecture !', 5, 1, 12),
(2, 1, 'Kevin test annonce (update 3)', 3, 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `cooperative`
--

CREATE TABLE IF NOT EXISTS `cooperative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date_inscription` date NOT NULL,
  `Logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F79B53AC5CB2E05D` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `cooperative`
--

INSERT INTO `cooperative` (`id`, `login_id`, `Nom`, `Adresse`, `Contact`, `Mail`, `Date_inscription`, `Logo`) VALUES
(1, 2, 'COTISSE', 'COTISSE', '034 10 394 54', 'cotisse@gmail.com', '2022-03-09', 'COTISSE_3273ef9aa6aeb9995b02b38501e5769c2baceeae.png');

-- --------------------------------------------------------

--
-- Structure de la table `itineraire`
--

CREATE TABLE IF NOT EXISTS `itineraire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depart_id` int(11) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_72199C1AE02FE4B` (`depart_id`),
  KEY `IDX_72199C1816C6140` (`destination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `itineraire`
--

INSERT INTO `itineraire` (`id`, `depart_id`, `destination_id`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `itinerairecoop`
--

CREATE TABLE IF NOT EXISTS `itinerairecoop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cooperative_id` int(11) NOT NULL,
  `place_id` int(11) DEFAULT NULL,
  `itineraire_id` int(11) DEFAULT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_77C628DA8D0C5D40` (`cooperative_id`),
  KEY `IDX_77C628DADA6A219` (`place_id`),
  KEY `IDX_77C628DAA9B853B8` (`itineraire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `itinerairecoop`
--

INSERT INTO `itinerairecoop` (`id`, `cooperative_id`, `place_id`, `itineraire_id`, `prix`) VALUES
(1, 1, 1, 1, 50000);

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE IF NOT EXISTS `localisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Localisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `localisation`
--

INSERT INTO `localisation` (`id`, `Localisation`, `Photo`) VALUES
(1, 'Toamasina', 'Toamasina_203688c47d02ef8e376e22e8726490e56fc93389.jpeg'),
(2, 'Antananarivo', 'Antananarivo_6bec9d22dab977c93e2937faa8be97efbf089de9.jpeg'),
(3, 'Antsirabe', 'Antsirabe_3249bccbdf9b3491d4185fb960423bbee00fd707.jpeg'),
(4, 'Diego', 'Diego_581f54ec77359880e85f730b24990dcc73dfa210.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `luser`
--

CREATE TABLE IF NOT EXISTS `luser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_36376404A76ED395` (`user_id`),
  KEY `IDX_363764047E3C61F9` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `luser`
--


-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `cooperative_id` int(11) DEFAULT NULL,
  `place_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `statut` int(11) NOT NULL,
  `nbrResult` int(11) NOT NULL,
  `nbrPlace` int(11) NOT NULL,
  `horaire` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A765AD32FB88E14F` (`utilisateur_id`),
  KEY `IDX_A765AD32816C6140` (`destination_id`),
  KEY `IDX_A765AD32AE02FE4B` (`depart_id`),
  KEY `IDX_A765AD328D0C5D40` (`cooperative_id`),
  KEY `IDX_A765AD32DA6A219` (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `notification`
--

INSERT INTO `notification` (`id`, `utilisateur_id`, `destination_id`, `depart_id`, `cooperative_id`, `place_id`, `date`, `statut`, `nbrResult`, `nbrPlace`, `horaire`) VALUES
(1, 13, 2, 1, NULL, NULL, '2022-04-12', 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cooperative_id` int(11) NOT NULL,
  `Type_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Couleur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B5DC7CC98D0C5D40` (`cooperative_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `place`
--

INSERT INTO `place` (`id`, `cooperative_id`, `Type_place`, `Couleur`) VALUES
(1, 1, 'VIP', '#333'),
(2, 1, 'PREMIUM', '#444');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trajet_id` int(11) NOT NULL,
  `Date_heure` datetime NOT NULL,
  `Montant` double NOT NULL,
  `Transaction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Num_place` int(11) NOT NULL,
  `Statut` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C454C682D12A823` (`trajet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `trajet_id`, `Date_heure`, `Montant`, `Transaction`, `Nom`, `Num_place`, `Statut`) VALUES
(1, 1, '2022-04-11 18:54:05', 50000, '11_4450D51A9F_127', 'place 11', 11, 1),
(2, 1, '2022-04-27 23:24:29', 50000, '6_4744C4F353_113', 'Kevin place 3', 6, 1),
(3, 1, '2022-04-27 23:24:29', 50000, '7_1B52401C7C_113', 'Kevin place 4', 7, 1),
(4, 1, '2022-04-27 23:24:29', 50000, '1_CC70F346B2_113', 'Kevin place 1', 1, 1),
(5, 1, '2022-04-27 23:24:30', 50000, '8_9E28DC4F71_113', 'Kevin place 5', 8, 1),
(6, 1, '2022-04-27 23:24:30', 50000, '2_BC14652A8B_113', 'Kevin place 2', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservationuser`
--

CREATE TABLE IF NOT EXISTS `reservationuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BD0D73CCB83297E7` (`reservation_id`),
  KEY `IDX_BD0D73CC1E969C5` (`utilisateurs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `reservationuser`
--

INSERT INTO `reservationuser` (`id`, `reservation_id`, `utilisateurs_id`) VALUES
(1, 1, 13),
(2, 2, 15),
(3, 3, 15),
(4, 4, 15),
(5, 5, 15),
(6, 6, 15);

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE IF NOT EXISTS `trajet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cooperative_id` int(11) NOT NULL,
  `voiture_id` int(11) NOT NULL,
  `itinerairecoop_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `placeRestante` int(11) NOT NULL,
  `places` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `Heure` time NOT NULL,
  `Statut` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2CF7ACBA8D0C5D40` (`cooperative_id`),
  KEY `IDX_2CF7ACBA181A8BA` (`voiture_id`),
  KEY `IDX_2CF7ACBA281BB7E8` (`itinerairecoop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`id`, `cooperative_id`, `voiture_id`, `itinerairecoop_id`, `Date`, `placeRestante`, `places`, `Heure`, `Statut`) VALUES
(1, 1, 1, 1, '2022-04-12', 9, 'a:5:{i:0;a:4:{i:0;i:0;i:1;i:0;i:2;i:2;i:3;i:2;}i:1;a:4:{i:0;i:1;i:1;i:1;i:2;i:0;i:3;i:1;}i:2;a:4:{i:0;i:2;i:1;i:2;i:2;i:0;i:3;i:2;}i:3;a:4:{i:0;i:1;i:1;i:1;i:2;i:0;i:3;i:2;}i:4;a:4:{i:0;i:1;i:1;i:1;i:2;i:1;i:3;i:1;}}', '13:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497B315E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_497B315EA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Kevin Admin', 'kevin admin', 'kevinadmin@btax.mg', 'kevinadmin@btax.mg', 1, 'h5cak92auqog84gw4gscgs0o4soggo0', 'iTGN0uZCIrlMvMThsVTFmRTxqXM6TU3N9btdjw4F6jizMwrHnLTCRnHVAAknAcoa6NQ2kmKz2Qp2HmYGEib59w==', '2022-04-27 21:01:28', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ADMIN_BTAX";}', 0, NULL),
(2, 'COTISSE', 'cotisse', 'cotisse@gmail.com', 'cotisse@gmail.com', 1, 'gcf1pvuuwjs440g8sook04wckcs048c', '/RNmmnG92Dv5L1LFwHFemjvWheQ4X1FgjGF+AhzJMSn7qPik7TgICQVwwNbVs2wBePXzTbINCP2Zvyt2KP+cvQ==', '2022-04-27 23:25:25', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ADMIN_COOP";}', 0, NULL),
(9, 'kevincotisse22', 'kevincotisse22', 'kevincotisse22@gmail.com', 'kevincotisse22@gmail.com', 1, 'ca9haztyv8gko84ow4sk808wowsgokg', 'bo8nNkrGEmQn3WkC5lLWF2Kzo/pDp0nvolbiWTj3YpPIxZPB9tJ9SifxY5Ua3SnwcpIvIAvsCqPcOQBchnTLrQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_USER_COOP";}', 0, NULL),
(10, 'kevincotisse3', 'kevincotisse3', 'kevincotisse3@gmail.com', 'kevincotisse3@gmail.com', 1, 'jluhkgk62xskw4wg8wkkscgg4o4w0og', 'LjphuRu70R36SFp1zTQOVYyZ1JqM7QDBNB6P5HgBZehm08DB+aaXm33lyh3ZxK0r8ed8N8l/tWXkpl1sJvwULA==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_USER_COOP";}', 0, NULL),
(12, 'kevin 1', 'kevin 1', 'kkevinrafalimanantsu@gmail.com', 'kkevinrafalimanantsu@gmail.com', 1, 'edorexg6dtkwcc8gwocsgkcsk08oco', 'iq97vRWXQJcEOfk59ncC+sALos0/3rK6sS5jsKsEVMKHSXbufTb5kuNgQVMXufDR8MUPA+L+DeH/07tFHsdxUw==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(13, 'Kevin utilisateur 1', 'kevin utilisateur 1', 'Kevinutilisateur1@gmail.com', 'kevinutilisateur1@gmail.com', 1, '4ro03hdeojcw488ooo8sowcc0044ck0', 'I97PnL5Ion1Hv17x43q90JsOqsgY///oUCetbQWvdNBOuKWCyHB0UiTDtMPaOuOZFfkiVh8O7Sh0xKUdlGCh6w==', '2022-04-11 19:49:49', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(14, 'Kevin3', 'kevin3', 'Kevin3@gmail.com', 'kevin3@gmail.com', 1, 'gzhgc5w04f4gc4occwckcsgkgco4kkw', 'GDDu8ocrkB6ine7J9Vmeo9vZdC+wCYFLq1UNQSTiwMRrZZ9mzDfmM41chIM2OH4JahhNAYUN2MqVzdLYOhP88g==', '2022-04-25 21:46:03', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(15, 'kevin4', 'kevin4', 'kevin4@gmail.com', 'kevin4@gmail.com', 1, '52311aamnu88oog888cww4wcskkwgk8', '7cyaQIKetViFuP0oEmUcVJD/W+56evhxQ6NKhXCG6Xwnp3Gk+Lt6J7+H81IXeELFEoYYyPwkxgD2MGx/Rt4TVw==', '2022-04-27 23:23:14', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ADMIN_COOP";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cooperative_id` int(11) NOT NULL,
  `Immatriculation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_proprietaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NIF` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbrPlace` int(11) NOT NULL,
  `Place` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  KEY `IDX_265FB8938D0C5D40` (`cooperative_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`id`, `cooperative_id`, `Immatriculation`, `Nom_proprietaire`, `NIF`, `nbrPlace`, `Place`) VALUES
(1, 1, '5656 TBM', 'Kevin RAFALIMANANA', '5656 TBM NIF', 15, 'a:5:{i:0;a:4:{i:0;i:0;i:1;i:0;i:2;i:1;i:3;i:1;}i:1;a:4:{i:0;i:1;i:1;i:1;i:2;i:0;i:3;i:1;}i:2;a:4:{i:0;i:1;i:1;i:1;i:2;i:0;i:3;i:1;}i:3;a:4:{i:0;i:1;i:1;i:1;i:2;i:0;i:3;i:1;}i:4;a:4:{i:0;i:1;i:1;i:1;i:2;i:1;i:3;i:1;}}');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_2FA304CE8D0C5D40` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperative` (`id`),
  ADD CONSTRAINT `FK_2FA304CEFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `cooperative`
--
ALTER TABLE `cooperative`
  ADD CONSTRAINT `FK_F79B53AC5CB2E05D` FOREIGN KEY (`login_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `itineraire`
--
ALTER TABLE `itineraire`
  ADD CONSTRAINT `FK_72199C1816C6140` FOREIGN KEY (`destination_id`) REFERENCES `localisation` (`id`),
  ADD CONSTRAINT `FK_72199C1AE02FE4B` FOREIGN KEY (`depart_id`) REFERENCES `localisation` (`id`);

--
-- Contraintes pour la table `itinerairecoop`
--
ALTER TABLE `itinerairecoop`
  ADD CONSTRAINT `FK_77C628DA8D0C5D40` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperative` (`id`),
  ADD CONSTRAINT `FK_77C628DAA9B853B8` FOREIGN KEY (`itineraire_id`) REFERENCES `itineraire` (`id`),
  ADD CONSTRAINT `FK_77C628DADA6A219` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`);

--
-- Contraintes pour la table `luser`
--
ALTER TABLE `luser`
  ADD CONSTRAINT `FK_363764047E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `cooperative` (`id`),
  ADD CONSTRAINT `FK_36376404A76ED395` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FK_A765AD32816C6140` FOREIGN KEY (`destination_id`) REFERENCES `localisation` (`id`),
  ADD CONSTRAINT `FK_A765AD328D0C5D40` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperative` (`id`),
  ADD CONSTRAINT `FK_A765AD32AE02FE4B` FOREIGN KEY (`depart_id`) REFERENCES `localisation` (`id`),
  ADD CONSTRAINT `FK_A765AD32DA6A219` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`),
  ADD CONSTRAINT `FK_A765AD32FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `FK_B5DC7CC98D0C5D40` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperative` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_C454C682D12A823` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`id`);

--
-- Contraintes pour la table `reservationuser`
--
ALTER TABLE `reservationuser`
  ADD CONSTRAINT `FK_BD0D73CC1E969C5` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `FK_BD0D73CCB83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`);

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `FK_2CF7ACBA181A8BA` FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`id`),
  ADD CONSTRAINT `FK_2CF7ACBA281BB7E8` FOREIGN KEY (`itinerairecoop_id`) REFERENCES `itinerairecoop` (`id`),
  ADD CONSTRAINT `FK_2CF7ACBA8D0C5D40` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperative` (`id`);

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `FK_265FB8938D0C5D40` FOREIGN KEY (`cooperative_id`) REFERENCES `cooperative` (`id`);
