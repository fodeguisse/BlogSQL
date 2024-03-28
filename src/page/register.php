<?php

require 'sql/user.sql.php';

// Vérifier si tous les champs requis sont présents dans $_POST

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    // Hasher le mot de passe
    $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_POST['password'] = $hashPassword;

    // Enregistrer l'utilisateur
    $isRegistered = registerUser($_POST);
    

    if($isRegistered){
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

$headerTitle = "Incrivez vous";

//var_dump( $_SERVER ); exit;
require 'template/register.tpl.php';