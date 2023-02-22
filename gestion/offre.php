<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
         include "sidebar.php";
        include "entete.php";
		include "sqloffre.php";
		
		
		
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../offrestyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='jquery-3.0.0.js' type='text/javascript'></script>
 <script src="sweetalert.js"></script>
<style>
body {
 
 font-size:90%;
 }
form {
 background-color:white;
 padding:70px;
 width:600px;
 margin-left:auto;
 margin-right:auto;
 }
fieldset {
 padding:2 30px 30px 20px;
 margin-bottom:10px;
 border:1px solid 3fdf9a;
 }
legend {
 color:#4CAF50;
 font-weight:bold;
 font-size:110%;
 padding:10px;
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:50px;
 }
input, textarea, select, option {
 background-color:#F5F5F5;
 }
input, select {
 padding:3px;
 border:1px solid ;
 border-radius:5px;
 width:370px;
 box-shadow:1px 1px 2px  inset;
 margin:8px;
 }
 textarea  {
 padding:3px;
 border:1px solid ;
 border-radius:5px;
 width:400px;
 box-shadow:1px 1px 2px #C0C0C0 inset;
 margin:10px;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #4CAF50;
 cursor:pointer;
 background-color:#4CAF50;
 }
 
 </style>
</head>
<body>

<form action="offre.php" method="post" >

<fieldset>

   <legend> Formulaire d'ajout de stage </legend>
    Domaine   <select name='domaine' required >
   <option value="" disabled selected hidden>Sélectionnez </option>
   <option value="informatique"> Informatique</option>
   <option value="economie"> Economie et gestion </option>
   <option value="chimie"> Chimie</option>
   <option value="mecanique"> Mécanique</option>
   <option value="electricite"> Electricité</option>
   <option value="industrie"> Industrie</option>
   <option value="materiaux">  Matériaux et contrôle qualité</option>
   <option value="electromecanique"> Electromécanique</option>
   <option value="management">  Management des Systèmes d’Information et de Production</option>
   </select></br></br> 

  
   
   Sujet  </br> <textarea name='sujet'  cols="50" rows="4" required  >
   </textarea></br>
 
   
   
   Entité   <select name='entite' required >
   <option value="" disabled selected hidden>Sélectionnez</option>
   <option value="OIJ/H">OIJ/H</option>
   
   <option value="OIK/PS"> OIK/PS</option>
   </select></br>
   
   Nombre de places <input type="number" name='nombre'  
   max="20" min="1"   required  /></br>
   
   Durée de stage  <select name='duree' required >
   <option value="" disabled selected hidden>Sélectionnez   </option>
   <option value="1">1 mois</option>
   <option value="2">2 mois</option>
   <option value="3">3 mois</option>
   <option value="4">4 mois</option>
   <option value="5">5 mois</option>
   <option value="6">6 mois</option>
   </select></br></br>
   Date début du stage <input type="date"  name='debut' required
               value="yyyy-mm-dd"/></br></br>
   Date fin du stage <input type="date"  fin" name='fin' required
               value="yyyy-mm-dd"/></br>          
  
   
   
</fieldset>

 <p>
 <input type="submit" name='submit' value="Envoyer" />
 <input type="reset" value="Annuler" />
 </p>

</form>
</body>
</html>


<?php
  
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
    <script>
    swal("Formulaire envoyé avec succès", "votre offre a été bien ajouté", "success");
	
</script>';}
}

         
  ?>

    	