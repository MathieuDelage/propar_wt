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
    <label for="add_typeOperation_type">Entrez le type d'opération :</label>
    <input type="text" id="add_typeOperation_type"><br>
    <label for="add_typeOperation_price">Entrez le prix :</label>
    <input type="text" id="add_typeOperation_price"><br>
    <input type="submit" id="add_typeOperation_submit" value="Ajouter un type d'opératon">
</form>
<br>
<p><span id="add_typeOperation_ok"></span></p>
<a href="menu.php">Retour au menu</a>
</body>
<!-- JQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Custom JS -->
<script src="js/add_typeOperation.js"></script>
</html>
