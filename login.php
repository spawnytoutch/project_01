<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body class="body-404">
	<?php
/**
 * Created by PhpStorm.
 * User: Lwaxana
 * Date: 19/01/2015
 * Time: 10:11
 */
?>
	<form class="form-login" name="login" action="<?php echo site_url(); ?>/identification" method="post">
		<label class="label-login"> Identifiant </label><input class="input-login" type="text" name="username"/><br/>
		<label class="label-login"> Mot de passe </label><input class="input-login" type="password" name="password"/><br/>
		<input class="submit-login" type="submit" value="Envoyer">
	</form>
</body>
</html>

