<?php
include_once '../model/lib/DBTools.class.php';

$result = DBTools::getNbCustomers();
echo json_encode($result);
