<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
include "config.php";

include "sidebar.php";
include "entete.php";

$cine=$_SESSION['cine'];

?>

<!doctype html>
<html>
    <head>
        
        <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='scripteleve.js' type='text/javascript'></script>
		<script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
      
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
   
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>




     

		   </br></br></br> <caption ><h4 >La liste des offres de stage</h4></caption></br>
            <table border='1' id='table' >
                <tr style='background: whitesmoke;'>
                      <th>ID</th> 
					  <th>DOMAINE</th>
                       <th>SUJET</th>
					   <th>PARRAIN</th>
                       <th>ENTITE</th>
	                <th>NOMBRE DE PLACES</th>
	                  <th>DUREE</th>
	               <th>DATE DEBUT DU STAGE</th>
	              <th>DATE FIN DE STAGE</th>
				   				   
				  <th>Action</th>
	              	   
	   
                </tr>

                <?php 
                $query = "SELECT * FROM offre,parrain where offre.cin=parrain.cin  and offre.etat=1";
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
						<td><?php echo $duree; ?></td><td><?php echo $debut; ?></td>
						<td><?php echo $fin; ?></td>
 		<?php $sql="select ide from demande where cine='$cine'";
             $qury=$conn->query($sql);
		
             $row = $qury->fetch_assoc();
			 $idd = $row['ide'];
					
					
			if ($id==$idd) 
			{echo "<td align='center' style='color:pink';><span class='postuler' id='postuler'>Demande envoyée</span></td>";}
				    else
					{echo "<td align='center'><span class='postuler' id='postuler'>Postuler</span></td>";}
						?>
                    </tr>
                <?php
                    
                }
				
                ?>
            </table>
        
    </body>
</html>