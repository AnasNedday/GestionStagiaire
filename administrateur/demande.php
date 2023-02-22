<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";
include "sidebar.php";
include "entete.php";



?>


<!doctype html>
<html>
    <head>
         <script src="sweetalert.js"></script>
         <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='sadmin.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
       <center><font size=3>
		   </br></br> <caption><h4>La liste des demandes de stage validées par les parrains </h4></caption></br>
            <table border='1' id='table'>
                <tr style='background: whitesmoke;'>
				
				     
                       <th>CIN</th>
					   <th>Nom </th>
                       <th>Prenom </th>
					   <th>ID de l'offre </th>
					   <th>Parrain </th>
					   
					   
	                   <th>CV</th> 
					   <th>Assurance</th> 
					   <th>Demande de stage </th> 
				   				   
				        <th>Action</th>
	              		   
	   
                </tr>

                <?php 
                $query = "SELECT *,parrain.nom as nomp,parrain.prenom as prenomp FROM offre,parrain,etudiant,document,demande,assurance,docdemande where etudiant.cine=demande.cine and 
				demande.ide=offre.id and etudiant.cine=document.cine and etudiant.cine=assurance.cine and etudiant.cine=docdemande.cine and parrain.cin=offre.cin and etatdemande=1";
                $result = $conn->query($query) or  die($conn->error);

                //$count = 0;
                while($row = mysqli_fetch_array($result) ){
                    
					
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
					$nomp= $row['nomp'];
					$prenomp= $row['prenomp'];
					$nombre = $row['nombre'];
					$duree = $row['duree'];
					$debut = $row['debut'];
					$fin = $row['fin'];
					$date = $row['date'];
					$assu_id=$row['assu_id'];
					$assu_nom=$row['assu_nom'];
					$demande_id=$row['demande_id'];
					$demande_nom=$row['demande_nom'];
					$doc_id=$row['doc_id'];
					$doc_nom=$row['doc_nom'];
					$etatdemande = $row['etatdemande'];
					$nbrerest= $row['nbrerest'];
					$etatsuivi= $row['etatsuivi'];
					//$count++;

        
                ?>
				
                    <tr> 
                       
						<td><?php echo $cine; ?></td><td><?php echo $nom; ?></td>
						
						<td><?php echo $prenom ;?></td><td><?php echo $id; ?></td>
						<td><?php echo $nomp; ?> <?php echo $prenomp; ?></td>
						
						
						
						
		<td>
		<?php  echo "<a style='color:blue' target='_blank' href=\"aper.php?id=" . $doc_id . "\">" . $doc_nom . "</a><br /></center>";?>
        </td>
<td>
		<?php  echo "<a style='color:blue' target='_blank' href=\"aper1.php?id=" . $assu_id . "\">" . $assu_nom . "</a><br /></center>";?>
        </td>
<td>
		<?php  echo "<a style='color:blue' target='_blank' href=\"aper2.php?id=" . $demande_id . "\">" . $demande_nom . "</a><br /></center>";?>
        </td>		<?php if ($etatsuivi==0) {?>
							
						 <td align='center' ><span class='approuver' id='approuver'>approuver</span></td>
						
						<?php }else
						{?>
						<td align='center' >Validé</td> <?php } ?>
							
						
                    </tr>
                <?php
                    
                }
				
                ?>
            </table></font>
        </center>
    </body>
</html>