<html><head>
<script src="sweetalert.js"></script>
</head>
<body>
<?php




    function transfert1(){
        $ret        = false;
        $assu_blob   = '';
        $assu_taille = 0;
        $assu_type   = '';
        $assu_nom    = '';
        $taille_max = 2500000000000000000000000000000000000000000000000000000000000000000;
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $assu_taille = $_FILES['fic']['size'];
            
            if ($assu_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            else
		{
		
		$assu_type = $_FILES['fic']['type'];
        $assu_nom = $_FILES['fic']['name'];
        include ("config.php");
		$cine=$_SESSION['cine'];
        echo  $cine;
		  $assu_blob = file_get_contents ($_FILES['fic']['tmp_name']);
		  
		  
		// on va voir si le cv existe déjà ou non   dans la bdd
		$req = "SELECT assu_nom, assu_id 
                FROM assurance  where cine='$cine'";
        $ret=$conn->query($req) or  die($conn->error);
        $col = $ret->fetch_assoc() ; 
       if (!empty($col))
	   {echo 
         '<script>swal("Vous avez déjà envoyé votre assurance","","warning")</script>';}		   
		else
        {$req = "INSERT INTO assurance (" .
                            "cine,assu_nom, assu_taille, assu_type, assu_blob " .
                            ") VALUES (" .
							"'" . $cine . "', " .
                            "'" . $assu_nom . "', " .
                            "'" . $assu_taille . "', " .
                            "'" . $assu_type . "', " .
                            "'" . addslashes ($assu_blob) . "') "; // N'oublions pas d'échapper le contenu binaire
	
        $ref = $conn->query($req) or  die($conn->error);
		
		if (!$ref)
		{echo mysql_error();}
		}}}
        return true;
		
    }
	
?>
</body>
</html>