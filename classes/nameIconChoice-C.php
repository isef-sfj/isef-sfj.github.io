<?php

require_once 'player-C.php';
require_once 'question-C.php';

$goal = "leer";
$id = NULL;
$name = NULL;
$icon = NULL;
$modul = NULL;
$lesson = NULL;


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

if (isset($_GET['modul'])) {
    $modul = $_GET['modul'];
}

if (isset($_GET['lesson'])) {
    $lesson = $_GET['lesson'];
}


if ($goal == "leer") {
    header('Location: ../index3.php');
}

if ($goal == "nameIconChoice") {
    include '../views/nameIconChoice-V.php';
}

if ($goal == "lessonChoice") {
    $id;
    $name;
    $icon;
    $modul;
    include '../views/lessonChoice-V.php';
}

if ($goal == "setPlayer") {
    $pc = new PlayerContr();
    $id = $pc->setPlayer($name, $icon);
    $qc = new QuestionContr();
    $modules = $qc->getModulForEditQuestionChoice();
    include '../views/moduleChoice-V.php';
}