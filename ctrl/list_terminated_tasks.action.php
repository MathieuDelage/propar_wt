<?php

include_once '../model/lib/DBTools.class.php';

$result = DBTools::viewTerminatedOperations();
echo json_encode($result);
?>