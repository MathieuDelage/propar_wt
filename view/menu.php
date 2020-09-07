<?php
session_start();
?>

<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset="utf-8">
    </head>

    <body id="menu_menu">
        <a href='add_worker.php'>Ajouter un employé.</a><br>
        <a href='add_customer.php'>Ajouter un client.</a><br>
        <a href='add_typeOperation.php'>Ajouter un type d'opération.</a><br>
        <a href='add_operation.php'>Ajouter une tâche.</a><br>
        <a href="take_operation.php">Prendre une tâche.</a><br>
        <a href="display_myOperations.php">Voir mes opérations.</a><br>
        <a href="terminate_operation.php">Terminer une opération.</a><br>
        <p>Chiffre d'affaire : <span id="menu_displayCA"></span></p>
        <input type="button" id="menu_logout" value="Déconnexion">
    </body>
    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/menu.js"></script>
</html>