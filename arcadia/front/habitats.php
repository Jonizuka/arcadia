<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Habitats - Arcadia</title>
  </head>
  <body>

<?php
  include('./header.php'); 
  require_once('../functions/con-db.php');
  require_once('../functions/req-sql.php');
?>
<main class="site-content main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sx-12 col-md-8">
        <h1><strong>Les habitats</strong></h1>
          <p><strong>pour le bien-être de ses animaux, Arcadia a pris le soin de restituer leurs habitats d'origine. 
          Une jungle luxuriante, une savane broussailleuse et des marais humides à la végétation typique de ces zones. Nos équipes veillent queotidiennement à l'entretien de ces espaces vitaux pour les animaux.

</strong></p>
      </div>
    </div>
  </div>
  <br/>   
<?php
$habitats = add_habitats();
foreach($habitats as $habitat){
?>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sx-12 col-md-4 habitats-img">
        <a href="./<?= $habitat->name ?>.php" style="text-decoration:none; color:none">
        <img src="../images/<?= $habitat->img ?>">
      </div>
      <div class="col-sx-12 col-md-4 habitats-img">
        <h2><strong><?= $habitat->name ?></strong></h2></a><br/>
      </div>
    </div>
  </div>
<?php
  }
?>
</main>
<?php include('./footer.php'); ?>
</body>
</html>

