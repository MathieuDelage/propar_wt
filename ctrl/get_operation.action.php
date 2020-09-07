<?php

include_once '../model/lib/DBTools.class.php';
if (isset($_POST['id'])){
    $result = DBTools::getOperation($_POST['id']);
    echo json_encode($result);
}
