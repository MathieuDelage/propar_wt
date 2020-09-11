<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}
include_once '../model/lib/DBTools.class.php';

if (isset($_POST['id_operation'])){
    DBTools::terminateOperation($_POST['id_operation']);
    echo json_encode("Opération cloturée !");
}
