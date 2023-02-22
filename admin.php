<?php

session_start();

if(empty($_SESSION['login']))
{
	header('Location : admin_auth.php');
	exit();
}
?>

<title>Stage RADEEJ D'El Jadida </title>
<link type="text/css" rel="stylesheet" media="all" href="css1.css?T" />
<link type="text/css" rel="stylesheet" media="all" href="css3.css?T" />
 <link rel="stylesheet" href="css2.css" type="text/css"
          media="screen"/>
		  
    
<header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h1>RADEEJ D'EL JADIDA</h1>
            </div>
            <div class="header-right">
                <label for="open">
                    <span class="hidden-desktop"></span>
                </label>
                <input type="checkbox" name="" id="open">
                <nav>
                    <a href="menu.php">Accueil</a>
                    <a href="authentification.php">Espace Etudiants</a>
                    <a href="Authentification.php">Espaces Encadrant</a>
                    <a href="admin_auth.php">Espace Administrateur</a>
                    <!--<a href="#">Contact</a>-->
                </nav>
            </div>
        </div>
    </header>

	
	      
										  
		


	<div id="footer" class="container">
			<div class="footerG">© 2023 S.A RADEEJ - all rights reserved</div>
			<div class="footerD">
				<div class="menu-block- menu-name-menu-footer-menu parent-mlid- menu-level-0">
  <ul class="menu"><li class="leaf first menu-mlid-1781"><a href="/fr/pages/conditions-dutilisation" title="">Conditions d&#039;utilisation</a></li>
<li class="leaf menu-mlid-8227"><a href="/fr/pages/clause-loi-09-08">Clause Loi 09-08</a></li>
<li class="leaf menu-mlid-459"><a href="/fr/pages/mentions-legales" title="">Mentions légales </a></li>
<li class="leaf menu-mlid-461"><a href="/fr/sitemap" title="">Plan du site</a></li>
<li class="leaf last menu-mlid-1678"><a href="/fr/pages/contact" title="">Contact</a></li>
</ul></div>