<?php       /*fichier qui traite partie sql  de modification des infos personnelles du parrain*/



// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";


if (isset($_POST["adresse"])  AND isset($_POST["niveau"])   AND isset($_POST["civilite"])  AND isset($_POST["pays"]) AND isset($_POST["tel"])AND isset($_POST["email"]) AND ($_POST["cine"]) AND isset($_POST["mdp"])AND isset($_POST["domaine"])AND isset($_POST["specialite"]) AND isset($_POST["stage"])AND isset($_POST["ville"]) AND isset($_POST["ecole"]) AND isset($_POST["nom"])AND isset($_POST["prenom"])){
	$_SESSION['adresse']     = $_POST['adresse'];
    $_SESSION['tel']   = $_POST['tel'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mdp']  = $_POST['mdp'];
	$_SESSION['ecole']     = $_POST['ecole'];
   $_SESSION['civilite']     = $_POST['civilite'];
   $_SESSION['pays']     = $_POST['pays'];
    $_SESSION['domaine'] = $_POST['domaine'];
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
   
	$domaine=$_SESSION['domaine'] ; 
	$specialite=$_SESSION['specialite'] ;
	$pays=$_SESSION['pays'] ; 
	$civilite=$_SESSION['civilite'] ;
    $ville=$_SESSION['ville'] ; 	
    $nom=$_SESSION['nom'] ;
    $prenom=$_SESSION['prenom'] ; 
    $cine=$_SESSION['cine'];
	$stage=$_SESSION['stage'];
	$niveau=$_SESSION['niveau'];
  
  
  
  
	 
       /* $sql="select * from etudiant";	
        $qury=$conn->query($sql);
		
                   while($row = mysqli_fetch_array($qury) ){
                  $ptel=$row['tel'] ; 
	              $pmdp=$row['mdp'] ;
                  $padresse=$row['adresse'] ; 	
                  $pemail=$row['email'] ;
                  $pecole=$row['ecole'] ; 
                  
	              $pfiliere=$row['filiere'] ; 
	              $petudes=$row['etudes'] ;
                  $pville=$row['ville'] ; 	
                  $pnom=$row['nom'] ;
                  $prenom=$row['prenom'] ; 
                  $pcin=$row['cin']; 
				  $pstage=$row['stage'] ;}*/
				               
//if (empty($cin ))
//{
		$sql="insert into  etudiant(civilite,cine,mdp,nom,prenom,tel,email,pays,ecole,domaine,specialite,adresse,stage,ville,niveau) values ('$civilite','$cine','$mdp','$nom','$prenom','$tel','$email','$pays','$ecole','$domaine','$specialite','$adresse','$stage','$ville','$niveau')"  ;
			
        $qury=$conn->query($sql) or  die($conn->error);
		if (!$qury)
{echo mysql_error();}
/*else
{    /*affichage d'une fenetre alterte*/        /*puis redirection vers menu*/
	/*echo '
    <script type="text/javascript">
    alert("Votre compte est créee !! ")
	
	
	document.location.href="compte.php"        
</script>';
}//}
/*else
{echo '
    <script type="text/javascript">
    alert("vous avez déjà un compte  !! ")
	
	        
</script>';}*/  }
         
         
  ?>
  <?php     /* fichier d inscription d etudiant */


// On démarre la session AVANT d'écrire du code HTML

 include "sideauth.php";
 include "entete.php";
 
 $cin=$_SESSION['cine']; 
 $sql="select cine,mdp from etudiant where cine='$cine' ";	
        $qury=$conn->query($sql);
		 if (!$qury)
        echo mysql_error();
  else
     {  $row = $qury->fetch_assoc() ;
                  
                   
	              $mdp=$row['mdp'] ;
                   
				   $cine=$row['cine']; }
				 ?>
<!doctype html>
<html>




<style>

body {
 font-family:"trebuchet ms",sans-serif;
 font-size:90%;
 }
form {
 background-color:#FAFAFA;
 padding:30px;
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
 color:red;
 font-weight:bold;
 margin:0px;
 padding:0px;
 }


input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #4CAF50;
 cursor:pointer;
 background-color:#4CAF50;
 }

</style>

<body>
<form action="accueil.php" method="post" >

<center>

   <legend><h2>Votre profil de stage est enregistré avec succès</h2></legend>
    
	<h3>Vos informations de connexion</h3>
    <h3>CIN :<?php echo $cine ;?>      </h3>
    <h3>Mot de passe:<?php echo $mdp ;?>       </h3>

</center>

 <p>
 <input type="submit"  id='submit' name='submit' value="OK" />
 
 </p>

</form>
</body>
</html>

<!-- script pour rendre le mot de passe visible -->
<script>
function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>