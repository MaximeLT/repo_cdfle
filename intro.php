<?php
session_start(); 
?>

<body>
<form action="comprehension_orale_maternelle.php" method="POST">
	<p>Entre ton nom:</p>
	<input type="text" name="nom">
	<p>Entre ton prénom:</p>
	<input type="text" name="prenom">
	<p>Entre ta classe:</p>
	<input type="text" name="classe"><br>
	<button type="submit">Commencer les test!</button>
</form>
</body>
</html>