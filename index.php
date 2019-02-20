<?php
require('controller/ArticleController.php');

if (isset($_GET['page']) && !empty($_GET['page'])) {
    
    $page = $_GET['page'];
    }
    
    else{
        $page = 'home';
    }
if ($page === 'home') {
    $articleController = new ArticleController();
    $articleController->listAll();
}

else if ($page === 'addArticle'){
    $_SESSION['titre'] = $_POST['titre'];
    $_SESSION['contenu'] = $_POST['contenu'];
    $articleController = new ArticleController();
    $articleController->addArticle();
}