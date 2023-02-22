<?php     /* fichier du formulaire de modification des infos personnelles du parrain */


// On démarre la session AVANT d'écrire du code HTML
session_start();
 include "sidebar.php";
include "entete.php";

/*body {
 font-family:"trebuchet ms",sans-serif;
 font-size:90%;
 }*/?>

<head>


<style>
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
 display:inline-block;
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
 margin:8px;
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
i {
   cursor: pointer;
   pointer-events: all;
 } 

sky{
   width:100px;
   display:inline-block;
 }
</style>
</head>
<body>
<form action="config9.php" method="post" >

<fieldset>

   <legend>Formulaire d'ajout du parrain </legend>
      
    <sky>Nom </sky><input type="text"  name='nom' required 
               /></br>
    <sky>Prenom </sky><input type="text"  name='prenom' required  
               /></br>  
			   
    <sky>CIN </sky><input type="text"  name='cin' required 
               /></br>

    <sky>Mot de passe</sky><input type='password'  name='mdp' id='mdp' required  
               />
			   <i class="fa fa-fw fa-eye-slash" onclick="myFunction()" id="ff" style="display:inline-block" ></i>
	  <i class="fa fa-fw fa-eye" onclick="myFunction()" id="ss" style="display:none" ></i>
</br>	   
    <sky> Telephone  </sky> <input type="text"   name='tel' required 
               />
  
    <sky>Email </sky><input type="email" name="email" size="20" 
   maxlength="40"  />
</br>
    <sky>Adresse</sky> </br> <textarea name='adresse'  cols="50" rows="4" required >
   </textarea></br>
 
   
   
    <sky>Entité </sky>  <select name='entite' required  >
   <option value="" disabled selected hidden>Sélectionnez</option>
   <option value="OIJ/H">OIJ/H</option>
  
   <option value="OIK/PS"> OIK/PS</option>
   </select></br>
   
             
  
   
   
</fieldset>

 <p>
 <input type="submit"  id='submit' name='submit' value="Valider" />
 <input type="reset" id='reset' value="Annuler" />
 </p>

</form>
</body>
</html>

<script>
function myFunction() {
    var x = document.getElementById("mdp");
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


