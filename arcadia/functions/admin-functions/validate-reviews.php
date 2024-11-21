<?php
//add reviews
require('../con-db.php');
global $db;

$db->exec("UPDATE arcadia.reviews SET validation ='1' ");

// WHERE id_review ='{$_POST['id_review']}'

  