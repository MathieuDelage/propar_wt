<?php
session_start();

session_destroy();
header("Location: http://localhost/TP_global/propar_wt/view/index.php");
?>