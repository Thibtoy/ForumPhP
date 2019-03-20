<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=forum_project;charset=utf8', 'thibault', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//if (isset($_POST['commentaire'])) {
	if ($_POST['pseudo'] == "Thibtoy") {
		$_POST['pseudo'] = 1;
	}
	else {
		$_POST['pseudo'] = 2;
	}
$req = $bdd->prepare('INSERT INTO commentaire (commentaire_contenu, commentaire_date, post_id, membre_id) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['commentaire'], date("Y-m-d-H:i"), 1, $_POST['pseudo']));
//}
header('Location: test.php');
?>