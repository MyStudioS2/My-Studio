<?php session_start(); ?>

<!DOCTYPE HTML>
<html>

  <head>
  
    <style type="text/css">

        .navbar {
	  position: relative;
	  min-height: 50px;
	  margin-bottom: 20px;
	  border: 1px solid transparent;
	}
	.navbar-default {
	  background-color: grey;
	  border-color: black;
	}
    </style>

  </head>

  <body>
<nav class="navbar navbar-default">
    <a class="navbar-brand" href="#">Mon beau site</a>
    Je suis une barre
  <ul class="nav navbar-nav">
    <li class="active"> <a href="#">Accueil</a> </li>
    <li> <a href="#">Liens</a> </li>
    <li> <a href="#">Témoignages</a> </li>
    <li class="disabled"> <a href="#">Références</a> </li>
  </ul>
</nav>
<?php
 echo"Bonjour, ".$_SESSION['ID']; 
?>
 	   <?php
 	   	for($i=0;$i<12;$i++)
 	   	{ 
 	   		echo "<br>";
 	   	}
 	   ?>
        <hr class='separation'/>
		<a href="/.php">Deconnexion</a>
	</body>
</html>
