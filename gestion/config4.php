

<?php
  // On démarre la session AVANT d'écrire du code HTML
session_start();
include "sidebar.php";
        include "entete.php";

  
		
		include "sqloffre.php";
		
	$cin=$_SESSION['cin'];  	
		

if (isset($_POST['domaine']) AND isset($_POST["sujet"])AND isset($_POST["entite"]) AND isset($_POST["nombre"]) AND isset($_POST["duree"]) AND isset($_POST["debut"]) AND ($_POST["fin"])){
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
	
	$cin=$_SESSION['cin'];

  
		

 

		
		
		
		$sql="insert into offre(cin,domaine,sujet,entite,nombre,nbrerest,duree,debut,fin)  values('$cin','$domaine','$sujet','$entite','$nombre','$nombre','$duree', '$debut','$fin') " ;
			
        $qury=$conn->query($sql) or  die($conn->error);
		if (!$qury)
{echo mysql_error();}
         else
{  
    //header('Location:offre.php');
	echo '
    <script src="sweetalert.js">
    swal("Formulaire envoyé avec succès", "votre offre a été bien ajouté", "success");
	
</script>';}
}

         
  ?>
