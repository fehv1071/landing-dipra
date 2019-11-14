<?php


$id = $_GET['user'];

$servername = "localhost";
$username = "diprapc9_1071dig";
$password = "Dipra97697";
$url="http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url = explode('/',$url);
array_pop($url);
$url = implode('/', $url); 
date_default_timezone_set ('America/Mexico_City');
$subscribed_date = date('Y-m-d H:i:s');

$conn = new PDO("mysql:host=$servername;dbname=diprapc9_reclutamiento_inbursa", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
$sql = "UPDATE landing_reg SET subscribed=?, subscribed_date=? WHERE id=?";
$conn->prepare($sql)->execute(['1', $subscribed_date, $id]);
$conn = null;



require __DIR__ . '/vendor/autoload.php';
    
$client = new \Google_Client();
$client->setApplicationName("Dipra_Landing");
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__. '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadSheetID = "1WjspnBEsKUm6MnbEEtsWhvJ8uctdNF0Z10wjsPwmFJA";

$range = "J".($id+1);

$values =[
    ["Suscrito", $subscribed_date]
];
$requestBody = new Google_Service_Sheets_ValueRange([
    'values' => $values
    ]);
    
    
$params = [
    'valueInputOption' => 'RAW'
];

$response = $service->spreadsheets_values->update($spreadSheetID, $range, $requestBody,$params);
    




// $mail_str='
// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
// <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

// <head>
//     <!--[if gte mso 9]>
// 	<xml>
// 		<o:OfficeDocumentSettings>
// 		<o:AllowPNG/>
// 		<o:PixelsPerInch>96</o:PixelsPerInch>
// 		</o:OfficeDocumentSettings>
// 	</xml>
// 	<![endif]-->
//     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
//     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
//     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
//     <meta name="format-detection" content="date=no" />
//     <meta name="format-detection" content="address=no" />
//     <meta name="format-detection" content="telephone=no" />
//     <meta name="x-apple-disable-message-reformatting" />
//     <!--[if !mso]><!-->
//     <link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
//     <!--<![endif]-->
//     <title>Email Template</title>
//     <!--[if gte mso 9]>
// 	<style type="text/css" media="all">
// 		sup { font-size: 100% !important; }
// 	</style>
// 	<![endif]-->


//     <style type="text/css" media="screen">
//         /* Linked Styles */
        
//         body {
//             padding: 0 !important;
//             margin: 0 !important;
//             display: block !important;
//             min-width: 100% !important;
//             width: 100% !important;
//             background: #1e52bd;
//             -webkit-text-size-adjust: none
//         }
        
//         a {
//             color: #000001;
//             text-decoration: none
//         }
        
//         p {
//             padding: 0 !important;
//             margin: 0 !important
//         }
        
//         img {
//             -ms-interpolation-mode: bicubic;
//             /* Allow smoother rendering of resized image in Internet Explorer */
//         }
        
//         .mcnPreviewText {
//             display: none !important;
//         }
        
//         .text-footer2 a {
//             color: #ffffff;
//         }
//         /* Mobile styles */
        
//         @media only screen and (max-device-width: 480px),
//         only screen and (max-width: 480px) {
//             .mobile-shell {
//                 width: 100% !important;
//                 min-width: 100% !important;
//             }
//             .m-center {
//                 text-align: center !important;
//             }
//             .m-left {
//                 text-align: left !important;
//                 margin-right: auto !important;
//             }
//             .center {
//                 margin: 0 auto !important;
//             }
//             .content2 {
//                 padding: 8px 15px 12px !important;
//             }
//             .t-left {
//                 float: left !important;
//                 margin-right: 30px !important;
//             }
//             .t-left-2 {
//                 float: left !important;
//             }
//             .td {
//                 width: 100% !important;
//                 min-width: 100% !important;
//             }
//             .content {
//                 padding: 30px 15px !important;
//             }
//             .section {
//                 padding: 30px 15px 0px !important;
//             }
//             .m-br-15 {
//                 height: 15px !important;
//             }
//             .mpb5 {
//                 padding-bottom: 5px !important;
//             }
//             .mpb15 {
//                 padding-bottom: 15px !important;
//             }
//             .mpb20 {
//                 padding-bottom: 20px !important;
//             }
//             .mpb30 {
//                 padding-bottom: 30px !important;
//             }
//             .m-padder {
//                 padding: 0px 15px !important;
//             }
//             .m-padder2 {
//                 padding-left: 15px !important;
//                 padding-right: 15px !important;
//             }
//             .p70 {
//                 padding: 30px 0px !important;
//             }
//             .pt70 {
//                 padding-top: 30px !important;
//             }
//             .p0-15 {
//                 padding: 0px 15px !important;
//             }
//             .p30-15 {
//                 padding: 30px 15px !important;
//             }
//             .p30-15-0 {
//                 padding: 30px 15px 0px 15px !important;
//             }
//             .p0-15-30 {
//                 padding: 0px 15px 30px 15px !important;
//             }
//             .text-footer {
//                 text-align: center !important;
//             }
//             .m-td,
//             .m-hide {
//                 display: none !important;
//                 width: 0 !important;
//                 height: 0 !important;
//                 font-size: 0 !important;
//                 line-height: 0 !important;
//                 min-height: 0 !important;
//             }
//             .m-block {
//                 display: block !important;
//             }
//             .fluid-img img {
//                 width: 100% !important;
//                 max-width: 100% !important;
//                 height: auto !important;
//             }
//             .column,
//             .column-dir,
//             .column-top,
//             .column-empty,
//             .column-top-30,
//             .column-top-60,
//             .column-empty2,
//             .column-bottom {
//                 float: left !important;
//                 width: 100% !important;
//                 display: block !important;
//             }
//             .column-empty {
//                 padding-bottom: 15px !important;
//             }
//             .column-empty2 {
//                 padding-bottom: 30px !important;
//             }
//             .content-spacing {
//                 width: 15px !important;
//             }
//         }
//     </style>
// </head>

// <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#00183f; -webkit-text-size-adjust:none;">
//     <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#00183f">
//         <tr>
//             <td align="center" valign="top">
//                 <!-- Main -->
//                 <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
//                     <tr>
//                         <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
//                             <!-- Header -->
//                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                 <tr>
//                                     <td class="p30-15" style="padding: 40px 0px 20px 0px;">
//                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                             <tr>
//                                                 <th class="column-top" width="200" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">

//                                                 </th>
//                                                 <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
//                                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                         <tr>
//                                                             <td align="right">

//                                                             </td>
//                                                         </tr>
//                                                     </table>
//                                                 </th>
//                                             </tr>
//                                         </table>
//                                     </td>
//                                 </tr>
//                                 <!-- END Top bar -->
//                                 <!-- Logo -->
//                                 <tr>
//                                     <td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;">
//                                         <a href="#" target="_blank"><img src="http://dipradigital.com/reclutamiento-inbursa/images/inbursa.png" width="50%" height="" border="0" alt="" /></a>
//                                     </td>
//                                 </tr>
//                                 <!-- END Logo -->
//                                 <!-- Nav -->

//                                 <!-- END Nav -->
//                             </table>
//                             <!-- END Header -->

//                             <!-- Section 1 -->
//                             <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">

//                                 <tr>
//                                     <td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
//                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">

//                                             <tr>
//                                                 <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;">Te han contactado por medio de la página web de Inbursa</td>
//                                             </tr>
//                                             <tr>
//                                                 <td class="text-center" style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;">A través de la landing page de ser un asesor financiero enviaron sus datos, este correo sirve como respaldo para tener los datos de los usuarios</td>
//                                             </tr>

//                                         </table>
//                                     </td>
//                                 </tr>
//                             </table>
//                             <!-- END Section 1 -->

//                             <!-- Section 2 -->
//                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                 <tr>
//                                     <td>
//                                         <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#dde8fd">
//                                             <tr>
//                                                 <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="http://dipradigital.com/reclutamiento-inbursa/images/free_white_blue.jpg" width="650" height="162" border="0" alt="" /></td>
//                                             </tr>
//                                             <tr>
//                                                 <td class="p0-15" style="padding: 0px 30px;">
//                                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">

//                                                         <tr>
//                                                             <td class="pb40" style="padding-bottom:40px;">
//                                                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                                     <tr>
//                                                                         <td class="event-separator" style="padding-bottom:40px; border-bottom:1px solid #ffffff;">
//                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                                                 <tr>

//                                                                                     <th class="column-empty" width="10" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
//                                                                                     <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
//                                                                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                                                         <tr>
//                                                                                         <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
//                                                                                             <multiline>ID</multiline>
//                                                                                         </td>
//                                                                                     </tr>
//                                                                                     <tr>
//                                                                                         <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
//                                                                                             '.$id.'<br><br><br>
//                                                                                         </td>
//                                                                                     </tr>   
//                                                                                         <tr>
//                                                                                                 <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
//                                                                                                     <multiline>Nombre</multiline>
//                                                                                                 </td>
//                                                                                             </tr>
//                                                                                             <tr>
//                                                                                                 <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
//                                                                                                     '.$_POST['mc-name'].'<br><br><br>
//                                                                                                 </td>
//                                                                                             </tr>
//                                                                                              <tr>
//                                                                                             <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
//                                                                                                 <multiline>Correo</multiline>
//                                                                                             </td>
//                                                                                             </tr>
//                                                                                             <tr>
//                                                                                             <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
//                                                                                             '.$_POST['mc-email'].'<br><br><br>
//                                                                                             </td>
//                                                                                         </tr>
//                                                                                         <tr>
//                                                                                         <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
//                                                                                             <multiline>Teléfono</multiline>
//                                                                                         </td>
//                                                                                     </tr>
//                                                                                     <tr>
//                                                                                         <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
//                                                                                         '.$_POST['mc-phone'].'<br><br><br>
//                                                                                         </td>
//                                                                                     </tr>
//                                                                                     <tr>
//                                                                                     <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
//                                                                                         <multiline>Estado</multiline>
//                                                                                     </td>
//                                                                                 </tr>
//                                                                                 <tr>
//                                                                                     <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
//                                                                                     '.$_POST['mc-state'].'<br><br><br>
//                                                                                     </td>
//                                                                                 </tr>
//                                                                                 <tr>
//                                                                                     <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
//                                                                                         <multiline>Ciudad</multiline>
//                                                                                     </td>
//                                                                                 </tr>
//                                                                                 <tr>
//                                                                                     <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
//                                                                                     '.$_POST['mc-city'].'
//                                                                                     </td>
//                                                                                 </tr>
//                                                                                         </table>
//                                                                                     </th>


//                                                                                 </tr>
//                                                                             </table>
//                                                                         </td>
//                                                                     </tr>
//                                                                 </table>
//                                                             </td>
//                                                         </tr>
                                                 
                                           

                               

//                                 </table>
//                                 </td>
//                     </tr>
//                     </table>
//                     </td>
//         </tr>
//         <tr>
//             <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:center;"><img src="http://dipradigital.com/reclutamiento-inbursa/images/free_blue_white.jpg" width="650" height="160" border="0" alt="" /></td>
//         </tr>
//         </table>
//         <!-- END Section 2 -->






//         <table width="100%" border="0" cellspacing="0" cellpadding="0">
//             <tr>
//                 <td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
//                     <multiline>Grupo Financiero Inbursa</multiline>
//                 </td>
//             </tr>
//         </table>
//         <!-- END Footer -->
//         </td>
//         </tr>
//         </table>
//         <!-- END Main -->

//         </td>
//         </tr>
//     </table>
// </body>

// </html>';



// $mail_DIPRA = "rvazquez@asesorinbursa.com";
// // $mail_DIPRA = "filiherver@gmail.com";
// $ToEmail = $mail_DIPRA;

// $EmailSubject = 'Contacto desde Landing Inbursa Asesor Financiero'; 

// $mailheader = "From: ".$_POST['mc-email']."\r\n"; 

// $mailheader .= "Reply-To: ".$_POST['mc-email']."\r\n"; 

// $mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

// mail($ToEmail, $EmailSubject, $mail_str, $mailheader) or die ("");




// $mail_str='
// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
// <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

// <head>
//     <!--[if gte mso 9]>
// 	<xml>
// 		<o:OfficeDocumentSettings>
// 		<o:AllowPNG/>
// 		<o:PixelsPerInch>96</o:PixelsPerInch>
// 		</o:OfficeDocumentSettings>
// 	</xml>
// 	<![endif]-->
//     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
//     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
//     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
//     <meta name="format-detection" content="date=no" />
//     <meta name="format-detection" content="address=no" />
//     <meta name="format-detection" content="telephone=no" />
//     <meta name="x-apple-disable-message-reformatting" />
//     <!--[if !mso]><!-->
//     <link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
//     <!--<![endif]-->
//     <title>Email Template</title>
//     <!--[if gte mso 9]>
// 	<style type="text/css" media="all">
// 		sup { font-size: 100% !important; }
// 	</style>
// 	<![endif]-->


//     <style type="text/css" media="screen">
//         /* Linked Styles */
        
//         body {
//             padding: 0 !important;
//             margin: 0 !important;
//             display: block !important;
//             min-width: 100% !important;
//             width: 100% !important;
//             background: #1e52bd;
//             -webkit-text-size-adjust: none
//         }
        
//         a {
//             color: #000001;
//             text-decoration: none
//         }
        
//         p {
//             padding: 0 !important;
//             margin: 0 !important
//         }
        
//         img {
//             -ms-interpolation-mode: bicubic;
//             /* Allow smoother rendering of resized image in Internet Explorer */
//         }
        
//         .mcnPreviewText {
//             display: none !important;
//         }
        
//         .text-footer2 a {
//             color: #ffffff;
//         }
//         /* Mobile styles */
        
//         @media only screen and (max-device-width: 480px),
//         only screen and (max-width: 480px) {
//             .mobile-shell {
//                 width: 100% !important;
//                 min-width: 100% !important;
//             }
//             .m-center {
//                 text-align: center !important;
//             }
//             .m-left {
//                 text-align: left !important;
//                 margin-right: auto !important;
//             }
//             .center {
//                 margin: 0 auto !important;
//             }
//             .content2 {
//                 padding: 8px 15px 12px !important;
//             }
//             .t-left {
//                 float: left !important;
//                 margin-right: 30px !important;
//             }
//             .t-left-2 {
//                 float: left !important;
//             }
//             .td {
//                 width: 100% !important;
//                 min-width: 100% !important;
//             }
//             .content {
//                 padding: 30px 15px !important;
//             }
//             .section {
//                 padding: 30px 15px 0px !important;
//             }
//             .m-br-15 {
//                 height: 15px !important;
//             }
//             .mpb5 {
//                 padding-bottom: 5px !important;
//             }
//             .mpb15 {
//                 padding-bottom: 15px !important;
//             }
//             .mpb20 {
//                 padding-bottom: 20px !important;
//             }
//             .mpb30 {
//                 padding-bottom: 30px !important;
//             }
//             .m-padder {
//                 padding: 0px 15px !important;
//             }
//             .m-padder2 {
//                 padding-left: 15px !important;
//                 padding-right: 15px !important;
//             }
//             .p70 {
//                 padding: 30px 0px !important;
//             }
//             .pt70 {
//                 padding-top: 30px !important;
//             }
//             .p0-15 {
//                 padding: 0px 15px !important;
//             }
//             .p30-15 {
//                 padding: 30px 15px !important;
//             }
//             .p30-15-0 {
//                 padding: 30px 15px 0px 15px !important;
//             }
//             .p0-15-30 {
//                 padding: 0px 15px 30px 15px !important;
//             }
//             .text-footer {
//                 text-align: center !important;
//             }
//             .m-td,
//             .m-hide {
//                 display: none !important;
//                 width: 0 !important;
//                 height: 0 !important;
//                 font-size: 0 !important;
//                 line-height: 0 !important;
//                 min-height: 0 !important;
//             }
//             .m-block {
//                 display: block !important;
//             }
//             .fluid-img img {
//                 width: 100% !important;
//                 max-width: 100% !important;
//                 height: auto !important;
//             }
//             .column,
//             .column-dir,
//             .column-top,
//             .column-empty,
//             .column-top-30,
//             .column-top-60,
//             .column-empty2,
//             .column-bottom {
//                 float: left !important;
//                 width: 100% !important;
//                 display: block !important;
//             }
//             .column-empty {
//                 padding-bottom: 15px !important;
//             }
//             .column-empty2 {
//                 padding-bottom: 30px !important;
//             }
//             .content-spacing {
//                 width: 15px !important;
//             }
//         }
//     </style>
// </head>

// <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#00183f; -webkit-text-size-adjust:none;">
//     <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#00183f">
//         <tr>
//             <td align="center" valign="top">
//                 <!-- Main -->
//                 <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
//                     <tr>
//                         <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
//                             <!-- Header -->
//                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                 <tr>
//                                     <td class="p30-15" style="padding: 40px 0px 20px 0px;">
//                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                             <tr>
//                                                 <th class="column-top" width="200" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">

//                                                 </th>
//                                                 <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
//                                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                         <tr>
//                                                             <td align="right">

//                                                             </td>
//                                                         </tr>
//                                                     </table>
//                                                 </th>
//                                             </tr>
//                                         </table>
//                                     </td>
//                                 </tr>
//                                 <!-- END Top bar -->
//                                 <!-- Logo -->
//                                 <tr>
//                                     <td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;">
//                                         <a href="#" target="_blank"><img src="http://dipradigital.com/reclutamiento-inbursa/images/inbursa.png" width="50%" height="" border="0" alt="" /></a>
//                                     </td>
//                                 </tr>
//                                 <!-- END Logo -->
//                                 <!-- Nav -->

//                                 <!-- END Nav -->
//                             </table>
//                             <!-- END Header -->

//                             <!-- Section 1 -->
//                             <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">

//                                 <tr>
//                                     <td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
//                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">

//                                             <tr>
//                                             <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:22px; line-height:36px; text-align:center; padding-bottom:20px;">Esperamos que la hayas pasado genial en el concierto</td>
//                                             </tr>
//                                             <tr>
//                                                 <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;">¡Gracias, '.$_POST['mc-name'].'! Hemos recibido tus datos, nos pondremos en contacto lo antes posible.</td>
//                                             </tr>
//                                             <tr>
//                                                 <td class="text-center" style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;"><img class="sml-4x3" alt="E-Mail Sent bodymovin svg agreed succeed validation sent design motion email" src="https://cdn.dribbble.com/users/1735807/screenshots/4290565/01.gif" style="
//                                                     height: 150px;
//                                                 "></td>
//                                             </tr>

//                                         </table>
//                                     </td>
//                                 </tr>
//                             </table>
//                             <!-- END Section 1 -->

//                             <!-- Section 2 -->
//                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                 <tr>
//                                     <td>
//                                         <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#dde8fd">
//                                             <tr>
//                                                 <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="http://dipradigital.com/reclutamiento-inbursa/images/free_white_blue.jpg" width="650" height="162" border="0" alt="" /></td>
//                                             </tr>
//                                             <tr>
//                                                 <td class="p0-15" style="padding: 0px 30px;">
//                                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">

//                                                         <tr>
//                                                             <td class="pb40" style="padding-bottom:40px;">
//                                                                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                                     <tr>
//                                                                         <td class="event-separator" style="padding-bottom:40px; border-bottom:1px solid #ffffff;">
//                                                                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                                                 <tr>

//                                                                                     <th class="column-empty" width="10" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
//                                                                                     <th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
//                                                                                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
//                                                                                             <tr>
//                                                                                                 <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; font-weight:bold; color:#000000;">
//                                                                                                     <multiline>Te dejamos este link para que comiences a conocer algunos de los pasos más importantes para ser un asesor financiero</multiline>
//                                                                                                 </td>
                                                                                                
//                                                                                             </tr>
                                                                                           
//                                                                                         </table>
//                                                                                     </th>


//                                                                                 </tr>
//                                                                             </table>
//                                                                         </td>
//                                                                     </tr>
//                                                                 </table>
//                                                             </td>
//                                                         </tr>
//                                                         <tr>
//                                                         <td class="text-button button-blue2" style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:#1e52bd; color:#ffffff;"><multiline><a href="http://dipradigital.com/reclutamiento-inbursa/guia.php?user='.$id.'" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Ver la guía del Asesor Financiero</span></a></multiline></td>
//                                                         </tr>

//                                 </table>
//                                 </td>
//                     </tr>
//                     </table>
//                     </td>
//         </tr>
//         <tr>
//             <td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:center;"><img src="http://dipradigital.com/reclutamiento-inbursa/images/free_blue_white.jpg" width="650" height="160" border="0" alt="" /></td>
//         </tr>
//         </table>
//         <!-- END Section 2 -->






//         <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:40px;">
//             <tr>
//                 <td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:\'Raleway\', Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
//                     <multiline>Grupo Financiero Inbursa</multiline>
//                 </td>
//             </tr>
//         </table>
//         <!-- END Footer -->
//         </td>
//         </tr>
//         </table>
//         <!-- END Main -->

//         </td>
//         </tr>
//     </table>
// </body>

// </html>';


// $mail_DIPRA = "rvazquez@asesorinbursa.com";
// // $mail_DIPRA = "filiherver@gmail.com";
// $ToEmail = $_POST['mc-email'];

// $EmailSubject = 'Contacto desde Landing Inbursa Asesor Financiero'; 

// $mailheader = "From: ".$mail_DIPRA."\r\n"; 

// $mailheader .= "Reply-To: ".$mail_DIPRA."\r\n"; 

// $mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

// mail($ToEmail, $EmailSubject, $mail_str, $mailheader) or die ("");
?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Inbursa - Comienza tu camino como asesor financiero">

    <meta name="keywords" content="asesor financiero, inbursa, crea tu camino">

    <link rel="shortcut icon" type="image/x-icon" href="images/inbursa-ico.png">


    <title>Inbursa - Comienza tu camino como asesor financiero</title>



    <!-- // PLUGINS (css files) // -->

    <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>



<body>



    <!--======================================== 

           Preloader

    ========================================-->

    <div class="page-preloader">

        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
        <!-- <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div> -->

    </div>

    <!--======================================== 

           Header

    ========================================-->



    <!--//** Navigation**//-->

    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



        <div class="container">

            <!-- Start Header Navigation -->

            <div class="navbar-header">

                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars" style="font-size: 23px"></i>
 
                </button> -->

                <a class="navbar-brand" href="#brand">

                    <img src="images/inbursa.png" style="width: 9rem" class="logo alt-landing" alt="logo">

                </a>

            </div>

            <!-- End Header Navigation -->



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active scroll">
                        <a href="#home"></a>
                    </li>
                    <!-- 

                    <li class="scroll"><a href="#features">Beneficios</a></li>

                    <li class="scroll"><a href="#crecimiento">Crecimiento</a></li>

                    <li class="scroll"><a href="#contact">Contacto</a></li>

                    <li class="scroll">
                        <a class="whatsicon"><img src="images/wp-ico.png" style="max-width: 28px; margin-top: -4px; -webkit-filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, 0.23)); "></a>
                    </li> -->


                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

    </nav>



    <!--//** Banner**//-->

    <section id="home" class="susbcribed" style="height: 100vh;">

        <div class="container">

            <div class="row">

                <!-- Introduction -->

                <div class="col-md-12  caption" style="text-align: center;">

                    <h1 class="biggo">¡Gracias por suscbrirte! </h1>
                    <h2> Te mantendremos informado a través de nuestros boletines</h2>
                    <div class="">

                        <div class="video-card video-guide">

                       
                        </div>

                    </div>

                    <br>
                    <div class="">

                     

                    </div>

                    <!-- <a class="btn btn-blue popup-youtube " href="https://www.youtube.com/watch?v=Q8TXgCzxEnw ">
                        
                        <i class="material-icons ">play_circle_filled</i>Ver un video
                        
                    </a> -->

                </div>

                <!-- Sign Up -->


            </div>

        </div>

    </section>




    <!--======================================== 

           Modal

    ========================================-->

    <!-- Modal -->

    <div class="modal-background">
        <div class="modal">

            <div class="modal__icons">
                <form class="signup-form " id="contactForm2">
                    <div class="form-content">

                        <h2 class="text-center ">Envíanos tus datos</h2>
                        <p>Conviértete en un Asesor Financiero y sé lo que tu quieras ser</p>

                        <hr>

                        <div class="form-group ">

                            <input type="text " name="mc-name" id="mc-name2" class="form-control " placeholder="Nombre Completo " required="required ">

                        </div>

                        <div class="form-group ">

                            <input type="email " name="mc-email" id="mc-email2" class="form-control " placeholder="Email " required="required ">

                        </div>

                        <div class="form-group ">

                            <input type="text " name="mc-phone" id="mc-phone2" class="form-control " placeholder="WhatsApp " required="required ">

                        </div>
                        <div class="form-group ">

                            <select name="mc-state" id="mc-state2" class="form-control select " placeholder="Lugar de Residencia " required="required ">
                                    <option value="">Lugar de Residencia</option>                                                   
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Estado de México">Estado de México</option> 
                            </select>
                        </div>
                        <!-- <div class="form-group ">
                        <select name="mc-city" id="mc-city" class="form-control select hidden" placeholder="Escoge tu Alcaldía" required="required ">                                    
                        </select>

                        </div> -->
                        <div class="form-group ">
                            <input name="mc-city" id="mc-city2" list="somethingelse" placeholder="" class="form-control select hidden">
                            <datalist id="somethingelse">
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Estado de México">Estado de México</option> 
                            </datalist>
                        </div>


                        <!-- <div class="form-group ">
        
                                    <input type="text " class="form-control " placeholder="Password " required="required ">
        
                                </div> -->

                        <div class="form-group text-center ">

                            <input type="button" onclick="gonde2r();" class="btn btn-blue btn-block " value="Enviar">

                        </div>
                    </div>
                    <div class="mail-sent">
                        <h2 class="text-center ">Gracias por contactarnos</h2>
                        <img alt="E-Mail Sent bodymovin svg agreed succeed validation sent design motion email" src="https://ci4.googleusercontent.com/proxy/pjjFxUMDYcvkOtQ7BUaM6IV_n3m8em8GSTv4RDWp1HV1kCRICOxQK_7UkMB-j82vtSg69jIebPZVr2hAuXIdLbhYSVNg0OLmqb5e1DJ9PaOePjmX=s0-d-e1-ft#https://cdn.dribbble.com/users/1735807/screenshots/4290565/01.gif"
                            style="height:150px" class="CToWUd a6T" tabindex="0">
                    </div>

                </form>
            </div>
            <span class="modal__icon modal__icon--close" data-feather="x"></span>

        </div>

        <div class="alert">
            <span class="alert__icon" data-feather="info"></span>
            <span class="alert__text">
                          link copied
                        </span>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js "></script>

    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js "></script>

    <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js "></script>

    <script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js "></script>


    <script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js "></script>

    <!-- <script src="assets/js/plugins/particles.js-master/particles.js-master/particles.min.js "></script> -->

    <!-- <script src="assets/js/particales-script.js "></script> -->

    <script src="assets/js/main.js "></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
    <script>
        AOS.init();
        var modal = $('.modal');
        var alert = $('.alert');

        function gonder() {
            // var link = document.createElement("a");
            // link.download = name;
            // link.href = "http://dipradigital.com/reclutamiento-inbursa/assets/file/MANUAL-INBURSA.pdf";
            // link.click();

            let whatsString = `Acabo de descargar la guía del asesor financiero y me gustaría recibir más información. mis datos son:%0A%0A*Nombre :* <?= $nombre ?>%0A*Teléfono:* <?= $phone ?>%0A*Mail:* <?= $mail ?>'%0A*Lugar de Residencia:* <?= $state ?>%0A*Ciudad de Residencia:* <?= $city ?>%0A`;

            let start_url = " ";
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                start_url = "https://wa.me/+527717463505?text=";
            } else {
                start_url = " https://web.whatsapp.com/send?phone=+527717463505&text=";
            }

            window.open(start_url + whatsString, '_blank');

            window.location.href = "<?= $url ?>/alert.php?user=" + mail_response;

            // $.ajax({
            //     type: "POST",
            //     url: "alert.php",
            //     data: {
            //         id : "<?= $id ?>",
            //         name : "<?= $nombre ?>",
            //         mail : "<?= $mail ?>",
            //         phone : "<?= $phone ?>",
            //         state : "<?= $state ?>",
            //         city : "<?= $city ?>",
            //     } ,
            //     // dataType: "json",
            //     success: function(mail_response) {
            //         var blob=new Blob([mail_response]);
            //         var link=document.createElement('a');
            //         link.href=window.URL.createObjectURL(blob);
            //         link.download="dsads.pdf";
            //         link.click();
            //     }
            // });
        }

   

       
    </script>

</body>

</html>

