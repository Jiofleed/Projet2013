<?php
session_start();
include("connexionBDD.php");
if(isset($_POST['pseudo'])) 
{
	$pseudo=$_POST["pseudo"];
	$mdp=$_POST["password"];

	$requete="select * from utilisateur where pseudo = '$pseudo' and password = '$mdp'";
	$res = mysql_query($requete);
	
	if(mysql_num_rows($res)!=0)	{
			$_SESSION['pseudo']=$pseudo;
			echo "ok";}
	else
	   echo ("nok");
}

mysql_close();
?>
