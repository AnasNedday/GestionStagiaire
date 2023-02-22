<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

include "config.php";?>

<?php
if ( ! empty( $_COOKIE['v'] ) ) {                /*on va récupérer la valeur dans le cookie */ 
	
	$_SESSION['cinn']=$_COOKIE['v'];
	$cinn=$_SESSION['cinn'];
	

 $sql="select *  from demande where cine='$cinn'" ;
       $qury=$conn->query($sql) or  die($conn->error);
       if (!$qury)
        echo mysql_error();
  else
     {  $row = $qury->fetch_assoc() ;
	 $id=$row['ide'];}
	
 $queryy = "update offre set nbrerest=nbrerest+1 where id='$id'"; 
			
        $resultt = $conn->query($queryy) or  die($conn->error);	
		if (!$resultt)
{echo mysql_error();}
	
	
	
$query = "update demande set etatdemande=2 where cine='$cinn'"; 
			
        $result = $conn->query($query) or  die($conn->error);
		
			if (!$result)
{echo mysql_error();}
else
{header('Location:demande.php');}}
?>