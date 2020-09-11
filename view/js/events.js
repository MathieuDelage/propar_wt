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
            if ( result == 'Login'){
                window.location = '../view/menu.php';
            } else {
                $('#errorText').empty();
                $('#errorText').append(data);
                $('#errorModal').modal('show');
            }
        }
    )
})

$('#deconnexion').click(function(e){
    e.preventDefault();
    window.location = '../ctrl/logout.action.php';
})

