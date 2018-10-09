<!DOCTYPE html>
<html>
<head>
	<title>Espace personnel</title>
	<link href="css/Boostrappcss.css" rel="stylesheet">
    <link href="css/stylecss.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  
</head>
<body>
	<div id="tete">
        <h1>Bienvenu sur le site de condidature des offres de stage et/ou d'emploie.</h1>  
        <div>
            <form action="recherche.php" method="GET">
                <label for="exampleInputEmail1"></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="RECHERCHER...">
                <button type="submit" class="btn btn-primary">Rechercher.</button>
            </form>
        </div> 
    </div>
    <div id="contenu">
    	<h3>Bienvenue dans votre espace personner.</h3>
    	<div id="form">
    		 <form>
    		 	<fieldset>
    		 		<legend>a propos de vous</legend>
    		 		<label for="inputsm">civilité:</label>
    		 		<div class="radio">
						  <label><input type="radio" name="civilite" checked>Mr.</label>
					</div>
					<div class="radio">
						  <label><input type="radio" name="civilite">Mm.</label>
					</div>
				  <div class="form-group">
				    <label for="inputsm">Votre nom:</label>
				     <input class="form-control" id="inputdefault" type="text" placeholder="votre nom...">
				  </div>
				   <div class="form-group">
				    <label for="inputdefault">Votre prenom:</label>
				    <input class="form-control" id="inputdefault" type="text" placeholder="votre prenom...">
				  </div>
				  <div class="form-group">
				    <label for="inputlg">date de naissance:</label>
				     <input class="form-control" id="inputdefault" type="date">
				  </div>
				  <div class="form-group">
				    <label for="inputdefault">lieu de naissance:</label>
				    <select class="form-control" id="sel1">
				    	<option value="#">--choisir--</option>
				    	<option value="Djibouti">Djibouti</option>
				    	<option value="Ali-Sabieh">Ali Sabieh</option>
				    	<option value="Dikhil">Dikhil</option>
				    	<option value="Obock">Obock</option>
				    	<option value="Tajourah">Tajourah</option>
				    	<option value="Arta">Arta</option>
				    </select>
				  </div>
    		 	</fieldset>
    		 	<fieldset>
    		 		<legend>a propos de vos etude.</legend>
    		 		<div class="form-group">
				    <label for="inputdefault">Niveau d'étude.</label>
				    <select class="form-control" id="sel1">
				    	<option value="#">--choisir--</option>
				    	<option value="Doctorant">Doctorant</option>
				    	<option value="Master2">Master 2</option>
				    	<option value="Master1">Master 1</option>
				    	<option value="Licence3">Licence L3</option>
				    	<option value="Licence2">Licence L2</option>
				    	<option value="Licence1">Licence L1</option>
				    </select>
				  </div>
				  <legend>a propos de votre localité</legend>
    		 		<label for="inputsm">Vous êtes a Djibouti?</label>
    		 		<div class="radio">
						  <label><input type="radio" name="optradio">OUI.</label>
					</div>
					<div class="radio">
						  <label><input type="radio" name="optradio" onchange="apparition()">NON.</label>
					</div>
    		 	</fieldset>
    		 		
				   
			</form> 
    	</div>
    </div>


     <script src="js/jsfile.js" type="text/javascript"></script>
</body>
</html>