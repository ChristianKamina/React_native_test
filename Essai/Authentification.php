<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<script src="jquery-3.5.1.JS"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script src="bootsrap.JS"></script>
	<title>Authentification</title>
</head>
<body>
	<br>
	     <center> <h1><I><strong> <mark>Veuillez vous identifier svp</mark>
	      </strong></I></h1></center>
       <br>
       <div  class="container  col-sm-4" style="background: rgb(31, 109, 105)">
       	<form action="Principal.php" method="post">
       		<br>
       		<div class="form-group">
       			<label for="nnn"><STRONG>Votre nom d'utilisateur</STRONG></label><br/>
       		<input type="text" id="nnn" name="nomU" class="form-control" class="form-control-sm">
       		</div>
       		<div class="form-group">
       			<label for="ppp"><STRONG>Votre mot de passe<STRONG/></label><br/>
       		<input type="Password" id="ppp" name="mdpsU" class="form-control">
       		</div>
       		<div/>
       		<center><button type="submit" class="btn btn-danger" name="send"><STRONG> Se connecter<STRONG/> </button><center/>
              <br/><br/>
              <div class="container  col-sm-18" style="background: rgb(46, 35, 44)">
                <br/>
                     <a href="Configsec.php">Mot de passe oublié?</a><br/>
               <a href="Configsec.php">
                    Créer un compte pour pouvoir utilisé cette application 
              </a>
          <br>
           <br/> <br/>
              </p>
              </div>
       		<div/>
       		<br>
       	</form>
              <br/>
              
       </div>
       <br>

</body>
</html>