<?php
include '../model/lib/DBTools.class.php';

session_start();

if ( isset($_POST['id_task']) && !empty($_POST['id_task'])
    && isset($_POST['id_worker']) && !empty($_POST['id_worker'])
    && $_POST['id_worker'] != 0 && $_POST['id_task'] != 0){
    DBTools::takeOperation($_POST['id_task'],$_POST['id_worker']);
    echo "Tâche assignée !";
} else if ( $_POST['id_worker'] == 0 && $_POST['id_task'] != 0) {
    echo "Vous n'avez pas sélectionné de travailleur !";
} else if ( $_POST['id_task'] == 0 && $_POST['id_worker'] != 0){
    echo "Vous n'avez pas sélectionné une tâche !";
} else {
    echo "Vous n'avez rien sélectionné !";
}
