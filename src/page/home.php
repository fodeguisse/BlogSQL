<?php

$layoutTitle = "Acceuil";
$layoutImage ="public/Clean/assets/img/home-bg.jpg";
$layoutDescription = "";
$headerTitle = SITE_NAME;
$headerSubHeading = SITE_SLOGAN;

// var_dump($_SESSION); exit;

require 'sql/post.sql.php';
$posts = getAllPosts();
//var_dump($posts);


include ('template/index.tpl.php');