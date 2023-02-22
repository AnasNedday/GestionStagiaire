<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

include "config.php";
$cine=$_SESSION['cine'];?>

<?php
if ( ! empty( $_COOKIE['firstCell'] ) ) {                /*on va récupérer la valeur dans le cookie */ 
	
	$_SESSION['ide']=$_COOKIE['firstCell'];
	$ide=$_SESSION['ide'];
}



					
$sql="select * from demande where cine='$cine'";	
        $qury=$conn->query($sql);
		
                    $row = $qury->fetch_assoc() ;
                    $cineee = $row['cine'];
                   
                    
$date =date("Y-m-d H:i:s");   				               
if (empty($cineee ))
{$sql="insert  into demande(cine,ide,date) values('$cine','$ide','$date')";
$qury=$conn->query($sql)  or  die($conn->error);
if (!$qury)
{echo mysql_error();}
header('Location:offreetudiant.php');
}
else
{$query = "update demande set cine='$cine',ide='$ide',date='$date' where cine='$cine'"; 
			
        $result = $conn->query($query) or  die($conn->error);
		
		if (!$result)
{echo mysql_error();}
else
{header('Location:offreetudiant.php');
}}

?>