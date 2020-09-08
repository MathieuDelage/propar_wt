$.post(
    '../ctrl/display_ca.action.php',
    function(data){
        $('#menu_displayCA').append(JSON.parse(data) + " euros");
    }
)
