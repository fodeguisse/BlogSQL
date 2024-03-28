<?php
require 'sql/user.sql.php';

// vérifie si l'utilisateur est connecté, sinon il est redirigé vers la page connexion
Granted();

// vérifie si la méthode de la requête HTTP est POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
    /*appelle updateProfileUser($_POST) pour mettre à jour les données du profil de l'utilisateur. 
    Elle passe les données du formulaire ($_POST) à cette fonction.*/
    $user = updateProfileUser($_POST);
   
    /**met à jour les informations de l'utilisateur dans la session avec les modifications soumis dans le formulaire */
    $_SESSION['user']['firstName'] = $_POST['firstName'];
    $_SESSION['user']['lastName'] = $_POST['lastName'];
    $_SESSION['user']['phone'] = $_POST['phone'];


    /*redirige l'utilisateur vers la page de profil après la modification réussie */
    setFlashMessage('success','Modification reussie');

    header('Location: index.php?page=profile');
    exit;
}

/**récupére les données du profil de l'utilisateur mis à jour à partir de la base de données. 
 * Ces données sont utilisées pour afficher le profil mis à jour dans le template. */
$user = profileUser($_SESSION['user']['id']);

$headerTitle = "Mon Profil";

require 'template/profile.tpl.php';