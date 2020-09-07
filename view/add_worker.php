<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
    <form>
        <label for="add_worker_name">Entrer le nom :</label>
        <input type="text" id="add_worker_name"><br>
        <label for="add_worker_surname">Entrez le prénom :</label>
        <input type="text" id="add_worker_surname"><br>
        <label for="add_worker_grade">Entrez le grade :</label>
        <input type="text" id="add_worker_grade"><br>
        <label for="add_worker_login">Entrez l'identifiant :</label>
        <input type="text" id="add_worker_login"><br>
        <label for="add_worker_password">Entrez le mot de passe :</label>
        <input type="text" id="add_worker_password"><br>
        <input type="submit" id="add_worker_submit" value="Ajouter l'employé">
    </form><br>
    <p><span id="add_worker_ok"></span></p>
    <a href="menu.php">Retour au menu</a>
    </body>
    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/add_worker.js"></script>
</html>
