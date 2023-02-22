<html><head>
<script src="sweetalert.js"></script>
</head>
<body>
<?php




    function transfert2(){
        $ret        = false;
        $demande_blob   = '';
        $demande_taille = 0;
        $demande_type   = '';
        $demande_nom    = '';
        $taille_max = 2500000000000000000000000000000000000000000000000000000000000000000;
        $ret        = is_uploaded_file($_FILES['fic1']['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $demande_taille = $_FILES['fic1']['size'];
            
            if ($demande_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            else
		{
		
		$demande_type = $_FILES['fic1']['type'];
        $demande_nom = $_FILES['fic1']['name'];
        include ("config.php");
		$cine=$_SESSION['cine'];
        echo  $cine;
		  $demande_blob = file_get_contents ($_FILES['fic1']['tmp_name']);
		  
		  
		// on va voir si le cv existe déjà ou non   dans la bdd
		$req = "SELECT demande_nom, demande_id 
                FROM docdemande  where cine='$cine'";
        $ret=$conn->query($req) or  die($conn->error);
        $col = $ret->fetch_assoc() ; 
       if (!empty($col))
	   {echo 
         '<script>swal("Vous avez déjà envoyé votre feuille de demande de stage","","warning")</script>';}		   
		else
        {$req = "INSERT INTO docdemande  (" .
                            "cine,demande_nom, demande_taille, demande_type, demande_blob " .
                            ") VALUES (" .
							"'" . $cine . "', " .
                            "'" . $demande_nom . "', " .
                            "'" . $demande_taille . "', " .
                            "'" . $demande_type . "', " .
                            "'" . addslashes ($demande_blob) . "') "; // N'oublions pas d'échapper le contenu binaire
	
        $ref = $conn->query($req) or  die($conn->error);
		
		if (!$ref)
		{echo mysql_error();}
		}}}
        return true;
		
    }
	
?>
</body>
</html>