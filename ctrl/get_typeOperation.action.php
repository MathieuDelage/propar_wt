<?php

include_once '../model/lib/DBTools.class.php';
$result = DBTools::getTypeOperation();
echo json_encode($result);