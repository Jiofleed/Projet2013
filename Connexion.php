<html>
<head>
<title> Ajax TChat Connexion </title>
<script src="jquery-1.3.1.min.js">
</script> 
<script>
function connect(){
	 $.ajax({
			url: "verif.php",
			type: "POST",
			data: "pseudo=" + document.getElementById("pseudo").value +"&"+ "password=" + document.getElementById("motDePasse").value,
			success: function(dataRecup) {
				if(dataRecup=="ok") {
					alert("Tu es bien connecte");
					document.location.href = "TChat.php";
				}
				else
					alert("Pseudo ou mot de passe invalide");
				}
			});
		}
		
function inscrit(){
	 $.ajax({
			url: "inscription.php",
			type: "POST",
			data: "pseudo=" + document.getElementById("pseudo").value +"&"+ "password=" + document.getElementById("motDePasse").value,
			success: function(dataRecup) {
				if(dataRecup=="ok") 
					alert("Vous vous etes bien connecte sur ce site");
								else
					alert("Pseudo ou mot de passe invalide");
				}                                                                                                                                                                                                                                                                                                                              
			});
	}

</script>
</head>
<body> 
<form>

<!-- Titre -->
<h2> Ajax TChat - Connexion </h2></br>

<table>

<!-- Pseudo -->
<tr><td>Pseudo : </td><td><input type="text" id="pseudo"/></td></tr>

<!-- Mot de passe -->
<tr><td>Mot De Passe : </td><td><input type="password" id="motDePasse"/></td></tr>
</table>

<!-- Bouton Valider -->
<input type="button" value="Connexion" onClick="javascript:connect()" />

<!-- Lien inscription -->
<a href="javascript:inscrit()">Inscription</a>
</form>
</body>
</html>
