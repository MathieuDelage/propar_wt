<?php
session_start();

include_once '../model/lib/DBTools.class.php';

if( isset($_POST['login'])){
    $result = DBTools::searchLogin($_POST['login']);
    if ($result[0] == 0){
        echo json_encode('ok');
    } else {
        echo json_encode('ko');
    }
}
