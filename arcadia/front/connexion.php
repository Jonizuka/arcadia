<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Connexion - Arcadia</title>
  </head>
<body>
<?php
require_once('../functions/con-db.php');
require_once('../functions/user-log.php');

if(isset($_SESSION['admin'])){
  header("Location:../admin/dashboard.php");
}

include('./header.php'); ?>
  <main class="site-content">
    <div class="container-fluid">
      <div class="row justify-content-center content-form">
        <div class="col-sx-12 col-md-6 col-lg-3">
          <h2 style="text-align:center;">Connexion</h3>
            <fieldset>
          <form id="formulaire" method="post" class="page-connection">
            <div id="email-connect">
              <label for="email">Email :</label>
              <input type="text" name="email" id="email" required/>
            </div>
            <div id="password-connect">
              <label for="password">Mot de passe :</label>
              <input type="text" name="password" id="password" required/>
            </div>
            <br/>
              <input type="submit" value="se connecter" name="connexion" id="connexion"/>
<?php

if(isset($_POST['connexion'])){
  $email = htmlspecialchars(trim($_POST['email']));
  $password = htmlspecialchars(trim($_POST['password']));
  
  $errors = [];
  
  if(empty($email) || empty($password)) {
    $errors['empty'] = "Merci de compléter les deux champs";}
    else if(is_admin($email, $password) == 0){
    $errors['exist'] = "Ce compte n'existe pas";
    }
    if(!empty($errors)){
?>
  <p style="color:red";>Vos identifiants ne sont pas bons.</p>
<?php
    }else{
      $_SESSION['admin'] = $email;
      header("Location:../admin/dashboard.php");
    }
  }
?>
            </form>
          </fieldset>
        </div>
      </div>
    </div>
  </main>

<?php include('./footer.php'); ?>

</body>
</html>

   