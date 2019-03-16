<?php

require ('./model/LoginRepository.php');

class LoginController {
    
        function login() {
        
        $logintRepo = new LoginRepository();
        $login = $loginRepo->getLogin();
        require ('./view/signin.php');
    }
}