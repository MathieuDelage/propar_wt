
/*
 * Affichage du nombre de tâches en cours sur la page d'accueil
 */
$.post(
    '../ctrl/nb_current_tasks.action.php',
    function(data){
        $('#index_nbCurrentTasks').append(JSON.parse(data));
    }
)

/*
 * Affichage du nombre de tâches terminées sur la page d'accueil
 */
$.post(
    '../ctrl/nb_terminated_tasks.action.php',
    function(data){
        $('#index_nbTerminatedTasks').append(JSON.parse(data));
    }
)

/*
 * Affichage du nombre d'employés' sur la page d'accueil
 */
$.post(
    '../ctrl/nb_workers.action.php',
    function(data){
        $('#index_nbWorkers').append(JSON.parse(data));
    }
)

/*
 * Affichage du nombre de clients sur la page d'accueil
 */
$.post(
    '../ctrl/nb_customers.action.php',
    function(data){
        $('#index_nbCustomers').append(JSON.parse(data));
    }
)
