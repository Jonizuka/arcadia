<?php

require('../con-db.php');
global $db;
//add reviews
$db->exec("UPDATE arcadia.reviews SET validation ='1' ");

// WHERE id_review ='{$_POST['id_review']}'

  
