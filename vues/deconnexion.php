
<!--
<a href="index.php?action=acceuil">Acceuil</a> <br>
<a href="index.php?action=inscriptions">Voir Inscritptions</a> <br>
<a href="index.php?action=cours">Voir cours</a><br>
-->

<!DOCTYPE HTML>

<html>
	<head>
		<title>Conservatoire de musique</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

<!-- Header -->
<section id="header" class="wrapper">

<!-- Logo -->
    <div id="logo">
        <h1><a href="index.php?action=acceuil">Zik - MU</a></h1>
        <p>Votre conservatoire de musique</p>
    </div>

<!-- Nav -->
    <nav id="nav">
        <ul>
            <li class="current"><a href="index.php?action=acceuil">Acceuil</a></li>
            <li><a href="index.php?action=inscriptions">Voir inscriptions</a></li>
            <li><a href="index.php?action=cours">Voir cours</a></li>
        <?php 
        if (isset($_SESSION["id"])){
        ?>
            <li><a href="index.php?action=deconnexion">Déconnexion</a></li>
        <?php } ?>
        </ul>
    </nav>

</section>