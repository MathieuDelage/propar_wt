<?php
include_once '../model/lib/DBTools.class.php';

// test addWorker()
// OK
// DBTools::addWorker('test','test','Expert','test','test');
DBTools::addWorker('test','test','Expert','test','test');
DBTools::addWorker('toto','tata','Senior','test2','test2');
DBTools::addWorker('toto2','tata2','Apprenti','test3','test3');

// test addCustomer()
// OK
// DBTools::addCustomer('Marie', 'Vigin','Semoule SA');
DBTools::addCustomer('Marie', 'Vigin','Semoule SA');
DBTools::addCustomer('Yann', 'André','Escroc SARL');
DBTools::addCustomer('Thierry', 'Fauconnier',"Haussement d'épaules Inc");

// test AddTypeOperation()
// OK
// DBTools::addTypeOperation('Petite',1000);
DBTools::addTypeOperation('Petite',1000);
DBTools::addTypeOperation('Moyenne',2500);
DBTools::addTypeOperation('Grosse',10000);

// test AddOperation()
// OK
// DBTools::addOperation( $date, 'Ceci est un test !', '3','1');

// test updateWorker()
// OK
// DBTools::updateWorker(1,'Titi','Tutu','Senior','TitiTest','TutuTest');

// test updateCustomer()
// OK
// DBTools::updateCustomer(2,'Yann','André', 'Escroc Inc');

// test updateTypeOperation()
// OK
// DBTools::updateTypeOperation(1,'TestBis',2000);

// test updateOperation()
// OK
// DBTools::updateOperation(1, 'Ceci est un autre test !', '1','1');

// test deleteWorker()
// OK
// DBTools::deleteWorker(1);

// test deleteCustomer()
// OK
// DBTools::deleteCustomer(1);

// test deleteTypeOperation()
// OK
// DBTools::deleteTypeOperation(1);

// test deleteOperation()
// OK
// DBTools::deleteOperation(1);

// test terminateOperation()
// OK
// DBTools::terminateOperation(1, $date);

// test viewCA()
// OK
// echo DBTools::viewCA();
// var_dump(DBTools::viewCA());

// test viewCurrentOperations()
// OK
// var_dump(DBTools::viewCurrentOperations());


// test viewTerminatedOperation()
// OK
// var_dump(DBTools::viewTerminatedOperations());

// test viewOperationByWorker()
// OK
// var_dump(DBTools::viewOperationByWorker(1));

// test logIn()
// OK
// echo DBTools::logIn('test', 'test');

// test searchClearance()
// OK
// echo DBTools::searchClearance('test');

// test LogIn() + searchClearance()
// OK
// echo DBTools::logIn('test', 'test');

// test viewCurrentOperationsWithoutWorker()
// OK
// var_dump(DBTools::viewCurrentOperationsWithoutWorker());

// test viewCurrentOperationsWithWorker()
// OK
// var_dump(DBTools::viewCurrentOperationsWithWorker());

?>