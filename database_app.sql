-- phpMyAdmin SQL Dump

-- version 4.9.5

-- https://www.phpmyadmin.net/

--

-- Host: localhost:8889

-- Generation Time: Jan 27, 2021 at 01:03 PM

-- Server version: 5.7.30

-- PHP Version: 7.4.9



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";



--

-- Database: `database_app`

--



-- --------------------------------------------------------



--

-- Table structure for table `capteur`

--



CREATE TABLE `capteur` (

  `id_capteur` int(11) NOT NULL,

  `Nom` int(11) NOT NULL,

  `id_carte` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------



--

-- Table structure for table `carte`

--



CREATE TABLE `carte` (

  `id_carte` int(11) NOT NULL,

  `id_centre` varchar(256) NOT NULL,

  `statut` int(11) NOT NULL,

  `nom_carte` varchar(256) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------



--

-- Table structure for table `carte_capteur`

--



CREATE TABLE `carte_capteur` (

  `id_carte_capteur` int(11) NOT NULL,

  `id_carte` int(11) NOT NULL,

  `id_capteur` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------



--

-- Table structure for table `centre`

--



CREATE TABLE `centre` (

  `id_centre` int(11) NOT NULL,

  `Ville` varchar(256) NOT NULL,

  `adresse` varchar(256) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `centre`

--



INSERT INTO `centre` (`id_centre`, `Ville`, `adresse`) VALUES

(1, 'Issy les Moulineaux', '10 Rue de Vanves, 92130 Issy-les-Moulineaux');



-- --------------------------------------------------------



--

-- Table structure for table `CGU`

--



CREATE TABLE `CGU` (

  `id_cgu` int(11) NOT NULL,

  `titre` varchar(10000) NOT NULL,

  `contenu` varchar(10000) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `CGU`

--



INSERT INTO `CGU` (`id_cgu`, `titre`, `contenu`) VALUES

(11, 'ARTICLES', 'Les présentes conditions générales d\'utilisation (dites « CGU ») ont pour objet l\'encadrement juridique des modalités de mise à disposition du site et des services par xxxxxxx et de définir les conditions d’accès et d’utilisation des services par « l\'Utilisateur ». Les présentes CGU sont accessibles sur le site à la rubrique «CGU». Toute inscription ou utilisation du site implique l\'acceptation sans aucune réserve ni restriction des présentes CGU par l’utilisateur. Lors de l\'inscription sur le site via le Formulaire d’inscription, chaque utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : « Je reconnais avoir lu et compris les CGU et je les accepte ». En cas de non-acceptation des CGU stipulées dans le présent contrat, l\'Utilisateur se doit de renoncer à l\'accès des services proposés par le site. xxxxxxx.com se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes CGU.'),

(12, 'ARTICLE 1 : Les mentions légales', 'L\'édition du site xxxxxxx.com est assurée par la Société xxxxxxx au capital de xxxxxxx euros, immatriculée au RCS de xxxxxxx sous le numéro xxxxxxx, dont le siège social est situé au xxxxxxx Numéro de téléphone xxxxxxx Adresse e-mail : xxxxxxx. Le Directeur de la publication est : xxxxxxx  L\'hébergeur du site xxxxxxx.com est la société xxxxxxx, dont le siège social est situé au xxxxxxx, avec le numéro de téléphone : xxxxxxx.'),

(13, 'ARTICLE 2 : Accès au site', 'Le site xxxxxxx.com permet à l\'Utilisateur un accès gratuit aux services suivants : Le site internet propose les services suivants : xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les frais supportés par l\'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.   L’Utilisateur non membre n\'a pas accès aux services réservés. Pour cela, il doit s’inscrire en remplissant le formulaire. En acceptant de s’inscrire aux services réservés, l’Utilisateur membre s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées, notamment son adresse email. Pour accéder aux services, l’Utilisateur doit ensuite s\'identifier à l\'aide de son identifiant et de son mot de passe qui lui seront communiqués après son inscription. Tout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se rendant à la page dédiée sur son espace personnel. Celle-ci sera effective dans un délai raisonnable. Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n\'engage pas la responsabilité de xxxxxxx.com. Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir rigueur à l’éditeur de toute interruption ou suspension de service, même sans préavis. L\'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de l’éditeur communiqué à l’ARTICLE 1.'),

(14, 'ARTICLE 3 : Collecte des données', 'Le site assure à l\'Utilisateur une collecte et un traitement d\'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro xxxxxxx.  En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l\'Utilisateur dispose d\'un droit d\'accès, de rectification, de suppression et d\'opposition de ses données personnelles. L\'Utilisateur exerce ce droit :  - via un formulaire de contact ;  - via son espace personnel ;'),

(15, 'ARTICLE 4 : Propriété intellectuelle', 'Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l\'objet d\'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d\'auteur.   La marque xxxxxxx est une marque déposée par _______________.Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de cette marque, de quelque nature que ce soit, est totalement prohibée.   L\'Utilisateur doit solliciter l\'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus. Il s\'engage à une utilisation des contenus du site dans un cadre strictement privé, toute utilisation à des fins commerciales et publicitaires est strictement interdite. Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2 et suivants du Code de la propriété intellectuelle. Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.'),

(16, 'ARTICLE 5 : Responsabilité', 'Les sources des informations diffusées sur le site xxxxxxx.com sont réputées fiables mais le site ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions. Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à jour régulières, le site xxxxxxx.com ne peut être tenu responsable de la modification des dispositions administratives et juridiques survenant après la publication. De même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans ce site.   L\'Utilisateur s\'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite. Il assume les risques liés à l\'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.   Le site xxxxxxx.com ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au téléchargement provenant de ce site. La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d\'un tiers.'),

(17, 'ARTICLE 5 : Responsabilité', 'Les sources des informations diffusées sur le site xxxxxxx.com sont réputées fiables mais le site ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions. Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à jour régulières, le site xxxxxxx.com ne peut être tenu responsable de la modification des dispositions administratives et juridiques survenant après la publication. De même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans ce site.   L\'Utilisateur s\'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite. Il assume les risques liés à l\'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.   Le site xxxxxxx.com ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au téléchargement provenant de ce site. La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d\'un tiers.'),

(18, 'ARTICLE 6 Liens hypertextes', 'Des liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces liens, il sortira du site xxxxxxx.com. Ce dernier n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.'),

(19, 'ARTICLE 7 : Cookies', 'L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel de navigation. Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de l’Utilisateur par votre navigateur et qui sont nécessaires à l’utilisation du site xxxxxxx.com. Les cookies ne contiennent pas d’information personnelle et ne peuvent pas être utilisés pour identifier quelqu’un. Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme. Certains cookies expirent à la fin de la visite de l’Utilisateur, d’autres restent. L’information contenue dans les cookies est utilisée pour améliorer le site xxxxxxx.com. En naviguant sur le site, L’Utilisateur les accepte.   L’Utilisateur doit toutefois donner son consentement quant à l’utilisation de certains cookies. A défaut d’acceptation, l’Utilisateur est informé que certaines fonctionnalités ou pages risquent de lui être refusées.   L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son logiciel de navigation.'),

(20, 'ARTICLE 8 : Publication par l’Utilisateur', 'Le site permet aux membres de publier les contenus suivants : xxxxxxx. Dans ses publications, le membre s’engage à respecter les règles de la Netiquette (règles de bonne conduite de l’internet) et les règles de droit en vigueur. Le site peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’en justifier auprès du membre. Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur le site, il cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la durée de la propriété intellectuelle. Le Membre cède notamment le droit d\'utiliser sa publication sur internet et sur les réseaux de téléphonie mobile. La société éditrice s\'engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication. Tout contenu mis en ligne par l\'Utilisateur est de sa seule responsabilité. L\'Utilisateur s\'engage à ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le site sera pris en charge par l\'Utilisateur. Le contenu de l\'Utilisateur peut être à tout moment et pour n\'importe quelle raison supprimé ou modifié par le site, sans préavis.'),

(21, 'ARTICLE 9 : Droit applicable et juridiction compétente', 'La législation française s\'applique au présent contrat. En cas d\'absence de résolution amiable d\'un litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître. Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux coordonnées inscrites à l’ARTICLE 1.'),

(22, 'ARTICLE 9 : Droit applicable et juridiction compétente', 'La législation française s\'applique au présent contrat. En cas d\'absence de résolution amiable d\'un litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître. Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux coordonnées inscrites à l’ARTICLE 1.');



-- --------------------------------------------------------



--

-- Table structure for table `contact`

--



CREATE TABLE `contact` (

  `IDcontact` int(11) NOT NULL,

  `nom` varchar(50) DEFAULT NULL,

  `prenom` varchar(50) DEFAULT NULL,

  `email` varchar(50) DEFAULT NULL,

  `telephone` int(11) DEFAULT NULL,

  `message` text

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `contact`

--



INSERT INTO `contact` (`IDcontact`, `nom`, `prenom`, `email`, `telephone`, `message`) VALUES

(1, 'ok', 'ok', 'paul.malagoli57@orange.fr', 663713529, 'ok'),

(2, 'ok', 'ok', 'paul.malagoli57@orange.fr', 663713529, 'ok');



-- --------------------------------------------------------



--

-- Table structure for table `FAQ`

--



CREATE TABLE `FAQ` (

  `idQR` int(11) NOT NULL,

  `Question` text,

  `Reponse` text

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `FAQ`

--



INSERT INTO `FAQ` (`idQR`, `Question`, `Reponse`) VALUES

(1, ' Comment se connecter à votre compte ? ', ' Pour vous connecter à votre compte, accédez à la page d\'accueil et cliquez sur "Connexion". Si vous vous êtes déjà connecté à votre compte sur votre ordinateur, vous pouvez directement choisir le compte mémorisé sur la page et saisir votre mot de passe. '),

(2, ' Que faire en cas de problème non évoqué dans la faq ? ', ' En cas de problème non évoqué dans la faq, vous pouvez envoyer un message aux administrateurs grâce au formulaire de contact. '),

(3, ' Que faire en cas d\'oubli de votre mot de passe ? ', 'En cas d’oubli de mot de passe, veuillez contacter un administrateur via le formulaire de contact ou directement par mail via la page à propos disponible dans le pied de page. ');



-- --------------------------------------------------------



--

-- Table structure for table `gestionnaire_centre`

--



CREATE TABLE `gestionnaire_centre` (

  `id_gestionnaire_centre` int(11) NOT NULL,

  `id_RH` int(11) NOT NULL,

  `id_centre` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `gestionnaire_centre`

--



INSERT INTO `gestionnaire_centre` (`id_gestionnaire_centre`, `id_RH`, `id_centre`) VALUES

(1, 156, 1);



-- --------------------------------------------------------



--

-- Table structure for table `test`

--



CREATE TABLE `test` (

  `id_test` int(11) NOT NULL,

  `Date_test` date DEFAULT NULL,

  `heure_test` time DEFAULT NULL,

  `id_User` int(11) DEFAULT NULL,

  `statut` int(11) DEFAULT NULL,

  `id_carte` int(11) DEFAULT NULL,

  `id_RH` int(11) DEFAULT NULL,

  `Nom` varchar(256) DEFAULT NULL,

  `id_centre` int(11) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `test`

--



INSERT INTO `test` (`id_test`, `Date_test`, `heure_test`, `id_User`, `statut`, `id_carte`, `id_RH`, `Nom`, `id_centre`) VALUES

(2, '2021-01-12', '15:19:21', 159, 0, NULL, 156, 'TEST 2', 1),

(3, '2021-01-12', '15:19:21', 159, NULL, NULL, 156, 'TEST3', 1),

(4, '2021-01-27', '07:09:00', 159, NULL, NULL, NULL, 'TEST 2', NULL),

(5, '2021-01-28', '19:47:00', 159, NULL, NULL, NULL, 'TEST 2', NULL),

(6, '2021-01-29', '18:46:00', 159, NULL, NULL, NULL, 'TEST 2', NULL),

(7, '2021-01-22', '21:36:00', 159, NULL, NULL, NULL, 'TEST 2', NULL),

(8, '2021-01-28', '20:35:00', 159, NULL, NULL, NULL, 'TEST 1', NULL),

(9, '2021-02-03', '19:35:00', 159, NULL, NULL, NULL, 'TEST 1', NULL),

(10, '2021-01-27', '20:37:00', 159, NULL, NULL, NULL, 'TEST 1', NULL),

(11, '2021-02-03', '19:39:00', 159, NULL, NULL, NULL, 'TEST 1', NULL),

(12, '2021-01-24', '21:33:00', 159, NULL, NULL, 156, 'TEST 2', NULL);



-- --------------------------------------------------------



--

-- Table structure for table `User`

--



CREATE TABLE `User` (

  `id_User` int(11) NOT NULL,

  `id_centre` int(11) DEFAULT NULL,

  `Nom` char(255) DEFAULT NULL,

  `Prenom` char(255) DEFAULT NULL,

  `Sexe` varchar(256) DEFAULT NULL,

  `Date_de_naissance` date DEFAULT NULL,

  `Mail` char(255) DEFAULT NULL,

  `password` char(255) DEFAULT NULL,

  `Type` int(11) DEFAULT '1',

  `id_RH` int(11) DEFAULT NULL,

  `Tel` int(11) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `User`

--



INSERT INTO `User` (`id_User`, `id_centre`, `Nom`, `Prenom`, `Sexe`, `Date_de_naissance`, `Mail`, `password`, `Type`, `id_RH`, `Tel`) VALUES

(156, NULL, 'gestionnaire', 'gestionnaire', 'Femme', NULL, 'gestionnaire', '$2y$10$VRyc6n1JlxTnRQIuD9NAwuwKgVMKJJ.8TyBbReUwNRdARC8waYNkG', 2, 156, NULL),

(158, NULL, 'admin', 'admin', 'Homme', '2021-01-13', 'Admin', '$2y$10$PYh/125D6FUC3CBigAFCfujlEYSO9MzGyI48.XVsttrdLJpBs6KAe', 3, 0, 663713529),

(159, NULL, 'utilisateur', 'utilisateur', 'Homme', '2021-01-21', 'utilisateur', '$2y$10$0RonQT0PE3E301GxiQ68ZehRgOPUff9WJuOb1GCLz4UBEEsBdNe5G', 1, 156, NULL);

-- --------------------------------------------------------



--

-- Table structure for table `valeur_test`

--



CREATE TABLE `valeur_test` (

  `id_valeur_test` int(11) NOT NULL,

  `id_test` int(11) NOT NULL,

  `trame` int(11) NOT NULL,

  `id_capteur` int(11) NOT NULL,

  `Heure` time NOT NULL,

  `id_User` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- Dumping data for table `valeur_test`

--



INSERT INTO `valeur_test` (`id_valeur_test`, `id_test`, `trame`, `id_capteur`, `Heure`, `id_User`) VALUES

(1, 1, 59, 1, '00:00:00', 159),

(2, 1, 45, 1, '00:00:03', 159),

(3, 1, 75, 1, '00:00:07', 159),

(4, 2, 33, 1, '12:08:07', 159),

(5, 2, 136, 1, '14:08:58', 159),

(6, 2, 78, 1, '12:14:34', 159);



--

-- Indexes for dumped tables

--



--

-- Indexes for table `capteur`

--

ALTER TABLE `capteur`

  ADD PRIMARY KEY (`id_capteur`),

  ADD KEY `id_carte` (`id_carte`);



--

-- Indexes for table `carte`

--

ALTER TABLE `carte`

  ADD PRIMARY KEY (`id_carte`),

  ADD KEY `centre` (`id_centre`);



--

-- Indexes for table `carte_capteur`

--

ALTER TABLE `carte_capteur`

  ADD PRIMARY KEY (`id_carte_capteur`),

  ADD KEY `id_carte` (`id_carte`),

  ADD KEY `id_capteur` (`id_capteur`);



--

-- Indexes for table `centre`

--

ALTER TABLE `centre`

  ADD PRIMARY KEY (`id_centre`);



--

-- Indexes for table `CGU`

--

ALTER TABLE `CGU`

  ADD PRIMARY KEY (`id_cgu`);



--

-- Indexes for table `contact`

--

ALTER TABLE `contact`

  ADD PRIMARY KEY (`IDcontact`);



--

-- Indexes for table `FAQ`

--

ALTER TABLE `FAQ`

  ADD PRIMARY KEY (`idQR`);



--

-- Indexes for table `gestionnaire_centre`

--

ALTER TABLE `gestionnaire_centre`

  ADD KEY `id_User` (`id_RH`,`id_centre`),

  ADD KEY `id_centre` (`id_centre`);



--

-- Indexes for table `test`

--

ALTER TABLE `test`

  ADD PRIMARY KEY (`id_test`),

  ADD KEY `id_User` (`id_User`),

  ADD KEY `id_User_2` (`id_User`),

  ADD KEY `id_carte` (`id_carte`),

  ADD KEY `id_Gestionnaire` (`id_RH`),

  ADD KEY `id_Gestionnaire_2` (`id_RH`),

  ADD KEY `id_centre` (`id_centre`),

  ADD KEY `id_centre_2` (`id_centre`);



--

-- Indexes for table `User`

--

ALTER TABLE `User`

  ADD PRIMARY KEY (`id_User`),

  ADD KEY `id_RH` (`id_RH`),

  ADD KEY `id_RH_2` (`id_RH`),

  ADD KEY `user_ibfk_1` (`id_centre`);



--

-- Indexes for table `valeur_test`

--

ALTER TABLE `valeur_test`

  ADD PRIMARY KEY (`id_valeur_test`),

  ADD KEY `id_capteur` (`id_capteur`),

  ADD KEY `id_User` (`id_User`),

  ADD KEY `id_User_2` (`id_User`);



--

-- AUTO_INCREMENT for dumped tables

--



--

-- AUTO_INCREMENT for table `capteur`

--

ALTER TABLE `capteur`

  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT;



--

-- AUTO_INCREMENT for table `carte`

--

ALTER TABLE `carte`

  MODIFY `id_carte` int(11) NOT NULL AUTO_INCREMENT;



--

-- AUTO_INCREMENT for table `carte_capteur`

--

ALTER TABLE `carte_capteur`

  MODIFY `id_carte_capteur` int(11) NOT NULL AUTO_INCREMENT;



--

-- AUTO_INCREMENT for table `centre`

--

ALTER TABLE `centre`

  MODIFY `id_centre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



--

-- AUTO_INCREMENT for table `CGU`

--

ALTER TABLE `CGU`

  MODIFY `id_cgu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;



--

-- AUTO_INCREMENT for table `contact`

--

ALTER TABLE `contact`

  MODIFY `IDcontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



--

-- AUTO_INCREMENT for table `FAQ`

--

ALTER TABLE `FAQ`

  MODIFY `idQR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;



--

-- AUTO_INCREMENT for table `test`

--

ALTER TABLE `test`

  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;



--

-- AUTO_INCREMENT for table `User`

--

ALTER TABLE `User`

  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;



--

-- AUTO_INCREMENT for table `valeur_test`

--

ALTER TABLE `valeur_test`

  MODIFY `id_valeur_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;



--

-- Constraints for dumped tables

--



--

-- Constraints for table `capteur`

--

ALTER TABLE `capteur`

  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_carte`) REFERENCES `carte` (`id_carte`) ON DELETE CASCADE ON UPDATE CASCADE;



--

-- Constraints for table `carte_capteur`

--

ALTER TABLE `carte_capteur`

  ADD CONSTRAINT `carte_capteur_ibfk_1` FOREIGN KEY (`id_carte`) REFERENCES `carte` (`id_carte`) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT `carte_capteur_ibfk_2` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`) ON DELETE CASCADE ON UPDATE CASCADE;



--

-- Constraints for table `gestionnaire_centre`

--

ALTER TABLE `gestionnaire_centre`

  ADD CONSTRAINT `gestionnaire_centre_ibfk_1` FOREIGN KEY (`id_RH`) REFERENCES `test` (`id_RH`) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT `gestionnaire_centre_ibfk_2` FOREIGN KEY (`id_centre`) REFERENCES `centre` (`id_centre`) ON DELETE CASCADE ON UPDATE CASCADE;



--

-- Constraints for table `test`

--

ALTER TABLE `test`

  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `User` (`id_User`) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`id_carte`) REFERENCES `carte` (`id_carte`) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT `test_ibfk_3` FOREIGN KEY (`id_RH`) REFERENCES `test` (`id_RH`) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT `test_ibfk_4` FOREIGN KEY (`id_centre`) REFERENCES `centre` (`id_centre`) ON DELETE CASCADE ON UPDATE CASCADE;



--

-- Constraints for table `User`

--

ALTER TABLE `User`

  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_centre`) REFERENCES `centre` (`id_centre`) ON DELETE CASCADE ON UPDATE CASCADE;
