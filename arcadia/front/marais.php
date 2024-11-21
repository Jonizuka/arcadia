<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>La savane - Arcadia</title>
  </head>
  <body>
    
      <?php 
      require_once('../functions/con-db.php');

      include('./header.php'); ?>

<main class="site-content main-content">
    <div class="container-fluid marais">
        <div class="row justify-content-center content-block">
            <div class="col-sx-12 col-md-8">
                <h1><strong>Les marais</strong></h1><br/>
                    <p><strong>La végétation des marais est constituée d'espèces adaptées au milieu humide. 
                    Sa composition varie selon la hauteur de l'eau, l'importance des périodes d'assèchement, 
                    et le taux de salinité.</strong></p><br/>
                <h2>Les animaux des marais d'Arcadia :</h2><br/>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Prénom</th>
                            <th scope="col">Race</th>
                            <th scope="col" style="width:30%;">Photo</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    require_once('../functions/req-sql.php');

    $animals = add_animals_marais();
        foreach($animals as $animal){
?>
                        <tr>
                            <td><h3><strong><?= $animal->name ?></strong></h3></td>
                            <td><h4><strong><?= $animal->race ?></strong><h4></td>
                            <td><img src="../images/<?= $animal->img ?>"></td>
                        </tr>
<?php
    }
?>
                    </tbody>
                </table>     
            </div>
        </div>
    </div>
</main>

<?php include('./footer.php'); ?>

</body>
</html>

