<?php

include "dbh-M.php";

class Question extends Dbh {

    private $id;
    private $modul;
    private $lektion;
    private $frage;
    private $antwort1_richtig;
    private $antwort2;
    private $antwort3;
    private $antwort4;
 
    // Liefert alle Module zurück
    public function getModuls() {
        $sql = "SELECT DISTINCT modul FROM quizfragen";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    // Liefert alle ids zurück
    public function getIds() {
        $sql = "SELECT id FROM quizfragen";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

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
            
                $sql = "SELECT * FROM quizfragen ORDER BY id DESC LIMIT $quantity";
                $stmt = $this->connect()->query($sql);
                
                return $stmt;

        }

    }

    // Neue Quizfrage speichern
    public function setQuestion($modul, $lektion, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4) {
        
        
        $this->modul = $modul;
        $this->lektion = $lektion;
        $this->frage = $frage;
        $this->antwort1_richtig = $antwort1_richtig;
        $this->antwort2 = $antwort2;
        $this->antwort3 = $antwort3;
        $this->antwort4 = $antwort4;
        
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

        $stmt->execute(['modul' => $this->modul,
                        'lektion' => $this->lektion,
                        'frage' => $this->frage,
                        'antwort1_richtig' => $this->antwort1_richtig,
                        'antwort2' => $this->antwort2,
                        'antwort3' => $this->antwort3,
                        'antwort4' => $this->antwort4]);
    }


    // Quizfrage bearbeiten
    public function editQuestion($id, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4) {

        $this->id = $id;
        $this->frage = $frage;
        $this->antwort1_richtig = $antwort1_richtig;
        $this->antwort2 = $antwort2;
        $this->antwort3 = $antwort3;
        $this->antwort4 = $antwort4;

        $sql = "UPDATE quizfragen SET   frage=:frage,
                                        antwort1_richtig=:antwort1_richtig,
                                        antwort2=:antwort2,
                                        antwort3=:antwort3,
                                        antwort4=:antwort4
                WHERE id=:id";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute(['frage' => $this->frage,
                        'antwort1_richtig' => $this->antwort1_richtig,
                        'antwort2' => $this->antwort2,
                        'antwort3' => $this->antwort3,
                        'antwort4' => $this->antwort4,
                        'id' => $this->id]);
    }

}