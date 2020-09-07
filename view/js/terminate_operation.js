$(document).ready(function(){
    $.post(
        '../ctrl/display_myCurrentOperations.action.php',
        function(data){
            let operations = JSON.parse(data);
            for(let i = 0; i < operations.length; i++){
                $("#terminate_operation_select").append($('<option>').val(operations[i]['id']).text( operations[i]['date_begin'] + ' ' + operations[i]['client']));
            }
        }
    );
})

$('#terminate_operation_select').change(function() {
    $.post(
        '../ctrl/get_operation.action.php',
        {
            id : $('#terminate_operation_select').find(":selected").val()
        },
        function(data){
            let operation = JSON.parse(data);
            $("#terminate_operation_customer").empty().append(operation[0]['client']);
            $("#terminate_operation_comment").empty().empty().append(operation[0]['comment']);
            $("#terminate_operation_typeoperation").empty().append(operation[0]['type']);
            $("#terminate_operation_dateBegin").empty().append(operation[0]['date_begin']);
        }
    );
})

$('#terminate_operation_submit').click(function(){
    $.post(
        '../ctrl/terminate_operation.action.php',
        {
            id_operation : $('#terminate_operation_select').find(":selected").val()
        },
        function(data){
            $("#terminate_operation_ok").append(JSON.parse(data));
        }
    );
})