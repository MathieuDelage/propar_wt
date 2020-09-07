<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
</head>

<body>
    <form>
        <select id="terminate_operation_select">
            <option>-- Sélectionnez une opération --</option>
        </select>
        <p>
            Client : <span id="terminate_operation_customer"></span><br>
            Commentaire : <span id="terminate_operation_comment"></span><br>
            Type d'opération : <span id="terminate_operation_typeoperation"></span><br>
            Date d'enregistrement : <span id="terminate_operation_dateBegin"></span><br>
        </p>
    </form>
    <input id="terminate_operation_submit" type="submit" value="Cloturer tâche"><br>
    <p><span id="terminate_operation_ok"></span></p>
    <a href="menu.php">Retour au menu</a>
</body>
<!-- JQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Custom JS -->
<script src="js/terminate_operation.js"></script>
</html>

