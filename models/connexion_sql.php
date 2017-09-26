<?php 

function connexion_sql(){
	// Connexion à la base de données
try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', 'hasquette' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	}


catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}



return $bdd;
}