$(document).ready(function(){
    $.post(
        '../ctrl/display_myOperations.action.php',
        function (data) {
            let operations = JSON.parse(data);
            operations.forEach(function(element) {
                $('#display_myOperation_DT').append(
                    "<tr>" +
                    "<th>"+
                    element.client +
                    "</th>" +
                    "<th>"+
                    element.comment +
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
            $('#dataTable').DataTable();
        }
)
})