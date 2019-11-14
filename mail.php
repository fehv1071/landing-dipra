<?php

$nombre = $_POST['mc-name'];
$mail = $_POST['mc-email'];
$phone = $_POST['mc-phone'];
$state = $_POST['mc-state'];
$city = $_POST['mc-city'];
$url="http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url=str_replace('/mail.php','',$url);

include "sheets.php";

echo $id;
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
                                                <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;">Te han contactado por medio de la página web de Inbursa</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;">A través de la landing page de ser un asesor financiero enviaron sus datos, este correo sirve como respaldo para tener los datos de los usuarios</td>
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
                                                                                                    '.$_POST['mc-name'].'<br><br><br>
                                                                                                </td>
                                                                                            </tr>
                                                                                             <tr>
                                                                                            <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                                <multiline>Correo</multiline>
                                                                                            </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                            '.$_POST['mc-email'].'<br><br><br>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                            <multiline>Teléfono</multiline>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                        '.$_POST['mc-phone'].'<br><br><br>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                        <multiline>Estado</multiline>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                    '.$_POST['mc-state'].'<br><br><br>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; text-transform:uppercase; font-weight:bold; color:#000000;">
                                                                                        <multiline>Ciudad</multiline>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:left; color:#000000;">
                                                                                    '.$_POST['mc-city'].'
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

$EmailSubject = 'Contacto desde Landing Inbursa Asesor Financiero'; 

$mailheader = "From: ".$_POST['mc-email']."\r\n"; 

$mailheader .= "Reply-To: ".$_POST['mc-email']."\r\n"; 

$mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

mail($ToEmail, $EmailSubject, $mail_str, $mailheader) or die ("");




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
                                            <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:22px; line-height:36px; text-align:center; padding-bottom:20px;">Esperamos que la hayas pasado genial en el concierto</td>
                                            </tr>
                                            <tr>
                                                <td class="h2-center" style="color:#000000; font-family:\'Raleway\', Times, \'Times New Roman\', serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;">¡Gracias, '.$_POST['mc-name'].'! Hemos recibido tus datos, nos pondremos en contacto lo antes posible.</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="color:#5d5c5c; font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:22px; text-align:center; padding-bottom:22px;"><img class="sml-4x3" alt="E-Mail Sent bodymovin svg agreed succeed validation sent design motion email" src="https://cdn.dribbble.com/users/1735807/screenshots/4290565/01.gif" style="
                                                    height: 150px;
                                                "></td>
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
                                                                                                <td class="h5-black black" style="font-family:\'Raleway\', Arial,sans-serif; font-size:14px; line-height:18px; text-align:left; padding-bottom:15px; font-weight:bold; color:#000000;">
                                                                                                    <multiline>Te dejamos este link para que comiences a conocer algunos de los pasos más importantes para ser un asesor financiero</multiline>
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
                                                        <tr>
                                                        <td class="text-button button-blue2" style="font-family:\'Kreon\', Georgia, serif; font-size:14px; line-height:18px; text-align:center; padding:10px 30px; border-radius:20px; background:#1e52bd; color:#ffffff;"><multiline><a href="'.$url.'/guia.php?user='.$id.'" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Ver la guía del Asesor Financiero</span></a></multiline></td>
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






        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:40px;">
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
$ToEmail = $_POST['mc-email'];

$EmailSubject = 'Contacto desde Landing Inbursa Asesor Financiero'; 

$mailheader = "From: ".$mail_DIPRA."\r\n"; 

$mailheader .= "Reply-To: ".$mail_DIPRA."\r\n"; 

$mailheader .= "Content-type: text/html; charset=UTF-8\r\n"; 

mail($ToEmail, $EmailSubject, $mail_str, $mailheader) or die ("");
?>
