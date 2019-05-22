<?php

class LoginRepository  extends Connect{
    
    function getLogin()
    {
    $db = $this->getDb();

    $req = $db->prepare('SELECT * FROM user WHERE username = :username');
    $req->execute(array(
    'username' => $_SESSION['username']
    )); 
    $resultat = $req->fetch();

    return $resultat;

    }

     function getId()
    {
    $db = $this->getDb();

    $req = $db->prepare('SELECT id FROM user WHERE username = :username AND password = :password');
    $req->execute(array(
    'username' => $_SESSION['username'],
    'password' => $_SESSION['password'])); 
    $resultat = $req->fetch();

    return $resultat[0];

    }

    function createLogin()
    {
    $db = $this->getDb();


   $_SESSION['password'] =  password_hash($_POST['password'], PASSWORD_DEFAULT);
   //var_dump($_SESSION['password']);

    $req = $db->prepare('INSERT INTO user (username, password) VALUES (:username, :password)');
    $req->execute(array(
    'username' => $_SESSION['username'],
    'password' => $_SESSION['password']));      
    }
}


