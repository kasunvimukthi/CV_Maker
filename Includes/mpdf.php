<?php

require_once  '../vendor/autoload.php';

// create new PDF document
class PDFService {
  function generatePDF($result) {

require_once __DIR__ . './pdf_template.php';


        $html = invoice($result);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->SetTitle('CV Maker');
        $mpdf->SetSubject('CV');
        $mpdf->SetAuthor('M.K.V.PERERA');
        $mpdf->SetKeywords('CV Maker, M.K.V.PERERA, PDF');
        $mpdf->SetDisplayMode('fullwidth');
        $mpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        // $mpdf->AddPage();
        $mpdf->SetDisplayMode('fullwidth');

        $mpdf->Output();

}
}
?>


  