<?php       /* ce fichier concerne la cnx avec la base de données */    

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
		 ?>