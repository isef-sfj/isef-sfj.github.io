<?php

include "dbConnection.php";

$id = $_GET["id"];

$sql = "DELETE FROM quizfragen WHERE id=:id";

$stmt = $pdo->prepare($sql);

$stmt->execute(['id' => $id]);

header("Location:indexWrite.php");
