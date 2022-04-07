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
    <h1><center>Voir liste d'inscription</center> </h1>


    <table>
           <thead>
               <tr>
                   <td>Adhérent</td>
                   <td>Places</td>
                   <td>Professeur</td>
                   <td>Instrument</td>
                   <td><?php $nbsp ?></td>
               </tr>
           </thead>
           <tbody>
           
               <?php foreach ($list_inscrit as $element):?>
                   <tr>
                   <td><?php echo $element['nom'],'   ',$element['prenom']; ?></td>
                       <td><?php echo $element['nbPlace']; ?></td>
                       <td><?php echo $element['idInstrument']; ?></td>
                       <td><?php echo $element['id']?></td>
                   </tr>
                   <?php endforeach; ?>
               
           </tbody>
       </table>

       <!-- end -->
</body>
</html>