<?php

class CommentRepository extends Connect {
    
    function getCommentsByID()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT * FROM comments WHERE id_article = :id');
    $req->bindValue(':id', $_SESSION['id']);
    $req->execute();
    
    $comments=[];
    
    while($data = $req->fetch()){
        $comments[] = $data;
    }
    
    $req->closeCursor();
    

    return $comments;        
    }
    
    function addComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('INSERT INTO comments (comment, comment_date, id_article, id_user) VALUES (:comment, NOW(), 1, 1)');
    $req->bindValue(':comment', $_SESSION['comment']);
    $req->execute();       
    }
    
}
