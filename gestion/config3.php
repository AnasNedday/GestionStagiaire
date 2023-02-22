<html>
<head>
<script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptparrain.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>


<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

include "config.php";
include "sidebar.php";
include "entete.php";


/* isset vérifie l existence de la variable et qu elle soit non vide */
/*empty vérifie si la variable est vide */ 
if (isset($_POST['domaine']) AND isset($_POST["sujet"])AND isset($_POST["entite"]) AND isset($_POST["nombre"]) AND isset($_POST["duree"]) AND isset($_POST["debut"]) AND ($_POST["fin"])){
	
	/* une variable session est une variable globale  connue dans toutes les pages */
	$_SESSION['domaine']     = $_POST['domaine'];            
    $_SESSION['sujet']    = $_POST['sujet'];
    $_SESSION['entite'] = $_POST['entite'];
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['duree']     = $_POST['duree'];
    $_SESSION['debut'] = $_POST['debut'];
    $_SESSION['fin']    = $_POST['fin'];
    
	
	$domaine=$_SESSION['domaine']    ;
    $sujet=$_SESSION['sujet']    ;
    $entite=$_SESSION['entite'] ;
    $nombre=$_SESSION['nombre'] ;
    $duree=$_SESSION['duree'];
    $debut=$_SESSION['debut'] ;
    $fin=$_SESSION['fin']  ;


  
		$servername = "localhost";
        $username = "root";
        $password = "root";
        $db="gestion";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$db);

        // Check connection
         if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
         } 

		
	    $ide=$_SESSION['ide'];
		$query = "update offre set sujet= '$sujet',domaine='$domaine',entite='$entite',duree='$duree',nombre='$nombre',nbrerest='$nombre',debut='$debut',fin='$fin' where id=$ide";
			
        $result = $conn->query($query) or  die($conn->error);
		
		if (!$result)
{echo mysql_error();}
 else
{   
	echo '
    <script>
   swal("Mise à jour réussie","","success")
.then((value) => {
   document.location.href="update.php";
});
	

	
	    
</script>';
}}
         
         
  ?>
  </body>
  </html>