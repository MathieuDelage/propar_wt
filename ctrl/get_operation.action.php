<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}

include_once '../model/lib/DBTools.class.php';
if (isset($_POST['id'])){
    $result = DBTools::getOperation($_POST['id']);
    echo json_encode($result);
}
