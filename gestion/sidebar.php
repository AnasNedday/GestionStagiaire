<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.sidebar {
  height: 100%;
  width: 230px;
  position:fixed;
  left:0;
  top:40px;
  
  
 
  
  left: 0;
  bottom:0;
  background-color: #FFD700;
  overflow-x: hidden;
  padding-top: 16px;
  font-family: "Lato", sans-serif;
}

.sidebar a {
  padding: 15px 8px 6px 16px;
  text-decoration: none;
  font-size: 13px;
  color: #000080;
  display: block;
  border-bottom :1px solid rgba(100,100,100,0.3);
 
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar">
  
<a><p style="color:green;"><strong> Espace Parrain </strong></p></a>
  <a href="accueil.php"><i class="fa fa-fw fa-home"></i>Accueil</a>
  <a href="modifierparrain.php"><i class="fa fa-edit "></i> Mise à jour </a>
  <a href="offre.php"><i class="fa fa-plus"></i> Ajout d'offres</a>
  <a href="index.php"><i class="fa fa-list"></i> Liste des offres</a>
   <a href="demande.php"><i class="fa fa-list"></i> Liste des demandes </a>
  <a href="deconnexion.php"><i class="fa fa-power-off"></i> Déconnexion</a>
</div>


     
</body>
</html> 
