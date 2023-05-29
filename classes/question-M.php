<?php

include "dbh-M.php";

class Question extends Dbh {

    /*
    private $modul;
    private $lektion;
    private $frage;
    private $antwort1_richtig;
    private $antwort2;
    private $antwort3;
    private $antwort4;

    function __construct($modul, $lektion, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4) {
        $this->modul = $modul;
        $this->lektion = $lektion;
        $this->frage = $frage;
        $this->antwort1_richtig = $antwort1_richtig;
        $this->antwort2 = $antwort2;
        $this->antwort3 = $antwort3;
        $this->antwort4 = $antwort4;
    }
    */

    // Liefert alle Quizfragen zurück.
    // Wenn eine Anzahl (quantity) angegeben ist, nur diese Zahl an Quizfragen.
    public function getQuestions($quantity) {
        switch ($quantity) {
            case 0:

                $sql = "SELECT * FROM quizfragen";
                $stmt = $this->connect()->query($sql);
                return $stmt;
                break;
            
            default:
            
                $sql = "SELECT * FROM quizfragen LIMIT $quantity";
                $stmt = $this->connect()->query($sql);
                
                return $stmt;

        }

    }

    // Neue Quizfrage speichern
    public function setQuestion() {
        $modul = $_POST["modul"];
        $lektion = $_POST["lektion"];
        $frage = $_POST["frage"];
        $antwort1_richtig = $_POST["antwort1_richtig"];
        $antwort2 = $_POST["antwort2"];
        $antwort3 = $_POST["antwort3"];
        $antwort4 = $_POST["antwort4"];

        $sql = "INSERT INTO quizfragen (modul,
                                        lektion,
                                        frage,
                                        antwort1_richtig,
                                        antwort2,
                                        antwort3,
                                        antwort4)
                                VALUES (:modul,
                                        :lektion,
                                        :frage,
                                        :antwort1_richtig,
                                        :antwort2,
                                        :antwort3,
                                        :antwort4)";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute(['modul' => $modul,
                        'lektion' => $lektion,
                        'frage' => $frage,
                        'antwort1_richtig' => $antwort1_richtig,
                        'antwort2' => $antwort2,
                        'antwort3' => $antwort3,
                        'antwort4' => $antwort4]);
    }


    // Quizfrage bearbeiten
    public function editQuestion() {
        $id = $_POST["id"];
        $modul = $_POST["modul"];
        $lektion = $_POST["lektion"];
        $frage = $_POST["frage"];
        $antwort1_richtig = $_POST["antwort1_richtig"];
        $antwort2 = $_POST["antwort2"];
        $antwort3 = $_POST["antwort3"];
        $antwort4 = $_POST["antwort4"];

        $sql = "UPDATE quizfragen SET   frage=:frage,
                                        antwort1_richtig=:antwort1_richtig,
                                        antwort2=:antwort2,
                                        antwort3=:antwort3,
                                        antwort4=:antwort4
                WHERE id=:id";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute(['frage' => $frage,
                        'antwort1_richtig' => $antwort1_richtig,
                        'antwort2' => $antwort2,
                        'antwort3' => $antwort3,
                        'antwort4' => $antwort4]);
    }

}