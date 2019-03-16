<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8" />
        <title> Mon BLog </title>
    <!-- Bootstrap CSS -->  
        <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="../blog/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../blog/assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="../blog/assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="../blog/assets/css/main.css">
        <link rel="stylesheet" href="../blog/assets/css/custom.css">


    </head>
    
    <body>
    <!-- Fixed navbar -->
	<
<div class="container">
    <h1>Mon Super Blog</h1>
        <p><H3>Les derniers articles : </H3> </p>
        
        <?php
            function getCommentsByID()
    {
    $db = $this->getDb();
    
    $req = $db->prepare('SELECT * FROM comments WHERE id_article = :id');
    $req->execute();
    
    $comments=[];
    
    while($data = $req->fetch()){
        $comments[] = $data;
    }
    
    $req->closeCursor();
    

    return $comments;        
    }

echo getCommentsByID()

        ?>


</html>