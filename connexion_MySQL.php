<?php

$PARAM_hote = 'localhost'; // le chemin vers le serveur
$PARAM_port = '3306';
$PARAM_nom_bd = 'bet-io'; // le nom de votre base de données
$PARAM_utilisateur = 'root'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe = 'gTX326xe'; //gTX326xe mot de passe de l'utilisateur pour se connecter

// BDD en ligne

// $PARAM_hote = ''; // le chemin vers le serveur
// $PARAM_port = '';
// $PARAM_nom_bd = ''; // le nom de votre base de données
// $PARAM_utilisateur = ''; // nom d'utilisateur pour se connecter
// $PARAM_mot_passe = ''; // mot de passe de l'utilisateur pour se connecter


try
{
	//$arrExtraParam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8_unicode_ci"); // option à ajouter à l'objet PDO si besoin
	$connexionPDO = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	$connexionPDO->exec("set names utf8");
	$connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e)
{
	if ($mode_debug == true)
	{
		echo '<p>Mode DEBUG:<br />';
		echo 'Erreur dans '.$e->getFile().': '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		echo '</p>'."\n";
	}
	else
	{
		echo 'Une erreur est survenue !';
		die();
	}
}

// applique stripslashes() et strip_tags() à des données
// attention : $data est passé par référence
function nettoie_donnees($data)
{	if (is_array($data))
	{	array_walk($data, "nettoie_donnees");
	}
	else
	{	
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = strip_tags($data, "<b><i><u><a><ul><li>");
	}
}
?>