<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'Sana2001');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('INSERT INTO articles (titre, article, date, id_user) VALUES(\'YTRD\',\'conteiaiozaioj\',\'2019-1-1\', 4);

echo 'Le jeu a bien été ajouté !';

?>