<?php
require 'sql/post.sql.php';
require'sql/comment.sql.php';

if (!isset($_GET['slug'])) {
    die('Paramètre slug absent !');
}


$post = getOnePost($_GET['slug']);



if ($post != false) {

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $today = date("Y-m-d H:i:s");
        $isInserted = addComment($_SESSION['user']['id'], $post['id'], $_POST['comment'], $today);

        if ($isInserted) {
            setFlashMessage('success','Merci pour le commentaire');
        } else {
            setFlashMessage('danger','Problème technique');
        }
        
        header('Location: index.php?page=post&slug='. $_GET['slug']);
        exit;
    }
    $comments = getCommentsByPost($post['id']);
    //var_dump($comments); exit;

    $layoutImage = $post['image'];
    $headerTitle = $post['title'];
    $headerSubHeading = "Rédigé par " . $post['firstName']. ' ' . $post['lastName'] . ', ' .'le'. ' '. $post['createdAt'];
    //var_dump($post); exit;

    include ('template/post.tpl.php');

} else {
    die('404: Article introuvable !');
}