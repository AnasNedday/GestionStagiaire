<?php
include "sidebar.php";
include "entete.php";?>

<!DOCTYPE html>
<html>
<head>

<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}


.r
{margin-left:350px;

}
h4{Border-Style: Inset;
Border-Color: Silver;
Border-Width: 2pt;
width:600px;
text-align:center;
margin-left:150px;
}
article
{margin-left:300px;}
</style>
</head>
<body>

<h2></h2>
<div class="r">
</br></br></br>
  <p>Après la création de votre profil de stage ,vous devez suivre la procédure suivante:</p>
 <h4>	La procédure à suivre pour obtenir un stage	 </h4>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="cv.png">
      <img src="cv.png" alt="Cinque Terre">
    </a>
    <div class="desc">1-Envoyer votre CV  </br> </br></br> </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="cnx.png">
      <img src="cnx.png" alt="Forest" >
    </a>
    <div class="desc">2-Etablir votre demande et suivre l'état de votre demande</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="dossier.png">
      <img src="dossier.png" alt="Cinque Terre">
    </a>
    <div class="desc">3-Télécharger le dossier d'inscription en cas d'acceptation </div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p></p>
 
</div>
</div>
<article>

<p>1/ Vous envoyez votre cv dans la rubrique "Télécharger les documents" en respectant la taille max et le format exigé . </p>
<p>2/Une fois votre cv est envoyé,Vous allez à la rubrique "Postuler pour un stage" et 
vous choisissez le stage qui vous intéresse . Après votre postulation ,
vous verifiez qu'il apparaitra "Demande envoyée " dans la case cochée. </p>
<p>Vous suivez votre candidature dans la rubrique "Suivre la candidature".</p>
<p>3/Une fois vous étes admis , vous devrez télécharger la suite des documents démandés .Tout dossier incomplet sera rejeté .</p>
</body>
</html>