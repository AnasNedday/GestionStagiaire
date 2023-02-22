<?php       /*fichier qui traite partie sql de l'authentification*/


// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";?>

<html>
<head>
 <script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptparrain.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php 
if (isset($_POST['cin']) AND ($_POST['mdp'])){
	$_SESSION['cin'] = $_POST['cin'];
    $_SESSION['mdp'] = $_POST['mdp'];
    
	 
	   $cin=$_SESSION['cin'];
       $sql="select cin,mdp,nom,prenom,tel,email,adresse,entite  from parrain where cin='$cin'" ;
       $qury=$conn->query($sql) or  die($conn->error);
       if (!$qury)
        echo mysql_error();
  else
     {  $row = $qury->fetch_assoc() ;
        $psw=$row['mdp'];
		$_SESSION['nom']=$row['nom'];
		$_SESSION['prenom']=$row['prenom'];
		$_SESSION['tel']=$row['tel'];
		$_SESSION['email']=$row['email'];
		$_SESSION['adresse']=$row['adresse'];
		$_SESSION['entite']=$row['entite'];
		
        
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
  
    document.location.href="authparrain.php";
 
});

 </script>';
}}}
  ?>
  </body>
  </html>
