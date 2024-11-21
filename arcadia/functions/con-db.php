<?php

session_start();


$dbhost = "localhost";
$basename = "arcadia";
$dbuser = "root";
$dbpassword = "MotDePasse12345";

try{
$db = new PDO("mysql:host=".$dbhost.";basename=".$basename,$dbuser,$dbpassword,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}catch(PDOexception $e){
	die("Erreur de connexion à la base de données");
}





