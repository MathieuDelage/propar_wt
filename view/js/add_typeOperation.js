$('#add_typeOperation_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/add_typeOperation.action.php',
        {
            type : $('#add_typeOperation_type').val(),
            price : $('#add_typeOperation_price').val()
        },
        function(data){
            $('#add_typeOperation_ok').append(JSON.parse((data)));
        }
    )
})
