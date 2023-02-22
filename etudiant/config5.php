<?php       /*fichier qui traite partie sql de l'authentification*/


// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";
?>
<html>
<head>
 <script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptadmin.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php 

if (isset($_POST['cine']) AND ($_POST['mdp'])){
	$_SESSION['cine'] = $_POST['cine'];
    $_SESSION['mdp'] = $_POST['mdp'];
    
	 
	   $cine=$_SESSION['cine'];
       $sql="select mdp  from etudiant where cine='$cine'" ;
       $qury=$conn->query($sql) or  die($conn->error);
       if (!$qury)
        echo mysql_error();
  else
     {  $row = $qury->fetch_assoc() ;
        $psw=$row['mdp'];
		 
        if ( $_SESSION['mdp']==$psw)
		{header('Location:accueil.php');}      /*redirection vers menu*/
       
         else
{   
	echo '
    <script>
  swal({
  title: "Mot de passe incorrect",
  text: "Veuillez réessayer avec un autre",
  icon: "error",
  dangerMode: true,
})
.then((willDelete) => {
  
    document.location.href="authetudiant.php";
 
});

 </script>';
}}}
  ?>
  </body>
  </html>
