<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen"/>
    <script type="text/javascript" src="../js/bootstrap.min.js" defer></script>
    <title>Les utilisateurs - Dashboard</title>
  </head>
  <body>

<?php
require_once('../functions/con-db.php');
require('../functions/admin-functions/users-manage.php');
include('./header-admin.php');
?>

<main class="site-content">
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-sx-12 col-md-10">
                <h1><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg> Tableau des utlisateurs</h1>
                    <br/>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Rôle</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    $users = get_users();
    foreach($users as $user){
?>
                        <tr>
                            <td><?= $user->username ?></td>
                            <td><?= $user->role ?></td>
                        </tr>
<?php
    }
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br/>
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-sx-12 col-md-5">
                <fieldset>
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                </svg> Ajouter un compte</h2>
                <br/>
                    <form id="formulaire" method="post">             
                        <div class="email-new-user">
                            <label for="username">Email de connexion :</label>
                            <input type="email" name="username">
                        </div>
                        <div class="role-new-user">
                            <label for="role">Rôle de l'utilisateur :</label>
                            <select id="select-role" name="role">
                                <option value="employe">employe</option>
                                <option value="veterinaire">veterinaire</option>
                            </select>
                        </div>
                        <button type="submit" name="submit">Créer</button>
<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $role = $_POST['role'];
    add_user($username, $role);
?>
                        <div class="bg-success p-2 text-dark bg-opacity-50">Compte créé avec succès. <a href="./gestion-utilisateurs.php">Raffraichir la page.</a></div>
<?php
    }
?>
                </fieldset>
            </form>
        </div>
            <br/>
            <div class="col-sx-12 col-md-5">
                <fieldset>
                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                        </svg> Supprimer un compte</h2>
                    <br/>
                        <form id="formulaire" method="post">
                            <label for="username">Email du compte à supprimer :</label>
                            <input type="email" name="email"><br/>
                            <button type="submit" name="delete">Supprimer</button>
<?php
    if(isset($_POST['delete'])){
        $username = $_POST['email'];
    delete_user($username);
?>
                        <div class="bg-success p-2 text-dark bg-opacity-50">Compte supprimé avec succès. <a href="./gestion-utilisateurs.php">Raffraichir la page.</a></div>
<?php
    }
?>
                </fieldset>
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
                        <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                    </svg> Tableau de bord</a>
                </button>
            </div>
        </div>
    </div>
</main>
</body>
</html>
