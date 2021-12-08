<?php

function test() {
    $text = "hallo vanuit php";
    return $text;    
}



function Inlog(){
    
    $pdo = require_once('secure/connect.php');
    if(isset($_POST['email']))
    {  
        // var_dump($_GET); die;
        require 'secure/config.php';
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $hashed = hash('sha256', $password);

        $sql = 'SELECT email, password, Voornaam, Tussenvoegsel, Achternaam FROM gebruikers WHERE email = :email';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':email', $email);
        $statement->execute([
            ':email' => $email,
        ]);

        $user = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump($user);die;
        if(is_array($user)){
            
            if($user['password'] == $hashed){
                $_SESSION['email'] = $user['email'];
                $_SESSION['loggedin'] = TRUE;

                $_SESSION['Voornaam'] = $user['Voornaam'];
                $_SESSION['Tussenvoegsel'] = $user['Tussenvoegsel'];
                $_SESSION['Achternaam'] = $user['Achternaam'];
                // $_SESSION['Tussenvoegsel'] = $user['tussenvoegsel'];
                // $_SESSION['Achternaam'] = $user['achternaam'];

                 require_once'templates/ingelogd.php';
            }else{
                require_once'templates/foutinlog.php';
            }
        }
        
    }

}



function uitlog(){
    session_unset();
    if(isset($_SESSION)){
        session_destroy();
        inlog();
        include 'templates/inlog-form.php';
    }
}


function Registreren(){
    $pdo = require_once('secure/connect.php');
    require 'secure/config.php';
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $Voor = $_POST['Voor'];
        $Tussen = $_POST['Tussen'];
        $Achter = $_POST['Achter'];

        $hashed = hash('sha256', $password);
        

        $sql = 'INSERT INTO gebruikers(email, password, Voornaam, Tussenvoegsel,Achternaam) 
                VALUES(:email, :pass, :voor, :tussen, :achternaam)';
        $statement = $pdo->prepare($sql);
        $statement->execute([
            ':email' => $email,
            ':pass' => $hashed,
            ':voor' => $Voor,
            ':tussen' => $Tussen,
            ':achternaam' => $Achter
        ]);
        header('Location: inloggen');

}

?>