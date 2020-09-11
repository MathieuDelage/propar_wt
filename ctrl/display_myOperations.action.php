<?php
session_start();


include_once '../model/lib/DBTools.class.php';

if ( isset($_SESSION['id'])){
    $result = DBTools::displayMyOperations($_SESSION['id']);
    echo json_encode($result);
}
