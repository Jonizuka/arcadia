-- Table des users
INSERT INTO
    arcadia.users (username, password, role)
VALUES (
        'admin@arcadia.fr',
        md5('administrateur'),
        'administrateur'
    ),
    (
        'employe@arcadia.fr',
        md5('employe'),
        'employe'
    ),
    (
        'veterinaire@arcadia.fr',
        md5('veterinaire'),
        'veterinaire'
    );

-- Table des habitats
INSERT INTO
    arcadia.habitats (
        name,
        description,
        veterinarian_comment,
        img
    )
VALUES (
        'Jungle',
        'L\'importance écologique de ce milieu réside surtout dans le fait qu\'il abrite une grande quantité d\'espèces
         d\'animaux et de végétaux, constituant le plus important réservoir de biodiversité à l\'échelle mondiale.',
        'A besoin d\'être davantage arrosée',
        'jungle.jpg'
    ),
    (


        'Savane',
        'La savane est une formation végétale caractéristique du climat tropical à deux saisons. Il s\'agit aussi
         de l\'un des grands biomes terrestres.',
        'Aurait besoin de moins d\'entretien',
        'savane.jpg'
    ),


(
    'Marais',
    'La végétation des marais est constituée d\'espèces adaptées au milieu humide. Sa composition varie selon la 
            hauteur de l\'eau, l\'importance des périodes d\'assèchement, et le taux de salinité.',
    'Cohabitation compliquée entre les Bruno l\'hippopotame et Giselle la flamand rose. Penser à les séparer.',
    'marais.jpg'
);

-- Table des animaux
INSERT INTO
    arcadia.animals (
        name,
        race,
        food,
        food_quantity,
        details,
        habitat,
        id_habitat,
        img
    )
VALUES (
        'Leo',
        'Lion',
        'Viande',
        '5kg',
        'aucun',
        'Savane',
        1,
        'lion.jpg'
    ),
    (
        'Zizou',
        'Zèbre',
        'Herbe',
        '2kg',
        'aucun',
        'Savane',
        1,
        'zebre.jpg'
    ),
    (
        'Zazie',
        'Antilope',
        'Herbe',
        '1kg',
        'aucun',
        'Savane',
        1,
        'antilope.jpg'
    ),
    (
        'Bruno',
        'Hippopotame',
        'Herbe',
        '10kg',
        'aucun',
        'Marais',
        3,
        'hippopotame.jpg'
    ),
    (
        'Gaston',
        'Crocodile',
        'Viande',
        '4kg',
        'aucun',
        'Marais',
        3,
        'crocodile.jpg'
    ),
    (
        'Giselle',
        'Flamand rose',
        'Graines',
        '800g',
        'aucun',
        'Marais',
        3,
        'flamand-rose.jpg'
    ),
    (
        'Baggie',
        'Tigre',
        'Viande',
        '4kg',
        'aucun',
        'Jungle',
        2,
        'tigre.jpg'
    ),
    (
        'Logan',
        'Gorille',
        'Feuilles',
        '2kg',
        'aucun',
        'Jungle',
        2,
        'gorille.jpg'
    ),
    (
        'Nala',
        'Panthère',
        'Viande',
        '3kg',
        'aucun',
        'Jungle',
        2,
        'panthere.jpg'
    ),
    (
        'boulbie',
        'Panda',
        'Herbe',
        '3.5kg',
        'aucun',
        'Jungle',
        2,
        'panda.jpg'
    );

-- Table des rapports vétérinaires
INSERT INTO
    arcadia.veterinary_report (
        id_animal,
        etat,
        report,
        food_recommendation,
        date
    )
VALUES (
        1,
        'Fatigué',
        'Leo montre des signes de fatigue.',
        'Un peu plus de viande rouge.',
        CURRENT_TIMESTAMP()
    );

-- Table des services
INSERT INTO
    public.service (name, description, horaires, tarifs)
VALUES (
        'Restauration',
        'Le zoo Arcadia dispose d\'un espace de restauration offrant un large choix de plats salés et sucrés. 
        Au coeur du parc, venez goûter aux mets de nos chefs renommésUne cuisine riche, authentique avec des 
        produits frais, locaux et de saison. Promis, il y en a pour tous les goûts !',
        'Horaires : ouvert tous les jours de 10h à 20h',
        'Tarifs : menus entre 11 et 24 €'
    ),
    (
        'Visite guidée',
        'Le zoo Arcadia propose des visites guidées et gratuites avec de véritables experts du monde animalier et
        de la nature. Ils vous expliqueront les différentes habitudes des animaux, leurs origines, mais également
        les spécificités des différents habitats qui composent le zoo.',
        'Horaires : de 10h à 16h',
        'Tarifs : gratuit'


), 

(
    'Petit train',
    'Le parc Arcadia dispose également d\'un petit train qui vous permettra de faire le tour du zoo sans se fatiguer.
            Idéal pour admirer les animaux en famille. Le petit Train offre des points de vue que vous ne trouverez nulle part
            ailleurs.',
    'Horaires : de 10h à 18h',
    'Tarifs : gratuit'
);