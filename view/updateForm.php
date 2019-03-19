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
        
        <h1>Update articles</h1>

            <form action="index.php?page=updateArticles&id=<?= $article['id']; ?>" method="post">
                <div class="form-group">
                <label for="pseudo">Titre</label> :
                <div class="form-group">
                    <input class="form-control" type="text" name="titre" id="titre" value="<?php echo $article['titre']; ?>" />
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea class="form-control" id="contenu" name="contenu" rows="7" ><?php echo $article['contenu']; ?> <?php echo $article['titre']; ?> </textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Envoyer" />
            </form>
        </div>
    </body>

</html>