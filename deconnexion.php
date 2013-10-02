<!-- déconnection  --> 
<?php

session_start();
session_destroy ();
session_unset();
echo ' Deconnexion en cours ...' ;
header("Refresh: 2;URL=/Projet2013/Connexion.php");
?>