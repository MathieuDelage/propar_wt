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
                    <li> <a href="#">Connexion</a> </li>
                    <li> <a href="#">Tâches en cours</a> </li>
                    <li> <a href="#">Tâches terminées</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid row">
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
    <script src="js/index.js"></script>
</html>