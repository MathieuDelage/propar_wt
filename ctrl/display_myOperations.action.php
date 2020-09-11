<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}
include_once '../model/lib/DBTools.class.php';

if ( isset($_SESSION['id'])){
    $result = DBTools::displayMyOperations($_SESSION['id']);
    echo json_encode($result);
}
