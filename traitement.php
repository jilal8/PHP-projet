<?php 
require 'index.php';


	
		if(!empty($_POST)){
			 $nom=$_POST['username'];
			 
			 $pass=$_POST['password'];
			 echo $nom;
			 echo $pass;

		}else{
			echo "nulll";
			die();
		}
		

		


	 


 ?>