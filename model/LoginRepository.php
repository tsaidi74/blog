<?php
require('Repository.php');

class LoginRepository  {
    
    function getLogin()
    {
    $db = $this->getDb();

    $req = $bdd->prepare('SELECT username, password FROM user WHERE username = :username');
    $req->execute(array(
    'username' => $username));
    $resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

    if (!$resultat)
    {
        $isPasswordCorrect = false;
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['username'] = $resultat['username'];
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        
    }
