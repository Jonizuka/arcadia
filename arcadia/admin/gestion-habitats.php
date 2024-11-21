<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen"/>
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Les habitats - Dashboard</title>
  </head>
  <body>
<?php
require_once('../functions/con-db.php');
include('./header-admin.php');

function get_habitats(){
    global $db;

$req = $db->query("SELECT * FROM arcadia.habitats ORDER BY id_habitat ASC");
    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}
?>

<main class="site-content">
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-sx-12 col-md-10">
                <h1><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                    <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507"/>
                </svg> Gérer les habitats</h1>
                <br/>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Habitat</th>
                            <th scope="col">Description</th>
                            <th scope="col">Commentaire vétérinaire</th>
                            <th scope="col">Image</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    $habitats = get_habitats();
    foreach($habitats as $habitat){
?>
                        <tr>
                            <td><strong><?= $habitat->name ?></strong></td>
                            <td><?= $habitat->description ?></td>
                            <td><?= $habitat->veterinarian_comment ?></td>
                            <td><a href="../images/<?= $habitat->img ?>">voir</a></td>
                            <td>
                                <button type="submit" id="<?= $habitat->id_habitat ?>" class="check validate"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
                                </button>
                            </td>
                            <td>
                                <button type="submit" id="<?= $habitat->id_habitat ?>" class="cross delete"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/></svg>
                                </button>
                            </td>
                        </tr>
<?php
    }
?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid dashboard">
        <div class="row justify-content-center ">   
            <div class="col-sx-12 col-md-6 col-lg-3 bloc-dashboard">
                <button class="btn btn-success btn-lg">
                    <a href="../admin/dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708z"/>
                        <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.5 1.5 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03"/>
                        <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg>
                    Tableau de bord</a>
                </button>
            </div>
        </div>
    </div>
</main>
</body> 
</html>