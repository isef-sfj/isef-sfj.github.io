<?php

include 'question-C.php';

$goal = "leer";
$id = NULL;
$modul = NULL;

if (isset($_GET['goal'])) {
    $goal = $_GET['goal'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['modul'])) {
    $modul = $_GET['modul'];
}

if ($goal == "leer") {
    header('Location: ../index3.php');
}

if ($goal == "modul") {
    $qc = new QuestionContr;
    $moduls = $qc->getModulForEditQuestionChoice();
    include '../views/editQuestionChoiceModul-V.php';
}

if ($goal == "id") {
    $qc = new QuestionContr;
    $ids = $qc->getIdsForEditQuestionChoice($modul);
    include '../views/editQuestionChoiceId-V.php';
}
