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
            <div class="sidebar-brand d-flex align-items-center justify-content-center sidebar-brand-text mx-3">Menu</div>

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
                        <a class="collapse-item" href="take_operation.php">Prendre une tâche</a>
                        <a class="collapse-item" href="display_myOperations.php">Voir mes tâches</a>
                        <a class="collapse-item" href="terminate_operation.php">Terminer une tâche</a>
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
                            echo "<a class='collapse-item' href='add_customer.php'>Ajouter un client</a>";
                            echo "<a class='collapse-item' href='add_typeOperation.php'>Ajouter un type de tâche</a>";
                            echo "<a class='collapse-item'href='add_operation.php'>Ajouter une tâche</a>";
                            echo "<a class='collapse-item'href='update_worker.action.php'>Changer le rôle</a>";
                            echo "<a class='collapse-item'href='assign_task.php'>Assigner une tâche</a>";
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
                                echo $_SESSION['surname']." ".$_SESSION['name']."<br>";
                                echo "Employé ".$_SESSION['grade'];
                            ?>
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Display CA -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <?php
                            if ($_SESSION['grade'] == 'Expert')
                            {
                            echo "<div class='card border-left-primary shadow h-100 py-2'>";
                                echo "<div class='card-body'>";
                                    echo "<div class='row no-gutters align-items-center'>";
                                        echo "<div class='col mr-2'>";
                                            echo "<div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>Chiffre d'affaire</div>";
                                            echo "<div id='menu_displayCA' class='h5 mb-0 font-weight-bold text-gray-800'></div>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            }
                            ?>
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
    <script src="js/menu.js"></script>
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