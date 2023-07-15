<?php
include 'question-C.php';

$qContr = new QuestionContr();
$questions = $qContr->getQuestionsForLandingpage(3);

include '../views/landingPage-V.php';