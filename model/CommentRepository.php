<?php

class CommentRepository extends Connect {
    
    function getCommentsByID()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT * FROM comments WHERE id_article = :id AND comment_status = 1 OR comment_status = 2');
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
    
    $req = $db->prepare('INSERT INTO comments (comment, comment_date, id_article, id_user,comment_status) VALUES (:comment, NOW(), :id_article, :id_user, 0)');
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

    // Function to delete a comment if the admin reject it

    function rejectComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('DELETE FROM comments WHERE id_comment = :id_comment');
    $req->bindValue(':id_comment', $_SESSION['id_comment']);
    $req->execute();       
    }

    // Function to validate a comment if the admin accept it and modify the value to display it in the article detail page. Modify the status to "1"

    function acceptComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('UPDATE comments SET comment_status = "1" WHERE id_comment = :id_comment');
    $req->bindValue(':id_comment', $_SESSION['id_comment']);
    $req->execute();       
    }    

    // User can signal a comment. Modify the value of the status to "2" with as result : the comment will be displayed in the admin page. Up to the admin to accept it or delete it. 
    function signalComment()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('UPDATE comments SET comment_status = "2" WHERE id_comment = :id_comment');
    $req->bindValue(':id_comment', $_SESSION['id_comment']);
    $req->execute();       
    }    

}
