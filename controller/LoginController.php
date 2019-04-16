<?php

require ('./model/LoginRepository.php');

class LoginController {
    
        function login() {
        
        $loginRepo = new LoginRepository();
        $login = $loginRepo->getLogin();
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsToValidate();
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getAllArticles();
        //var_dump ($login);

        if ($login == "1") {
        	require ('./view/admin/admin.php');
        }
        else {
        	require ('./view/signin.php');
        }

        }
        
	// function createLogin()  : add a ne user into the DB & if OK send back the user the homepage

        function createLogin() {
        
        $loginRepo = new LoginRepository();
        $login = $loginRepo->createLogin();
        //var_dump ($login);
        $loginRepo = new LoginRepository();
        $login = $loginRepo->getLogin();
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getArticles();
        //var_dump ($login);

        if ($login == "1") {
        	require ('./view/affichageAccueil.php');
        }
        else {
        	require ('./view/signin.php');
        }

    }
}