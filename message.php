<?php
session_start();
include("connexionBDD.php");
if(isset($_SESSION['pseudo'])) 
{
	$requete="select * from message order by DateCreation,HeureCreation asc limit 50";
	$req = mysql_query($requete);
	$resultat="";
	if($req)
	{
		while ($ligne=mysql_fetch_assoc($req))
		{
			$resultat = $resultat.$ligne['pseudo']."<i> a écrit le ".$ligne ['DateCreation']. " à ".$ligne ['HeureCreation']. "</i> : ".$ligne ['message']."<br>";
		}
		echo  $resultat;	
	}		
	else
		echo " rien ";	
}
?>