<?php
require ('view\header.php'); 

?>
    <!-- Fixed navbar -->
    <div class="container" style="padding-top: 120px" >
    <h1><?= $article['titre']; ?></h1>        
                    <div class="col-lg-12">
                    <div class="col-lg-12" style="text-align: right;">publié le <?= $article['date']; ?> par <?= $article['id_user']; ?></div>
                        <div class="col-lg-12 divpad">
                            <div class="col-lg-12"><img src="../blog/assets/images/zen.png" alt="edit" width="100%"></div>
                            <div class="col-lg-12"><?= $article['contenu']; ?></div>
                        </div>
                        <div class="col-lg-12" style="padding-top: 20px"><h3>Commentaires</h3> </div>              
                        <div>
                             <?php
                                foreach($comments as $comment)
                                    {
                                        ?>
                                    <div class="col-lg-6">  <?= $comment['comment']; ?></div>
                                    <div class="col-lg-6">  <a href="index.php?page=alertcomment&amp;id_comment=<?= $comment['id_comment']; ?>">Signaler un commentaire</a></div>

                                    <?php
                                            }
                                    ?>

                        </div>
                        </div>

        <div class="col-lg-12" style="padding: 15px"> <H3>Ajouter un commentaire </H3> </div>
         <form action="index.php?page=addcomment&amp;id_user=<?= $comment['id_user']; ?>&amp;id_article=<?= $comment['id_article']; ?>" method="post">
            <div class="form-group">
                <label for="comment">Contenu</label>
                <textarea class="form-control" id="comment" name="comment" rows="7" ></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer" />
        </form>
    </div>

    <?php
    require ('view\footer.php');

    ?>
    </body>

