<?php

require ('./model/LoginRepository.php');

class LoginController {
    
        function login() {
        
        $loginRepo = new LoginRepository();
        $login = $loginRepo->getLogin();
        $_SESSION['id'] = $loginRepo->getId();
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsToValidate();
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getAllArticles();
        //var_dump ($login);

        if (password_verify ($_SESSION['password'], $login['password']))
        {

        	require ('./view/admin/admin.php');
        }
        else { 
        	unset($_SESSION['username']);
        	unset($_SESSION['password']);
        	require ('./view/signin.php');
        }

        }
        
	// function createLogin()  : add a user into the DB & if OK send back the user the homepage

        function createLogin() {
        
        $loginRepo = new LoginRepository();
        $loginRepo->createLogin();
        $login = $loginRepo->getLogin();
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getArticles();
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsToValidate();
        //var_dump ($login);
		if ($login == "1") {
        	require ('./view/admin/admin.php');
        }
        else {
        	require ('./view/signin.php');
        	}

    }

        function deconnect() {

       	$articleRepo = new ArticleRepository();
        $articles = $articleRepo->getArticles();
        
  		if (isset($_SESSION['username']))

  		{ // Si tu es connecté on te déconnecte et on te redirige vers une page.
  
        // Supression des variables de session
        $_SESSION = array();
        session_destroy();
        //unset($_SESSION['username'])
          
        require ('./view/AffichageAccueil.php');
  
    	}
    }

    

        function goAdmin() {

        $loginRepo = new LoginRepository();
        $login = $loginRepo->getLogin();
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsToValidate();
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getAllArticles();
        
  		if (isset($_SESSION['username'])) {

  
        require ('./view/admin/admin.php'); 
		}
		else {
         
        require ('./view/AffichageAccueil.php');
  
    	}
    }

}
