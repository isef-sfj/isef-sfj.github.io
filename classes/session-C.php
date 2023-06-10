<?php
session_start();
$_SESSION["lesson"] = $_GET['lesson'];
header('Location: nameIconChoice-C.php?goal=lessonChoice');