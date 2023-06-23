<?php

include 'question-C.php';


$goal = 'leer';

if (isset($_POST["goal"])) {
    $goal=$_POST["goal"];
}

if ($goal == 'leer') {
  $qc = new QuestionContr();
  $modules = $qc->getModulForEditQuestionChoice();
  include '../views/addQuestion-V.php';
}


if ($goal == 'new') {
    $modul = $_POST["modul"];
    $lektion = $_POST["lektion"];
    $frage = $_POST["frage"];
    $antwort1_richtig = $_POST["antwort1_richtig"];
    $antwort2 = $_POST["antwort2"];
    $antwort3 = $_POST["antwort3"];
    $antwort4 = $_POST["antwort4"];
    
    $qContr = new QuestionContr();
   
    $qContr->setQuestion($modul, $lektion, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4);
        
    header('Location: ../index.php');
    
    }
    