<!DOCTYPE html>
<html>

<head>
	<title>Formulaire de contact</title>
</head>

<body>
e
	<h1>Formulaire de contact</h1>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Nom: <input type="text" name="nom"><br><br>
		Message: <textarea name="message"></textarea><br><br>
		<input type="submit" name="submit" value="Envoyer">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$nom = $_POST['nom'];
		$message = $_POST['message'];
		echo "<?= $nom ?> a écrit <?= $message ?>";
	}
	?>

</body>

</html>