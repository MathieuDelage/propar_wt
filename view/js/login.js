/*
* requête AJAX pour le login
*/
$('#connexion_connexion').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/login.action.php',
        {
            username : $('#connexion_login').val(),
            password : $('#connexion_password').val()
        },
        function(data){
            if ( data == 1){
                window.location = '../view/menu.php';
            }
        }
    )
})