<?php
session_start();


include_once '../model/lib/DBTools.class.php';
if (isset($_SESSION['nb']) && $_SESSION['nb'] > 0)
{
    if (isset($_POST['id_operation']) && isset($_SESSION['id'])){
        DBTools::takeOperation($_POST['id_operation'], $_SESSION['id']);
        echo "Opération assignée !";
    }
} else {
    echo "Vous ne pouvez plus prendre de tâche !";
}
