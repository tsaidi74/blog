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
    <div class="container">
    <h1>Mon Super Blog</h1>        
                    <div class="col-lg-6">
                        <div class="col-lg-12 divcolor">---</div>
                        <div class="col-lg-12 div_titre"> <h3> <?= $article['titre']; ?></h3></div>
                        <div class="col-lg-12 divpad">
                            <div class="col-lg-12"><img src="../blog/assets/images/zen.png" alt="edit" width="100%"></div>
                            <div class="col-lg-12"><?= $article['contenu']; ?></div>
                        </div>
                    
                    <div class="col-lg-6 div_titre">publié le <?= $article['date']; ?> par <?= $article['id_user']; ?></div>
                        <div class="col-lg-6 div_titre"><a href="index.php?page=updateForm&id=<?= $article['id']; ?>"><img src="../blog/assets/images/edit.png" alt="edit" height="20px"></a>
                        <a href="index.php?page=deleteArticle&amp;id=<?= $article['id']; ?>"><img src="../blog/assets/images/delete.png" alt="edit" height="20px"></a></div>
                        <div>comments
                             <?php
                                foreach($comments as $comment)
                                    {
                                        ?>
                                    <div class="col-lg-12">  <?= $comment['comment']; ?></div>

                                    <?php
                                            }
                                    ?>

                        </div>
                        </div>

        <div class="col-lg-12" style="padding: 15px"> <H3>Ajouter un commentaire </H3> </div>
                 <form action="index.php?page=addComment" method="post">
            <div class="form-group">
                <label for="comment">Commentaires</label>
                <textarea class="form-control" id="comment" name="comment" rows="7" ></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer" />
        </form>

           


    </div>
    </body>

