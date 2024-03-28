<?php

function pdoConnect() {
    global $options; // rendre la constante $options global car elle n'est pas définit par la fonction DEFINE
    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME , DB_USER, DB_PASSWORD, $options);
        //var_dump($pdo); // fonction qui trace une structure de données (affiche que les données)
        return $dbh;
    } catch (PDOException $e) {
        // tenter de ressayer la connexion 
        die("Erreur:" . $e->getMessage());
    }
     
}