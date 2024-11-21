<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <script type="text/javascript" src="../js/jquery.min.js" defer></script>
    <title>Accueil - Arcadia</title>
  </head>
<body>  
<?php 
require_once('../functions/con-db.php');
include('./header.php'); ?>
<main class="site-content">
  <div id="carousel-home" class="carousel slide">
    
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/singe2.jpg" class="d-block w-100" alt="panda">
      <div class="carousel-caption d-none d-md-block">
        <h2><strong>Des rencontres sauvages</strong></h2>
        <p>Lions, pandas, crocodiles, éléphants, singes ou pelicans... Le parc animalier d'Arcadia vous invite à découvrir
        de nombreuses espèces issues des quatre coins du monde.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/tigre2.jpg" class="d-block w-100" alt="singe">
      <div class="carousel-caption d-none d-md-block">
        <h2><strong>Des habitats authentiques</strong></h2>
        <p>Marais, savane, jungle, nos équipes s'efforcent de restituer les habitats d'origine des animaux
        recueillis.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/panda2.jpg" class="d-block w-100" alt="perroquet">
      <div class="carousel-caption d-none d-md-block">
        <h2><strong>Des services sur-mesure</strong></h2>
        <p>Une multitude de services sur-mesure pour rendre votre expérience encore plus inoubliable.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-home" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-home" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container-fluid">
  <div class="row justify-content-center description">
    <div class="col-sx-12 col-md-9">
      <h1><strong>Bienvenue à
        <span style="
        background-color: #00bf63;
        color: white;
        padding: 0px 10px;
        border-radius: 5px;">Arcadia</strong></span>
        </h1>
        <p style="font-size: 22px; color:#1b5b33"><strong>Le zoo respectueux des animaux et de la planète.</strong></p>
        <p style="font-size:18px">Situé en Bretagne, près de la forêt de Brocéliance, le zoo Arcadia 
        veille à la bonne santé des animaux qu'il recueille depuis sa fondation, en 1960. Entièrement indépendant
        au niveau des énergies, Arcadia veille au respect de l'environnement et toutes ses équipes 
        veillent à ce que chaque animal évolue dans son habitat de prédilection tout en prêtant 
        la plus grande vigilance à leur santé au quotidien.</p>
    </div>
  </div>
</div>
  <div class="container-fluid">
    <div class="row justify-content-center content-block">
      <div class="col-sx-12 col-md-6 col-lg-4 col-xl-3">
        <img src="../images/animaux.jpg"/>                  
        <h2><strong>Des animaux protégés</strong></h2>
          <p>Tous nos animaux présents dans le parc sont quotidiennement suivis de près par des vétérinaires. Notre 
          mission est avant tout de les protéger.</p>
          <button>Voir les animaux</button>
      </div>
      <div class="col-sx-12 col-md-6 col-lg-4 col-xl-3">
        <img src="../images/habitats.jpg" />
        <h2><strong>Des habitats restitués</strong></h2>
          <p>Qu'il s'agisse de savane, de jungle ou de marais, les équipes d'Arcadia veillent à ce que les animaux
          recueillis évoluent dans leur habitat d'origine.</p>
          <button><a href="./habitats.php">Voir les habitats</a></button>
      </div>
      <div class="col-sx-12 col-md-6 col-lg-4 col-xl-3">
        <img src="../images/restaurant.jpg"/>
        <h2><strong>Des services de qualité</strong></h2>
          <p>Visites guidées et gratuites, un service restauration de qualité et le tour du parc en petit train 
          pour vous permettre de visiter le parc dans les meilleures conditions.</p>
          <button><a href="./services.php">Voir les habitats</a></button>
      </div>
    </div>
  </div>
</main>
<hr/>
<section class="avis-block">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sx-12 col-md-9 col-lg-5">
        <h2><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
        <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
        </svg> <strong>Ils ont visité Arcadia...</strong></h2>
      <br/>
<?php
require_once('../functions/req-sql.php');

  $reviews = add_review();
    foreach($reviews as $review){
?>
  <blockquote class="blockquote">"<em><?= $review->message ?></em>"</blockquote>
  <p style="font-weight:bold"><?= $review->pseudo ?></p><br/>
<?php
  }
?>
        </div>
        <div class="col-sx-12 col-md-9 col-lg-4">
          <form id="formulaire" class="form-com" method="post" action="./accueil.php#valid-send">
            <fieldset id="form-fieldset">
              <h3 style="text-align:center;"><strong>"Et vous, qu'en avez-vous pensé ?"</strong></h3>
              <p style="text-align:center; font-weight:bold; color:#1b5b33">N'hésitez pas à nous faire part de votre expérience !</p>
              <br/>
        <div id="form-fnm">
            <label for="pseudo">Votre prénom :</label>
            <input type="text" name="pseudo" id="pseudo" required/>
        </div>        
            <textarea id="comment" name="message" cols="30" rows="10" placeholder="Ecrivez votre commentaire..." required></textarea>
            <button type="submit" name="submit" class="send-comment">Envoyer</button>
<?php 
  if(isset($_POST['submit'])){
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
  add_review_bdd($pseudo, $message);
?>
  <div class="p-3 mb-2 bg-success-subtle text-success-emphasis"><a name="valid-send">Merci ! Votre message a bien été envoyé !</a></div>  
<?php
  }
?>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
</div>
</section>

<?php include('./footer.php'); ?>
</body>

</html>




