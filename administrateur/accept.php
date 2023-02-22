<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "entete.php";
include "config.php";?>
<?php
if ( ! empty( $_COOKIE['v'] ) ) {                /*on va récupérer la valeur dans le cookie */ 
	
	$_SESSION['ide']=$_COOKIE['v'];
	$ide=$_SESSION['ide'];
}

$query = "update demande set etatsuivi=1 where ide='$ide'"; 
			
        $result = $conn->query($query) or  die($conn->error);
		
		if (!$result)
{echo mysql_error();}
else
{header('Location:demande.php');}

?>