<?php 
require('BD/connexionBD.php');

if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
	$nom = $_POST['username'];
	$pass = $_POST['password'];
	//connexion a la base de données.
	$db = connexionBD::getUniqueInstance();
	//requet pour verifier l'existance de la personne dans la base.
	$req=$db->prepare("SELECT count(*) from users users WHERE username='".$nom."' AND password ='".$pass."' ");
	$req->execute();
    $resultat = $req->fetchColumn();
    if($resultat>0){
    	echo "<span class='btn-success'>connexion bien etablie.</span>";

    }else{
    	echo "<span class='btn-danger'>votre connexion a echoué. vous n'etez pas reconnu par le systeme.</span>"	;
    }
	
}else{
	echo "<span class='btn-danger'>Veuillez completer tout les champs.</span>";
}


 ?>