<?php       /*fichier qui traite partie sql  de modification des infos personnelles du parrain*/

// On démarre la session AVANT d'écrire du code HTML

include "config.php";


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
		$sql="insert into  etudiant(civilite,cine,mdp,nom,prenom,tel,email,pays,ecole,domaineetudes,specialite,adresse,stage,ville,niveau) values ('$civilite','$cine','$mdp','$nom','$prenom','$tel','$email','$pays','$ecole','$domaineetudes','$specialite','$adresse','$stage','$ville','$niveau')"  ;
			
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