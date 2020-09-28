<?php

include "database.php";

$db = new database("localhost", "Jari", "12345", "project1", "utf8");
$db->executeQueryExample();

?>

<html>
	<body>
		<form action="signup.php" method="post">
			<input type="text" name="Voornaam" placeholder="Voornaam" required><br>
			<input type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel"><br>
			<input type="text" name="Achternaam" placeholder="Achternaam" required><br>
			<input type="email" name="email" placeholder="E-mail" required/><br>
			<input type="text" name="username" placeholder="Gebruikersnaam" required/><br>
			<input type="wachtwoord" name="pswrd" placeholder="Wachtwoord" required/><br>
			<input type="wachtwoord" name="pswrd" placeholder="Herhaal wachtwoord" required/><br>
			<input type="submit" value="Sign up!">
			<a href="index.php">Ik heb al een account. login!</a>
		</form>
	</body>
</html>