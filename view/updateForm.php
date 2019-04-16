<?php
require ('view\header.php'); 

?>


        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>


    <div class="container" style="padding-top: 80px">
        
        <h1>Update articles</h1>

            <form action="index.php?page=updateArticles&id=<?= HTMLSpecialChars($article['id']); ?>" method="post">
                <div class="form-group">
                <label for="pseudo">Titre</label> :
                <div class="form-group">
                    <input class="form-control" type="text" name="titre" id="titre" value="<?php echo HTMLSpecialChars($article['titre']); ?>" />
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea class="form-control" id="contenu" name="contenu" rows="7" ><?php echo HTMLSpecialChars($article['contenu']); ?> <?php echo $article['titre']; ?> </textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Envoyer" />
            </form>
        </div>
    </body>

</html>