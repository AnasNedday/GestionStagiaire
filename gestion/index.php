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
         <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scriptparrain.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
    <body>
       <center>
		   </br></br> <caption><h4>Vos offres de stages envoyées</h4></caption></br>
            <table border='1' id='table'>
                <tr style='background: whitesmoke;'> 
                      
                       <th>Sujet</th>
                       <th>Domaine</th>
                       <th>Entité</th>
	                <th>Nombre de places</th>
	                  <th>Duree</th>
	               <th>Date debut de stage</th>
	              <th>Date fin de stage</th>
	              <th>Action</th>  
	              <th>Action</th> 
                  <th>Etat de l'offre</th>   				  
                </tr>

                <?php 
                $query = "SELECT * FROM offre where cin='$cin'";
                $result = $conn->query($query) or  die($conn->error);

                //$count = 0;
                while($row = mysqli_fetch_array($result) ){
                    $id = $row['id'];
                    $domaine = $row['domaine'];
                    $sujet = $row['sujet'];
					$entite = $row['entite'];
					$nombre = $row['nombre'];
					$duree = $row['duree'];
					$debut = $row['debut'];
					$fin = $row['fin'];
					$etat = $row['etat'];
					//$count++;

                ?>
                    <tr>
                       <td><?php echo $sujet; ?></td><td><?php echo $domaine; ?></td>
						<td><?php echo $entite; ?></td><td><?php echo $nombre; ?></td>
						<td><?php echo $duree ;echo " mois"; ?></td><td><?php echo $debut; ?></td>
						<td><?php echo $fin; ?></td>
                        <td align='center'><span class='delete' id='del_<?php echo $id; ?>'>Delete</span></td>
						<td align='center'><span class='update' id='<?php echo $id; ?>'>Update</span></td>
						<td style='font-weight: bold';><?php if  ($etat==1) {echo 'Validé';} 
						          if   ($etat==0) {echo 'En attente';}
								  if   ($etat==2) {echo 'Non Validé';}?></td>
						
                    </tr>
                <?php
                    
                }
				
                ?>
            </table>
        </center>
    </body>
</html>