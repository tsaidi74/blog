<?php
require ('view\header.php');

?>
   <div class="container" style="padding-top: 120px">
    <div class="col-lg-12">
    <h1>Liste des commentaires à valider</h1>        
                    
        <div>
             <?php
                foreach($comments as $comment)
                    {
                        ?>
                    <div class="col-lg-6">  <?= $comment['comment']; ?></div>
                    <div class="col-lg-6">
                    	<a href="index.php?page=deletecomment&amp;id_comment=<?= $comment['id_comment']; ?>"><img src="../blog/assets/images/delete.png" alt="edit" height="20px"></a>
                    	<a href="index.php?page=validatecomment&amp;id_comment=<?= $comment['id_comment']; ?>"><img src="../blog/assets/images/validate.png" alt="validate" height="20px"></a>

                    </div>

                    <?php
                            }
                    ?>

        </div>
        </div>
        <div class="col-lg-12" style="padding-top: 20px"> 
        <h1>Ajouter un article</h1>  
            <form action="index.php?page=addArticle" method="post">
            <div class="form-group">
                <label for="pseudo">Titre</label> :
             </div>
            <div class="form-group">
                <input class="form-control" type="text" name="titre" id="titre" />
            </div>
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="7" ></textarea>
            </div>
            <input type="submit" class="btn btn-primary pull-right" value="Envoyer" />
        </form>


        </div>

        <div class="col-lg-12">       
        <p><H1>Modifier / Effacer un article </H1> </p>
        
        <?php
            foreach($articles as $article)
                {
                    ?>

                    <div class="col-lg-6">
                        <div class="col-lg-12"> <h3><?= $article['titre']; ?> </h3></div>
                    
                    <div class="col-lg-6 div_titre">publié le <?= $article['date']; ?> par <?= $article['id_user']; ?></div>
                        <div class="col-lg-6 div_titre"><a href="index.php?page=updateForm&id=<?= $article['id']; ?>"><img src="../blog/assets/images/edit.png" alt="edit" height="20px"></a>
                        <a href="index.php?page=deleteArticle&amp;id=<?= $article['id']; ?>"><img src="../blog/assets/images/delete.png" alt="edit" height="20px"></a>
                        <a href="index.php?page=detailpost&id=<?= $article['id']; ?>" > <img src="../blog/assets/images/see.png" alt="edit" height="20px"></a>

                    </div>
                        </div>
               <?php
                }
        ?>

       </div>       
      </div>

      <?php
    require ('view\footer.php');

    ?>    

    </body>