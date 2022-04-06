<h1><center>Voir liste de cour</center> </h1>


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
               <?php foreach ($inscritt as $element): ?>
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