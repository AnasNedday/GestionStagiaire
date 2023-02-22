<?php     /* fichier du formulaire de modification des infos personnelles du parrain */

 include "sidebar.php";
 include "entete.php";?>
<html>
<head>
 <script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptparrain.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<?php       /*fichier qui traite partie sql  de modification des infos personnelles du parrain*/



// On démarre la session AVANT d'écrire du code HTML
session_start();
include "entete.php";
include "config.php";


if (isset($_POST["adresse"]) AND isset($_POST["tel"])AND isset($_POST["email"]) AND ($_POST["entite"]) AND isset($_POST["mdp"])){
	$_SESSION['adresse']     = $_POST['adresse'];
    $_SESSION['tel']   = $_POST['tel'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['entite']  = $_POST['entite'];
    $_SESSION['mdp']  = $_POST['mdp'];

    $tel=$_SESSION['tel'] ; 
	$mdp=$_SESSION['mdp'] ;
    $adresse=$_SESSION['adresse'] ; 	
    $email=$_SESSION['email'] ;
    $entite=$_SESSION['entite'] ; 
    $cin=$_SESSION['cin'];
	
  
		

		$sql="update parrain set tel= '$tel' ,email='$email',entite='$entite',adresse='$adresse',mdp='$mdp' where cin='$cin' " ;
			
        $qury=$conn->query($sql) or  die($conn->error);
		if (!$qury)
{echo mysql_error();}
 else
{    /*affichage d'une fenetre alterte*/        /*puis redirection vers menu*/
	echo '
    <script>
   swal("Informations modifiées avec succès","","success")
.then((value) => {
   document.location.href="modifierparrain.php";
});
	

	
	    
</script>';
}}
         
         
  ?>
  </body>
  </head>