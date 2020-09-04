<?php
include_once '../model/lib/DBTools.class.php';

$result = DBTools::getNbCurrentTasks();
echo json_encode($result);
?>