<?php
session_start();

include_once '../model/lib/DBTools.class.php';

if( isset($_POST['type']) && isset($_POST['price'])){
    DBTools::addTypeOperation($_POST['type'], $_POST['price']);
    echo json_encode("Type d'opération ajouté !");

}
