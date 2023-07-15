<?php
include_once "question-C.php";

$qc = new QuestionContr();
$fragen = $qc->getQuestionsForQuiz();

echo $fragen;