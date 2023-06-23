<?php

class Dbh {
    protected function connect() {

        // Daten aus dbdata.json auslesen
        $jsonDbData = file_get_contents("dbdata.json");
        // JSON-Obj in Array konvertieren
        $arrayDbData = json_decode($jsonDbData, true);

        $host = $arrayDbData['host'];
        $dbname = $arrayDbData['dbname'];
        $charset = $arrayDbData['charset'];
        $username = $arrayDbData['username'];
        $password = $arrayDbData['password'];


        $dsn = 'mysql:host=' . $host .  ';dbname=' . $dbname;
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}












