<?php


class CommentController {
    
    function commentById() {
        
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsById();
    }

        function addComment() {
        
        $commentRepo = new CommentRepository();
        $commentRepo->addComment();
        require ('./view/detailpost.php');
    }

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