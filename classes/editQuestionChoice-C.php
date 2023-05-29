<?php

include 'question-C.php';

$qc = new QuestionContr;
$ids = $qc->getIdsForEditQuestionChoice();

include '../views/editQuestionChoice-V.php';