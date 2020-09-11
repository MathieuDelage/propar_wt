$(document).ready(function(){
    $.post(
        '../ctrl/list_current_tasks_withoutWorkers.action.php',
        function(data){
            let operations = JSON.parse(data);
            for(let i = 0; i < operations.length; i++){
                $("#assign_task_select_operation").append($('<option>').val(operations[i]['id']).text("Tâche n°" + operations[i]['id']));
            }
        }
    );
})

$(document).ready(function(){
    $.post(
        '../ctrl/get_worker.action.php',
        function(data){
            let worker = JSON.parse(data);
            for(let i = 0; i < worker.length; i++){
                $("#assign_task_select_worker").append($('<option>').val(worker[i]['id']).text(worker[i]['name'] + ' ' + worker[i]['surname'] + ', ' + worker[i]['grade']));
            }
        }
    );
})

$('#assign_task_select_operation').change(function() {
    $.post(
        '../ctrl/get_operation.action.php',
        {
            id : $('#assign_task_select_operation').find(":selected").val()
        },
        function(data){
            let operation = JSON.parse(data);
            $("#assign_task_customer").empty().append(operation[0]['client']);
            $("#assign_task_comment").empty().empty().append(operation[0]['comment']);
            $("#assign_task_typeoperation").empty().append(operation[0]['type']);
            $("#assign_task_dateBegin").empty().append(operation[0]['date_begin']);
        }
    );
})

$('#assign_task_select_worker').change(function() {
    $.post(
        '../ctrl/nbTasks.action.php',
        {
            id : $('#assign_task_select_worker').find(":selected").val()
        },
        function(data){
            let test = JSON.parse(data);
            $('#assign_task_test').text(test).empty();
            $('#assign_task_test').text(test);
        }
    );
})

$('#assign_task_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/assign_task.action.php',
        {
            id_task : $('#assign_task_select_operation').find(":selected").val(),
            id_worker : $('#assign_task_select_worker').find(":selected").val()
        },
        function(data){
            if (data == 'Tâche assignée !') {
                $('#assign_task_ok').append(data);
            } else {
                $('#errorText').empty().append(data);
                $('#errorModal').modal('show');
            }
        }
    )
})

