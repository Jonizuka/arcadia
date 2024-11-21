<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Services - Arcadia</title>
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
        <h1><strong>Nos services</strong></h1>
          <p><strong>Le zoo Arcadia propose un panel de services sur-mesure pour vous faire vivre une expérience
          authentique aux côtés des animaux et des professionnels qui les accompagnent.</strong></p>
      </div>
    </div>
  </div>   
<?php
$services = add_services();
foreach($services as $service){
?>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sx-12 col-md-8">
          <fieldset>
            <h2><?= $service->name ?></h2>
            <p><?= $service->description ?></p>
            <p><strong><?= $service->horaires ?></strong><br/>
            <strong><?= $service->tarifs ?></strong></p>
          </fieldset>
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

