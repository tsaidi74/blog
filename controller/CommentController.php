<?php

class CommentController {
    
    function commentById() {
        
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsById();

        if ($comments[3] == "0") {
            require ('./view/admin/admin.php');
        }
        else {
            require ('./view/signin.php');
        }

    }

        function addComment() {
        
        $commentRepo = new CommentRepository();
        $commentRepo->addComment();
        $articleRepo = new ArticleRepository();
        $article = $articleRepo->getArticleById(); 
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsById();

        require ('./view/detailpost.php');
    }

    function listAllComments() {
        
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsToValidate();
        require ('./view/admin/admin.php');
    }

    function deleteComment() {
        $commentRepo = new CommentRepository();
        $commentRepo->rejectComment();
        $comments = $commentRepo->getCommentsToValidate();
        require ('./view/admin/admin.php');
    }

        function validateComment() {
        $commentRepo = new CommentRepository();
        $commentRepo->acceptComment();
        $comments = $commentRepo->getCommentsToValidate();
        require ('./view/admin/admin.php');
    }

        function alertComment() {
        $commentRepo = new CommentRepository();
        $commentRepo->signalComment();
       $articleRepo = new ArticleRepository();
        $article = $articleRepo->getArticleById(); 
        $commentRepo = new CommentRepository();
        $comments = $commentRepo->getCommentsById();

        require ('./view/detailpost.php');
    }


}