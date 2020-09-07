<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <select id="take_operation_select">
            <option>-- Sélectionnez l'opération --</option>
        </select><br>
        <p>
            Client : <span id="take_operation_customer"></span><br>
            Commentaire : <span id="take_operation_comment"></span><br>
            Type d'opération : <span id="take_operation_typeoperation"></span><br>
            Date d'enregistrement : <span id="take_operation_dateBegin"></span><br>
        </p>
        <input id="take_operation_submit" type="submit" value=Prendre tâche"><br>
        <p><span id="take_operation_ok"></span></p>
        <a href="menu.php">Retour au menu</a>
    </body>
    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/take_operation.js"></script>
</html>
