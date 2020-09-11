<?php

include_once '../model/lib/DBTools.class.php';
session_start();

if( isset($_POST['username']) && !empty($_POST['username'])
    && isset($_POST['password']) && !empty($_POST['password']) ){
    $result = DBTools::logIn($_POST['username'], $_POST['password']);
    if ( $result == 'Login'){
        $userInfos = DBTools::getUserInfos($_POST['username']);
        $_SESSION['id'] = $userInfos[0]['id'];
        $_SESSION['name'] = $userInfos[0]['name'];
        $_SESSION['surname'] = $userInfos[0]['surname'];
        $_SESSION['grade'] = $userInfos[0]['grade'];
        echo $result;
    } else {
        echo "Erreur de saisie !";
    }
} else {
    echo "Vous avez oublié de remplir des champs !";
}