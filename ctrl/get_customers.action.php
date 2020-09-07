<?php
include_once '../model/lib/DBTools.class.php';
$result = DBTools::getCustomers();
echo json_encode($result);