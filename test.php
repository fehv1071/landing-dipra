<?php


$url="http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
// $url=str_replace('/test.php','',$url);

$url = explode('/',$url);
array_pop($url);
echo implode('/', $url); 
return;

require_once('tcpdf/tcpdf.php');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    //Page header
    public function Header() {
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = K_PATH_IMAGES.'image_demo.jpg';
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 051');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

// remove default footer
$pdf->setPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica ', '', 12);


$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man1.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man2.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man3.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man4.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man5.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man6.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man7.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man8.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man9.png';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');






// add a page
$pdf->AddPage();
// get the current page break margin
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
$img_file = 'http://dipradigital.com/reclutamiento-inbursa/assets/file/man10.png';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();
// Print a text
$html = '<br><br><a href="www.google.com" style="color:white;text-align:center;font-weight:bold;font-size:40pt;margin-top:25px;">SUSCRÍBETE</a>';
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->Output('Manual del Asesor Financiero.pdf', 'D');
