<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'Sana2001');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM articles');

?>

 <form action="testpost.php" method="post">
        <p>
        <label for="pseudo">Titre</label> : <input type="text" name="titre" id="titre" /><br />
        <label for="message">Message</label> :  <input type="text" name="contenu" id="contenu" /><br />
        <label for="id_user">UserID</label> :  <input type="text" name="id_user" id="id_user" /><br />
        <label for="Date">Date</label> :  <input type="text" name="date" id="date" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php            
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Titre</strong> : <?php echo $donnees['titre']; ?><br />
    Contenu : <?php echo $donnees['contenu']; ?> <br />
    Date d'ajout : <?php echo $donnees['date']; ?> par <?php echo $donnees['id_user']; ?><br />
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête



$bdd->exec('INSERT INTO articles (titre, contenu, date, id_user) VALUES ('titre','conteiaiozaioj','2019-1-1', 8))');

echo 'Le jeu a bien été ajouté !';
?>




        
        
