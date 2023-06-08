<?php

$goal = "";

if (isset($_POST["goal"])) {
    $goal = $_POST["goal"];
} 


switch ($goal) {
    case "hase":
        echo "Hase";
        break;
    case "igel":
        echo "Igel";
        break;
    default:
        header('Location: classes/landingPage-C.php');
        exit;
}