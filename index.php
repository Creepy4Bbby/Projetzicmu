<?php

include 'vues/header.php';
require 'modele/fonction.php';

//comportment qui va avoir suivant tel ou tel truc 

if(!isset($_REQUEST['action']))
            {    
                $action = 'accueil';

            }else {   
                
             $action = $_REQUEST['action'];
            }
           
//action pour la page 
        switch ($action)
            {
                
                case 'accueil':
                    include ("vues/accueil.php");
                    break;

// ________________________________________________________________________________________________

                case 'cours':
                    //stocké dans une variable liste cours
                    $listcours = recupcour();

                    // var_dump($listcours) ;
                    //affiché le tableau
                    include("vues/cours.php");
                    break;

  // ________________________________________________________________________________________________  

         
                case 'list_inscription':
                    //Affiché la listes des inscrit
                    $list_inscrit = inscrit();
                    include ("vues/list_inscription.php");
                    break;

// ________________________________________________________________________________________________


                    case 'inscription':
                        
                        $recupnum = $_REQUEST["numero"];
                        include ("vues/inscription.php");
                        break;


 // ________________________________________________________________________________________________             

//Permet de ( qd tu cliques sur le bouton inscrire ) ça va dessus ↓ 
                case 'validerInscription':
                        // appel de la fonction


                        //RECUPERE LES INFORMATIONS DU FORMULAIRE 
                        if (isset ($_POST["validerinscription"]))
                        {

                            //Htmlchars etc.. permet d'évité les injection javascripts et autres 
                        $nom = htmlspecialchars(isset($_POST['nom']))? $_POST['nom'] : '' ;
                        $prenom = htmlspecialchars(isset($_POST['prenom']))? $_POST['prenom'] : '' ;
                        $tel = htmlspecialchars(isset($_POST['tel']))? $_POST['tel'] : '' ;
                        $adresse = htmlspecialchars(isset($_POST['adresse']))? $_POST['adresse'] : '' ;
                        $mail= htmlspecialchars(isset($_POST['mail']))? $_POST['mail'] : '' ;
                                    // if (!filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL))
                                    // {
                                    // echo "E-Mail is not valid";
                                    // }
                                    // else
                                    // {
                                    // echo "E-Mail is valid";
                                    // }
                        $numero= htmlspecialchars(isset($_POST['numero']))? $_POST['numero'] : '' ;


                     
                             //tableau :
                             $tableau = array($nom,$prenom,$tel,$adresse,$mail,$numero);
                             
                        }
                        
                        //Appel de la fonction du modele pour stocké dans BDD les requêtes 
                        validerinscription($tableau);
                        
                        include ("vues/message.php");
                        $list_inscrit = inscrit();
                        // var_dump($list_inscrit);
                       include("vues/list_inscription.php");
                        break;


// ________________________________________________________________________________________________

                    // Suprimé ****
                        case 'sup':

                        // Toutes les inscriptions sont récupérées
                        $list_inscrit = inscrit();

                        // numero de la ligne d'une inscription 
                        $recupnum = $_REQUEST["numero"];

                        // var_dump($list_inscrit) ;

                     // Je recupere les valeur le numéro du cours et adhérent de la ligne récupérée
                        $idAd=  $list_inscrit[$recupnum]['idAd'];
                        $idC =  $list_inscrit[$recupnum]['idC'];

                    // J'appele la fonction qui permet de supprimé 
                       sup($idAd,$idC);
                    
                    //    Reafffiché la page apres le sup 
                       $list_inscrit = inscrit();
                       include("vues/list_inscription.php");
                       break;

// ________________________________________________________________________________________________


                      case 'pdf':
                           
                            $list_inscrit = inscrit();
                            $recupnum = $_REQUEST["numero"];
                            $uneInscription = $list_inscrit[$recupnum];
                            include("vues/pdf_inscription.php");
                            affPdf($uneInscription);
                            
                            break;


                        
                        }
    
// ________________________________________________________________________________________________

                        
                        // case 'connexion':
                                                
                        
                        //     include("vues/connexion_1.php");
                        //     break;


// end fonction
// }



?>