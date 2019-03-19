<?php

require ('./model/LoginRepository.php');

class LoginController {
    
        function login() {
        
        $loginRepo = new LoginRepository();
        $login = $loginRepo->getLogin();
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsToValidate();
        var_dump ($login);

        if ($login == "1") {
        	require ('./view/admin/admin.php');
        }
        else {
        	require ('./view/signin.php');
        }

    }
}