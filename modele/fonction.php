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


// _____________________________________________________________________________________________________


function validerinscription($tableau)
{
    include 'db_connection.php';

    // 1) insertion de personne ****

  $req = "insert into personne (nom,prenom,tel,adresse,mail)
          Values ('$tableau[0]','$tableau[1]','$tableau[2]','$tableau[3]','$tableau[4]')";

          $res = $dbh ->prepare($req);
          $res -> execute();

  
        // //   fetchall c'est pour select uniquement ça recupere les données 
        //   $insertinscription = $res->fetchAll();


    // 2) selection de personne ****

         $req0 = "select id from personne 
          WHERE  nom = '$tableau[0]' and 
                 prenom = '$tableau[1]' and 
                 tel = '$tableau[2]'";
    
         $res0 = $dbh ->prepare($req0);
         $res0 -> execute();
          $idpers =$res0 ->fetch()[0];


   //   j'insere le tout dans inscription et adherent $req0 et $req1 : 
        
  // 3) insertion dans adherents ****

         $req1 = "insert into adherents (id)
                  Values (?)";
          // Values ($idpers)"; ↑ injection sql pour vérifié la valeur on met  ça ? 
          // echo $req1;
          $res1 = $dbh ->prepare($req1);
          $res1 -> bindParam(1, $idpers);
          $res1 -> execute();

   // 3) insertion dans inscription  ****
     
          $req2 = "insert into inscription (idAdherent,idCours)
          Values (?,?)";
          // Values ($idpers,$recupnum)";
         
          $recupnum  = $tableau[5] ;
                                                                  // testé ↓
                                                                            // echo $idpers ;
                                                                            // echo "<br>";
                                                                            // echo $recupnum ;
          $res2 = $dbh ->prepare($req2);
          // injection SQL ↓
          $res2 ->bindParam(1,$idpers);
          $res2 ->bindParam(2,$recupnum);
          $res2 -> execute();


// ancienne valeur - 1 pour update 
//  4) remplacer le nb de places ( soutraires en suivant des inscription aux cours faites ) ****

            $req3 = "Update cours
            SET nbPlace = nbPlace - 1 
            WHERE id = $tableau[5]";

            $res3 = $dbh ->prepare($req3);
            $res3 -> execute();


}


// __________________________________________________________________________________________________________________


function inscrit(){

include 'db_connection.php';

// 1)
// nom prenom
// adhérent id 
// date heure cours
// professeur qui assure le cours
// et l'instrument

// $req = " select nbPlace from cours ";

$req = " select pers.nom as nomAd, pers.prenom as prenomAd, c.jourHeure as date, 
c.nbPlace as place, pers1.nom as nomProf, pers1.prenom as prenomProf, i.nom as instru,
ins.idAdherent as idAd, ins.idCours as idC

from inscription ins
inner join adherents as a on a.id = ins.idAdherent
inner join cours as c on c.id = ins.idCours
inner join professeurs as prof on prof.id = c.idProfesseur
inner join personne as pers on pers.id = a.id
inner join personne as pers1 on pers1.id = prof.id
inner join instrument as i on i.id = c.idInstrument 
                                          ";
                          
          $res = $dbh ->prepare($req);
          $res -> execute();

          // res parce que c'est execute res 
          $list_inscrit =$res ->fetchAll();
          //affiché la requête ↓ avec la lignes des erreurs etc..
          // var_dump($list_inscrit);
          return($list_inscrit);
      
        //   fetchall c'est pour select uniquement ça recupere les données 
        //  $inscritt = $res->fetchAll();

// end fonction
}

function sup(){


  $req = "delete from inscription
          where  idAdherent = ? and idCours = ?";

        $res = $dbh ->prepare($req);
        $res ->excute();

  
  





// END FONCTION
}

?>