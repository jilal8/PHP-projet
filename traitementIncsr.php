<?php 
require 'index.php';
require 'BD/connectionBD.php';
		if(!empty($_POST)){
			
			 $nom=htmlspecialchars(htmlentities(trim($_POST['nom'])));
			 $email = htmlspecialchars(htmlentities(trim($_POST['mail'])));
			 $pass=htmlspecialchars(htmlentities(trim($_POST['password'])));
			 $pass1=htmlspecialchars(htmlentities(trim($_POST['password1'])));

			 echo $nom;
			 echo $email;
			 echo $pass;
			 echo $pass1;
			 $connectionbd=connectionBD::getUniqueInstance();
			 if($pass!=$pass1){

			 	echo "le deux mot de passe ne se correspondent pas.";

			 	die();
			 }else{
			 	 if($connectionbd->select($nom,$pass,$email)==0){
			 		try{
			 			$connectionbd->insert("",$nom,$email,$pass,"users");
			 		}catch(PDOException $e){
			 			echo $e->getMessage();
			 		}
			 
			 		}else{
			 			echo "vous etes deja un membre.";
			 		}
			 }
		}else{
			echo "nulll";
			die();
		}
		
 ?>