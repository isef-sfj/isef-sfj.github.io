<?php
session_start();

include_once "dbh-M.php";

class Quiz extends Dbh {

    private $id;
    private $timestamp;
    private $modul;
    private $lektion;
    private $player1;
    private $player2;
    private $player3;
    private $player4;
    private $player_count;
    private $player1_status;
    private $player2_status;
    private $player3_status;
    private $player4_status;
    private $player1_points;
    private $player2_points;
    private $player3_points;
    private $player4_points;
    private $quiz_status;
 
    // Neues Quiz speichern
    public function setQuiz($timestamp, $modul ,$lektion, $player1, $player2, $player3, $player4, $player_count, $player1_status, $player2_status,
                            $player3_status, $player4_status, $player1_points, $player2_points, $player3_points, $player4_points, $quiz_status) {
        
        $this->timestamp = $timestamp;
        $this->modul = $modul;
        $this->lektion = $lektion;
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->player3 = $player3;
        $this->player4 = $player4;
        $this->player_count = $player_count;
        $this->player1_status = $player1_status;
        $this->player2_status = $player2_status;
        $this->player3_status = $player3_status;
        $this->player4_status = $player4_status;
        $this->player1_points = $player1_points;
        $this->player2_points = $player2_points;
        $this->player3_points = $player3_points;
        $this->player4_points = $player4_points;
        $this->quiz_status = $quiz_status;
        
        $sql = "INSERT INTO quiz    (modul,
                                    lektion,
                                    player1,
                                    player2,
                                    player3,
                                    player4,
                                    player_count,
                                    player1_status,
                                    player2_status,
                                    player3_status,
                                    player4_status,
                                    player1_points,
                                    player2_points,
                                    player3_points,
                                    player4_points,
                                    quiz_status)
                            VALUES (:modul,
                                    :lektion,
                                    :player1,
                                    :player2,
                                    :player3,
                                    :player4,
                                    :player_count,
                                    :player1_status,
                                    :player2_status,
                                    :player3_status,
                                    :player4_status,
                                    :player1_points,
                                    :player2_points,
                                    :player3_points,
                                    :player4_points,
                                    :quiz_status)";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute(['timestamp' => $this->timestamp,
                        'modul' => $this->modul,
                        'lektion' => $this->lektion,
                        'player1' => $this->player1,
                        'player2' => $this->player2,
                        'player3' => $this->player3,
                        'player4' => $this->player4,
                        'player_count' => $this->player_count,
                        'player1_status' => $this->player1_status,
                        'player2_status' => $this->player2_status,
                        'player3_status' => $this->player3_status,
                        'player4_status' => $this->player4_status,
                        'player1_points' => $this->player1_points,
                        'player2_points' => $this->player2_points,
                        'player3_points' => $this->player3_points,
                        'player4_points' => $this->player4_points,
                        'quiz_status' => $this->quiz_status]);
    }

    /*
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

    public function getQuestionById($id) {
        $sql = "SELECT * FROM quizfragen WHERE id=$id";
        $stmt = $this->connect()->query($sql);
                
        return $stmt;
    }

    public function deleteQuestion($id) {
        $this->id = $id;

        $sql = "DELETE FROM quizfragen WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $this->id]);

        
    }

    public function getQuestionsForQuiz() {

        $statement = $this->connect()->prepare("SELECT * FROM quizfragen WHERE modul=? AND lektion=?");
        $statement->execute(array($_SESSION['modul'], $_SESSION['lesson']));
        $questions = $statement->fetchAll();   
        return $questions;
    }

}

