<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Document</title>
</head>
<body>

    </div>

<br>

						<!-- Nav -->	
                        <center>
                        <nav id="nav">
                            
								<ul>
									<li><a class="icon solid fa-home" href="index.php?action=accueil"><span>Accueil</span></a></li>
									<li><a class="icon solid fa-cog" href="index.php?action=cours"><span>Cours</span></a></li>
									<li><a class="icon solid fa-retweet" href="index.php?action=list_inscription"><span>Inscription</span></a></li>
									<!-- <li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li> -->
									
									<?php 
        if (isset($_SESSION["id"])){
        ?>
            <li><a  class="icon solid fas fa-sign-out-alt" href="index.php?action=deconnexion"><span>Deconnexion</span></a></li>
        <?php } ?>
								</ul>

							</nav>
</center>

</body>
</html>