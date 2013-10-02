<?php
session_start();
include("connexionBDD.php");
if(isset($_POST['pseudo'])) 
{
	$pseudo=$_POST["pseudo"];
	$mdp=$_POST["password"];

	$requete="insert into utilisateur (pseudo,password,statut,heureDateConnexion,topAdmin) values ('$pseudo','$mdp','','','')";
	$res = mysql_query($requete);
	if($res) {
			$_SESSION['pseudo']=$pseudo;
			$_SESSION['password']=$mdp;
			echo "ok";}
	else
			echo "nok";			
}
?>