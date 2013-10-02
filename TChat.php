<?php
		session_start();
?>
<html>
<head>
<title>TChat</title>
<script src="jquery-1.3.1.min.js">
</script>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>
</head>
<!-- Include SCEditor's JS -->
<script> 
// J'appelle la fonction Message() qui va enregistrée les messages //
function Message(){
						$.ajax({
								url: 'Sauvegarde.php',
								type: 'POST',
								data: "message=" + document.getElementById("message").value,
								success: function(dataRecup)	{
									dataRecup = "ok";
																				
									
								}
							});				
					}		
			
			// J'appelle la fonction affiche() qui va afficher les messages enregistrés //
function affiche() {
						$.ajax({ 
								url: 'message.php',
								success: function(dataRecup)	 {		
									document.getElementById("conversation").innerHTML = "";								
									document.getElementById("conversation").innerHTML = dataRecup;
									}
								});
							}
setInterval("affiche()", 2000);				
				</script>
<script type="text/javascript">
	window.onload = function()
	{
		CKEDITOR.replace( 'editor1' );
	};
</script>
<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body onload="affiche()">
	<form>
	
	
	<!-- Titre -->
		<h1><img src="http://www.runemasterstudios.com/graemlins/images/snoopyhouse.gif">TChat</h1>
		</br>
		
	<!-- Table -->
	
	<table border="2" width="100%" height="25%">
	
	<!-- Là où l'on voit la conversation -->
		<tr>
			<td>
			<div id="conversation"  style="resize: none; overflow:auto; width:800;"></div>
				
			</td>
			
	<!-- Là où l'on voit les pseudos des personnes connectées -->
			<td>
			<div id="pseudonyme"  style="resize: none;">
			<?php
				if (isset($_SESSION['pseudo']))
						echo $_SESSION['pseudo'];
			?>
			</div>						
			</td>
		</tr>
	</table>
	
	<!-- Message à envoyer -->
	<input type="text" size="151" id="message">
	
	<input type="button" value="Envoyer" onClick="javascript:Message()" onKeyPress="if (event.keyCode == 13) javascript:Message()" > 
	</br>
	</br>
	
	<!-- Autre table -->
	<table border="2" width="100%" height="35%">
	
		<tr>
			<td>
		
	<!-- Commandes et les émoticônes -->
				<h4 align="center"> Commandes </h4>
			</td>
		</tr>
		<tr>
			<td align="center" id="editor1" name="editor1">
			</td>
		</tr>
		<tr>
			<td>
	
	<!-- Exemples -->
				[b]Texte[/b] = <b>Texte</b></br>
				[i]Texte[/i] = <i>Texte</i></br>
				[u]Texte[/u] = <u>Texte</u></br>
				[a=http://www.site.com] Texte du lien[/a] = <a href="Textedulien.html">Texte du lien</a></br>
				[c=blue|yellow|green|pink|red|orange]Mon Texte[/c] = <font color="green">Mon texte</font>
			</td>
			<td>
			
	<!-- Statut -->
				<h4 align="center">Statut 
					<Select name="statut">
							<option>En Ligne</option>
							<option>Hors Ligne</option>
							<option>En cours</option>
							<option>Dans son monde imaginaire</option>
							<option>Dort</option>
					</Select></h4>
					
	<!-- Deconnexion -->
				<p align="center"><a href="deconnexion.php">--> Deconnexion - 
				<?php 	
									if (isset($_SESSION['pseudo']))
										echo $_SESSION['pseudo'];
				?> <-- </a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>