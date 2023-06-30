<?php
include_once "question-C.php";

$qc = new QuestionContr();
$fragen = $qc->getQuestionsForQuiz();
// $fragen = json_decode($fragen, true);

echo $fragen;