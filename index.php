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
                
                case 'acceuil':
                    include ("vues/acceuil.php");
                    break;

                case 'cours':
                    //stocké dans une variable liste cours
                    $listcours = recupcour();

                    // var_dump($listcours) ;
                    //affiché le tableau
                    include("vues/cours.php");
                    break;

                case 'inscription':
                    //Affiché la listes des inscrit
                    $recupnum = $_REQUEST["numero"];
                    include ("vues/inscription.php");
                    break;

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
                                    if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))
                                    {
                                    echo "E-Mail is not valid";
                                    }
                                    else
                                    {
                                    echo "E-Mail is valid";
                                    }
                        $numero= htmlspecialchars(isset($_POST['numero']))? $_POST['numero'] : '' ;


                     
                             //tableau :
                             $tableau = array($nom,$prenom,$tel,$adresse,$mail,$numero);
                             
                        }
                        
                        //Appel de la fonction du modele pour stocké dans BDD les requêtes 
                        validerinscription($tableau);
                        
                        include ("vues/message.php");
                        include("vues/list_inscription.php");
                        break;

                        // case '':

                        
                        }
    

           



?>