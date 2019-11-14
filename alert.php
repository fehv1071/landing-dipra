<?php

$id = $_GET['user'];


$servername = "localhost";
$username = "diprapc9_1071dig";
$password = "Dipra97697";

$conn = new PDO("mysql:host=$servername;dbname=diprapc9_reclutamiento_inbursa", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
$sql = "SELECT * FROM landing_reg WHERE id = ".$id;
foreach($conn->query($sql) as $row){
    $nombre = $row["name"];
    $mail = $row["mail"];
    $phone = $row["phone"];
    $state = $row["state"];
    $city = $row["city"];     
}

date_default_timezone_set ('America/Mexico_City');
$date_downloaded = date('Y-m-d H:i:s');

$sql = "UPDATE landing_reg SET downloaded=?, date_downloaded=? WHERE id=?";
$conn->prepare($sql)->execute(['1', $date_downloaded, $id]);
$conn = null;


require __DIR__ . '/vendor/autoload.php';
    
$client = new \Google_Client();
$client->setApplicationName("Dipra_Landing");
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__. '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadSheetID = "1WjspnBEsKUm6MnbEEtsWhvJ8uctdNF0Z10wjsPwmFJA";

$range = "H".($id+1);

$values =[
    ["Guía Descargada", $date_downloaded]
];
$requestBody = new Google_Service_Sheets_ValueRange([
    'values' => $values
    ]);
    
    
$params = [
    'valueInputOption' => 'RAW'
];

$response = $service->spreadsheets_values->update($spreadSheetID, $range, $requestBody,$params);
    

$url="http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url = explode('/',$url);
array_pop($url);
$url = implode('/', $url); 

$mail_str='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    <!--<![endif]-->
    <title>Email Template</title>
    <!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->


    <style type="text/css" media="screen">
        /* Linked Styles */
        
        body {
            padding: 0 !important;
            margin: 0 !important;
            display: block !important;
            min-width: 100% !important;
            width: 100% !important;
            background: #1e52bd;
            -webkit-text-size-adjust: none
        }
        
        a {
            color: #000001;
            text-decoration: none
        }
        
        p {
            padding: 0 !important;
            margin: 0 !important
        }
        
        img {
            -ms-interpolation-mode: bicubic;
            /* Allow smoother rendering of resized image in Internet Explorer */
        }
        
        .mcnPreviewText {
            display: none !important;
        }
        
        .text-footer2 a {
            color: #ffffff;
        }
        /* Mobile styles */
        
        @media only screen and (max-device-width: 480px),
        only screen and (max-width: 480px) {
            .mobile-shell {
                width: 100% !important;
                min-width: 100% !important;
            }
            .m-center {
                text-align: center !important;
            }
            .m-left {
                text-align: left !important;
                margin-right: auto !important;
            }
            .center {
                margin: 0 auto !important;
            }
            .content2 {
                padding: 8px 15px 12px !important;
            }
            .t-left {
                float: left !important;
                margin-right: 30px !important;
            }
            .t-left-2 {
                float: left !important;
            }
            .td {
                width: 100% !important;
                min-width: 100% !important;
            }
            .content {
                padding: 30px 15px !important;
            }
            .section {
                padding: 30px 15px 0px !important;
            }
            .m-br-15 {
                height: 15px !important;
            }
            .mpb5 {
                padding-bottom: 5px !important;
            }
            .mpb15 {
                padding-bottom: 15px !important;
            }
            .mpb20 {
                padding-bottom: 20px !important;
            }
            .mpb30 {
                padding-bottom: 30px !important;
            }
            .m-padder {
                padding: 0px 15px !important;
            }
            .m-padder2 {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
            .p70 {
                padding: 30px 0px !important;
            }
            .pt70 {
                padding-top: 30px !important;
            }
            .p0-15 {
                padding: 0px 15px !important;
            }
            .p30-15 {
                padding: 30px 15px !important;
            }
            .p30-15-0 {
                padding: 30px 15px 0px 15px !important;
            }
            .p0-15-30 {
                padding: 0px 15px 30px 15px !important;
            }
            .text-footer {
                text-align: center !important;
            }
            .m-td,
            .m-hide {
                display: none !important;
                width: 0 !important;
                height: 0 !important;
                font-size: 0 !important;
                line-height: 0 !important;
                min-height: 0 !important;
            }
            .m-block {
                display: block !important;
            }
            .fluid-img img {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
            }
            .column,
            .column-dir,
            .column-top,
            .column-empty,
            .column-top-30,
            .column-top-60,
            .column-empty2,
            .column-bottom {
                float: left !important;
                width: 100% !important;
                display: block !important;
            }
            .column-empty {
                padding-bottom: 15px !important;
            }
            .column-empty2 {
                padding-bottom: 30px !important;
            }
            .content-spacing {
                width: 15px !important;
            }
        }
    </style>
</head>

<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#00183f; -webkit-text-size-adjust:none;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#00183f">
        <tr>
            <td align="center" valign="top">
                <!-- Main -->
                <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                    <tr>
                        <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                            <!-- Header -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="p30-15" style="padding: 40px 0px 20px 0px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <th class="column-top" width="200" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">

                                                </th>
                                                <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td align="right">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- END Top bar -->
                                <!-- Logo -->
                                <tr>
                                    <td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;">
                                        <a href="#" target="_blank"><img src="'.$url.'/images/inbursa.png" width="50%" height="" border="0" alt="" /></a>
                                    </td>
                                </tr>
                                <!-- END Logo -->
                                <!-- Nav -->

                                <!-- END Nav -->
                            </table>
                            <!-- END Header -->

                            <!-- Section 1 -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">

                                <tr>
                                    <td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                            <tr>
                                                <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;">Acaban de descargar la guía del Asesor Financiero de Inbursa</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;">El usuario con ID '.$id.' y nombre '.$name.' hizo click en el link y se descargó el pdf</td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- END Section 1 -->

                            <!-- Section 2 -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#dde8fd">
                                            <tr>
                                                <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="'.$url.'/images/free_white_blue.jpg" width="650" height="162" border="0" alt="" /></td>
                                            </tr>
                                            <tr>
                                                <td class="p0-15" style="padding: 0px 30px;">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                                        <tr>
                                                            <td class="pb40" style="padding-bottom:40px;">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td class="event-separator" style="padding-bottom:40px; border-bottom:1px solid #ffffff;">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tr>

                                                                                    <th class="column-empty" width="10" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
                                                                                    <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                        <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                            <multiline>ID</multiline>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                            '.$id.'<br><br><br>
                                                                                        </td>
                                                                                    </tr>   
                                                                                        <tr>
                                                                                                <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                                    <multiline>Nombre</multiline>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                                    '.$nombre.'<br><br><br>
                                                                                                </td>
                                                                                            </tr>
                                                                                             <tr>
                                                                                            <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                                <multiline>Correo</multiline>
                                                                                            </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                            '.$mail.'<br><br><br>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                            <multiline>Teléfono</multiline>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                        '.$phone.'<br><br><br>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                        <multiline>Estado</multiline>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                    '.$state.'<br><br><br>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                        <multiline>Ciudad</multiline>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                    '.$city.'
                                                                                    </td>
                                                                                </tr>
                                                                                        </table>
                                                                                    </th>


                                                                                </tr>
                                                                                
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                 
                                           

                               

                                </table>
                                </td>
                    </tr>
                    </table>
                    </td>
        </tr>
        <tr>
            <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:center;"><img src="'.$url.'/images/free_blue_white.jpg" width="650" height="160" border="0" alt="" /></td>
        </tr>
        </table>
        <!-- END Section 2 -->






        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
                    <multiline>Grupo Financiero Inbursa</multiline>
                </td>
            </tr>
        </table>
        <!-- END Footer -->
        </td>
        </tr>
        </table>
        <!-- END Main -->

        </td>
        </tr>
    </table>
</body>

</html>';


$mail_DIPRA = "rvazquez@asesorinbursa.com";
// $mail_DIPRA = "filiherver@gmail.com";

$ToEmail = $mail_DIPRA;

$EmailSubject = 'Descarga de la guía del asesor financiero'; 

$mailheader = "From: ".$mail."\r\n"; 

$mailheader .= "Reply-To: ".$mail."\r\n"; 

$mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

mail($ToEmail, $EmailSubject, $mail_str, $mailheader) or die ("");


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
$pdf->SetAuthor('Inbursa');
$pdf->SetTitle('Guía del Asesor Financiero');
$pdf->SetSubject('Guía del Asesor Financiero');

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


// set font
$pdf->SetFont('helvetica ', '', 12);


$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man1.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man2.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man3.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man4.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man5.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man6.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man7.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');



$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man8.PNG';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 200, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = $url.'/assets/file/man9.png';
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
$img_file = $url.'/assets/file/man11.png';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();
// Print a text
$html = '<br><br><a href="'.$url.'/suscrito.php?user='.$id.'" style="color:white;text-align:center;font-weight:bold;font-size:40pt;margin-top:25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->Output('Manual del Asesor Financiero.pdf', 'D');
