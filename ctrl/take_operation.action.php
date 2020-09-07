<?php
session_start();
include_once '../model/lib/DBTools.class.php';

if (isset($_POST['id_operation']) && isset($_SESSION['id'])){
    DBTools::takeOperation($_POST['id_operation'], $_SESSION['id']);
    echo json_encode("Opération assignée !");
}