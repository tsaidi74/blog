<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'Sana2001');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO articles (titre, contenu,date,iduser) VALUES(?, ?,?,?)');
$req->execute(array($_POST['titre'], $_POST['contenu'],$_POST['date'],$_POST['id_user']));

// Redirection du visiteur vers la page du minichat
header('Location: test.php');
?>



<!--<label for="message">Message</label> :  <input type="text" name="contenu" id="contenu" /><br />
        <label for="id_user">UserID</label> :  <input type="text" name="id_user" id="id_user" /><br />
        <label for="Date">Date</label> :  <input type="text" name="date" id="date" /><br /> !>


 
 
<?php
 
if(isset($_GET['id'])) {
    $billet_id = $_GET['id'];
    $manager = new billetManager();
    $billet = $manager->getBilletById($billet_id);
}
 
include_once(PARTIAL . '_head.php');
include_once(PARTIAL . '_nav.php');
 
?>
 
<?php if(is_array($billet))
foreach ($billet as $billet_unique): ?>
<form name="formulaire" id="formulaire" action="index.php?action=updateBillet" method="post">
    <label for="texte" ><br><strong>Article à modifier : </strong> <br></label><br />
    <label for="titre" ><strong>Titre de l'épisode <?php echo $billet_unique->bilId ?>: <input type = "text" rows="5" class="input" size="50" style="height:25px;"
    name = "params[titre]" id = "titre" value = "<?php echo $billet_unique->bilTitre ?>"</strong></label>
    <input id="submit_button" type="submit" value="Supprimer" name = 'params[id]' />
    <br /><br />
    <textarea id="texte" class="input" name="params[contenu]" rows="25" ><?php echo $billet_unique->bilContenu ?></textarea>
    <br />
    <input id="submit_button" type="submit" value="Modifier" />
</form>
 
    <form name="formulaire" id="formulaire" action="index.php?action=deleteBillet" method="post">
        <input id="submit_button" type="submit" value="Supprimer" name = 'params[id]' />
    </form>
 
    <?php var_dump($billet) ?>
<?php endforeach ?>
 
<?php include_once(PARTIAL . '_footer.php');
 
?>