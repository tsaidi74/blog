<?php

require ('./model/ArticleRepository.php');

class CommentController {
    
    function listAll() {
        
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getComments();
        require ('./view/affichageAccueil.php');
    }
    /*
    function addArticle() {
        $articleRepo = new ArticleRepository();
        $articleRepo->addArticles();
        $articles = $articleRepo->getArticles();
        require ('./view/affichageAccueil.php');
    }
  
        function updateForm() {
        $articleRepo = new ArticleRepository();
        $article = $articleRepo->getArticleById();
         require ('./view/updateForm.php');
    }

    
    
    function updateArticle() {
        $articleRepo = new ArticleRepository();
        $articleRepo->updateArticles();
        $articles = $articleRepo->getArticles();
        require ('./view/affichageAccueil.php');
    }

    function deleteArticle() {
        $articleRepo = new ArticleRepository();
        $articleRepo->deleteArticles();
        $articles = $articleRepo->getArticles();
        require ('./view/affichageAccueil.php');
    }
}