<?php
require('Repository.php');

class ArticleRepository extends Connect {
    
    //  function getArticles() allow to display 3 article on the front page.
    
    function getArticles()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT id, titre, left(contenu,200)contenu200, contenu, date, id_user FROM articles ORDER BY date DESC LIMIT 3');
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

    function getAllArticles()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT id, titre, left(contenu,400)contenu200, contenu, date, id_user FROM articles ORDER BY date DESC');
    $req->execute();
    
    $articles=[];
    
    while($data = $req->fetch()){
        $articles[] = $data;
    }
    
    $req->closeCursor();
    

    return $articles;        
    }




}
