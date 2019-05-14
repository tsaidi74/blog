<?php
require ('header.php');

?>
    <div class="container" style="padding-top: 120px">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Blog</li>
        </ol>
    <h1 >Mon Super Blog</h1>
        
        <?php
            foreach($articles as $article)
                {
                    ?>

                    <div class="col-lg-12">
                        <div class="col-lg-12" style="text-align: left"> <h3><a href="index.php?page=detailpost&id=<?= HTMLSpecialChars($article['id']); ?>" > <?= HTMLSpecialChars($article['titre']); ?></a> </h3></div>
                        <div class="col-lg-12 divpad" style="text-align: left">
                            <div class="col-lg-3"><img src="../blog/assets/images/zen.png" alt="edit" width="100%"></div>
                            <div class="col-lg-9"><?= HTMLSpecialChars_decode($article['contenu200']); ?></div>
                        </div>
                   
                    <div class="col-lg-12 div_titre">publié le <?= HTMLSpecialChars($article['date']); ?> par <?= HTMLSpecialChars($article['id_user']); ?></div>
                      </div>   
               <?php
                }
        ?>


    </div>


    <?php
require ('view\footer.php');

?>
    
    </body>
