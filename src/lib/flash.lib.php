<?php

// Fonction pour définir un message flash
function setFlashMessage($type, $message) {
    $_SESSION['flash_message'] = array(
        'type' => $type,
        'message' => $message
    );
}

// Fonction pour récupérer et afficher un message flash
function displayFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $type = $_SESSION['flash_message']['type'];
        $message = $_SESSION['flash_message']['message'];
        echo "<div class='alert alert-$type' role='alert'>$message</div>";
        unset($_SESSION['flash_message']); // Supprimer le message après l'affichage
    }
}