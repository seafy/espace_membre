<?php 

require '../models/data.php';


if(!empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty($_POST['email'])
) {
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$password = htmlspecialchars($_POST['password']);
	$email = htmlspecialchars($_POST['email']);




// // ____________PSEUDO____________
// 	if ($pseudo) {
// 		echo "pseudo est correct!";
// 	}
// 	else{
// 		echo "pseudo est incorrect!";
// 	}
// // ____________PASSWORD____________
// 	if ($password) {
// 		echo "password est correct!";
// 	}
// 	else{
// 		echo "password est incorrect!";
// 	}
// // ____________EMAIL____________
// 	if ($email) {
// 		echo "email est correct";
// 	}
// 	else{
// 		echo "email est incorrect!";
// 	}





// else {
// 	echo "erreur a verifier!";
// }

}


include '../views/inscription.php';