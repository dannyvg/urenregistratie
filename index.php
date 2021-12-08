<?php  
session_start();
require('model/functie.php');

    $request = substr($_SERVER['REQUEST_URI'], 1);
    $params = explode("/", $request);



if(isset($_POST['form'])){
    switch($_POST['form']){
       case 1:Inlog();
       break;
       case 2:Registreren();
       break;
    }
}

switch($params[1]){

    case 'home':
        include_once "templates/ingelogd.php"; 
        break;
    case 'projecten':
        $message = test();
        include_once "templates/test.php";
        break;
    case 'uitloggen':
        uitlog();
        break;
    case 'inloggen':
        include_once "templates/inlog-form.php";
        break;
    case 'registreren':
        include_once"templates/registreren-form.php";
        break;

    // case 'ingelogd':
    //     include'templates/ingelogd.php';
    //     break;
    default:
        
}



?>