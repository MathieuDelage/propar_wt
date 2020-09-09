<?php
include_once '../model/lib/DBTools.class.php';

// test addWorker()
// OK
// DBTools::addWorker('test','test','Expert','test','test');

DBTools::addWorker('Mathieu','Delage','Expert','admin','admin');
DBTools::addWorker('Théo','Blin','Senior','javascript','javascript');
DBTools::addWorker('Esteban','Leroy','Apprenti','java','java');


// test addCustomer()
// OK
// DBTools::addCustomer('Marie', 'Vigin','Semoule SA');

DBTools::addCustomer('Marie', 'Vigin','Semoule SA');
DBTools::addCustomer('Yann', 'André','Escroc SARL');
DBTools::addCustomer('Thierry', 'Fauconnier',"Haussement d'épaules Inc");
DBTools::addCustomer('Phanuel', 'Gadenne',"Debug SAS");


// test AddTypeOperation()
// OK
// DBTools::addTypeOperation('Petite',1000);

DBTools::addTypeOperation('Petite',1000);
DBTools::addTypeOperation('Moyenne',2500);
DBTools::addTypeOperation('Grosse',10000);


// test AddOperation()
// OK
// DBTools::addOperation( $date, 'Ceci est un test !', '3','1');
//DBTools::addOperation( 'Ceci est un test !', '1','1');
//DBTools::addOperation( 'Ceci est un test !', '2','2');
//DBTools::addOperation( 'Ceci est un test !', '3','3');

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