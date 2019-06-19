<?php

require ('./model/ArticleRepository.php');
require ('./model/CommentRepository.php');


class ArticleController {
    
    // function listAll() : display the 3 first article

    public function listAll() 
    {  
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getArticles();
        
        require ('./view/affichageAccueil.php');
    }
    
    public function addArticle($titre, $contenu)
    {
        $articleRepo = new ArticleRepository();
        $articleRepo->addArticles($titre, $contenu);
        $articles = $articleRepo->getArticles();
     
        require ('./view/affichageAccueil.php');
    }
  

  // function updateForm()  Select a specific article to update

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


// function getArticleById() : Select a specific article and the comments of this articles
    function getArticleById() {
        $articleRepo = new ArticleRepository();
        $article = $articleRepo->getArticleById(); 
       // var_dump($article);   
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsById();
        //var_dump($comments);
        require ('./view/detailpost.php');
    }


//Select and display all articles in one column 
        function listBlog() {
        
        $articleRepo = new ArticleRepository();
        $articles = $articleRepo->getAllArticles();
        require ('./view/blog.php');
    }

}
