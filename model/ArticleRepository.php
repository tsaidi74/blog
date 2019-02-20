<?php
require('Repository.php');

class ArticleRepository extends Connect {
    
    function getArticles()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT titre, contenu, date, id_user FROM articles');
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

}
