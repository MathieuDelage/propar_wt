/*
* Affichage du nombre de tâches en cours
 */

$.post(
    '../ctrl/nb_current_tasks.action.php',
    function (data) {
        let result = JSON.parse(data);
        $('#currentTasks').append(result);
    }
)


/*
* Affichage du nombre de tâches terminées
 */

$.post(
    '../ctrl/nb_terminated_tasks.action.php',
    function (data) {
        let result = JSON.parse(data);
        $('#terminatedTasks').append(result);
    }
)


/*
* Affichage du nombre d'employés'
 */

$.post(
    '../ctrl/nb_workers.action.php',
    function (data) {
        let result = JSON.parse(data);
        $('#nbWorkers').append(result);
    }
)


/*
* Affichage du nombre de clients
 */

$.post(
    '../ctrl/nb_customers.action.php',
    function (data) {
        let result = JSON.parse(data);
        $('#nbCustomers').append(result);
    }
)

