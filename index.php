<?php
$nom = "Rémi Doré";
$couleurFond = "darkred";
$couleurTexte = "#FFF";
$noPhoto = rand(1,3);
?><!DOCTYPE html>
<html lang="fr">
<head>
<title><?php echo $nom; ?></title>
<meta charset="utf-8" />
<style>
body {
	background-color:<?php echo $couleurFond; ?>;
}
</style>
</head>

<body style="color:<?php echo $couleurTexte; ?>;">
	<h1>Bonjour, mon nom est<br /><?php echo $nom; ?></h1>
	<p>Voici une de mes photos préférées  :</p>
	<img src="images/photo<?php echo $noPhoto; ?>.jpg" alt=""/>
</body>
</html>