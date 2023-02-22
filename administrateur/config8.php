<?php       /*fichier qui traite partie sql de l'authentification*/


// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";?>
<html>
<head>
 <script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptadmin.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php 
$login=$_SESSION['login'];

if (isset($_POST['login']) AND ($_POST['psw'])){
	$_SESSION['login'] = $_POST['login'];
    $_SESSION['psw'] = $_POST['psw'];
    
	 
   
		 
        if ( $_SESSION['psw']=="admin" AND  $_SESSION['login']=admin)
		{header('Location:accueil.php');}      /*redirection vers menu*/
       
         else
{   
echo '
    <script>
  swal({
  title: "Mot de passe incorrect",
  text: "Veuillez réessayer avec un autre",
  icon: "error",
  dangerMode: true,
})
.then((willDelete) => {
  
    document.location.href="authadmin.php";
 
});

 </script>';
}} 
         
  ?>
  </body>
  </html>