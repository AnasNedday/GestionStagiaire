<html>
<head>

</head>


<body>
<div class="oo">Mot de passe <input type="password"  name='mdp' id="psw" required 
	 
	
               /> 
			   <span class="fa fa-fw fa-eye" title=" utilisateur"></span>
			    <i class="fa fa-fw fa-eye" onclick="myFunction()"></i>
				</div>
</body>
</html>
<script>
// toggle password visibility
$('#password + .glyphicon').on('click', function() {
  $(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open'); // toggle our classes for the eye icon
  $('#password').togglePassword(); // activate the hideShowPassword plugin
});
</script>