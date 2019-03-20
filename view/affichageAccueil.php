<?php
require ('view\header.php'); 

?>
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead" style="color: black">TAHAR SAIDI</h1>
                <p class="tagline" style="color: black">BLOG OPENCLASSROOM : 5e Projet du parcours Developeur PHP Symphony</p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container-fluid text-center" style="background-color: gainsboro; padding-bottom: 30px">
        <br> <br>
        <h2 class="thin">Le meilleur endroit pour lire du Lorem Ipsum</h2>
        <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum semper lacus, in volutpat nulla tempus at. Mauris faucibus molestie mauris.
        </p>
    </div>
    <div class="container">
        
        <?php
            foreach($articles as $article)
                {
                    ?>

                        <div class="col-lg-4" style="padding-top: 30px"> 
                                <div class="col-lg-12" style="text-align: center;"><h3><a href="index.php?page=detailpost&id=<?= $article['id']; ?>" > <?= $article['titre']; ?></a> </h3></div>
                            <div class="col-lg-12" style="text-align: left;">
                                <div class="col-lg-12"><img src="../blog/assets/images/zen.png" alt="edit" width="100%"></div>
                                <div class="col-lg-12"><?= $article['contenu200']; ?></div>
                            </div>
                       
                            <div class="col-lg-12" style="padding-top: 20px;text-align: right;"><strong>publié le <?= $article['date']; ?> par <?= $article['id_user']; ?></strong></div>


                        </div>

                           <?php
                            }
                    ?>
                    <div class="col-lg-12" style="text-align: right; padding-top: 30px">
                        <a href="index.php?page=blog" class="btn btn-success" role="button">Plus d'articles</a>
                    </div>  

    </div>


    <?php
require ('view\footer.php');

?>
    
    </body>

