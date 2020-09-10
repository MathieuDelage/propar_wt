<?php
session_start();
include_once '../model/lib/DBTools.class.php';

$result = DBTools::getNbTasks($_SESSION['id']);
switch($_SESSION['grade']){
    case 'Expert':
        $_SESSION['nb'] = 5 - $result[0];
        echo json_encode($_SESSION['nb']);
        break;
    case 'Senior':
        $_SESSION['nb'] = 3 - $result[0];
        echo json_encode($_SESSION['nb']);
        break;
    case 'Apprenti':
        $_SESSION['nb'] = 1 - $result[0];
        echo json_encode($_SESSION['nb']);
        break;
}



