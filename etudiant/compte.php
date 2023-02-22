<?php       /*fichier qui traite partie sql  de modification des infos personnelles du parrain*/



// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";
include "sideauth.php";
include "entete.php";?>
<html>
<head>
<style>

body {
 
 font-size:90%;
 }
form {
 background-color:#FAFAFA;
 padding:30px;
 width:600px;
 margin-left:auto;
 margin-right:auto;
 }

legend {
 color:red;
 font-weight:bold;
 margin:0px;
 padding:0px;
 }


input[type=submit], input[type=reset] {
 width:100px;
 margin-left:500px;
 border-radius: 12px;
 cursor:pointer;
 background-color:none;
 }

</style>
</head>
<?php
if (isset($_POST["adresse"])  AND isset($_POST["niveau"])   AND isset($_POST["civilite"])  AND isset($_POST["pays"]) AND isset($_POST["tel"])AND isset($_POST["email"]) AND ($_POST["cine"]) AND isset($_POST["mdp"])AND isset($_POST["domaineetudes"])AND isset($_POST["specialite"]) AND isset($_POST["stage"])AND isset($_POST["ville"]) AND isset($_POST["ecole"]) AND isset($_POST["nom"])AND isset($_POST["prenom"])){
	$_SESSION['adresse']     = $_POST['adresse'];
    $_SESSION['tel']   = $_POST['tel'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mdp']  = $_POST['mdp'];
	$_SESSION['ecole']     = $_POST['ecole'];
   $_SESSION['civilite']     = $_POST['civilite'];
   $_SESSION['pays']     = $_POST['pays'];
    $_SESSION['domaineetudes'] = $_POST['domaineetudes'];
    $_SESSION['specialite']  = $_POST['specialite'];
    $_SESSION['ville']  = $_POST['ville'];
	$_SESSION['cine']  = $_POST['cine'];
	$_SESSION['cinn']  = $_POST['cine'];
    $_SESSION['nom']  = $_POST['nom'];
	$_SESSION['prenom']  = $_POST['prenom'];
	$_SESSION['stage']  = $_POST['stage'];
	$_SESSION['niveau']  = $_POST['niveau'];

    $tel=$_SESSION['tel'] ; 
	$mdp=$_SESSION['mdp'] ;
    $adresse=$_SESSION['adresse'] ; 	
    $email=$_SESSION['email'] ;
    $ecole=$_SESSION['ecole'] ; 
   
	$domaineetudes=$_SESSION['domaineetudes'] ; 
	$specialite=$_SESSION['specialite'] ;
	$pays=$_SESSION['pays'] ; 
	$civilite=$_SESSION['civilite'] ;
    $ville=$_SESSION['ville'] ; 	
    $nom=$_SESSION['nom'] ;
    $prenom=$_SESSION['prenom'] ; 
    $cine=$_SESSION['cine'];
	$stage=$_SESSION['stage'];
	$niveau=$_SESSION['niveau'];
  
  
  
  
	 
        $sql="select * from etudiant where cine='$cine'";	
        $qury=$conn->query($sql);
		$row = $qury->fetch_assoc() ;
        $ncin=$row['cine'];
                  
				               
if (!empty($ncin ))
{?>

<body>
</br></br></br></br></br>
<form action="authetudiant.php" method="post" >

<center>

   <legend><h2>Attention !</h2></legend>
    <p><h3>Il existe déjà un compte avec le cin entré</h3><p>
    
	

</center>

 <p>
 <input type="submit"  id='submit' name='submit' value="Retour" />
 
 </p>

</form>

</body><?php } 
else {		$sql="insert into  etudiant(civilite,cine,mdp,nom,prenom,tel,email,pays,ecole,domaineetudes,specialite,adresse,stage,ville,niveau) values ('$civilite','$cine','$mdp','$nom','$prenom','$tel','$email','$pays','$ecole','$domaineetudes','$specialite','$adresse','$stage','$ville','$niveau')"  ;
			
        $qury=$conn->query($sql) or  die($conn->error);
		if (!$qury)
{echo mysql_error();}

         
   


// On démarre la session AVANT d'écrire du code HTML

 
 
 $cine=$_SESSION['cine']; 
 $sql="select cine,mdp from etudiant where cine='$cine' ";	
        $qury=$conn->query($sql);
		 if (!$qury)
        echo mysql_error();
  else
     {  $row = $qury->fetch_assoc() ;
                  
                   
	              $mdp=$row['mdp'] ;
                   
				   $cine=$row['cine']; }
				 ?>
				 
<body>
</br></br></br></br></br>
<form action="accueil.php" method="post" >

<center>

   <legend><h2>Votre profil de stage est enregistré avec succès</h2></legend>
    
	<p>Vos informations de connexion :<p>
    <h3>CIN :<?php echo $cine ;?>      </h3>
    <h3>Mot de passe:<?php echo $mdp ;?>       </h3>

</center>

 <p>
 <input type="submit"  id='submit' name='submit' value="OK" />
 
 </p>

</form>

</body><?php }?>

<?php }?>

</html>

