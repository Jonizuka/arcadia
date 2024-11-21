<?php
//recover users
function get_users(){
    global $db;

    $req = $db->query("SELECT * FROM arcadia.users ORDER BY id_user DESC");
    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}

//add users
function add_user($username, $role){
    global $db;
    $add = array(
        'username' => $username,
        'role' => $role
    );
    $req = $db->prepare("INSERT INTO arcadia.users(username, role) VALUES(:username, :role)");
    $req->execute($add);
}

//delete users
function delete_user($username){
    global $db;
    $del = array(
        'username' => $username,
        
    );
    $req = $db->prepare("DELETE FROM arcadia.users WHERE username = :username");
    $req->execute($del);
}




?>