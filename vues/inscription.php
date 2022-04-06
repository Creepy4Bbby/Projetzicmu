<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Inscription</title>
</head>
<body>

    <h1> Formulaire de réservation de cour n° <?php echo $recupnum ?> </h1>
    <form action="index.php?action=validerInscription" method="post">
    <input type='hidden' value='cours' name='numero'> 
   Nom :  <input type="text" name="nom" placeholder="Entrez le nom"></input><br><br>  
   Prenom : <input type="text" name="prenom" placeholder="Entre le prenom"></input><br><br>
   tel :  <input type="phone" name="tel" placeholder="Entrez le numéro de téléphone"></input><br><br>
   adresse : <input type="text" name="adresse" placeholder="Entrez l'adresse"></input><br><br>
   @ : <input type="email" name="mail" placeholder="Entrez l'email"></input><br><br>
<br>
<input type="submit" name="validerinscription" value="Valider"></input>



    <!-- end  -->
</body>
</html>