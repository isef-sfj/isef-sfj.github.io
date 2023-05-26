<?php

include "dbConnection.php";

$id = $_POST["id"];
$frage = $_POST["frage"];
$antwort1_richtig = $_POST["antwort1_richtig"];
$antwort2 = $_POST["antwort2"];
$antwort3 = $_POST["antwort3"];
$antwort4 = $_POST["antwort4"];

$sql = "UPDATE quizfragen SET  frage=:frage,
                                antwort1_richtig=:antwort1_richtig,
                                antwort2=:antwort2,
                                antwort3=:antwort3,
                                antwort4=:antwort4
        WHERE id=:id
                        /* VALUES (:frage,
                                :antwort1_richtig,
                                :antwort2,
                                :antwort3,
                                :antwort4) */ ";

                                var_dump($sql);


// UPDATE users SET vorname = :vorname_neu, email = :email_neu, nachname = :nachname_neu WHERE id = :id")
// $sql = "DELETE FROM quizfragen WHERE id=:id";


$stmt = $pdo->prepare($sql);

$stmt->execute(['frage' => $frage,
                'antwort1_richtig' => $antwort1_richtig,
                'antwort2' => $antwort2,
                'antwort3' => $antwort3,
                'antwort4' => $antwort4,
                'id' => $id]);

header("Location:index.php");
