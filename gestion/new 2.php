<!DOCTYPE html>
<html>
<head>
        <script src="sweetalert.js"></script>
        
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='SScript.js' type='text/javascript'></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

input[type=text] {
    width: 300px;
	padding-left:600px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    float:right;
	padding-bottom:5px;
	padding-top:5px;
}
  
  input[type=text]:focus{
    border-color:green;
    box-shadow:0 0 8px 0 green;
  }
  
  .inputWithIcon input[type=text]{
    padding-left:40px;
  }
  
  .inputWithIcon{
    position:relative;
	
	
  }
  
  .inputWithIcon i{
    position:absolute;
    right:265px;
    top:8px;
    padding:1px 8px;
    color:#aaa;
    transition:.3s;
  }
  
  .inputWithIcon input[type=text]:focus + i{
    color:green;
  }
  
  .inputWithIcon.inputIconBg i{
    background-color:#aaa;
    color:#fff;
    padding:9px 4px;
    border-radius:4px 0 0 4px;
  }
  
  .inputWithIcon.inputIconBg input[type=text]:focus + i{
    color:#fff;
    background-color:Green;
  }
  
</style>
</head>
<body>



<div class="inputWithIcon">
<input type="text" placeholder="Search..." id="myInput">
<i class="fa fa-search " aria-hidden="true"></i>
</div></br></br>
<h4 class="w3-center">PUBLICATIONS</h4></br></br>
   
<table id='table'>
  <tr>
    <th>Titre</th>
    <th>Auteur(s)</th>
    <th>Contenu</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>  








</body>
</html>