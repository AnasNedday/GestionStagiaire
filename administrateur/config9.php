
<?php     /* fichier du formulaire de modification des infos personnelles du parrain */

 include "sidebar.php";
 include "entete.php";?>
<html>
<head>
 <script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptadmin.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php      


// On démarre la session AVANT d'écrire du code HTML
session_start();

include "config.php";


if (isset($_POST["adresse"]) AND isset($_POST["tel"])AND isset($_POST["email"]) AND ($_POST["entite"])
	AND isset($_POST["nom"]) AND isset($_POST["prenom"] )AND isset($_POST["mdp"]) AND isset($_POST["cin"]))
{
	
	$_SESSION['adresse']     = $_POST['adresse'];
    $_SESSION['tel']   = $_POST['tel'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['entite']  = $_POST['entite'];
    $_SESSION['nom']     = $_POST['nom'];
    $_SESSION['prenom']   = $_POST['prenom'];
    $_SESSION['mdp'] = $_POST['mdp'];
    $_SESSION['cin']  = $_POST['cin'];
    
    $tel=$_SESSION['tel'] ; 
	$mdp=$_SESSION['mdp'] ;
    $adresse=$_SESSION['adresse'] ; 	
    $email=$_SESSION['email'] ;
    $entite=$_SESSION['entite'] ; 
    $cin=$_SESSION['cin'];
	$nom=$_SESSION['nom'];
	$prenom=$_SESSION['prenom'];
	
 $sql="select * from parrain where cin='$cin'";	
        $qury=$conn->query($sql);
		$row = $qury->fetch_assoc() ;
        $ncin=$row['cin'];
                  
				               
if (!empty($ncin ))
{?>

<body>
</br></br></br></br></br>


<center>

   <legend><h2>Attention !</h2></legend>
    <p><h3>Il existe déjà un compte avec le cin entré</h3><p>
    
	

</center>

 <p>
 <input type="submit"  id='submit' name='submit' value="Retour" />
 
 </p>



</body><?php } 
else {		
	$sql="insert into parrain(nom,prenom,cin,mdp,tel,email,entite,adresse) values('$nom','$prenom','$cin','$mdp','$tel','$email','$entite','$adresse')";
        $qury=$conn->query($sql) or  die($conn->error);
		if (!$qury)
{echo mysql_error();}
 else
{    /*affichage d'une fenetre alterte*/        /*puis redirection vers menu*/
	echo '
    <script>
   swal("Parrain ajouté avec succès","","success")
.then((value) => {
   document.location.href="ajouterparrain.php";
});
	

	
	    
</script>';
}}}
         
         
  ?>
  </body>
  </html>
  