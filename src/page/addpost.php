<?php

require 'sql/category.sql.php';
require 'lib/slugger.lib.php';
require 'sql/post.sql.php';

Granted();
// Vérifier si tous les champs requis sont présents dans $_POST

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //var_dump($_POST);exit;

    // Enregistrer l'utilisateur
    $today = date("Y-m-d H:i:s");
    $slug = generateSlug($_POST['title']);
    $isAdded = addPost($_POST, $today, $slug, $_SESSION['user']['id']);
    

    if($isAdded){
        // Si l'inscription réussit, définissez un message flash de succès
        setFlashMessage('success','Inscription reussie');
    }else{
        // Si l'inscription échoue, définissez un message flash d'erreur
        setFlashMessage('danger','Inscription echouée');
    }

    $_SESSION['user'] = $user;

    // Rediriger vers la page d'accueil après l'inscription
    header('Location: index.php');
    exit;
}
$categories = getAllCategories();
//var_dump($categories); exit;

$headerTitle = "Proposer un arcticle";

require 'template/addpost.tpl.php';