$('#add_customer_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/add_customer.action.php',
        {
            name : $('#add_customer_name').val(),
            surname : $('#add_customer_surname').val(),
            company : $('#add_customer_company').val()
        },
        function(data){
            if (data == 'Client crée !') {
                $('#add_customer_ok').append(data);
            } else {
                $('#add_customer_errorText').empty();
                $('#add_customer_errorText').append(data);
                $('#add_customer_errorModal').modal('show');
            }
        }
    )
})
