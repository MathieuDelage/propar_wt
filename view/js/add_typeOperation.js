$('#add_typeOperation_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/add_typeOperation.action.php',
        {
            type : $('#add_typeOperation_type').val(),
            price : $('#add_typeOperation_price').val()
        },
        function(data){
            console.log(data);
            if (data == "Type d'opération ajouté !") {
                $('#add_typeOperation_ok').append(data);
            } else {
                $('#errorText').empty().append(data);
                $('#errorModal').modal('show');
            }
        }
    )
})
