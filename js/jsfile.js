  var button = document.getElementById("lieninscription");
    var divinscription = document.getElementById("inscription");
        button.onclick = function(){
            divinscription.style.visibility ="visible";
            button.style.visibility = "hidden";
            //alert("je suis fatigué merd marche.");
        };
   $(document).ready(function(){
   	

 	//alert("c est pret.");
 	$(".formulaire").submit(function(){
 		$.post(
 		'connexion.php',
 		{
 			username : $("#username").val(),
 			password : $("#password").val()
 		}, 
 		function(data){
 			$("#retourn").html(data).slideDown();
 			$("#username").val('');
 			$("#password").val('');
 		}
 		);
 		return false;
 	});
 	function apparition(){
 		alert("ca marche.");
 	}
 });