<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";
 include "sidebar.php";
include "entete.php";


$login=$_SESSION['login'];
$psw=$_SESSION['psw'];
?>


<!doctype html>
<html>
    <head>
         <script src="sweetalert.js"></script>
         <link href='sty.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
       <center><font size=3>
		   </br></br> <caption><h4>La liste des demandes de stage</h4></caption></br>
            <table border='1' id='table'>
                <tr style='background: whitesmoke;'>
				
				       
                       <th>CIN</th>
					   <th>Nom </th>
                       <th>Prenom </th>
					   <th>ID de l'offre </th>
					   <th>Sujet de l'offre </th>
					   <th>Domaine de l'offre</th> 
					   <th>Date d'envoi de la demande</th>
					   <th>Consulter le profil du stagiaire</th> 
	                   <th>Consulter le CV du stagiaire</th> 
				   				   
				        <th>Action</th>
	              		   
	   
                </tr>

                <?php 
                $query = "SELECT * FROM offre,etudiant,document,demande where etudiant.cine=demande.cine and 
				demande.ide=offre.id and etudiant.cine=document.cine and offre.cin='mm'";
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
					//$count++;

        
                ?>
                    <tr> 
                        <td align='center'>
                        <?php echo $cine; ?></td><td><?php echo $nom; ?></td>
						<td><?php echo $prenom ;?></td><td><?php echo $id; ?></td>
						<td><?php echo $sujet; ?></td><td><?php echo $domaine; ?></td>
						<td><?php echo $date; ?></td>
						<td><span class='fiche' id='fiche'><?php echo $nom ;?>_ profil</span></td>
						
						<td>
		<?php  echo "<a style='color:blue' target='_blank' href=\"aper.php?id=" . $doc_id . "\">" . $doc_nom . "</a><br /></center>";?>
        </td>
						
							
						 <td align='center' ><span class='approuver' id='approuver'  >Valider</span></td>
						
						
						
                    </tr>
                <?php
                    
                }
				
                ?>
            </table></font>
        </center>
    </body>
</html>