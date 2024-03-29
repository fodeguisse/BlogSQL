<?php
require 'sql/post.sql.php';
// require 'sql/category.sql.php';

if (!isset($_GET['slug'])) {
    die('Paramètre slug absent !');
}

$layoutTitle = "Les articles d'une catégorie";
$layoutImage ="public/Clean/assets/img/home-bg.jpg";
$layoutDescription = "";
$headerTitle = SITE_NAME;
$headerSubHeading = "Une catégorie";



$posts = getPostsByCategory($_GET['slug']);
// $categories = getAllCategories();

$categoryName = FALSE;

foreach($categories as $category) {
    if ($_GET['slug'] === $category['slug']) {
        $categoryName = $category['name'];
        break;
    }
}

if ($categoryName === FALSE) {
    setFlashMessage('danger','slug inexistant');
    header('Location: ?');
    exit();
} 

$headerSubHeading = 'Catégorie : ' . $categoryName;

// var_dump(); die('ok');
include ('template/category.tpl.php');