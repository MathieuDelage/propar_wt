$( "#menu_logout" ).click(function() {
    window.location = "../ctrl/logout.action.php";
});

$.post(
    '../ctrl/display_ca.action.php',
    function(data){
        $('#menu_displayCA').append(JSON.parse(data));
    }
)


