$('#add_worker_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/add_worker.action.php',
        {
            name : $('#add_worker_name').val(),
            surname : $('#add_worker_surname').val(),
            grade : $('#add_worker_grade').val(),
            login : $('#add_worker_login').val(),
            password : $('#add_worker_password').val()
        },
        function(data){
            $('#add_worker_ok').append(JSON.parse(data));
        }
    )
})
