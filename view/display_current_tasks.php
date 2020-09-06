<?php
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">

        <!-- Datatable CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    </head>

    <body id="currentTasks">
        <table id="currentTasks_datatable" class="display">
            <thead>
                <tr>
                    <th>Client</th>
                    <th>Commentaire</th>
                    <th>Employé</th>
                    <th>Type</th>
                    <th>Date d'enregistrement</th>
                </tr>
            </thead>
            <tbody id="currentTasks_DT">

            </tbody>
        </table>
        <a href="index.php">Retour au menu</a>
    </body>

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Datatable JS-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <!-- Custom JS -->
    <script src="js/display_current_tasks.js"></script>
</html>
