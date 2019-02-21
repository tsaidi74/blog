<?php
require('Repository.php');

class ArticleRepository extends Connect {
    
    function getArticles()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT titre, contenu, date, id_user FROM articles ORDER BY date DESC');
    $req->execute();
    
    $articles=[];
    
    while($data = $req->fetch()){
        $articles[] = $data;
    }
    
    $req->closeCursor();
    
    return $articles;        
    }
    
    function addArticles()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('INSERT INTO articles (titre, contenu, id_user, date) VALUES (:titre, :contenu, 1, NOW())');
    $req->bindValue(':titre', $_SESSION['titre']);
    $req->bindValue(':contenu', $_SESSION['contenu']);
    $req->execute();       
    }
    
    function updateArticles()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('UPDATE articles SET titre = :titre, contenu = :contenu, id_user = 1, date = NOW())');
    $req->bindValue(':titre', $_SESSION['titre']);
    $req->bindValue(':contenu', $_SESSION['contenu']);
    $req->execute();       
    }

    function deleteArticles()  {
    
    $db = $this->getDb();
    
    $req = $db->prepare('DELETE FROM articles WHERE titre = :titre)');
    $req->bindValue(':titre', $_SESSION['titre']);
    $req->execute();       
    }
}
