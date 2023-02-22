<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;margin-right: 0px;
    margin-left: 0px;margin-top: 0px;}

    .navbar {
  width: 100%;
  background-color: #FFD700;
  overflow: auto;
  
}

.navbar a {
  float: left;
  padding: 15px;
  color: #000080;
  text-decoration: none;
  font-size: 17px;
  margin-left:0px;
  margin-right:20px;
  padding-right:50px;
  padding-left:50px;
}


  
  
.active:hover {
  background-color: #FF0000;
}
.active1:hover {
  background-color: #228B22;
}



@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>


<div class="navbar">
  <a  href="#" align="left">RADEEJ D'EL JADIDA </a> 
  <a  class="active1" href="http://localhost/myproject/home.php" align="left"><i class="fa fa-fw fa-home"></i> Home </a> 
  <a class="active"href="http://localhost/myproject/etudiant/authetudiant.php"><i class="fa fa-graduation-cap"></i> Espace Etudiant</a> 
  <a class="active"href="http://localhost/myproject/gestion/authparrain.php"><i class="fa fa-user"></i> Espace Parrain</a> 
  <a class="active"href="http://localhost/myproject/administrateur/authadmin.php"><i class="fa fa-gear"></i> Espace RH</a>
  
</div>

</body>
</html>