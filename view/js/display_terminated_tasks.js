/*
 * Récupère les tâche terminées
 */

$.post(
    '../ctrl/list_terminated_tasks.action.php',
    function (data) {
        let result = JSON.parse(data);
        console.log(result);
        result.forEach(function(element) {
            $('#terminatedTasks_DT').append(
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
                "<th>"+
                element.date_end +
                "</th>" +
                "</tr>"
            );
        });
    }
)
