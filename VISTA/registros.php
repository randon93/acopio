<?php
   require_once "REPORTES/indexReporte.php";
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
            for($i=1;$i<=40;$i++){
                $pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1);
            }
            $pdf->Output();
        
?>




