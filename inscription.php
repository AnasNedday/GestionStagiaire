

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
if(!empty($_POST['cin']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['tel']) AND !empty($_POST['adresse'])  AND !empty($_POST['nom_ecole']) AND !empty($_POST['niveau_etude']) AND !empty($_POST['domaine']) AND !empty($_POST['type_stage']) AND !empty($_POST['periode'])) 
{
   $stagiaire = new Stagiaire();
//la fonction valide pour chercher est-ce que ce client existe
  if(!$stagiaire->verify_CIN_email($_POST['cin'],$_POST['email']))
  {
    $stagiaire->inscription($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], $_POST['tel'], $_POST['adresse'], $_POST['nom_ecole'], $_POST['niveau_etude'], $_POST['domaine'], $_POST['type_stage'], $_POST['periode']);
    $_SESSION['connected'] = true;
    $_SESSION['who'] = 1;
    

    //stocke tt les variable dans session pour travaille dans tous les page
    $_SESSION['cin']     = $_POST['cin'];
    $_SESSION['nom']     = $_POST['nom'];
    $_SESSION['prenom']  = $_POST['prenom'];
    $_SESSION['email']   = $_POST['email'];
    $_SESSION['tel']     = $_POST['tel'];
    $_SESSION['adresse'] = $_POST['adresse'];
    $_SESSION['mdp']     = $_POST['mdp'];
    $_SESSION['nom_ecole'] = $_POST['nom_ecole'];
    $_SESSION['niveau_etude'] = $_POST['niveau_etude'];
    $_SESSION['domaine'] = $_POST['domaine'];
    $_SESSION['type_stage'] = $_POST['type_stage'];
    $_SESSION['periode'] = $_POST['periode'];
  }
  else
  {
    ?>      
    <script type="text/javascript"> window.alert('CIN ou email déjà utilisé!');</script>
    <?php
  }

}

?>

<!DOCTYPE html>
<html>
  
  


<title>Stage RADEEJ site D' El Jadida </title>
<link rel="stylesheet" type="text/css" href="bootstrap1.css">
<link type="text/css" rel="stylesheet" media="all" href="css1.css?T" />
<!-- <link rel="stylesheet" href="css2.css" type="text/css"
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
                    <a href="Authentification.php">Espace Etudiants</a>
                    <a href="Authentification.php">Espaces Encadrant</a>
                    <a href="admin_auth.php">Espace RH</a>
                    <!--<a href="#">Contact</a>-->
                </nav>
            </div>
        </div>
    </header>

	
										  
		<body>
  <?php
    if (!$_SESSION['connected'])
    {
  ?>								  
	
		
	</section>
  <!--PAGE D'INSCRIPTION-->
  <div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <div class="panel-heading">
              <h3 class="panel-title">Inscription</h3>
            </div>
            <div class="panel-body">
            <form role="form" method="post" action="./inscription.php">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Nom" name="nom" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Prénom" name="prenom" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="CIN" name="cin" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Password" name="mdp" type="password" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Numéro de téléphone" name="tel" type="text" autofocus="" required>
                </div>
                 <div class="form-group">
                  <input class="form-control" placeholder="nom_ecole" name="nom_ecole" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="niveau_etude" name="niveau_etude" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="domaine" name="email" type="domaine" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="type_stage" name="mdp" type="type_stage" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Numéro de téléphone" name="tel" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="periode" name="periode"></textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-default">S'inscrire</button>
              </fieldset>
            </form>
            <a href="authentification.php">Vous avez déjà un compte!</a>
          </div>
        </div>
    </div>
  </div>

  <?php
    }
    else
    {
      header('Location: ./stagiaire/index.php');
    }
  ?>
</body>

</html>
