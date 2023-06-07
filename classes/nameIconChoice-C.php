<?php

require_once 'player-C.php';
require_once 'question-C.php';

$goal = "leer";
$id = NULL;
$name = NULL;
$icon = NULL;

if (isset($_GET['goal'])) {
    $goal = $_GET['goal'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}

if (isset($_GET['icon'])) {
    $icon = $_GET['icon'];
}

if ($goal == "leer") {
    header('Location: ../index3.php');
}

if ($goal == "nameIconChoice") {
    include '../views/nameIconChoice-V.php';
}

if ($goal == "setPlayer") {
    $pc = new PlayerContr();
    $pc->setPlayer($name, $icon);
    $qc = new QuestionContr();
    $modules = $qc->getModulForEditQuestionChoice();
    include '../views/moduleChoice-V.php';
}