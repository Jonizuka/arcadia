<?php
require_once('../functions/con-db.php');



function is_admin($email, $password) {
    global $db;
    $a = [
        'username' => $email,
        'password' => md5($password)
    ];
    $sql = "SELECT * FROM arcadia.users WHERE username = :username AND password = :password";
    $req = $db->prepare($sql);
    $req->execute($a);
    $exist = $req->rowCount($sql);
    return $exist;
}



?>