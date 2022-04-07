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

  $req1 = "insert into adherent (id)
          Values ('$tableau[5]')";

          $res1 = $dbh ->prepare($req1);
          $res1 -> execute();


// ancienne valeur - 1 pour update 
// 2) remplacer le nb de places : 

    $req2 = "Update cours
    SET nbPlaces = nbPlaces - 1 ";

    // connection à la BDD

     $res2 = $dbh ->prepare($req2);
     $res2 -> execute();

    // return($updateplace);





}

// function inscrit(){

//   include 'db_connection.php';

//     // 1) insertion de personne

//   $req = "select c.jourheure,c.nbPlace,c.idInstrument,p.nom from cours c
//   inner join professeurs pr on c.idProfesseur = pr.id 
//   inner join personne p on p.id = pr.id";

//           $res = $dbh ->prepare($req);
//           $res -> execute();
      
//         //   fetchall c'est pour select uniquement ça recupere les données 
//           $inscritt = $res->fetchAll();

// }




?>