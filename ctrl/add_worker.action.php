<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}

include_once '../model/lib/DBTools.class.php';

if(
    isset($_POST['name']) && !empty($_POST['name'])
    && isset($_POST['surname']) && !empty($_POST['surname'])
    && isset($_POST['grade']) && !empty($_POST['grade'])
    && isset($_POST['login']) && !empty($_POST['login'])
    && isset($_POST['password']) && !empty($_POST['password'])
){
    $tmtTest = DBTools::loginExist($_POST['login']);
    if ($tmtTest == 1){
        echo "Login existant !";
    } else {
        DBTools::addWorker($_POST['name'], $_POST['surname'], $_POST['grade'], $_POST['login'], $_POST['password']);
        echo 'Utilisateur crée !';
    }
} else {
    echo "Vous avez oublié de remplir des champs !";
}
