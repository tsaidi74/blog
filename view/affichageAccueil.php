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
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Blog OPC" height="42" ></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="sidebar-right.html">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="active"><a class="btn" href="../blog/view/signin.php">SIGN IN / SIGN UP</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    <div class="container" style="padding-top: 80px">
    <h1>Mon Super Blog</h1>
        <p><H3>Les derniers articles : </H3> </p>
        
        <?php
            foreach($articles as $article)
                {
                    ?>

                    <div class="col-lg-6">
                        <div class="col-lg-12 divcolor">---</div>
                        <div class="col-lg-12 div_titre"> <h3><a href="index.php?page=detailpost&id=<?= $article['id']; ?>" > <?= $article['titre']; ?></a> </h3></div>
                        <div class="col-lg-12 divpad">
                            <div class="col-lg-12"><img src="../blog/assets/images/zen.png" alt="edit" width="100%"></div>
                            <div class="col-lg-12"><?= $article['contenu200']; ?></div>
                        </div>
                    
                    <div class="col-lg-6 div_titre">publié le <?= $article['date']; ?> par <?= $article['id_user']; ?></div>
                        <div class="col-lg-6 div_titre"><a href="index.php?page=updateForm&id=<?= $article['id']; ?>"><img src="../blog/assets/images/edit.png" alt="edit" height="20px"></a>
                        <a href="index.php?page=deleteArticle&amp;id=<?= $article['id']; ?>"><img src="../blog/assets/images/delete.png" alt="edit" height="20px"></a>

                    </div>
                        </div>
               <?php
                }
        ?>

        <div class="col-lg-12" style="padding: 15px"> <H3>Ajouter un article </H3> </div>
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
            <input type="submit" class="btn btn-primary" value="Envoyer" />
        </form>
    </div>
    </body>

