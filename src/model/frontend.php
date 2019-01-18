<?php

function getPosts()

{


    $db = dbConnect();

    $req = $db->query('SELECT id_post, id_admin, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM posts ORDER BY post_date DESC LIMIT 0, 5');



    return $req;

}



function getPost($postId)
{

    $db = dbConnect();


    $req = $db->prepare('SELECT id_post, id_admin, title, content, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id_post = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{

    $db = dbConnect();


    $comments = $db->prepare('SELECT id_comment, id_user, id_post, comment, comment_status, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'Sana2001');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
