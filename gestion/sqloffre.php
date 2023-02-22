<?php


		$servername = "localhost";
        $username = "root";
        $password = "root";
        $db="gestion";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$db);

        // Check connection
         if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
         } 
        $sql="select * from offre";	
        $qury=$conn->query($sql);
		
                   while($row = mysqli_fetch_array($qury) ){
                    $id = $row['id'];
                    $domaine = $row['domaine'];
                    $sujet = $row['sujet'];
					$entite = $row['entite'];
					$nombre = $row['nombre'];
					$duree = $row['duree'];
					$debut = $row['debut'];
				    $fin = $row['fin'];  }
				               
if (empty($id ))
{$sql="ALTER TABLE offre AUTO_INCREMENT = 1";
$qury=$conn->query($sql);
}

?>