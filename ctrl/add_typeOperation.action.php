<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}

include_once '../model/lib/DBTools.class.php';

if( isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['price']) && !empty($_POST['price'])){
    $result = DBTools::typeOperationExist($_POST['type'],$_POST['price']);
    if ($result == 0) {
        DBTools::addTypeOperation($_POST['type'], $_POST['price']);
        echo "Type d'opération ajouté !";
    } else {
        echo "Ce type d'opération existe déjà !";
    }
}else {
    echo "Vous avez oublié de remplir des champs !";
}

