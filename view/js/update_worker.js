$(document).ready(function(){
    $.post(
        '../ctrl/get_worker.action.php',
        function(data){
            let worker = JSON.parse(data);
            for(let i = 0; i < worker.length; i++){
                $("#update_worker_workerChoice_select").append($('<option>').val(worker[i]['id']).text( worker[i]['name'] + ' ' + worker[i]['surname'] + ', ' + worker[i]['grade']));
            }
        }
    );
})

$('#update_worker_submit').click(function(e){
    e.preventDefault();
    $.post(
        '../ctrl/update_worker.action.php',
        {
            id : $('#update_worker_workerChoice_select').find(":selected").val(),
            grade : $('#update_worker_gradeChoice_select').find(":selected").val(),
        },
        function(data){
            if (data == "Changement effectué !") {
                $('#update_worker_ok').append(data);
            } else {
                $('#errorText').empty().append(data);
                $('#errorModal').modal('show');
            }

        }
    )
})