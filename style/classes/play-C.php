<?php
session_start();

if (isset($_GET['goal'])) {
    $goal = $_GET['goal'];
}

if (!isset($_SESSION['id'])) {
    header("Location: ../classes/nameIconChoice-C.php?goal=nameIconChoice");
}

if ($goal == "waiting") {
    header("Location: ../views/waitingRoom-V.php");
}

