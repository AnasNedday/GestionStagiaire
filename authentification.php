<?php

session_start();

include("models/User.php");

//la verfication de variable session et et verfier resevoir la variable b
if(isset($_SESSION['connected'])){ 
  if(isset($_GET['d'])){
      session_destroy();
      $_SESSION['connected']=false;
    }
}

//Si le champ connected est vide alors on doit le remplir par false
if(!isset($_SESSION['connected'])) 
  $_SESSION['connected']=false; 
   
//pour lad conexion je dois verfier dans la premier temps est ce que j'ai les variable 
if(!empty($_POST['email']) AND !empty($_POST['mdp'])) 
{
   $userC = new Stagiaire();
//la fonction valide pour chercher est-ce que ce client existe
  if($stagiaire = $userC->valide($_POST['email'],$_POST['mdp']))
  {
    $_SESSION['connected'] = true;
    foreach ($stagiaire as $stagiaire_connecte) 
    {
      $_SESSION['who']     = 1;
      //stocke tt les variable dans session pour travaille dans tous les page
      $_SESSION['cin']     = $stagiaire_connecte['cin'];
      $_SESSION['nom']     = $stagiaire_connecte['nom'];
      $_SESSION['prenom']  = $stagiaire_connecte['prenom'];
      $_SESSION['email']   = $stagiaire_connecte['email'];
      $_SESSION['tel']     = $stagiaire_connecte['tel'];
      $_SESSION['adresse'] = $stagiaire_connecte['adresse'];
      $_SESSION['mdp']     = $stagiaire_connecte['mdp'];
      $_SESSION['nom_ecole'] = $stagiaire_connecte['nom_ecole'];
      $_SESSION['niveau_etude'] = $stagiaire_connecte['niveau_etude'];
      $_SESSION['domaine'] = $stagiaire_connecte['domaine'];
      $_SESSION['type_stage'] = $stagiaire_connecte['type_stage'];
      $_SESSION['periode'] = $stagiaire_connecte['periode'];
    }
  
  }
  
    else{

?>      
    <script type="text/javascript"> window.alert('login ou mot de passe incorrect! ');</script>
<?php
    
    }
  }


?>

<!DOCTYPE html>
<html>

  <link rel="stylesheet" type="text/css" href="bootstrap1.css"/>
  <title>Stage RADEEJ D'El Jadida </title>

<link type="text/css" rel="stylesheet" media="all" href="css1.css?T" />
 <!--<link rel="stylesheet" href="css2.css" type="text/css"
          media="screen"/>-->
		  
    
<header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h1>RADEEJ D'El Jadida</h1>
            </div>
            <div class="header-right">
                <label for="open">
                    <span class="hidden-desktop"></span>
                </label>
                <!--<input type="checkbox" name="" id="open">-->
                <nav>
                    <a href="menu.php">Accueil</a>
                    <a href="http://localhost/myproject/etudiant/authetudiant.php">Espace Etudiant</a>
                    <a href="http://localhost/myproject/gestion/authparrain.php">Espace Parrain</a>
                    <a href="http://localhost/myproject/administrateur/authadmin.php">Espace RH</a>
                    <!--<a href="#">Contact</a>-->
                </nav>
            </div>
        </div>
    </header>
</head>

<body>
  <?php
    if (!$_SESSION['connected'])
    {
  ?>

  <!--PAGE D'AUTHENTIFICATION-->
  <div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <div class="panel-heading">
              <h3 class="panel-title">Authentification</h3>
            </div>
            <div class="panel-body">
            <form role="form" method="post" action="">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Password" name="mdp" type="password" required>
                </div>
               <button type="submit" class="btn btn-sm btn-default">Login</button>
              </fieldset>
            </form>
            <a href="inscription.php"><h4>Créez un compte!</h4></a>
          </div>
        </div>
    </div>
  </div>

  <?php
    }
    else
    {
      if ($_SESSION['who'] == 1)
        header('Location: ./stagiaire/index.php');
      
    }
  ?>
</body>

</html>
