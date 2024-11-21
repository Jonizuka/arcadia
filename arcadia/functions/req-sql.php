<?php

//add animals

function add_animals_savane(){

global $db;

$req = $db->query("SELECT * FROM arcadia.animals WHERE id_habitat = '1'");

$result = [];

while($rows = $req->fetchObject()){
    $result[] = $rows;
}
return $result;
}

function add_animals_jungle(){

    global $db;
    
    $req = $db->query("SELECT * FROM arcadia.animals WHERE id_habitat = '2'");
    
    $result = [];
    
    while($rows = $req->fetchObject()){
        $result[] = $rows;
    }
    return $result;
    }

    function add_animals_marais(){

        global $db;
        
        $req = $db->query("SELECT * FROM arcadia.animals WHERE id_habitat = '3'");
        
        $result = [];
        
        while($rows = $req->fetchObject()){
            $result[] = $rows;
        }
        return $result;
        }





//add review

function add_review(){

global $db;

$req = $db->query("SELECT * FROM arcadia.reviews WHERE validation='1'");

$result = [];

while($rows = $req->fetchObject()){
    $result[] = $rows;
}
return $result;
}

function add_review_bdd($pseudo, $message){
    global $db;
    $com = array(
        'pseudo' => $pseudo,
        'message' => $message,
    );
    $req = $db->prepare("INSERT INTO arcadia.reviews(pseudo, message) VALUES(:pseudo, :message)");
    $req->execute($com);
}



//add habitats


function add_habitats(){

global $db;

$req = $db->query("SELECT * FROM arcadia.habitats");

$result = [];

while($rows = $req->fetchObject()){
    $result[] = $rows;
}
return $result;
}


//add services


function add_services(){

global $db;

$req = $db->query("SELECT * FROM arcadia.services");

$result = [];

while($rows = $req->fetchObject()){
    $result[] = $rows;
}
return $result;
}
