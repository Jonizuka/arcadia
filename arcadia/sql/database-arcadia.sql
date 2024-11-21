-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.39 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage des données de la table arcadia.animals : ~10 rows (environ)
/*!40000 ALTER TABLE `animals` DISABLE KEYS */;
INSERT INTO `animals` (`id_animal`, `name`, `race`, `food`, `food_quantity`, `details`, `habitat`, `id_habitat`, `img`) VALUES
	(1, 'Leo', 'Lion', 'Viande', '5kg', 'aucun', 'Savane', 1, 'lion2.jpg'),
	(2, 'Zizou', 'Zèbre', 'Herbe', '2kg', 'aucun', 'Savane', 1, 'zebre.jpg'),
	(3, 'Zazie', 'Antilope', 'Herbe', '1kg', 'aucun', 'Savane', 1, 'antilope.jpg'),
	(4, 'Bruno', 'Hippopotame', 'Herbe', '10kg', 'aucun', 'Marais', 3, 'hippopotame.jpg'),
	(5, 'Gaston', 'Crocodile', 'Viande', '4kg', 'aucun', 'Marais', 3, 'crocodile.jpg'),
	(6, 'Giselle', 'Flamand rose', 'Graines', '800g', 'aucun', 'Marais', 3, 'flamand-rose.jpg'),
	(7, 'Baggie', 'Tigre', 'Viande', '4kg', 'aucun', 'Jungle', 2, 'tigre.jpg'),
	(8, 'Logan', 'Gorille', 'Feuilles', '2kg', 'aucun', 'Jungle', 2, 'gorille.jpg'),
	(9, 'Nala', 'Panthère', 'Viande', '3kg', 'aucun', 'Jungle', 2, 'panthere.jpg'),
	(12, 'Boulbie', 'Panda', 'Herbe', '3.5kg', 'aucun', 'Jungle', 2, 'panda.jpg');
/*!40000 ALTER TABLE `animals` ENABLE KEYS */;

-- Listage des données de la table arcadia.habitats : ~3 rows (environ)
/*!40000 ALTER TABLE `habitats` DISABLE KEYS */;
INSERT INTO `habitats` (`id_habitat`, `name`, `description`, `img`, `veterinarian_comment`) VALUES
	(1, 'Savane', 'La savane est une formation végétale propre aux régions chaudes à longue saison sèche et dominée par les plantes herbacées de la famille des Poacées (Graminées). Elle est plus ou moins parsemée d\'arbres ou d\'arbustes.', 'savane.jpg', 'Aurait besoin de moins d\'entretien'),
	(2, 'Jungle', 'L\'importance écologique de ce milieu réside surtout dans le fait qu\'il abrite une grande quantité d\'espèces d\'animaux et de végétaux, constituant le plus important réservoir de biodiversité à l\'échelle mondiale. ', 'jungle.jpg', 'A besoin d\'être davantage arrosée'),
	(3, 'Marais', 'La végétation des marais est constituée d\'espèces adaptées au milieu humide. Sa composition varie selon la hauteur de l\'eau, l\'importance des périodes d\'assèchement, et le taux de salinité. Les espèces dominantes sont les poacées (roseaux), typhacées (massettes), les joncacées (joncs), cypéracées (carex), et autres plantes herbacées et aquatiques, et des plantes ligneuses basses.', 'marais.jpg', 'Cohabitation compliquée entre Bruno l\'hippopotame et Giselle la flamand rose. Penser à les séparer.');
/*!40000 ALTER TABLE `habitats` ENABLE KEYS */;

-- Listage des données de la table arcadia.reviews : ~4 rows (environ)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id_review`, `pseudo`, `message`, `validation`) VALUES
	(1, 'Marine', 'Nous avons passé une formidable journée en compagnie des animaux du zoo Arcadia. Cela se voir à leur attitude, ils ont l\'air d\'être heureux et choyés. Bravo à toutes les équipes du zoo.', 1),
	(2, 'Youssouf', 'J\'ai été bluffé par les différents habitats que le zoo Arcadia a réussi à restituer quasi à l\'identique. Mention spéciale pour la savane, où le roi de la jungle avait l\'air serein et heureux. Je reviendrai pour m\'attarder un peu plus dans la jungle cette fois !', 1),
	(3, 'Jean-Luc', 'Première visite dans ce zoo, et je dois dire que j\'ai été agréablement surpris par la propreté des lieux mais surtout par les nombreux services qui rendent notre visite très agréable. Notre guide a été hyper sympa et mention spéciale à la restauration qui est de qualité, plutôt rare dans un zoo...', 1),
	(90, 'test', 'test', 0);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Listage des données de la table arcadia.services : ~3 rows (environ)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id_service`, `name`, `description`, `horaires`, `tarifs`) VALUES
	(1, 'Restauration', 'Le zoo Arcadia dispose d\'un espace de restauration offrant un large choix de plats salés et sucrés. Au coeur du parc, venez goûter aux mets de nos chefs renommésUne cuisine riche, authentique avec des produits frais, locaux et de saison. Promis, il y en a pour tous les goûts !', 'Horaires : ouvert tous les jours de 10h à 20h', 'Tarifs : menus entre 11 et 24 €'),
	(2, 'Visite guidée', 'Le zoo Arcadia propose des visites guidées et gratuites avec de véritables experts du monde animalier e de la nature. Ils vous expliqueront les différentes habitudes des animaux, leurs origines, mais également les spécificités des différents habitats qui composent le zoo.', 'Horaires : de 10h à 16h', 'Tarifs : gratuit'),
	(3, 'Petit train', 'Le parc Arcadia dispose également d\'un petit train qui vous permettra de faire le tour du zoo sans se fatiguer. Idéal pour admirer les animaux en famille. Le petit Train offre des points de vue que vous ne trouverez nulle part ailleurs.', 'Horaires : de 10h à 18h', 'Tarifs : gratuit');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Listage des données de la table arcadia.users : ~3 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `username`, `password`, `role`) VALUES
	(1, 'admin@arcadia.fr', '372eeffaba2b5b61fb02513ecb84f1ff', 'administrateur'),
	(2, 'employe@arcadia.fr', '2e893ba55c4bedcc010a45a7e6c7af67', 'employe'),
	(3, 'veterinaire@arcadia.fr', '30860f9bb39004ad2beb6275471beff5', 'veterinaire');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage des données de la table arcadia.veterinary_report : ~1 rows (environ)
/*!40000 ALTER TABLE `veterinary_report` DISABLE KEYS */;
INSERT INTO `veterinary_report` (`id_report`, `id_animal`, `etat`, `report`, `food_recommendation`, `date`) VALUES
	(1, 1, 'Fatigué', 'Leo montre des signes de fatigue', 'Un peu plus de viande rouge.', '2024-11-12');
/*!40000 ALTER TABLE `veterinary_report` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
