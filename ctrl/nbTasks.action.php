<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}
include_once '../model/lib/DBTools.class.php';

//if ( isset($_POST['id']) && !empty($_POST['id'])){
    $grade = DBTools::getUserGrade($_POST['id']);

    $result = DBTools::getNbTasks($_POST['id']);
    switch ($grade) {
        case 'Expert':
            $nb = 5 - $result[0];
            echo json_encode($nb);
            break;
        case 'Senior':
            $nb = 3 - $result[0];
            echo json_encode($nb);
            break;
        case 'Apprenti':
            $nb = 1 - $result[0];
            echo json_encode($nb);
            break;
    }
//}





