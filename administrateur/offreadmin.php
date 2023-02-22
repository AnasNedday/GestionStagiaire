<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";
include "sidebar.php";
include "entete.php";

$login=$_SESSION['login'];
?>

<!doctype html>
<html>
    <head>
        <script src="sweetalert.js"></script>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scadmin.js' type='text/javascript'></script>
        
    </head>
    <body>
       <center>
		   </br></br> <caption><h4>La liste des offres de stage</h4></caption></br>
            <table border='1' id='table'>
                <tr style='background: whitesmoke;'>
                      <th>ID</th> 
					  <th>Domaine</th>
                       <th>Sujet</th>
					   <th>Parrain</th>
                       <th>Entité</th>
	                <th>Nombre de places</th>
	                  <th>Durée </th>
	               <th>Date début </th>
	              <th>Date fin  </th>
				  <th>Etat</th>   				   
				  <th>Action</th>
	              <th>Action</th>
				  <th>Action</th>
                	<th>Action</th>			   
	   
                </tr>

                <?php 
                $query = "SELECT * FROM offre,parrain where offre.cin=parrain.cin ";
                $result = $conn->query($query) or  die($conn->error);

                //$count = 0;
                while($row = mysqli_fetch_array($result) ){
                    $id = $row['id'];
                    $domaine = $row['domaine'];
                    $sujet = $row['sujet'];
					$nom= $row['nom'];
					$prenom= $row['prenom'];
					$entite = $row['entite'];
					$nombre = $row['nombre'];
					$duree = $row['duree'];
					$debut = $row['debut'];
					$fin = $row['fin'];
					$etat = $row['etat'];
					//$count++;

                ?>
                    <tr>
                        <td align='center' class='identifiant' id='id'><?php echo $id; ?></td>
                        <td><?php echo $domaine; ?></td><td><?php echo $sujet; ?></td>
						<td><?php echo $nom ;?><?php echo " " ;?><?php echo $prenom ;?></td><td><?php echo $entite; ?></td>
					    <td><?php echo $nombre; ?></td>
						<td><?php echo $duree." mois"; ?></td><td><?php echo $debut; ?></td>
						<td><?php echo $fin; ?></td>
						<td style='font-weight: bold';><?php if  ($etat==1) {echo 'Validé';} 
						          if   ($etat==0) {echo 'En attente';}
								  if   ($etat==2) {echo 'Non Validé';}?></td>
                        <td align='center'><span class='delete' id='del_<?php echo $id; ?>'>Delete</span></td>
						<td align='center'><span class='update' >Update</span></td>
						<td align='center' ><span class='valider' >Valider</span></td>
						<td align='center' ><span class='annuler' >Annuler</span></td>
                    </tr>
                <?php
                    
                }
				
                ?>
            </table>
        </center>
    </body>
</html>