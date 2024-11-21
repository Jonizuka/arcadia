-- table des utilisateurs
CREATE TABLE arcadia.users (
    id_user INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password md5(VARCHAR(45)),
    role VARCHAR(45)
);

--table des animaux
CREATE TABLE arcadia.animals (
    id_animal INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
    name VARCHAR(45) NOT NULL,
    race VARCHAR(45) NOT NULL,
    food VARCHAR(45),
    food_quantity VARCHAR(45),
    details VARCHAR(255),
    img VARCHAR(255),
    habitat VARCHAR(45) NOT NULL,
    id_habitat INTEGER NOT NULL,
    FOREIGN KEY (id_habitat) REFERENCES arcadia.habitats (id_habitat)
);

-- table des habitats
CREATE TABLE arcadia.habitats (
    id_habitat INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
    name VARCHAR(45) NOT NULL,
    description MEDIUMTEXT NOT NULL,
    img VARCHAR(255),
    veterinarian_comment MEDIUMTEXT
);

-- table rapports vétérinaire
CREATE TABLE arcadia.verterinary_report (
    id_report INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
    id_animal INT NOT NULL,
    etat VARCHAR(225),
    report MEDIUMTEXT NOT NULL,
    food_recommendation VARCHAR(225),
    date DATE NOT NULL,
    FOREIGN KEY (id_animal) REFERENCES arcadia.animals (id_animal),
);

-- table des commentaires
CREATE TABLE arcadia.reviews (
    id_review INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
    pseudo VARCHAR(45) NOT NULL,
    message MEDIUMTEXT NOT NULL,
    validation TINYINT DEFAULT 0,
);

-- table des services
CREATE TABLE arcadia.services (
    id_service PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,
    name VARCHAR(45) NOT NULL,
    description MEDIUMTEXT NOT NULL,
    horaires MEDIUMTEXT,
    tarifs MEDIUMTEXT
);