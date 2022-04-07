<?php

// Récupére la listes des cours : 

function recupcour()
{
    

    

    include 'db_connection.php';

    // pour inner join faire : nom de la table . nom du champs
    $req="select c.id, c.jourheure,c.nbPlace,c.idInstrument,p.nom from cours c
    inner join professeurs pr on c.idProfesseur = pr.id 
    inner join personne p on p.id = pr.id";

    // connection à la bdd 

    $res = $dbh -> prepare($req);
    $res -> execute();
    // res parce que c'est execute res 
    $listcours =$res ->fetchAll();
    //affiché la requête ↓
    //  var_dump($listcours);
    return($listcours);

   



// end fonction
}


function validerinscription($tableau)
{
    include 'db_connection.php';

    // 1) insertion de personne

  $req = "insert into personne (nom,prenom,tel,adresse,mail)
          Values ('$tableau[0]','$tableau[1]','$tableau[2]','$tableau[3]','$tableau[4]')";

          $res = $dbh ->prepare($req);
          $res -> execute();

        

        // //   fetchall c'est pour select uniquement ça recupere les données 
        //   $insertinscription = $res->fetchAll();



 $req0 = "select id from personne 
          WHERE  nom = '$tableau[0]' and 
                 prenom = '$tableau[1]' and 
                 tel = '$tableau[2]'";

    
         $res0 = $dbh ->prepare($req0);
         $res0 -> execute();

          $idpers =$res0 ->fetch()[0];


   //   j'insere le tout dans inscription $req et $req1
        

         $req1 = "insert into adherents (id)
          Values ($idpers)";
          echo $req1;
          $res1 = $dbh ->prepare($req1);
          $res1 -> execute();

     


// ancienne valeur - 1 pour update 
// 2) remplacer le nb de places : 

            $req3 = "Update cours
            SET nbPlace = nbPlace - 1 
            WHERE id = $tableau[5]";

// connection à la BDD

            $res3 = $dbh ->prepare($req3);
            $res3 -> execute();


}

// function inscrit(){

// include 'db_connection.php';

// 1) insertion de personne
// nom prenom
// adhérent id 
// date heure cours
// professeur qui assure le cours
// et l'instrument

//   $req = "select c.jourheure,c.nbPlace,c.idInstrument,p.nom from cours c
//           inner join professeurs pr on c.idProfesseur = pr.id 
//           inner join personne p on p.id = pr.id";

//           $res = $dbh ->prepare($req);
//           $res -> execute();
      
        //   fetchall c'est pour select uniquement ça recupere les données 
        //  $inscritt = $res->fetchAll();

//  }




?>