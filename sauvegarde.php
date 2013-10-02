<?php
session_start();
$pseudo=$_SESSION['pseudo'];
$message=$_POST['message'];
$Date=date("Y-m-d");
$Heure=date("H:i:s");
include("connexionBDD.php");
if(isset($_SESSION['pseudo'])) 
{
	$message=$_POST["message"];
	
	$requete="insert into message (message,DateCreation,pseudo,HeureCreation) values ('$message','$Date','$pseudo','$Heure')";
	
	$res = mysql_query($requete);
	if($res)
				echo "ok";
			else
				echo "nok";
		
}
?>