<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">

        <!-- Datatable CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    </head>

    <body id="display_myOperation">
        <table id="display_myOperation_datatable" class="display">
            <thead>
            <tr>
                <th>Client</th>
                <th>Commentaire</th>
                <th>Type</th>
                <th>Date d'enregistrement</th>
                <th>Date de cloture</th>
            </tr>
            </thead>
            <tbody id="display_myOperation_DT">

            </tbody>
        </table>
        <a href="menu.php">Retour au menu</a>
    </body>
    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Datatable JS-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <!-- Custom JS -->
    <script src="js/display_myOperations.js"></script>
</html>