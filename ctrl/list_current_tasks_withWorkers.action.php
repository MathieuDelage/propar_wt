<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}
include_once '../model/lib/DBTools.class.php';

$resultWithWorkers = DBTools::viewCurrentOperationsWithWorker();
echo json_encode($resultWithWorkers);
?>