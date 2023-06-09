<?php
session_start();

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
    header('Location: ../index.php');
}

if ($goal == "nameIconChoice") {
    include '../views/nameIconChoice-V.php';
}

if ($goal == "lessonChoice") {
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['icon'] = $icon;
    $_SESSION['modul'] = $modul;
    $pc = new QuestionContr();
    $lessons = $pc->getLessons($modul);
    include '../views/lessonChoice-V.php';
}

if ($goal == "setPlayer") {
    $pc = new PlayerContr();
    $id = $pc->setPlayer($name, $icon);
    $qc = new QuestionContr();
    $modules = $qc->getModulForEditQuestionChoice();
    include '../views/moduleChoice-V.php';
}

if ($goal == "waiting") {
    $_SESSION['lesson'] = $lesson;
    header("Location: play-C.php?goal=waiting");
}