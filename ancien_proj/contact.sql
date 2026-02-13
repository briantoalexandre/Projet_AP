
--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `naissance` date NOT NULL,
  `sujet` varchar(20) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `contact` (nom,prenom,mail,naissance,sujet) VALUES
('Delcourt','sonia','cdeltour@hotmail.com', '2020-09-11', 'hôtel'),
('Fime','hervé', 'ffime@orange.fr', '2020-05-22', 'réservations'),
('Ertau','jacques', 'frank.ertau@laposte.net', '2023-05-23', 'hôtel'),
('Maneur','yvan', 'manu@gmail.com', '2023-06-02', 'activités');
--
-- Index pour les tables déchargées
--

--