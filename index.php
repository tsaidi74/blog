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

else if ($page === 'updateArticles'){
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['titre'] = $_POST['titre'];
    $_SESSION['contenu'] = $_POST['contenu'];
    $articleController = new ArticleController();
    $articleController->updateArticle();
}

else if ($page === 'deleteArticle'){
    $_SESSION['id'] = $_GET['id'];
    $articleController = new ArticleController();
    $articleController->deleteArticle();
}

else if ($page === 'updateForm'){
    $_SESSION['id'] = $_GET['id'];
    $articleController = new ArticleController();
    $articleController->updateForm();
}

else if ($page === 'detailpost'){
    $_SESSION['id'] = $_GET['id'];
    //var_dump($_SESSION['id']);
    $articleController = new ArticleController();
    $articleController->getArticleById();
}

else if ($page === 'addcomment'){
    $_SESSION['comment'] = $_POST['comment'];
    var_dump($_SESSION['id']);
    $articleController = new ArticleController();
    $articleController->getArticleById();
}
