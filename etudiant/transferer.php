<html><head>
<script src="sweetalert.js"></script>
</head>
<body>
<?php




    function transfert(){
        $ret        = false;
        $doc_blob   = '';
        $doc_taille = 0;
        $doc_type   = '';
        $doc_nom    = '';
        $taille_max = 2500000000000000000000000000000000000000000000000000000000000000000;
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $doc_taille = $_FILES['fic']['size'];
            
            if ($doc_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            else
		{
		
		$doc_type = $_FILES['fic']['type'];
        $doc_nom = $_FILES['fic']['name'];
        include ("config.php");
		$cine=$_SESSION['cine'];
        echo  $cine;
		  $doc_blob = file_get_contents ($_FILES['fic']['tmp_name']);
		  
		  
		// on va voir si le cv existe déjà ou non   dans la bdd
		$req = "SELECT doc_nom, doc_id 
                FROM document  where cine='$cine'";
        $ret=$conn->query($req) or  die($conn->error);
        $col = $ret->fetch_assoc() ; 
       if (!empty($col))
	   {echo 
         '<script>swal("Vous avez déjà envoyé votre CV","","warning")</script>';}		   
		else
        {$req = "INSERT INTO document (" .
                            "cine,doc_nom, doc_taille, doc_type, doc_blob " .
                            ") VALUES (" .
							"'" . $cine . "', " .
                            "'" . $doc_nom . "', " .
                            "'" . $doc_taille . "', " .
                            "'" . $doc_type . "', " .
                            "'" . addslashes ($doc_blob) . "') "; // N'oublions pas d'échapper le contenu binaire
	
        $ref = $conn->query($req) or  die($conn->error);
		
		if (!$ref)
		{echo mysql_error();}
		}}}
        return true;
		
    }
	
?>
</body>
</html>