<?php 
 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "sidebar.php";
include "entete.php";
include "config.php";
$cine=$_SESSION['cine'];
$sql="select *  from demande where cine='$cine'" ;
       $qury=$conn->query($sql) or  die($conn->error);
       if (!$qury)
        echo mysql_error();
  else
     {  $row = $qury->fetch_assoc() ;
	 $etatdemande=$row['etatdemande'];}
	 if ( $etatdemande==0)
	 {echo '<center></br></br></br></br> votre candidature est en cours de traitement </center>';}
 else
 {if ($etatdemande==2)
	 {
		 echo '<center></br></br></br></br> Désolé,votre candidature a été refusée </center>';}
		 else
		 {
	?>

<html>
<head>
<script src="sweetalert.js"></script>
</head>
   <style>
   .division
   {
   width:500px;
   height:100px;
   margin-left:auto;
   margin-right:auto;   
   Border-Width:thin;
   margin-top:100px;
   
  }
  
  
   </style>
   <body>
      <?php
	 
         include ("transferer1.php");
         if ( isset($_FILES['fic']) )
         {
             transfert1();
         }
      ?>
	  <?php
	 
         include ("transferer2.php");
         if ( isset($_FILES['fic1']) )
         {
             transfert2();
         }
      ?>
      <div class="division">
	  <h3> Félicitations , votre candidature a été  acceptée </h3 >
	  <p>Veuillez télécharger les pièces restantes pour compléter votre dossier de candidature </p>
	  <p style='color:red';> Télécharger votre assurance originale scannée  </p>
	  
      <form enctype="multipart/form-data" action="suivre.php" method="post">
        
         <input type="file" name="fic" size=50 />
		  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
         <input type="submit" value="Envoyer" />
      </form>
	  </br></br></br>
	  <?php
         include ("config.php");
      
       $req = "SELECT assu_nom, assu_id 
                FROM assurance  where cine='$cine'";
        $ret=$conn->query($req) or  die($conn->error);
        $col = $ret->fetch_assoc() ;
		if (empty($col)){
			echo "Aucun fichier n'est encore envoyé";
		 } 
        else
		{echo "Fichier envoyé:<center><a style='color:green' target='_blank' href=\"aper1.php?id=" . $col['assu_id'] . "\">" . $col['assu_nom'] . "</a><br /></center>";}
        
		
      ?>
	  </br>
	   <p style='color:blue';> Télécharger la demande de stage cachetée par l'établissement </p>
	  <form enctype="multipart/form-data" action="suivre.php" method="post">
        
         <input type="file" name="fic1" size=50 />
		  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
         <input type="submit" value="Envoyer" />
      </form>
	   </br></br>
	   <?php
         include ("config.php");
      
       $req = "SELECT demande_nom, demande_id 
                FROM docdemande  where cine='$cine'";
        $ret=$conn->query($req) or  die($conn->error);
        $col = $ret->fetch_assoc() ;
		if (empty($col)){
			echo "Aucun fichier n'est encore envoyé";
		 } 
        else
		{echo "Fichier envoyé:<center><a style='color:green' target='_blank' href=\"aper2.php?id=" . $col['demande_id'] . "\">" . $col['demande_nom'] . "</a><br /></center>";}
        
		
      ?>
     </div>
	 
   </body>
</html>
 <?php }} ?>