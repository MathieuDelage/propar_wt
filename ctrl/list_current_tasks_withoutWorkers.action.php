<?php
include_once '../model/lib/DBTools.class.php';

$resultWithoutWorkers = DBTools::viewCurrentOperationsWithoutWorker();
echo json_encode($resultWithoutWorkers);
?>