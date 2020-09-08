$('#connexion_submit').click(function(e){
    e.preventDefault();
     $.post(
        '../ctrl/login.action.php',
        {
            username : $('#connexion_username').val(),
            password : $('#connexion_password').val()
        },
        function(data){
            let result = data;
            console.log(result);
            if ( result == 'Login'){
                window.location = 'menu.php';
            } else {
                alert('Erreur de saisie !');
            }
        }
    )
})

$('#deconnexion').click(function(e){
    e.preventDefault();
    window.location = '../ctrl/logout.action.php';
})

