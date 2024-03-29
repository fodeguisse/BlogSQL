<?php
require 'sql/post.sql.php';
// require 'sql/category.sql.php';


$layoutTitle = "Acceuil";
$layoutImage ="public/Clean/assets/img/home-bg.jpg";
$layoutDescription = "";
$headerTitle = SITE_NAME;
$headerSubHeading = SITE_SLOGAN;



$posts = getAllPosts();
$categories = getAllCategories();

include ('template/index.tpl.php');