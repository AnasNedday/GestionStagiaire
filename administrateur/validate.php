<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "entete.php";
include "config.php";?>
<?php
if ( ! empty( $_COOKIE['firstCell'] ) ) {                /*on va récupérer la valeur dans le cookie */ 
	
	$_SESSION['ide']=$_COOKIE['firstCell'];
	$ide=$_SESSION['ide'];
}

$query = "update offre set etat=1 where id='$ide'"; 
			
        $result = $conn->query($query) or  die($conn->error);
		
		if (!$result)
{echo mysql_error();}
else
{header('Location:offreadmin.php');}

?>