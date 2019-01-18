<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

        
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
 
        
        <?php
        while ($data = $posts->fetch())
        {
        ?>
        <div class="col-lg-6">
            <h3>
                <?php echo htmlspecialchars($data['title']); ?>
                <em>le <?php echo $data['date_creation_fr']; ?></em>
            </h3>
            
            <p>
            <?php
            echo nl2br(htmlspecialchars($data['content']));
            ?>
            <br />
            <em><a href="view/frontend/postView.php?id_post=<?php echo $data['id_post']; ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

