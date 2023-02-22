<?php
if ($_FILES['fic']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['fic']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
$extensions_valides = array( 'pdf' , 'docx' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['fic']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
?>