<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Contact - Arcadia</title>
  </head>
  <body>
<?php include('./header.php'); ?>

  <main class="site-content main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sx-12 col-md-9">
          <h1><strong>Formulaire de contact</strong></h1>
          <br/>
            <p><strong>Une question, une demande d'information ? 
            Veuillez remplir le formulaire pour nous contacter.</strong></p>
          <form id="formulaire" method="post">
            <fieldset id="form-fieldset">
              <legend><h2>Vos informations :</h2></legend>
              <div id="form-nm">
                <label for="name">Votre nom :</label>
                <input type="text" name="nom" id="name" required/>
              </div>
              <div id="form-fnm">
                <label for="firstname">Votre prénom :</label>
                <input type="text" name="prenom" id="firstname" required/>
              </div>
              <div id="form-email">
                <label for="email">Votre email :</label>
                <input type="email" id="email" name="email" placeholder="email@mail.com" required/>
              </div>
            <legend><h2>Votre message :</h2></legend>
              <div id="form-subject">
                <label for="subject">Sujet du message :</label>
                <input type="text" id="subject" name="subject">
              </div>
            <textarea id="message" name="message" cols="30" rows="10" placeholder="Votre message..." required></textarea>
            <button type="submit">Envoyer</button>
<?php
  $to = "no-reply@arcadia.fr";
    if (isset($_POST["message"])){
  $envoi = mail($to, $_POST['subject'], $_POST["message"], "From: " . $_POST["email"]);
  if ($envoi) {
?>
    <div class="bg-success p-2 text-dark bg-opacity-50"><a name="valid-send">Votre message a bien été envoyé !</a></div>
<?php  } 
  }
?>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </main>

<?php include('./footer.php');?>

</body>
</html>

