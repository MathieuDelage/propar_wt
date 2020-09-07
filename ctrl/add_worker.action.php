<?php
session_start();

include_once '../model/lib/DBTools.class.php';

if( isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['grade']) && isset($_POST['login'])&& isset($_POST['password'])){
        DBTools::addWorker($_POST['name'], $_POST['surname'], $_POST['grade'], $_POST['login'], $_POST['password']);
        echo json_encode('Utilisateur crée !');

}
