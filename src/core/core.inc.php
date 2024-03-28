<?php

// vérifie si l'utilisateur est connecté, sinon il est redirigé vers la page connexion
function Granted(){

    if (!isset($_SESSION['user'])) { 

        setFlashMessage('danger','Page protégée');
        header('Location: index.php?page=login');
        exit;
    }

}

function isGranted(){
    
    return isset($_SESSION['user']);   
}