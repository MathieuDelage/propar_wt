<?php
session_start();

session_destroy();
header("Location: http://localhost/TP_global/projet/view/index.php");
?>