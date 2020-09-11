$(document).ready(function() {
    $.post(
        '../ctrl/list_current_tasks_withWorkers.action.php',
        function (data) {
            let result = JSON.parse(data);
            result.forEach(function(element) {
                $('#current_tasks_DT').append(
                    "<tr>" +
                    "<th>"+
                    element.client +
                    "</th>" +
                    "<th>"+
                    element.comment +
                    "</th>" +
                    "<th>"+
                    element.worker +
                    "</th>" +
                    "<th>"+
                    element.type +
                    "</th>" +
                    "<th>"+
                    element.date_begin +
                    "</th>" +
                    "</tr>"
                );
            });
            $('#dataTable').DataTable();
        }
    )
});
