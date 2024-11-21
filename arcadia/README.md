# arcadia

Aplication du zoo Arcadia

1/ Technologies Utilisées

Front-end: HTML5, CSS (Bootstrap), JavaScript (Bootstrap, Jquery);
Back-end: PHP avec PDO, javascript via AJAX;
Base de données: MySQL.

2/Configuration d'un serveur local

Application réalisée grâce au serveur local Laragon

dbhost = "localhost";
basename = "arcadia";
dbuser = "root";
dbpassword = "MotDePasse12345";

3/ Configuration de la base de données SQL

Application réalisée avec MySQL

Importer le fichier arcadia-database.sql

4/ Parcours utilisateurs

Pas de restriction d'accès pour le moment (en cours de développement). Le même parcours possible avec :

administrateur :

- login : admin@arcadia.fr
- mdp : admin

employe :

- login : employe@arcadia.fr
- mdp : employe

vétérinaire :

- login : veterinaire@arcadia.fr
- mdp : veterinaire

5/ Fonctionnalités ok

- envoi de mail depuis la page "contact" (testé en local en paramétrant l'envoi de mail)
- envoi des commentaires depuis la page accueil ('n'apparaissent pas tant que pas validés)
- connexion au bo et deconnexion avec arrêt de la session
- gestion des utilisateurs en back office (ajout et suppression de compte)
- le reste : WIP

6/ Les pages

Page d'accueil : http://localhost/ARCADIA/front/accueil.php

- slider
- Trois visuels pour détailler succintement les prestations du zoo (bouton non fonstionnel pour les animaux)
- Les commentaires déjà validés
- un formulaire pour laisser un commentaire

Page Services

- les services avec horaires et tarifs
- pas de visuels à la demande du propriétaire

Page habitats

- Visuels des trois habitats avec photo et titre (comme demandé par le propriétaire)
- renvoie vers détail des habitats avec liste des animaux (pas encore de détail pour les animaux - WIP)

Page Contact

- Formulaire opérationnel

Page connexion

- Connexion opérationnelle avec accès mentionnés plus haut (4)

Back office :

- Tous les onglets recensent le contenu existent (excepté les rappoirts vétérinaires - WIP)
- Les différents parcours/rôles utilisateurs ne sont pas opérationnels
- Possibilité de créer un compte/supprimer un compte
- Les autres fonctionnalités sont en cours de développement
- Possibilité de se déconnecter avec destruction de la session
