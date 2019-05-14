<?php session_start(); 
require('controller/ArticleController.php');
require('controller/CommentController.php');
require('controller/LoginController.php');


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
    $_SESSION['titre'] = htmlspecialchars($_POST['titre']);
    $_SESSION['contenu'] = htmlspecialchars($_POST['contenu']);
    $articleController = new ArticleController();
    $articleController->addArticle();
}

else if ($page === 'updateArticles'){
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['titre'] = htmlspecialchars($_POST['titre']);
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
    $_SESSION['comment'] = htmlspecialchars($_POST['comment']);
    $_SESSION['id_user'] = $_GET['id_user'];
    $_SESSION['id_article'] = $_GET['id_article'];  
    //var_dump($_SESSION['id']);
    $commentController = new CommentController();
    $commentController->addcomment();
}

else if ($page === 'login'){
    //var_dump($_POST);
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']);
    $loginController = new LoginController();
    $loginController->login();


}

else if ($page === 'admin') {
    //var_dump($_POST);
    $commentController = new CommentController();
    $commentController->listAllComments();
}

else if ($page === 'deletecomment'){
    $_SESSION['id_comment'] = $_GET['id_comment'];
    //var_dump($_SESSION['id_comment']);
    $commentController = new CommentController();
    $commentController->deleteComment();
}

else if ($page === 'validatecomment'){
    $_SESSION['id_comment'] = $_GET['id_comment'];
    //var_dump($_SESSION['id_comment']);
    $commentController = new CommentController();
    $commentController->validateComment();
}

else if ($page === 'alertcomment'){
    $_SESSION['id_comment'] = $_GET['id_comment'];
    //var_dump($_SESSION['id_comment']);
    $commentController = new CommentController();
    $commentController->alertComment();
}

elseif ($page === 'blog') {
    $articleController = new ArticleController();
    $articleController->listBlog();
}

else if ($page === 'createlogin'){
    //var_dump($_POST);
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']);
    $loginController = new LoginController();
    $loginController->createLogin();
    }

else if ($page === 'deconnect'){
    //var_dump($_POST);
    $loginController = new LoginController();
    $loginController->deconnect();
    }

else if ($page === 'goAdmin'){
    //var_dump($_POST);
    $loginController = new LoginController();
    $loginController->goAdmin();

    }

else if ($page === 'mycv'){
    //var_dump($_POST);
    //$_SESSION['username']  = $_GET['username'];;
    require('./view/cv.php');

    }

else if ($page === 'contact'){
    //$_SESSION['username'] = $_GET['username'];
    //var_dump($_POST);
    require('./view/contact.php');

    }
