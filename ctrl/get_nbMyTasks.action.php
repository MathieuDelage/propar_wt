<?php
session_start();
include_once '../model/lib/DBTools.class.php';

$result = DBTools::getNbTasks($_SESSION['id']);
switch($_SESSION['grade']){
    case 'Expert':
        $tmp = 5 - $result[0];
        echo json_encode($tmp);
        break;
    case 'Senior':
        $tmp = 3 - $result[0];
        echo json_encode($tmp);
        break;
    case 'Apprenti':
        $tmp = 1 - $result[0];
        echo json_encode($tmp);
        break;
}



