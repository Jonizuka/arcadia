<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>La jungle - Arcadia</title>
  </head>
  <body>

<?php include('./header.php'); ?>
    <main class="site-content main-content">
      <div class="container-fluid jungle">
        <div class="row justify-content-center content-block">
          <div class="col-sx-12 col-md-8">
            <h1><strong>La jungle</strong></h1><br/>
              <p><strong>L'importance écologique de ce milieu réside surtout dans le fait qu'il abrite une grande quantité 
              d'espèces d'animaux et de végétaux, constituant le plus important réservoir de biodiversité à l'échelle
              mondiale.</strong></p><br/>
              <h2>Les animaux de la jungle Arcadia :</h2><br/>
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
  require_once('../functions/con-db.php');
  require_once('../functions/req-sql.php');

  $animals = add_animals_jungle();
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

