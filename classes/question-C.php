<?php

include 'question-M.php';

class QuestionContr {

    function getQuestionsForLandingpage($quantity=0) {

        $questions = new Question();
        $qforlandingpage = $questions->getQuestions($quantity);
        return $qforlandingpage;

    }

    function setQuestion ($modul, $lektion, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4) {
        $questions = new Question();
        $questions->setQuestion($modul, $lektion, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4);
    }

    function getModulForEditQuestionChoice() {

        $q = new Question();
        $moduls = $q->getModuls();
        return $moduls;

    }

    function getIdsForEditQuestionChoice() {

        $q = new Question();
        $ids = $q->getIds();
        return $ids;

    }

    function getQuestionById($id) {
        $q = new Question();
        $questionById = $q->getQuestionById($id);
        return $questionById;
    }

    function editQuestion($id, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4) {
        $q = new Question();
        $q->editQuestion($id, $frage, $antwort1_richtig, $antwort2, $antwort3, $antwort4);
    }

    function deleteQuestion($id) {
        $q = new Question();
        $q->deleteQuestion($id);


    }

}