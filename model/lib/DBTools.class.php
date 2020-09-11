<?php
include_once '../model/Singleton.class.php';

class DBTools
{
    /*
     * Fonction d'jaout d'un employé
     */
    public static function addWorker(String $name, String $surname,String $grade, String $login, String $password)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("INSERT INTO workers (name, surname, grade, login, password) VALUES ( :name, :surname, :grade, :login, :password)");
        $req->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':grade' => $grade,
            ':login' => $login,
            ':password' => password_hash($password, PASSWORD_BCRYPT)
        ));
    }

    /*
     * Fonction d'ajout d'un client
     */
    public static function addCustomer(String $name, String $surname,String $company)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("INSERT INTO customers (name, surname, company) VALUES ( :name, :surname, :company)");
        $req->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':company' => $company
        ));
    }

    /*
     * Fonction d'ajout d'un type de tâche
     */
    public static function addTypeOperation(String $type, Float $price)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("INSERT INTO typeoperation (type, price) VALUES ( :type, :price)");
        $req->execute(array(
            ':type' => $type,
            ':price' => $price
        ));
    }

    /*
     * Fonction d'ajout d'une tâche
     */
    public static function addOperation(String $comment, Int $typeOperation_id, Int $customers_id)
    {
        $date_begin = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("INSERT INTO operation (date_begin, comment, typeOperation_id, customers_id) VALUES ( :date_begin, :comment, :typeOperation_id, :customers_id)");
        $req->execute(array(
            ':date_begin' => $date_begin->format('Y-m-d'),
            ':comment' => $comment,
            ':typeOperation_id' => $typeOperation_id,
            ':customers_id' => $customers_id
        ));
    }

    /*
     * Fonction de modification d'un employé
     */
    public static function updateWorker(Int $id, String $name, String $surname,String $grade, String $login, String $password)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("UPDATE workers SET name = :newName, surname = :newSurname, grade= :newGrade, login = :newLogin, password = :newPassword WHERE id = :id");
        $req->execute(array(
            ':id' => $id,
            ':newName' => $name,
            ':newSurname' => $surname,
            ':newGrade' => $grade,
            ':newLogin' => $login,
            ':newPassword' => password_hash($password, PASSWORD_BCRYPT)
        ));
    }

    /*
     * Fonction de modification d'un client
     */
    public static function updateCustomer(Int $id, String $name, String $surname,String $company)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("UPDATE customers SET name = :newName, surname = :newSurname, company = :newCompany WHERE id = :id");
        $req->execute(array(
            ':id' => $id,
            ':newName' => $name,
            ':newSurname' => $surname,
            ':newCompany' => $company
        ));
    }

    /*
     * Fonction de modification d'un type de tâche
     */
    public static function updateTypeOperation(Int $id, String $type, Float $price)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("UPDATE typeoperation SET type = :newType, price = :newPrice WHERE id = :id");
        $req->execute(array(
            ':id' => $id,
            ':newType' => $type,
            ':newPrice' => $price
        ));
    }

    /*
     * Fonction de modification d'une tâche
     */
    public static function updateOperation(Int $id, DateTime $date_begin, String $comment, Int $typeOperation_id, Int $customers_id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("UPDATE operation SET comment = :newComment, typeOperation_id = :newTypeOperation_id, customers_id = :newCustomers_id WHERE id = :id");
        $req->execute(array(
            ':id' => $id,
            ':newComment' => $comment,
            ':newTypeOperation_id' => $typeOperation_id,
            ':newCustomers_id' => $customers_id
        ));
    }

    /*
     * Fonction de suppression d'un employé
     */
    public static function deleteWorker(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM workers WHERE id = :id");
        $req->execute(array(
                ':id' => $id
        ));
    }

    /*
     * Fonction de suppression d'un client
     */
    public static function deleteCustomer(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM customers WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
    }

    /*
     * Fonction de suppresion d'un type de tâche
     */
    public static function deleteTypeOperation(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM typeoperation WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
    }

    /*
     * Fonction de suppression d'une tâche
     */
    public static function deleteOperation(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM operation WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
    }

    /*
     * Fonction pour terminer une tâches à la date d'aujourd'hui
     */
    public static function terminateOperation(Int $id)
    {
        $date_end = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("UPDATE operation SET date_end = :date_end WHERE id = :id");
        $req->execute(array(
            ':id' => $id,
            ':date_end' => $date_end->format('Y-m-d'),
        ));
    }

    /*
     * Fonction pour récupérer le chiffre d'affaire
     */
    public static function viewCA()
    {
        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $date = $date->format('Y-m-d');
        $db = Singleton::getInstance()->getConnection();
        $req = $db->query("CALL get_CA;");
        $result = $req->fetch();
        return $result[0];
    }

    /*
     * Fonction pour récupérer les tâches en cours affectées
     */
    public static function viewCurrentOperationsWithWorker()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT operation.date_begin, operation.comment, CONCAT(customers.name,' ', customers.surname,', ', customers.company) AS client, CONCAT(workers.name, ' ', workers.surname, ', ', workers.grade) AS worker, typeoperation.type
            FROM operation 
            INNER JOIN typeoperation ON operation.typeOperation_id = typeoperation.id 
            INNER JOIN workers ON operation.workers_id = workers.id 
            INNER JOIN customers ON operation.customers_id = customers.id
            WHERE date_end IS NULL");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
     * Fonction pour récupérer les tâches en cours non affectées
     */
    public static function viewCurrentOperationsWithoutWorker()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT operation.id, operation.date_begin, operation.comment, CONCAT(customers.name,' ', customers.surname,', ', customers.company) AS client , typeoperation.type
            FROM operation 
            INNER JOIN typeoperation ON operation.typeOperation_id = typeoperation.id 
            INNER JOIN customers ON operation.customers_id = customers.id
            WHERE date_end IS NULL AND workers_id IS NULL");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
     * Fonction pour récupérer les tâches terminées
     */
    public static function viewTerminatedOperations()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT operation.date_begin, operation.date_end, operation.comment, CONCAT(customers.name,' ', customers.surname,', ', customers.company) AS client, CONCAT(workers.name, ' ', workers.surname, ', ', workers.grade) AS worker, typeoperation.type
            FROM operation 
            INNER JOIN typeoperation ON operation.typeOperation_id = typeoperation.id 
            INNER JOIN workers ON operation.workers_id = workers.id 
            INNER JOIN customers ON operation.customers_id = customers.id
            WHERE date_end IS NOT NULL");
        $req->execute();
        $result= $req->fetchAll();
        return $result;
    }

    /*
     * Fonction pour récupérer les tâches en cours de l'employé
     */
    public static function viewOperationByWorker(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT operation.date_begin, operation.comment, customers.name, customers.surname, customers.company, typeoperation.type
            FROM operation 
            INNER JOIN typeoperation ON operation.typeOperation_id = typeoperation.id 
            INNER JOIN workers ON operation.workers_id = workers.id 
            INNER JOIN customers ON operation.customers_id = customers.id
            WHERE workers.id = :id AND date_end IS NULL");
        $req->execute(array(
            ':id' => $id
        ));
        $result= $req->fetchAll();
        return $result;
    }

    /*
     * Fonction de vérification du couple identifiant/mot de passe
     */
    public static function logIn(String $login, String $password)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_login(:login);");
        $req->execute(array(
            ':login' => $login
        ));
        $result = $req->fetch();
        if ( $login == $result['login'] && password_verify($password, $result['password']) ){
            return 'Login';
        }
    }

    /*
     * Fonction pour récupérer le nombre de tâches en cours
     */
    public static function getNbCurrentTasks()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM operation WHERE date_end IS NULL");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    /*
     * Fonction pour récupérer le nombre de tâches terminées
     */
    public static function getNbTerminatedTasks()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM operation WHERE date_end IS NOT NULL");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    /*
     * Fonction pour récupérer le nombre d'employés
     */
    public static function getNbWorkers()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM workers");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    /*
     * Fonction pour récupérer le nombre de clients
     */
    public static function getNbCustomers()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM customers");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    /*
     * Fonction pour récupérer les informations de l'employé avec son login
     */
    public static function getUserInfos($login)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT * FROM workers WHERE login = :login");
        $req->execute(array(
            ':login' => $login
        ));
        return $req->fetchAll();
    }

    /*
     * Fonction pour récupérer les différents clients
     */
    public static function getCustomers()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT id, name, surname, company FROM customers");
        $req->execute(array(
        ));
        return $req->fetchAll();
    }

    /*
     * Fonction pour récupérer les différents types de tâches
     */
    public static function getTypeOperation()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT id, type, price FROM typeoperation");
        $req->execute(array(
        ));
        return $req->fetchAll();
    }

    /*
     * fonction pour sélectionner une tâche en cours selon son id
     */
    public static function getOperation(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT operation.date_begin, operation.comment, CONCAT(customers.name,' ', customers.surname,', ', customers.company) AS client , typeoperation.type
            FROM operation 
            INNER JOIN typeoperation ON operation.typeOperation_id = typeoperation.id 
            INNER JOIN customers ON operation.customers_id = customers.id
            WHERE date_end IS NULL AND operation.id = :id");
        $req->execute(array(
            ':id' => $id
        ));
        $result = $req->fetchAll();
        return $result;
    }

    /*
     * Fonction pour prendre une tâche
     */
    public static function takeOperation(Int $id, Int $workers_id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL update_operationOwner(:id, :workers_id);");
        $req->execute(array(
            ':id' => $id,
            ':workers_id' => $workers_id
        ));
    }

    /*
     * Fonction pour afficher les tâches en cours et terminées de l'employé
     */
    public static function displayMyOperations(Int $id){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_workerTerminatedOperations(:id);");
        $req->execute(array(
            ':id' => $id,
        ));
        return $req->fetchAll();
    }

    /*
     * Fonction pour afficher les tâches en cours de l'employé
     */
    public static function displayMyCurrentOperations(Int $id){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_workerOperations(:id);");
        $req->execute(array(
            ':id' => $id,
        ));
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
     * Fonction pour récupérer le nombre de tâches en cours de l'employé
     */
    public static function getNbTasks(Int $id){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_nbTasks(:id);");
        /*$req = $db->prepare("SELECT count(*)
            FROM operation 
            WHERE workers_id = :id AND date_end IS NULL");*/
        $req->execute(array(
            ':id' => $id,
        ));
        return $req->fetch();
    }

    /*
     * Fonction pour vérifier si l'identifiant existe déjà
     */
    public static function loginExist(String $login){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_login_ifexist(:login);");
        /*$req = $db->prepare("SELECT login
            FROM workers 
            WHERE login = :login");*/
        $req->execute(array(
            ':login' => $login,
        ));
        $tmp = $req->fetch();
        if ( $tmp[0] == $login){
            return 1;
        }else {
            return 0;
        }
    }

    /*
     * Fonction pour vérifier si le client existe déjà
     */
    public static function customerExist(String $name, String $surname, String $company){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_customer_ifexist(:company, :name, :surname);");
        $req->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':company' => $company,
        ));
        $tmp = $req->fetch();
        if ( $tmp['name'] == $name && $tmp['surname'] == $surname && $tmp['company'] == $company){
            return 1;
        }else {
            return 0;
        }
    }

    /*
     * Fonction pour vérifier si un type de tâche existe déjà
     */
    public static function typeOperationExist(String $type, Float $price){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL get_TO_ifexist(:type, :price);");
        $req->execute(array(
            ':type' => $type,
            ':price' => $price,
        ));
        $tmp = $req->fetch();
        if ( $tmp['type'] == $type && $tmp['price'] == $price){
            return 1;
        }else {
            return 0;
        }
    }

    /*
     * Fonction pour récupérer tous les employés
     */
    public static function getWorkers(){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->query("CALL get_workers;");
        return $req->fetchAll();
    }

    /*
     * Fonction pour modifier le rôle d'un employé
     */
    public static function updateWorkerGrade(Int $id, String $grade){
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("CALL update_worker_grade(:id, :grade);");
        $req->execute(array(
            ':id' => $id,
            ':grade' => $grade,
        ));
    }

    /*
     * Fonction pour récupérer le grade de l'employé
     */
    public static function getUserGrade($id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT grade FROM workers WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
        $tmp = $req->fetch();
        return $tmp[0];
    }

}