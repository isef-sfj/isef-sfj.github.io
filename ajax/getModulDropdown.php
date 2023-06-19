<?php

include_once "question-C.php";

$qc = new QuestionContr();
$modules = $qc->getModulForEditQuestionChoice();

        <div >
            
            <select id="modulSelect" class="selectDropdown">
                <?php foreach($modules as $datam) { ?>
                    <option name="modul" id="modul" value="<?php echo $datam['modul']; ?>"><?php echo $datam['modul']; ?></option>
                <?php } ?>
            </select>
           
        </div>