SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `account` (`user_id`, `last_name`, `first_name`, `user_name`, `password`, `question`, `answer`) VALUES
(1, 'ANCELIN', 'Anthony', 'tony', '$2y$10$10UBzCSksoIj//U/K9lP/e1bqIfGLfwW2EkC8IqwVyBEsW93fDf/e', '', '');

CREATE TABLE `actor` (
  `actor_id` int(11) NOT NULL,
  `actor_name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `actor` (`actor_id`, `actor_name`, `description`, `logo`) VALUES
(1, 'Formation&co', 'Formation&co est une association française présente sur tout le territoire.\r\nNous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.\r\nNotre proposition : \r\n- un financement jusqu’à 30 000€ ;\r\n- un suivi personnalisé et gratuit ;\r\n- une lutte acharnée contre les freins sociétaux et les stéréotypes.\r\nLe financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.\r\nVous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.', 'formation_co.png'),
(2, 'Protectpeople', 'Protectpeople finance la solidarité nationale.\r\nNous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.\r\nChez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.\r\nProectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.\r\nNous garantissons un accès aux soins et une retraite.\r\nChaque année, nous collectons et répartissons 300 milliards d’euros.\r\nNotre mission est double :\r\n●	sociale : nous garantissons la fiabilité des données sociales ;\r\n●	économique : nous apportons une contribution aux activités économiques.\r\n', 'protectpeople.png'),
(3, 'DSA France', 'Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.\r\nNous accompagnons les entreprises dans les étapes clés de leur évolution.\r\nNotre philosophie : s’adapter à chaque entreprise.\r\nNous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises.', 'Dsa_france.png'),
(4, 'CDE', 'La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. \nSon président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.\n', 'CDE.png');

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `post` (`post_id`, `user_id`, `actor_id`, `date_add`, `post`) VALUES
(1, 1, 1, '2022-12-28 13:00:49', 'c\'est bien.'),
(2, 1, 4, '2022-12-28 13:00:49', 'C\'est super.'),
(3, 1, 1, '2022-12-28 19:18:32', 'bjr\r\n'),
(4, 1, 1, '2022-12-28 19:21:02', 'coucou les amis'),
(5, 1, 1, '2022-12-29 14:05:21', 'slt les amis'),
(6, 1, 1, '2023-01-03 18:47:22', 'Test'),
(7, 4, 1, '2023-01-04 17:18:58', 'C pas mal');

CREATE TABLE `vote` (
  `user_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `vote` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `vote` (`user_id`, `actor_id`, `vote`) VALUES
(1, 2, 0),
(2, 1, 1),
(4, 1, 1);


ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `actor`
  ADD PRIMARY KEY (`actor_id`);

ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `actor_id` (`actor_id`);

ALTER TABLE `vote`
  ADD PRIMARY KEY (`user_id`,`actor_id`),
  ADD KEY `actor_id` (`actor_id`);


ALTER TABLE `account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `actor`
  MODIFY `actor_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`);

ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`);
COMMIT;