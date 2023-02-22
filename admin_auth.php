<?php
	define('LOGIN','toto');
	define('PASSWORD','tata');
	$errorMessage='';
	
	if($_POST){
		
		if(!empty($_POST['login'])&&!empty($_POST['password']))
		{
			if($_POST['login']!==LOGIN)
			{
				$errorMessage = 'Mauvais login!';
			}
			elseif($_POST['password'] !== PASSWORD)
				{
					$errorMessage = 'Mauvais password!';
				}
			   else
			   {
				   session_start();
				   
				   $_SESSION['login']=LOGIN;
				   header('location: admin.php');
				   exit();
			   }
			   
			}
		else
		{
			$errorMessage = 'Veuillez inscrire vos identifiants svp!';
		}
		}
?>
<!DOCTYPE html>
<html>

  <link rel="stylesheet" type="text/css" href="bootstrap1.css"/>
  <title>Stage RADEEJ site El Jadida </title>

<link type="text/css" rel="stylesheet" media="all" href="css1.css?T" />
 <!--<link rel="stylesheet" href="css2.css" type="text/css"
          media="screen"/>-->
		  
    
<header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h1>RADEEJ El Jadida</h1>
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
 

  <!--PAGE D'AUTHENTIFICATION-->
  <div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <div class="panel-heading">
              <h3 class="panel-title">Authentification</h3>
            </div>
            <div class="panel-body">
            <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
			<?php 
		if (!empty($errorMessage))
		{
			echo htmlspecialchars($errorMessage);
		}
		?>
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Login" name="login" type="text" autofocus="" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Password" name="password" type="password" required>
                </div>
                <button type="submit" class="btn btn-sm btn-default">Login</button>
              </fieldset>
            </form>
           <!-- <a href="inscription.php"><h4>Créez un compte!</h4></a>-->
          </div>
        </div>
    </div>
  </div>

  
</body>

</html>

