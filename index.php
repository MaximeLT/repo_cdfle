<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Page de connexion</title>
		<link rel="stylesheet" href="css/connect.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<div class="wrapper">
		  <form action="comprehension_orale_maternelle.php" method="POST" class="login">
		    <p class="title">Connexion</p>
		    <input type="text" name="nom" placeholder="Entre ton nom" autofocus/>
		    <i class="fa fa-user"></i>
		    <input type="text" name="prenom" placeholder="Entre ton prénom" />
		    <i class="fa fa-user"></i>
				<input type="text" name="classe" placeholder="Entre ta classe" />
		    <i class="fa fa-users"></i>
		    <button>
		      <i class="spinner"></i>
		      <span class="state">Commencer les test !</span>
		    </button>
		  </form>
		  <footer><a target="blank" href="http://www.lecafedufle.fr/">www.lecafedufle.fr</a></footer>
		  </p>
		</div>


	</body>
</html>
