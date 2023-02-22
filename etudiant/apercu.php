<?php
    
    if ( isset($_GET['id']) ){
        $id = intval ($_GET['id']);
        include ("config.php");
        $req = "SELECT img_id, img_type, img_blob " . 
               "FROM images WHERE img_id = " . $id;
        
        
		
		
       $ret=$conn->query($req) or  die($conn->error);
      
       $col = $ret->fetch_assoc() ;
	   $id = $col['img_id'];
                  
     
		 if ( !$col ){
            echo "Id d'image inconnu";
        } else {
            header ("Content-type: " . $col['img_type']);
            echo $col['img_blob'];
        }

    } else {
        echo "Mauvais id d'image";
    }
	
		
		
         
	
?>