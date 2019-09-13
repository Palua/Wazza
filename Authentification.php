<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Authentification</title>
	</head>

	<body>
	<?php 	error_reporting(0);
			ini_set('display_errors', 0); 
	?>	
		<p><div><b>Inscription :</b></div></p>
		
		<div>
		<fieldset>
			<legend>Veuillez remplir les champs suivants :</legend> 
				<form method="post" action="Authentification.php">
					<p> <label for="pseudo">Pseudo :</label> <input type="text" name="pseudo" required /> </p>
					
					<p> <label for="age">Age :</label> <input type="number" min="18" max="2000" step="1" name="age" required /> </p>
					
					<!-- <p> <label for="company">Compagnie :</label> <input type="text" name="company" /> </p> -->
					
					<p> <label for="pass">Mot de Passe :</label> <input type="password" name="pass" required /> </p>
					
					<p> <label for="cpass">Confirmer votre mot de passe :</label> <input type="password" name="cpass" required /> </p>
		</fieldset>
				<input type="submit" value="S'inscrire" />
				</form>
				
		<?php  	$pseudo = $_POST['pseudo'];
				$age = $_POST['age'];
				$pass = $_POST['pass'];
				$cpass = $_POST['cpass'];
				//foreach ($_POST as $s){echo $s.'<br /> ';}
				//echo 'cpass '.$cpass.'<br /> ';
				$uppercase = preg_match('@[A-Z]@', $pass);
				$lowercase = preg_match('@[a-z]@', $pass);
				$number    = preg_match('@[0-9]@', $pass);
				
		
		if (!$uppercase) 
		{
			echo "<br />"."Erreur ! Votre mot de passe ne contient pas de majuscule !"."<br />";
		}
		
		if (!$lowercase) 
		{
			echo "<br />"."Erreur ! Votre mot de passe ne contient pas de minuscule !"."<br />";
		}
		
		if (!$number) 
		{
			echo "<br />"."Erreur ! Votre mot de passe ne contient pas de nombre !"."<br />";
		}
		
		if (strlen($pass) < 8) 
		{
			echo "<br />"."Erreur ! Votre mot de passe trop court !"."<br />";
		}
		
		if ($pass != $cpass) 
		{
			echo "<br />"."Erreur ! Votre mot de passe est différent !"."<br />";
		}
		
		if ($uppercase && $lowercase && $number && strlen($pass) >= 8 && $pass == $cpass)
		{
			echo "<br />".'Bienvenue '.$pseudo."<br />";
		}
		?>
		</div>
	</body>
</html>