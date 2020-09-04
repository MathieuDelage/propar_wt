<?php
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <a href="login.php">Connexion</a><br>
        <a href="display_current_tasks.php">Afficher les tâches en cours</a><br>
        <a href="display_terminated_tasks.php">Afficher les tâches terminées</a><br>
        <p>Nombre de tâches en cours : <span id="index_nbCurrentTasks"></span></p>
        <p>Nombre de tâches terminées : <span id="index_nbTerminatedTasks"></span></p>
        <p>Nombre d'employés : <span id="index_nbWorkers"></span></p>
        <p>Nombre de clients : <span id="index_nbCustomers"></span></p>
    </body>

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/index.js"></script>
</html>