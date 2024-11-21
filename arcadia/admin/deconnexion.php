<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Deconnexion - Arcadia</title>
  </head>
<body>
  <main>

  <?php session_start() ?>
          
    <div class="row justify-content-center deconnect">
      <h2>Vous êtes bien déconnecté</h2>
        <button type="button" class="btn btn-success btn-md col-sm-4 col-md-2 center-block">
        <a href="../front/accueil.php">Retour à la page d'accueil</a>
        </button>
    </div>
<?php session_destroy(); ?>
  </main>
</body>
</html>