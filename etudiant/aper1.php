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
        $req = "SELECT assu_id, assu_type, assu_blob " . 
               "FROM assurance WHERE assu_id = " . $id;
        
        
		
		
       $ret=$conn->query($req) or  die($conn->error);
      
       $col = $ret->fetch_assoc() ;
	   $id = $col['assu_id'];
                  
     
		 if ( !$col ){
            echo "<center>Id du assurance inconnu</center>";
        } else {
            header ("Content-type: " . $col['assu_type']);
            echo $col['assu_blob'];
        }

    } else {
        echo "<center>Mauvais id du assurance</center>";
    }

?>
</body>
</html>