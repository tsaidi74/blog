<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon BLog </title>
    <!-- Bootstrap CSS -->  
        <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="/b/blog/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/b/blog/assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="/b/blog/assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="/b/blog/assets/css/main.css">
        <link rel="stylesheet" href="/b/blog/assets/css/custom.css">
        



    </head>
    
    <body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-togg    le" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/b/blog/index.php"><img src="/b/blog/assets/images/logo.png" alt="Blog OPC" height="42" ></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=blog">Blog</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                    <li><a href="index.php?page=mycv&">My CV</a></li>
                                <?php 
                                if (isset($_SESSION['username']) )
                                {
                                   ?> <li data-toggle="tooltip" data-placement="top" title="cliquer pour accéder à l'administration" style="color: white; padding-right: 2px"><a href="index.php?page=goAdmin"><?php echo 'Bonjour ' . $_SESSION['username']; ?>! </a></li>
                               
                                
                               
                                <li class="active">
                               
                               <a href="index.php?page=deconnect&username=<?=HTMLSpecialChars($_SESSION['username']); ?>" class="btn btn-success" role="button">Déconnexion</a> </div>
                                <?php
                            }
                                else {
                                    ?>
                                    <a class="btn" href="view/signin.php">SIGN IN / SIGN UP</a>
                                    <?php
                                }
                            ?>
                         




                        </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->


