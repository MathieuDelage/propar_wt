<?php
session_start();

if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    header("Location: ../view/index.php");
}
include_once '../model/lib/DBTools.class.php';

if ( isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['grade']) && !empty($_POST['grade']
    && $_POST['id'] != 0 && $_POST['grade'] != 0) ){
    switch ($_POST['grade']){
        case 1:
            $tmp = 'Expert';
            break;
        case 2:
            $tmp = 'Senior';
            break;
        case 3:
            $tmp = 'Apprenti';
            break;
    }
    DBTools::updateWorkerGrade($_POST['id'], $tmp);
    echo "Changement effectué !";
} else {
    echo "Vous avez oublié de sélectionner un valeur !";
}