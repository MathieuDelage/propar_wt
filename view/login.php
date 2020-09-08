<?php
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

    <body>

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
                    <li> <a href="index.php">Retour au menu</a> </li>
                    <li> <a href="display_current_tasks.php">Tâches en cours</a> </li>
                    <li> <a href="display_terminated_tasks.php">Tâches terminées</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <form>
                    <div class="container-fluid d-flex justify-content-between text-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <label for="connexion_login">Entrez votre identifiant</label><br>
                                <input id="connexion_login" type="text">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <label for="connexion_password">Entrez votre mot de passe</label><br>
                                <input id="connexion_password" type="text">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center">
                                <br><button type="submit" id="connexion_connexion">Connexion</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text"><span id="login_ko"></span></p>
                            </div>
                        </div>
                    </div>
                </form>
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
    <script src="js/login.js"></script>
</html>
