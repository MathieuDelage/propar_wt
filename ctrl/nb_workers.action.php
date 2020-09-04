<?php
include_once '../model/lib/DBTools.class.php';

$result = DBTools::getNbWorkers();
echo json_encode($result);
