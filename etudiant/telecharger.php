
<?php 
 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "sidebar.php";
include "entete.php";
$cine=$_SESSION['cine'];?>
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
   margin-top:200px;
   
  }
  
  
   </style>
   <body>
      <?php
	 
         include ("transferer.php");
         if ( isset($_FILES['fic']) )
         {
             transfert();
         }
      ?>
      <div class="division">
	  <h3>Veuillez télécharger et envoyer votre CV </h3>
	  <p style='color:red';> Fichier (format word ou pdf | taille max. 1 Mo)   </p>
	  
      <form enctype="multipart/form-data" action="telecharger.php" method="post">
        
         <input type="file" name="fic" size=50 />
		  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
         <input type="submit" value="Envoyer" />
      </form>
	  </br></br></br>
	   <?php
         include ("config.php");
      
       $req = "SELECT doc_nom, doc_id 
                FROM document  where cine='$cine'";
        $ret=$conn->query($req) or  die($conn->error);
        $col = $ret->fetch_assoc() ;
		if (empty($col)){
			echo "Aucun fichier n'est encore envoyé";
		 } 
        else
		{echo "Fichier envoyé:<center><a style='color:blue' target='blank'href=\"aper.php?id=" . $col['doc_id'] . "\">" . $col['doc_nom'] . "</a><br /></center>";}
        
		
      ?>
     </div>
	 
   </body>
</html>
