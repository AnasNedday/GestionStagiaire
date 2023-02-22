
<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "sidebar.php";
include "entete.php";
include "config.php";?>
	

<html>
<head>
<link rel="stylesheet" type="text/css" href="../offrestyle.css">
 <script src='jquery-3.0.0.js' type='text/javascript'></script>
  <script src='scipt3.js' type='text/javascript'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<form action="config3.php" method="post" >
<?php

/*echo'<script>
var h=2
</script>';
$i='<script>document.write(h)</script>';
echo $i;;*/
/*echo '<script>
document.getElementById("update").addEventListener("click", myFunction);

function myFunction() {
   if (confirm("Are you sure you want to update this row?"))
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
            // alert(rowIndex);

			firstCell = table.rows[rowIndex].cells[0].innerHTML;
            alert(firstCell);
}
</script>';*/?>

<?php
if ( ! empty( $_COOKIE['firstCell'] ) ) {                /*on va récupérer la valeur dans le cookie */ 
	
	$_SESSION['ide']=$_COOKIE['firstCell'];
	$ide=$_SESSION['ide'];
}

$query = "select domaine,cin,sujet,entite,duree,nombre,debut,fin from offre  where id='$ide'"; 
			
        $result = $conn->query($query) or  die($conn->error);
		
		if (!$result)
{echo mysql_error();}
else
     {  $row = $result->fetch_assoc() ;
        $cin=$row['cin'];
		$_SESSION['domaine']=$row['domaine'];
		$_SESSION['sujet']=$row['sujet'];
		$_SESSION['entite']=$row['entite'];
		$_SESSION['nombre']=$row['nombre'];
		$_SESSION['duree']=$row['duree'];
		$_SESSION['debut']=$row['debut'];
	    $_SESSION['fin']=$row['fin'];}

?>
<fieldset>

   <legend>Mise à jour d'un offre de stage </legend>
    Domaine   <select name='domaine' required  >
   <option value="<?php echo $_SESSION['domaine']; ?>" > <?php echo $_SESSION['domaine']; ?></option>
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

  
   
   Sujet  </br> <textarea name='sujet'  cols="50" rows="4" required ><?php echo $_SESSION['sujet']; ?>
   </textarea></br>
 
   
   
   Entité :  <select name='entite' required >
   <option value="<?php echo $_SESSION['entite']; ?>" ><?php echo $_SESSION['entite']; ?></option>
   <option value="informatique">OIH</option>
   <option value="economie"> OIJ</option>
   <option value="chimie"> OIK</option>
   </select></br>
   
   Nombre de places <input type="number" name='nombre'  
   max="20" min="1"   required value="<?php echo $_SESSION['nombre']; ?>" /></br>
   
   Durée de stage : <select name='duree' required >
   <option value="<?php echo $_SESSION['duree']; ?>" > <?php echo $_SESSION['duree']; ?>  </option>
   <option value="1">1 mois</option>
   <option value="2">2 mois</option>
   <option value="3">3 mois</option>
   <option value="4">4 mois</option>
   <option value="5">5 mois</option>
   <option value="6">6 mois</option>
   </select></br></br>
   Date début du stage :<input type="date"  name='debut' required
               value="<?php echo $_SESSION['debut']; ?>"/></br></br>
   Date fin du stage :<input type="date"  fin" name='fin' required
               value="<?php echo $_SESSION['fin'];?>"/></br>          
  
   
   
</fieldset>

 <p>
 <input type="submit" name='submit' value="Envoyer" />
 <input type="reset" value="Annuler" />
 </p>

</form>
</body>
</html>

