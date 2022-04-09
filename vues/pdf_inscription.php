<?php

Function affPdf($tab){



// permet d'inclure la bibliothèque fpdf
require('PDF/fpdf.php');

// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();

// ajoute une page
$pdf->AddPage();

// définit la police courante
$pdf->SetFont('Arial','B',16);

// affiche du texte
    $pdf->Cell(40,10, $tab["nomAd"], 0,1);
    $pdf->Cell(40,10, $tab["prenomAd"], 0,1);
    $pdf->Cell(40,10, $tab["date"], 0,1);
    $pdf->Cell(40,10, $tab[""], 0,1);

// Enfin, le document est terminé et envoyé au navigateur grâce à Output().

ob_end_clean();
$pdf->Output();





// end fonction
}

// END 
?>