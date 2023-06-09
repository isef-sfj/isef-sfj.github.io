<?php
session_start();

$_SESSION["playerid"] = $id;
$_SESSION["name"] = $name;
$_SESSION["icon"] = $icon;
$_SESSION["modul"] = $modul;
$_SESSION["lesson"] = $lesson;