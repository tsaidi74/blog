<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon BLog </title>
    <!-- Bootstrap CSS -->  
        <link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="../assets/css/main.css">


    </head>
    
    <body>
    <!-- Fixed navbar -->
	<
    <div class="container">
        
        <h1>Update articles</h1>

            <form action="../index.php?page=updateArticles" method="post">
                <div class="form-group">
                <label for="pseudo">Titre</label> :
                <div class="form-group">
                    <input class="form-control" type="text" name="titre" id="titre" value="<?php echo $_GET['titre']; ?>" />
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea class="form-control" id="contenu" name="contenu" rows="7" ><?php echo $_GET['contenu']; ?> <?php echo $_GET['titre']; ?> </textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Envoyer" />
            </form>
        </div>
    </body>

</html>