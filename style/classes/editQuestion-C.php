<?php
include 'question-C.php';
$goal = 'leer';

if (isset($_POST['goal'])) {
    $goal = $_POST['goal'];
}

if ($goal == "leer") {
    $id = $_GET["id"];
    $qc = new QuestionContr();
    $question = $qc->getQuestionById($id);

    include '../views/editQuestion-V.php';
}

if ($goal == 'edit') {
    $id = $_POST["id"];
    $frage = $_POST["frage"];
    $antwort1_richtig = $_POST["antwort1_richtig"];
    $antwort2 = $_POST["antwort2"];
    $antwort3 = $_POST["antwort3"];
    $antwort4 = $_POST["antwort4"];
    
    $qContr = new QuestionContr();
    $qContr->editQuestion($id, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4);
        
    header('Location: ../index.php');
}

if ($goal == "delete") {
    $id = $_POST["id"];
    $qc = new QuestionContr();
    $qc->deleteQuestion($id);

    header('Location: ../index.php');
}