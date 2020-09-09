<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center sidebar-brand-text mx-3">Accueil</div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span>Menu</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="menu.php">Retour au menu</a>
                        <a class="collapse-item" href="take_operation.php">Prendre une tâche</a>
                        <a class="collapse-item" href="display_myOperations.php">Voir mes opérations</a>
                        <a class="collapse-item" href="terminate_operation.php">Terminer une opération</a>
                    </div>
                </div>
            </li>

            <?php
            if ( $_SESSION['grade'] == 'Expert' ){
                echo "<li class='nav-item'>";
                echo "<a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>";
                echo "<span>Menu admin</span>";
                echo "</a>";
                echo "<div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>";
                echo "<div class='bg-white py-2 collapse-inner rounded'>";
                echo "<a class='collapse-item' href='add_worker.php'>Ajouter un employé</a>";
                echo "<a class='collapse-item' href='add_typeOperation.php'>Ajouter un type d'opération</a>";
                echo "<a class='collapse-item'href='add_operation.php'>Ajouter une tâche</a>";
                echo "</div>";
                echo "</div>";
                echo "</li>";
            }
            ?>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span id="deconnexion">Deconnexion</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul  class="navbar-nav ml-auto">
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Vous êtes connecté sur votre espace,
                            <?php
                            echo $_SESSION['name']." ".$_SESSION['surname']."<br>";
                            echo "Employé ".$_SESSION['grade'];
                            ?>
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center mt-5">
                        <form method="post" action ="../ctrl/add_customer.action.php">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nom :</span>
                                    </div>
                                    <input id="add_customer_name" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Prénom :</span>
                                    </div>
                                    <input id="add_customer_surname" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Entreprise :</span>
                                    </div>
                                    <input id="add_customer_company" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Valider le formulaire :" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="add_customer_submit" class="btn btn-outline-secondary" type="subit">Valider</button>
                                    </div>
                                </div>
                                <p><span id="add_customer_ok"></span></p>
                            </div>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="add_customer_errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Erreur !</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div id="add_customer_errorText" class="modal-body">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Page Wrapper -->

    </body>
    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="js/add_customer.js"></script>
    <script src="js/events.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</html>
