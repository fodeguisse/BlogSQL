<?php
require 'sql/user.sql.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //var_dump($_POST); exit;
    $user = loginUser($_POST['email']);
    //var_dump($user);
    if(password_verify($_POST['password'], $user['password'])){
        //session_start();
        
        $_SESSION['user'] = $user;
        //var_dump($_SESSION); exit;

        header('Location: index.php');
        die('OK');
    }

    header('Location: index.php?page=login');
    exit;
}

$headerTitle = "Connectez vous";

//var_dump( $_SERVER ); exit;
require 'template/login.tpl.php';