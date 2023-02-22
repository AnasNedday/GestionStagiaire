<html><head>
<script src="sweetalert.js"></script>
</head>
<body>
<?php
  
    if ( isset($_GET['id']) ){
        $id = intval ($_GET['id']);
		
        include ("config.php");
		echo 
         '<script>swal("CV envoyé avec succès,"","success")</script>';
        $req = "SELECT demande_id, demande_type, demande_blob " . 
               "FROM docdemande WHERE demande_id = " . $id;
        
        
		
		
       $ret=$conn->query($req) or  die($conn->error);
      
       $col = $ret->fetch_assoc() ;
	   $id = $col['demande_id'];
                  
     
		 if ( !$col ){
            echo "<center>Id du docdemande inconnu</center>";
        } else {
            header ("Content-type: " . $col['demande_type']);
            echo $col['demande_blob'];
        }

    } else {
        echo "<center>Mauvais id du docdemande</center>";
    }

?>
</body>
</html>