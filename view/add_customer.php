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
        <label for="add_customer_name">Entrer le nom :</label>
        <input type="text" id="add_customer_name"><br>
        <label for="add_customer_surname">Entrez le prénom :</label>
        <input type="text" id="add_customer_surname"><br>
        <label for="add_customer_company">Entrez le nom de l'entreprise :</label>
        <input type="text" id="add_customer_company"><br>
        <input type="submit" id="add_customer_submit" value="Ajouter le client">
    </form>
<br>
<p><span id="add_customer_ok"></span></p>
<a href="menu.php">Retour au menu</a>
</body>
<!-- JQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Custom JS -->
<script src="js/add_customer.js"></script>
</html>
