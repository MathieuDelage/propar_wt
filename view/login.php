<?php
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form>
            <label for="connexion_login">Entrer votre identifiant : </label>
            <input id="connexion_login" type="text">
            <span id="connexion_missingLogin"></span>
            <label for="connexion_password">Entrer votre mot de passe : </label>
            <input id="connexion_password" type="text">
            <button type="submit" id="connexion_connexion">Connexion</button>
        </form>
    </body>

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Custom JS -->
    <script src="js/login.js"></script>
</html>
