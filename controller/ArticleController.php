<?php

require ('./model/ArticleRepository.php');
require ('./model/CommentRepository.php');


class ArticleController {
    
    function listAll() {
        
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getArticles();
        require ('./view/affichageAccueil.php');
    }
    
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

    function getArticleById() {
        $articleRepo = new ArticleRepository();
        $article = $articleRepo->getArticleById(); 
       // var_dump($article);   
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsById();
        //var_dump($comments);
        require ('./view/detailpost.php');
    }

}