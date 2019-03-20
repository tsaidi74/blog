<?php
require ('view\header.php'); 

?>
    <div class="container" style="padding-top: 80px">
        
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