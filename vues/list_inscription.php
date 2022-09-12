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
    <center>Voir liste d'inscription</center> 


    <table>
           <thead>
               <tr>
                   <td>Adhérent</td>
                   <td>Date/Heures</td>
                   <td>Places</td>
                   <td>Professeur</td>
                   <td>Instrument</td>
                   <td> Numéro de cours</td>
                   <td> nom Salarié</td>
                   <td>PDF </td>
                   <td>Supprimé</td>
               </tr>
           </thead>
           <tbody>
           
             <?php   

                $i = 0;
                
                foreach ($list_inscrit as $element){?>
                   <tr>
                     <td><?php echo $element['nomAd'],'   ',$element['prenomAd']; ?></td>
                      <td><?php echo $element['date']; ?></td>
                       <td><?php echo $element['place']; ?></td>
                       <td><?php echo $element['nomProf'],'   ',$element['prenomProf']; ?></td>
                       <td><?php echo $element['instru']; ?></td>
                      <!-- //echo $element['idAd'] -->
                       <td><?php echo $element['idC']?></td> 
                              <!-- echo $i;  -->
                              <td><?php echo $element['nom']?></td> 
                       <td><a href="index.php?action=pdf&numero=<?php echo $i?>"><img src="images/pdf.jpg"/></a></td>
                       <td><a href="index.php?action=sup&numero=<?php echo $i?>"><img src="images/sup.jpg"/></a></td>
                   </tr>
                   <?php $i ++;
                 } ?>
               
           </tbody>
       </table>

       <!-- end -->
</body>
</html>