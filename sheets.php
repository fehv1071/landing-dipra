<?php
$servername = "localhost";
$username = "diprapc9_1071dig";
$password = "Dipra97697";
$id = 0;
date_default_timezone_set ('America/Mexico_City');
$date_register = date('Y-m-d H:i:s');

try {

    $conn = new PDO("mysql:host=$servername;dbname=diprapc9_reclutamiento_inbursa", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

 
    $sql = "INSERT INTO landing_reg (name, mail, phone, state, city, date_registration) VALUES ('".$nombre."','".$mail."','".$phone."','".$state."','".$city."','".$date_register."')";    
  

    $conn->exec($sql);
    $id = $conn->lastInsertId();

    $conn = null;
    require __DIR__ . '/vendor/autoload.php';
    
    $client = new \Google_Client();
    $client->setApplicationName("Dipra_Landing");
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__. '/credentials.json');
    
    $service = new Google_Service_Sheets($client);
    
    $spreadSheetID = "1WjspnBEsKUm6MnbEEtsWhvJ8uctdNF0Z10wjsPwmFJA";
    
    $range = "A1";
    
    $values =[
        [$id, $nombre, $mail, $phone, $state, $city, $date_register]
    ];
    $requestBody = new Google_Service_Sheets_ValueRange([
        'values' => $values
        ]);
        
        
        $params = [
            'valueInputOption' => 'RAW'
        ];
        
        $response = $service->spreadsheets_values->append($spreadSheetID, $range, $requestBody,$params);
    

}
catch(PDOException $e)
{
   return;
}

