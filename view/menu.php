<?php
session_start();
?>

<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset="utf-8">
        <!-- Sidebar requirements -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/propar.css" rel="stylesheet">
        <!-- End of Sidebar requirements -->
    </head>

    <body id="menu_menu">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <form class="form-inline my-2 my-md-0"> </form>
            </div>
        </nav>
        <!-- End of Navbar -->
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li> <a href="take_operation.php">Prendre une tâche</a> </li>
                    <li> <a href="display_myOperations.php">Voir mes opérations</a> </li>
                    <li> <a href="terminate_operation.php">Terminer une opération</a> </li>
                    <?php
                        if ($_SESSION['grade'] == 'Expert') {
                            echo "<li><a href='add_worker.php'>Ajouter un employé</a></li>";
                            echo "<li><a href='add_customer.php'>Ajouter un client</a></li>";
                            echo "<li><a href='add_typeOperation.php'>Ajouter un type d'opération</a></li>";
                            echo "<li><a href='add_operation.php'>Ajouter une tâche</a></li>";
                        }
                    ?>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid text-center align-middle row">
                    <?php
                    if ($_SESSION['grade'] == 'Expert') {
                        echo "<div class='card' style='width: 18rem;'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>Chiffre d'affaire</h5>";
                        echo "<p class='card-text'><span id='menu_displayCA'></span></p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                    <div class='card' style='width: 18rem;'>
                        <div class='card-body'>
                            <input type="button" id="menu_logout" value="Déconnexion">
                        </div>
                    </div>
                </div>
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->
    </body>
    <!-- Sidebar requirements -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
    <script>
        $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            $(window).resize(function(e) {
                if($(window).width()<=768){
                    $("#wrapper").removeClass("toggled");
                }else{
                    $("#wrapper").addClass("toggled");
                }
            });
        });
    </script>
    <!-- End of Sidebar requirements -->
    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/menu.js"></script>
</html>