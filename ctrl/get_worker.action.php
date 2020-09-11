<?php
session_start();


include_once '../model/lib/DBTools.class.php';

$result = DBTools::getWorkers();
echo json_encode($result);
