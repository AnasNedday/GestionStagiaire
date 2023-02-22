<?php      /* ce fichier concerne l'authentification du parrain*/ 
 include "sideauth.php";
include "entete.php";
// On démarre la session AVANT d'écrire du code HTML
session_start();?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 1px solid #f1f1f1; width:30%;margin_left:auto;
	margin_right:auto;text-align: center;margin:70px;}

input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	
	text-align: center;
	
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 1px 0 2px 0;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container1 {
    padding: 16px;
	margin_right:auto;
	margin_left:auto;
	width:93%;
	 text-align: center;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

</br></br></br><center>
<form action="config8.php" method="post">
  <div class="imgcontainer">
    <img src="administrateur.png" alt="Avatar" class="avatar">
  </div>

  <div class="container1">
    <label for="cin"><b>Username</b></label>
    <input type="text" placeholder="Enter your login " name="login" required>

    <label for="mdp"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

</form></center>

</body>
</html>

