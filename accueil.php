
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/Boostrappcss.css" rel="stylesheet">
    <link href="css/stylecss.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  

    <!-- Custom styles for this template -->
   
</head>
<body>
	
	 
 	<?php 
	include 'Personnage.php';
	include 'form.php';
	

	$form = new form(
		array(
			'username'=>'pilote_jilal'
		)
	);
	
	phpinfo();
	echo '<div id="connexion">';
	echo '<h3 class="tittle">Déjà un memebre</h3>';
	echo '<form action="traitement.php" method="post">';
	echo $form->input("username","username","text");
	echo $form->input("password","mot de passe","password");
	echo $form->submit("submit","se connecter");
	echo '</form>';
    echo '<di id="inscrip">';
    echo $form->href("s'incrire ici");
    echo '</div>';
	echo '</div>';

	

	echo '<div id="inscription" style="visibility:hidden;">';
	echo '<h3 class="tittle">Inscription </h3>';
	echo '<form action="traitementIncsr.php" method="post">';
	echo $form->input("nom","Votre nom","text");
	echo $form->input("mail","E-mail","email");
	echo $form->input("password","choisir mot de passe","password");
	echo $form->input("password1","confirmer mot de passe","password");
	echo $form->submit("submit","Envoyer");
	echo '</form>';
	echo '</div>';
	
 ?>
 <script src="js/jsfile.js" type="text/javascript"></script> 
 </body>
 </html>