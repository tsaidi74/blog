<?php
require('Repository.php');

class CommentRepository extends Connect {
    
    function getComments()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT comment, id_comment, id_article, id_user, comment_status, comment_date FROM comments ORDER BY date DESC');
    $req->execute();
    
    $comments=[];
    
    while($data = $req->fetch()){
        $comments[] = $data;
    }
    
    $req->closeCursor();
    

    return $comments;        
    }
    
    function addComments()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('INSERT INTO comments (comment, contenu, id_user, date) VALUES (:titre, :contenu, 1, NOW())');
    $req->bindValue(':titre', $_SESSION['titre']);
    $req->bindValue(':contenu', $_SESSION['contenu']);
    $req->execute();       
    }
    
    function updateArticles()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('UPDATE articles SET titre = :titre, contenu = :contenu, id_user = 1, date = NOW() WHERE id =:id');
    $req->bindValue(':id', $_SESSION['id']);
    $req->bindValue(':titre', $_SESSION['titre']);
    $req->bindValue(':contenu', $_SESSION['contenu']);
    $req->execute();       
    }

    function deleteArticles()  {
    
    $db = $this->getDb();
    $id = $_SESSION['id'];
    //var_dump($id);
    $req = $db->prepare('DELETE FROM articles WHERE id = :id');
    $req->bindValue(':id', $id);
    $req->execute();       
    }
    
    function getArticleById()  {
    
    $db = $this->getDb();
    $id = $_SESSION['id'];
    //var_dump($id);
    $req = $db->prepare('SELECT * FROM articles WHERE id = :id');
    $req->bindValue(':id', $id);
    $req->execute();    
            
    $articles=[];
    
    while($data = $req->fetch()){
        $articles[] = $data;
    }
    
    $req->closeCursor();
    

    return $articles[0];     //retourne un seul element
            
    }
}
