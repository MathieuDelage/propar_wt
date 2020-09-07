<?php
include_once '../model/lib/DBTools.class.php';

$result = DBTools::viewCA();
echo json_encode($result);
?>