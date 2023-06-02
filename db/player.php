<?php

// Daten aus dbdata.json auslesen
$jsonDbData = file_get_contents("dbdata.json");

// JSON-Obj in Array konvertieren
$arrayDbData = json_decode($jsonDbData, true);

$host = $arrayDbData['host'];
$dbname = $arrayDbData['dbname'];
$charset = $arrayDbData['charset'];
$username = $arrayDbData['username'];
$password = $arrayDbData['password'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (Exception $e) {
    die('Interner Fehler: Die Datenbank-Verbindung konnte nicht aufgebaut werden :(' . $e->getMessage());
}

$sql = "SELECT * FROM player";
$stmt = $pdo->query($sql);

foreach($stmt as $data) { 

    echo ("<div class='previewFieldEntry'>");
    echo $data['name'];
    echo (" </div>");
   

}

echo("Ich lebe");


