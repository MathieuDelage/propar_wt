$(document).ready(function(){
    $.post(
        '../ctrl/get_customers.action.php',
        function(data){
            let customers = JSON.parse(data);
            for(let i = 0; i < customers.length; i++){
                $("#add_operation_clientChoice_select").append($('<option>').val(customers[i]['id']).text( customers[i]['name'] + ' ' + customers[i]['surname'] + ', ' + customers[i]['company']));
            }
        }
    );

    $.post(
        '../ctrl/get_typeOperation.action.php',
        function(data){
            let typeOperation = JSON.parse(data);
            for(let i = 0; i < typeOperation.length; i++){
                $("#add_operation_typeOperationChoice_select").append($('<option>').val(typeOperation[i]['id']).text(typeOperation[i]['type'] + ', ' + typeOperation[i]['price'] + ' euros'));
            }
        }
    );
})

$('#add_operation_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/add_operation.action.php',
        {
            comment : $('#add_operation_comment').val(),
            typeOperation_id : $('#add_operation_typeOperationChoice_select').find(":selected").val(),
            customers_id : $('#add_operation_clientChoice_select').find(":selected").val()
        },
        function(data){
            $('#add_operation_ok').append(JSON.parse(data));
        }
    )
})
