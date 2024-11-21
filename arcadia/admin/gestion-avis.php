<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <script type="text/javascript" src="../js/jquery.min.js" defer></script>
    <script type="text/javascript" src="../js/func-dashboard.js" defer></script>
    <title>Les avis - Dashboard</title>
  </head>
  <body>

<?php
require_once('../functions/con-db.php');
include('./header-admin.php');
//require('../functions/admin-functions/validate-reviews.php');
//require('../functions/admin-functions/delete-reviews.php');

function get_reviews(){
    global $db;

    $req = $db->query("SELECT * FROM arcadia.reviews ORDER BY id_review ASC");
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
                <h1><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                </svg> Gérer les avis</h1>
                <br/>
                <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Prénom</th>
                        <th scope="col">Avis</th>
                        <th scope="col">Valider</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
<?php
    $reviews = get_reviews();
    foreach($reviews as $review){
?>
                        <tr>
                            <td><strong><?= $review->pseudo ?></strong></td>
                            <td><?= $review->message ?></td>
                            <td>
                                <button type="submit" id="<?= $review->id_review ?>" class="check" ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                                    validate</svg>
                                </button>
                            </td>
                            <td>
                                <button type="submit" id="<?= $review->id_review ?>" class="cross"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                    delete</svg>
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
                    <a href="./dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708z"/>
                        <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.5 1.5 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03"/>
                        <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                    </svg> Tableau de bord</a>
                </button>
            </div>
        </div>
    </div>
</main>
</body> 
</html>