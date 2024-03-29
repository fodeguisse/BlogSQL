<?php
// initialisation de la session
session_start();

// Chargements des Paramètres
require 'config/param.inc.php';

// Connexion PDO
require 'sql/pdoConnect.inc.php';
$pdo = pdoConnect();

//chargement des librairies
require 'core/core.inc.php';
require 'lib/pluralize.lib.php';
require 'lib/flash.lib.php';
require 'sql/category.sql.php';

$page = DEFAULT_PAGE;
$categories = getAllCategories();


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} 

$url = "page/$page.php";

if(file_exists($url)){
    require $url;
}
else{
    echo "404 file not found";
}

echo"<h2>Debug SESSION</h2>";
var_dump($_SESSION);
