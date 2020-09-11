<?php
session_start();



include_once '../model/lib/DBTools.class.php';
if( isset($_POST['name']) && !empty($_POST['name'])
    && isset($_POST['surname']) && !empty($_POST['surname'])
    && isset($_POST['company']) && !empty($_POST['company'])){
    $result = DBTools::customerExist($_POST['name'],$_POST['surname'],$_POST['company']);
    if ( $result == 1){
        echo "Client existant !";
    } else if ( $result == 0){
        DBTools::addCustomer($_POST['name'], $_POST['surname'], $_POST['company']);
        echo "Client crée !";
    }
}else {
    echo "Vous avez oublié de remplir des champs !";
}


