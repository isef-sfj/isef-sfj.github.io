<?php

include 'question-M.php';

class QuestionContr {

    function getQuestionsForLandingpage($quantity=0) {

        $questions = new Question();
        $qforlandingpage = $questions->getQuestions($quantity);
        return $qforlandingpage;

    }

    function saveQuestion ($modul, $lektion, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4) {
        
    }

}