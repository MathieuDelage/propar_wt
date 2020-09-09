<?php

include_once '../model/lib/DBTools.class.php';
if( isset($_POST['comment']) && !empty($_POST['comment'])
    && isset($_POST['typeOperation_id'])  && !empty($_POST['typeOperation_id'])
    && isset($_POST['customers_id']) && !empty($_POST['customers_id'])){
    DBTools::addOperation($_POST['comment'], $_POST['typeOperation_id'], $_POST['customers_id']);
    echo 'Tâche ajoutée !';
}else {
    echo "Vous avez oublié de remplir des champs !";
}
