<?php

// permet d'inclure la bibliothèque fpdf
require('PDF/fpdf.php');


// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF('L','mm','A4');

// ajoute une page
$pdf->AddPage();

// définit la police courante
$pdf->SetFont('Helvetica','',16);
// $pdf->SetFont('Helvetica','B',16);

Function affPdf($tab){


$pdf->Cell(50,10,utf8_decode('Merci de Faire confiance au Conservatoire ZIQMU '));
$pdf->Cell(90,10,utf8_decode('Carte du cour n°'));
$pdf->Cell(100,100, $tab["numero"], 0,1);
// Affiché image 
$pdf->Ln(10);
        // valeur 1 = vers la droite , valeur 2 = vers le bas  valeur 3 = largeur    valeur 4 hauteur                
$pdf->Image('images/Conservatoire.jpg',130,10, 160, 110);
$pdf->Ln(100);

// affiche du texte
    // $pdf->Cell(40,10, $tab["nomAd"], 0,1);
    // $pdf->Cell(40,10, $tab["prenomAd"], 0,1);
    // $pdf->Cell(40,10, $tab["date"], 0,1);
    // $pdf->Cell(40,10, $tab[""], 0,1);

  // end fonction
}
    function entete_table($position_entete) {
        global $pdf;
        $pdf->SetDrawColor(183); // Couleur du fond RVB
        $pdf->SetFillColor(221); // Couleur des filets RVB
        $pdf->SetTextColor(0); // Couleur du texte noir
        $pdf->SetY($position_entete);
        // position de colonne 1 (10mm à gauche)	
        $pdf->SetX(10);
        $pdf->Cell(60,8,'Ville',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
        // position de la colonne 2 (70 = 10+60)
        $pdf->SetX(70); 
        $pdf->Cell(60,8,'Pays',1,0,'C',1);
        // position de la colonne 3 (130 = 70+60)
        $pdf->SetX(130); 
        $pdf->Cell(30,8,'Repas',1,0,'C',1);
    
        $pdf->Ln(); // Retour à la ligne
    }
    // AFFICHAGE EN-TÊTE DU TABLEAU
    // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (60 mm)
    $position_entete = 70;
    // police des caractères
    $pdf->SetFont('Helvetica','',9);
    $pdf->SetTextColor(0);
    // on affiche les en-têtes du tableau
    entete_table($position_entete);
    
    
    $position_detail = 78; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
   
        // position abcisse de la colonne 1 (10mm du bord)
        $pdf->SetY($position_detail);
        $pdf->SetX(10);
        $pdf->MultiCell(60,8,utf8_decode($tab['nomAd']),1,'C');
        // position abcisse de la colonne 2 (70 = 10 + 60)	
        $pdf->SetY($position_detail);
        $pdf->SetX(70); 
        $pdf->MultiCell(60,8,utf8_decode($tab['prenomAd']),1,'C');
        // position abcisse de la colonne 3 (130 = 70+ 60)
        $pdf->SetY($position_detail);
        $pdf->SetX(130); 
        $pdf->MultiCell(30,8,$tab['date'],1,'C');
    
        // on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
        $position_detail += 8; 
  
// ______________



// Enfin, le document est terminé et envoyé au navigateur grâce à Output().

ob_end_clean();
$pdf->Output();








// END 
?>