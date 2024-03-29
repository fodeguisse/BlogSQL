<?php

//Route par defaut du site
define("DEFAULT_PAGE","home");

$layoutTitle = "";
$layoutImage = "home-bg.jpg";
$layoutDescription = "";
$headerTitle  ="";
$headerSubHeading = "";
$navbarTitle = "Sport";

// Config BD MySQL
define("DB_NAME","blog");
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);


// pagination par defaut
define("NB_PAGINATE",3);

// constant pour la page d'accueil
define("SITE_NAME","Le meilleur site de sport");
define("SITE_SLOGAN","Profitez des meilleurs sensations du monde du sport");