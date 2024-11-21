<?php
//add delete
require('../con-db.php');
global $db;

$db->exec("UPDATE arcadia.reviews SET validation ='0' ");

//WHERE id_review ='{$_POST['id']}'


