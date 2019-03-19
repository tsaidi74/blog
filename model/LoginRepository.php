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
}
