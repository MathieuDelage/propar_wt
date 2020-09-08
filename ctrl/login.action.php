<?php
session_start();

include_once '../model/lib/DBTools.class.php';

//echo DBTools::logIn('test', 'test');

if( isset($_POST['username']) && isset($_POST['password']) ){
    $result = DBTools::logIn($_POST['username'], $_POST['password']);
    if ( $result == 'Login'){
        $userInfos = DBTools::getUserInfos($_POST['username']);
        $_SESSION['id'] = $userInfos[0]['id'];
        $_SESSION['name'] = $userInfos[0]['name'];
        $_SESSION['surname'] = $userInfos[0]['surname'];
        $_SESSION['grade'] = $userInfos[0]['grade'];
        echo $result;
    }
}

?>