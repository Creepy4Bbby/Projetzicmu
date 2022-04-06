<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Cours</title>
</head>
<body>
    <h1><center>Voir liste de cours</center> </h1>


    <table>
           <thead>
               <tr>
                   <td>Jour/H</td>
                   <td>Places</td>
                   <td>Professeur</td>
                   <td>Instrument</td>
                   <td><?php $nbsp ?></td>
               </tr>
           </thead>
           <tbody>
               <?php foreach ($listcours as $element): ?>
                   <tr>
                       <td><?php echo $element['jourheure']; ?></td>
                       <td><?php echo $element['nbPlace']; ?></td>
                       <td><?php echo $element['nom']; ?></td>
                       <td><?php echo $element['idInstrument']; ?></td>
                       <td><a href="index.php?action=inscription&numero=<?php echo $element['id']?>">Inscription</a></td>
                   </tr>
               <?php endforeach; ?>
           </tbody>
       </table>



<!-- end -->
</body>
</html>