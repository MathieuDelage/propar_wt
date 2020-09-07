<?php
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <!-- Custom CSS -->
        <link href="css/propar.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>

    <body>

        <!-- Side navigation -->
        <div class="sidenav">
            <a href="login.php">Connexion</a>
            <a href="display_current_tasks.php">Tâches en cours</a>
            <a href="display_terminated_tasks.php">Tâches terminées</a>
        </div>

        <!-- Page content -->
        <div class="main">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Tâches en cours</h5>
                    <p class="card-text"><span id="index_nbCurrentTasks"></span></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Tâches terminées</h5>
                    <p class="card-text"><span id="index_nbTerminatedTasks"></span></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nombre d'employés</h5>
                    <p class="card-text"><span id="index_nbWorkers"></span></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nombre de clients</h5>
                    <p class="card-text"><span id="index_nbCustomers"></span></p>
                </div>
            </div>
        </div>




    </body>

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/index.js"></script>
</html>