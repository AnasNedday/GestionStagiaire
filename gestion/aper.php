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
        $req = "SELECT doc_id, doc_type, doc_blob " . 
               "FROM document WHERE doc_id = " . $id;
        
        
		
		
       $ret=$conn->query($req) or  die($conn->error);
      
       $col = $ret->fetch_assoc() ;
	   $id = $col['doc_id'];
                  
     
		 if ( !$col ){
            echo "<center>Id du document inconnu</center>";
        } else {
            header ("Content-type: " . $col['doc_type']);
            echo $col['doc_blob'];
        }

    } else {
        echo "<center>Mauvais id du document</center>";
    }

?>
</body>
</html>