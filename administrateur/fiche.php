<?php     /* fichier du formulaire de modification des infos personnelles du parrain */


// On démarre la session AVANT d'écrire du code HTML
session_start();

 
$cin=$_SESSION['cin'];
include "config.php";
include "sidebar.php";
include "entete.php";
/*body {
 font-family:"trebuchet ms",sans-serif;
 font-size:90%;
 }*/?>
 <?php
if ( ! empty( $_COOKIE['firstCell'] ) ) {                /*on va récupérer la valeur dans le cookie */ 
	
	$_SESSION['cine']=$_COOKIE['firstCell'];
    $cine=$_SESSION['cine'];
    echo $cine; }
	
	$query = "SELECT * FROM offre,etudiant,document,demande where etudiant.cine=demande.cine and 
				demande.ide=offre.id and etudiant.cine=document.cine and offre.cin='$cin'";
                $result = $conn->query($query) or  die($conn->error);

                //$count = 0;
                 $row = $result->fetch_assoc() ;
                  $tel=$row['tel'] ; 
					
    $adresse=$row['adresse'] ; 	
    $email=$row['email'] ;
    $ecole=$row['ecole'] ; 
   
	$domaine=$row['domaine'] ; 
	$specialite=$row['specialite'] ;
	$pays=$row['pays'] ; 
	$civilite=$row['civilite'] ;
    $ville=$row['ville'] ; 	
   
    $cine=$row['cine'];
	$stage=$row['stage'];
	$niveau=$row['niveau'];
                     	                     	
					$id = $row['id'];
                    $domaineetudes = $row['domaineetudes'];
                    $sujet = $row['sujet'];
					$nom= $row['nom'];
					$prenom= $row['prenom'];
					$nombre = $row['nombre'];
					$duree = $row['duree'];
					$debut = $row['debut'];
					$fin = $row['fin'];
$date = $row['date'];
					
//$count++;

                ?> 

<head>


<style>

body {
 
 font-size:90%;
 }

fieldset {
 padding:2 30px 30px 20px;
 margin-top:100px;
 border:1px solid 3fdf9a;
 width:430px;
 height:450px;
 margin-left:auto;
 margin-right:auto;
 }
h2 {
 color:gray;
 font-weight:italic;
 margin:0px;
 padding:0px;
 font-family:"trebuchet ms",sans-serif;
 
 }
label
{font-weight:bold;
 margin:10px;
 padding:10px;
 margin-left:0px;
 font-size:15px;
font-family:"trebuchet ms",sans-serif;


 
}
.rr
{line-height:25px;}
hr
{width:500px;}
</style>
</head>
<body>
<center>

<fieldset align='left'>

   <h2><center>  Profil  de  stage  de  l ' étudiant(e) </center></h2><hr>
    <p class =rr> 
	
    <label>Nom :</label><?php echo $nom;?></br>
    <label>Prenom :</label><?php echo $prenom;?></br>  
			   
    <label>CIN :</label><?php echo $cine;?></br>

	   
   <label>Telephone :</label><?php echo $tel;?></br>  
  
   <label>Email     :</label><?php echo $email;?></br>
   
   <label>Pays :</label><?php echo $pays;?></br>
    <label>Ville   :</label><?php echo $ville;?></br>
   
   <label>Adresse : </label> <?php echo $adresse;?></br>
   <label>Nom de l'établissement  :</label><?php echo $ecole;?></br>
   <label>Niveau : </label><?php echo $niveau;?></br>
	 				
	<label>Domaine :</label><?php echo $domaineetudes;?></br>
	<label>Spécialité :</label> <?php echo $specialite;?></br>
    <label>Type de stage :</label><?php echo $stage;?></br>
  
      </p>       
 
   
   
</fieldset>
</center>
 
</body>
</html>

