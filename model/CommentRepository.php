<?php

class CommentRepository extends Connect {
    
    function getCommentsByID()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT * FROM comments WHERE id_article = :id AND comment_status = "1" OR comment_status = "2"');
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
    
    $req = $db->prepare('INSERT INTO comments (comment, comment_date, id_article, id_user,comment_status) VALUES (:comment, NOW(), :id_article, :id_user,0)');
    $req->bindValue(':comment', $_SESSION['comment']);
    $req->bindValue(':id_article', $_SESSION['id_article']);
    $req->bindValue(':id_user', $_SESSION['id_user']);
    $req->execute();       
    }

    function getCommentsToValidate()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT * FROM comments WHERE comment_status = "0" OR comment_status = "2"');
    $req->execute();
    
    $comments=[];
    
    while($data = $req->fetch()){
        $comments[] = $data;
    }
    
    $req->closeCursor();
    

    return $comments;        
    }

    function rejectComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('DELETE FROM comments WHERE id_comment = :id_comment');
    $req->bindValue(':id_comment', $_SESSION['id_comment']);
    $req->execute();       
    }

    

    function acceptComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('UPDATE comments SET comment_status = "1" WHERE id_comment = :id_comment');
    $req->bindValue(':id_comment', $_SESSION['id_comment']);
    $req->execute();       
    }    


    function signalComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('UPDATE comments SET comment_status = "2" WHERE id_comment = :id_comment');
    $req->bindValue(':id_comment', $_SESSION['id_comment']);
    $req->execute();       
    }    

}
