<?php

class LoginRepository  extends Connect{
    
    function getLogin()
    {
    $db = $this->getDb();

    $req = $db->prepare('SELECT COUNT(*) FROM user WHERE username = :username AND password = :password');
    $req->execute(array(
    'username' => $_SESSION['username'],
    'password' => $_SESSION['password'])); 
    $resultat = $req->fetch();

    return $resultat[0];

    }

    function createLogin()
    {
    $db = $this->getDb();


    //$pass_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //$pass_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //$passed =password_hash($_SESSION['password'], PASSWORD_DEFAULT);

    //$_SESSION['password'] = password_hash($_SESSION['password'], PASSWORD_DEFAULT);

    $req = $db->prepare('INSERT INTO user (username, password, status, type) VALUES (:username, :password, "1", "1")');
    $req->execute(array(
    'username' => $_SESSION['username'],
    'password' => $_SESSION['password']));      
    }
}
