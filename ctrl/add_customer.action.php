<?php
session_start();

include_once '../model/lib/DBTools.class.php';

if( isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['company'])){
    DBTools::addCustomer($_POST['name'], $_POST['surname'], $_POST['company']);
    echo json_encode('Client crée !');
}
