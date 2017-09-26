<?php 

include 'connexion_sql.php';

$bdd = connexion_sql();

function get_inscription(){
	$req = $bdd->prepare('SELECT * FROM user');
	$req->execute();
    $inscription = $req->fetchAll();

    return $inscription;
}





function add_user(){
	// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);


// Insertion
$req = connexion_sql()->prepare('INSERT INTO user(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $_POST['$pseudo'],
    'pass' => $_POST['$pass_hache'],
    'email' => $_POST['$email']));

echo "l'user est bien rajouter !";

$req->closeCursor(); //termine le traitement de la requete

header(location: ../views/inscription.php);
}






function verif_user(){
	// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM user WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}


$resultat->closeCursor(); //termine le traitement de la requete
}



function img_user(){
    $req = $bdd->prepare('SELECT * FROM img_user ');
    $req->execute(array(
    'id' => $id,
    'type' => $type,
    'alt' => $alt,
    'src' => $src));

$result_img_user = $req->fetch();

return $result_img_user;

}