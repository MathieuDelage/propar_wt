<?php
session_start();

include_once '../model/lib/DBTools.class.php';

if( isset($_POST['username']) && isset($_POST['password']) ){
    $result = DBTools::logIn($_POST['username'], $_POST['password']);
    if ( $result == 1){
        $userInfos = DBTools::getUserInfos($_POST['username']);
    }
    $_SESSION['id'] = $userInfos[0]['id'];
    $_SESSION['name'] = $userInfos[0]['name'];
    $_SESSION['surname'] = $userInfos[0]['surname'];
    $_SESSION['grade'] = $userInfos[0]['grade'];

    $jsonArray = array('name' => $userInfos[0]['name'],'surname' => $userInfos[0]['surname']);
    echo json_encode($jsonArray);
}
?>