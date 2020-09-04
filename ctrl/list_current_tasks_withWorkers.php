<?php
include_once '../model/lib/DBTools.class.php';

$resultWithWorkers = DBTools::viewCurrentOperationsWithWorker();
echo json_encode($resultWithWorkers);
?>