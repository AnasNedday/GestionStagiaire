<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";
include "sidebar.php";
include "entete.php";

$cin=$_SESSION['cin'];

?>


<!doctype html>
<html>
    <head>
        <script src="sweetalert.js"></script>
        <link href='stylenew.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='SScript.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
	
	
	input[type=text] {
    width: 300px;
	padding-left:600px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    float:right;
	padding-bottom:5px;
	padding-top:5px;
}
  
  input[type=text]:focus{
    border-color:green;
    box-shadow:0 0 8px 0 green;
  }
  
  .inputWithIcon input[type=text]{
    padding-left:40px;
  }
  
  .inputWithIcon{
    position:relative;
	
	
  }
  
  .inputWithIcon i{
    position:absolute;
    right:265px;
    top:8px;
    padding:1px 8px;
    color:#aaa;
    transition:.3s;
  }
  
  .inputWithIcon input[type=text]:focus + i{
    color:green;
  }
  
  .inputWithIcon.inputIconBg i{
    background-color:#aaa;
    color:#fff;
    padding:9px 4px;
    border-radius:4px 0 0 4px;
  }
  
  .inputWithIcon.inputIconBg input[type=text]:focus + i{
    color:#fff;
    background-color:Green;
  }
	
	</style>
    </head>
    <body>
      <body>
       <center><font size=3>
		   </br></br> <caption><h4>La liste des demandes de stage</h4></caption></br>
		   <div class="inputWithIcon">
          <input type="text" placeholder="Search..." id="myInput">
          <i class="fa fa-search " aria-hidden="true"></i>
          </div>

           <br><br>
            <table border='1' id='table'>
			 <thead>
                <tr style='background: whitesmoke;'>
      
                       <th>CIN</th>
					   <th>Nom </th>
                       <th>Prenom </th>
					   <th>ID de l'offre </th>
					   
					   <th style="width:200px";>Date d'envoi de la demande</th>
					   <th>Profil du stagiaire</th> 
	                   <th>CV du stagiaire</th> 
				   				   
				        <th>Action</th>
	              		<th>Action</th>  
						<th>Etat</th>
    </tr>

                <?php 
                $query = "SELECT * FROM offre,etudiant,document,demande where etudiant.cine=demande.cine and 
				demande.ide=offre.id and etudiant.cine=document.cine and offre.cin='$cin'";
                $result = $conn->query($query) or  die($conn->error);

                //$count = 0;
                while($row = mysqli_fetch_array($result) ){
                    $tel=$_SESSION['tel'] ; 
					
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
					$doc_id=$row['doc_id'];
					$doc_nom=$row['doc_nom'];
					$etatdemande = $row['etatdemande'];
					$nbrerest= $row['nbrerest'];
					//$count++;

        
                ?>
				
                    <tr> 
                       
						<td><?php echo $cine; ?></td><td><?php echo $nom; ?></td>
						
						<td><?php echo $prenom ;?></td>
						<td id='ID' ><div class="tooltip"><?php echo $id;?>
                        <span class="tooltiptext" >
                        <ul style="list-style-type:disc">
  
                       <li><strong>domaine:</strong><?php  echo $domaine;?></li>
                       <li><strong>sujet:</strong><?php  echo $sujet;?></li>
                       <li><strong>date début:</strong><?php  echo $debut;?></li>
                       <li><strong>date fin:</strong><?php  echo $fin;?></li>
                       </ul>
                       </span>
                       </div></td>
						
						<td><?php echo $date; ?></td>
						<td><span class='fic' id='fic'><?php echo $nom ;?>_ profil</span></td>
						
						<td>
		<?php  echo "<a style='color:blue' target='_blank' href=\"aper.php?id=" . $doc_id . "\">" . $doc_nom . "</a><br /></center>";?>
        </td>
						
							
						 <td align='center' ><span class='approuver' id='approuver'>Approuver</span></td>
						<td align='center'><span class='annuler' id='annuler'>Rejeter</span></td>
						<td style='font-weight: bold';><?php if  ($etatdemande==1) {echo 'Validé';} 
						          if   ($etatdemande==0) {echo 'En attente';}
								  if   ($etatdemande==2) {echo 'Non Validé';}?></td>
						
                    
						
                    </tr>
                <?php
                    
                }
				
                ?>
            </table></font>
        </center>
    </body>
</html>