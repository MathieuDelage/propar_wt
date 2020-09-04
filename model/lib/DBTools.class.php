<?php
include_once '../model/Singleton.class.php';

class DBTools
{
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

    public static function addTypeOperation(String $type, Float $price)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("INSERT INTO typeoperation (type, price) VALUES ( :type, :price)");
        $req->execute(array(
            ':type' => $type,
            ':price' => $price
        ));
    }

    public static function addOperation(DateTime $date_begin, String $comment, Int $typeOperation_id, Int $customers_id)
    {
        $date_begin = new DateTime('2020-09-01', new DateTimeZone('Europe/Paris'));
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("INSERT INTO operation (date_begin, comment, typeOperation_id, customers_id) VALUES ( :date_begin, :comment, :typeOperation_id, :customers_id)");
        $req->execute(array(
            ':date_begin' => $date_begin->format('Y-m-d'),
            ':comment' => $comment,
            ':typeOperation_id' => $typeOperation_id,
            ':customers_id' => $customers_id
        ));
    }

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
    public static function deleteWorker(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM workers WHERE id = :id");
        $req->execute(array(
                ':id' => $id
        ));
    }

    public static function deleteCustomer(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM customers WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
    }

    public static function deleteTypeOperation(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM typeoperation WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
    }

    public static function deleteOperation(Int $id)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("DELETE FROM operation WHERE id = :id");
        $req->execute(array(
            ':id' => $id
        ));
    }

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

    public static function viewCA()
    {
        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $date = $date->format('Y-m-d');
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT sum(price) FROM typeoperation INNER JOIN operation ON operation.typeOperation_id = typeoperation.id WHERE date_end IS NOT NULL");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

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

    public static function viewCurrentOperationsWithoutWorker()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT operation.date_begin, operation.comment, CONCAT(customers.name,' ', customers.surname,', ', customers.company) AS client , typeoperation.type
            FROM operation 
            INNER JOIN typeoperation ON operation.typeOperation_id = typeoperation.id 
            INNER JOIN customers ON operation.customers_id = customers.id
            WHERE date_end IS NULL");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

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

    public static function logIn(String $login, String $password)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT login FROM workers WHERE login = :login");
        $req->execute(array(
            ':login' => $login
        ));
        $loginExist = $req->fetchAll();
        if (empty($loginExist)) {
            return 'Login inexistant';
        } else {
            $db = Singleton::getInstance()->getConnection();
            $req = $db->prepare("SELECT login, password FROM workers WHERE login = :login");
            $req->execute(array(
                ':login' => $login
            ));
            $result = $req->fetchAll();
            if ( $login == $result[0]['login'] && password_verify($password, $result[0]['password']) ){
                return true;
            } else {
                return 'Mot de passe incorrect';
            }
        }
    }

    public static function getNbCurrentTasks()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM operation WHERE date_end IS NULL");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    public static function getNbTerminatedTasks()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM operation WHERE date_end IS NOT NULL");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    public static function getNbWorkers()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM workers");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    public static function getNbCustomers()
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT COUNT(*) FROM customers");
        $req->execute();
        $result = $req->fetch();
        return $result[0];
    }

    public static function getUserInfos($login)
    {
        $db = Singleton::getInstance()->getConnection();
        $req = $db->prepare("SELECT * FROM workers WHERE login = :login");
        $req->execute(array(
            ':login' => $login
        ));
        return $req->fetchAll();
    }
}