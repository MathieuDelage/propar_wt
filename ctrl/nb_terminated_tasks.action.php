<?php
include_once '../model/lib/DBTools.class.php';

$result = DBTools::getNbTerminatedTasks();
echo json_encode($result);
