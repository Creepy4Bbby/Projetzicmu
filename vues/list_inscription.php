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
               <?php for ($list_inscrit as $element): ?>
                   <tr>
                   <td><?php echo $element['nom'],'   ',$element['prenom']; ?></td>
                       <td><?php echo $element['']; ?></td>
                       <td><?php echo $element['idInstrument']; ?></td>
                       <td><?php echo $element['id']?>">Inscription</a></td>
                   </tr>
               <?php ; ?> 
           </tbody>
       </table>