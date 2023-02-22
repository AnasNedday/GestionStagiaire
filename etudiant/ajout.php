<?php 
include("config.php");
$description=$_POST["description"]; // on recupere la description
$nom=$_FILES["file"]["name"]; // on recupere le nom de l'image avec son extension
 
    list($name, $ext) = explode(".", $nom);   // on separe le nom de l'image de son extension    
 
  $ext=".".$ext; // on rajoute un . devant l'extention
 
$chemin = "./repertoire/".$nom; // ici c'est l'endroit ou va etre stocker le chemin de votre texte ou image ou autre  ici c'est dans ==> répertoire.
move_uploaded_file($HTTP_POST_FILES["file"]["tmp_name"],$chemin); // on envoie le fichier a l'endroit voulu
$sql="INSERT INTO fichier (file, description)  VALUES('$nom','$description')";
        $qury=$conn->query($sql) or  die($conn->error);
		if (!$qury)
{echo mysql_error();}
 // et on termine en envoyant les données dans la base mysql
 else
 {echo 'Voila tout est la';}
?>