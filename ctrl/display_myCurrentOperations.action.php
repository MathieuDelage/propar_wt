<?php
session_start();


include_once '../model/lib/DBTools.class.php';

if ( isset($_SESSION['id'])){
    $result = DBTools::displayMyCurrentOperations($_SESSION['id']);
    echo json_encode($result);
}