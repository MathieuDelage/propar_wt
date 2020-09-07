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
        <label for="add_operation_comment">Commentaire :</label>
        <input type="text" id="add_operation_comment"><br>
        <select id="add_operation_typeOperationChoice_select">
            <option>-- Sélectionnez un type de tâche --</option>
        </select><br>
        <select id="add_operation_clientChoice_select">
            <option>-- Sélectionnez un client --</option>
        </select><br>
        <p>Affectez la tâche immédiatement ?</p>
        <input type="submit" id="add_operation_submit" value="Créer la tâche'">
    </form>
    <br>
    <p><span id="add_operation_ok"></span></p>
    <a href="menu.php">Retour au menu</a>
</body>
<!-- JQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Custom JS -->
<script src="js/add_operation.js"></script>
</html>
