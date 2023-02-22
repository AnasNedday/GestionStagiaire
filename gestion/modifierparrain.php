<?php     /* fichier du formulaire de modification des infos personnelles du parrain */


// On démarre la session AVANT d'écrire du code HTML
session_start();
 include "sidebar.php";
 include "entete.php";?>

<head>


<style>
input[type=image]
{
width:20px;
height:17px;
left:100px;
}
body {

 font-size:90%;
 }
form {
 background-color:white;
 padding:70px;
 width:600px;
 margin-left:auto;
 margin-right:auto;
 }
fieldset {
 padding:2 30px 30px 20px;
 margin-bottom:10px;
 border:1px solid 3fdf9a;
 }
legend {
 color:#4CAF50;
 font-weight:bold;
 font-size:110%;
 padding:10px;
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:50px;
 }
input, textarea, select, option {
 background-color:#F5F5F5;
 }
input, select {
 padding:3px;
 border:1px solid ;
 border-radius:5px;
 width:370px;
 box-shadow:1px 1px 2px  inset;
 margin:10px;
 }
 textarea  {
 padding:3px;
 border:1px solid ;
 border-radius:5px;
 width:400px;
 box-shadow:1px 1px 2px #C0C0C0 inset;
 margin:10px;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #4CAF50;
 cursor:pointer;
 background-color:#4CAF50;
 }
 input[type=image] 
 {padding:0px;}
 i {
   cursor: pointer;
   pointer-events: all;
 }
 
 HY{
    width:100px;
    display: inline-block;
 }

</style>
</head>
<body>

<form action="config1.php" method="post" >

<fieldset>

   <legend>Informations personnelles </legend>
      
    <HY>Nom </HY><input type="text"  name='nom' required disabled="disabled" value="<?php echo $_SESSION['nom']; ?>"
               /></br>
    <HY>Prenom </HY><input type="text"  name='prenom' required disabled="disabled" value="<?php echo $_SESSION['prenom']; ?>"
               /></br> 
			   
    <HY>CIN </HY><input type="text"  name='cin' required disabled="disabled"  value="<?php echo $_SESSION['cin']; ?>"
               /></br>

    <HY>Mot de passe</HY>  
	<input type="password"  name='mdp' id="psw" required value="<?php echo $_SESSION['mdp']; ?>"/> 
	  <i class="fa fa-fw fa-eye-slash" onclick="myFunction()" id="ff" style="display:inline" ></i>
	  <i class="fa fa-fw fa-eye" onclick="myFunction()" id="ss" style="display:none" ></i>

</br>	
   
    <HY>Telephone</HY> <input type="text"   name='tel' required value="<?php echo $_SESSION['tel']; ?>"
               /></br>  
  
    <HY>Email   </HY>  <input type="email" name="email" size="20" value="<?php echo $_SESSION['email']; ?>"
   maxlength="40"  /></br>
   <HY>Adresse </br> <textarea name='adresse'  cols="50" rows="4" required ><?php echo $_SESSION['adresse']; ?>
   </textarea></br>
 
   
   
   <HY>Entité </HY>  <select name='entite' required  value="<?php echo $_SESSION['entite']; ?>">
   <option value="<?php echo $_SESSION['entite']; ?>" ><?php echo $_SESSION['entite']; ?></option>
   <option value="informatique">OIH</option>
   <option value="economie"> OIJ</option>
   <option value="chimie"> OIK</option>
   </select></br>

</fieldset>
 <p>
 <input type="submit"  id='submit' name='submit' value="Valider" />
 <input type="reset" id='reset' value="Annuler" />
 </p>
</form>
</body>
</html>

<!-- script pour rendre le mot de passe visible -->
<script>
function myFunction() {
    var x = document.getElementById("psw");
	var y = document.getElementById("ss");
	var z = document.getElementById("ff");
    if (x.type === "password") {
        x.type = "text";
		z.style.display = "none";
		y.style.display = "inline";
		
    } else {
        x.type = "password";
		
		y.style.display = "none";
		z.style.display = "inline";
    }
	
}

</script>
