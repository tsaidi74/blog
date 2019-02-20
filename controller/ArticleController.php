<?php

require ('./model/ArticleRepository.php');

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
}