$(document).ready(function(){
    $.post(
        '../ctrl/get_nbMyTasks.action.php',
        function(data){
            $("#take_operation_nbTasks").append(JSON.parse(data));
        }
    );
})

$(document).ready(function(){
    $.post(
        '../ctrl/list_current_tasks_withoutWorkers.action.php',
        function(data){
            let operations = JSON.parse(data);
            for(let i = 0; i < operations.length; i++){
                $("#take_operation_select").append($('<option>').val(operations[i]['id']).text(operations[i]['id']));
            }
        }
    );
})

$('#take_operation_select').change(function() {
    $.post(
        '../ctrl/get_operation.action.php',
        {
            id : $('#take_operation_select').find(":selected").val()
        },
        function(data){
            let operation = JSON.parse(data);
            $("#take_operation_customer").empty().append(operation[0]['client']);
            $("#take_operation_comment").empty().empty().append(operation[0]['comment']);
            $("#take_operation_typeoperation").empty().append(operation[0]['type']);
            $("#take_operation_dateBegin").empty().append(operation[0]['date_begin']);
        }
    );
})

$('#take_operation_submit').click(function(){
    $.post(
        '../ctrl/take_operation.action.php',
        {
            id_operation : $('#take_operation_select').find(":selected").val()
        },
        function(data){
            $("#take_operation_ok").append(JSON.parse(data));
        }
    );
})