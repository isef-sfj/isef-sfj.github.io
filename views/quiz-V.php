<?php
session_start();
include "essentials/head.php";
?>
<body>
    <header>
        <h1>BrainBattle</h1>
    </header>


        <!-- Container, in dem das Beantworten der Fragen läuft -->
        <div id="playContainer" class="playContainer">
            <div class="iconTimerContainer">
                <div class="playerFieldEntryNew">
                    <img class="previewHeadline" src="<?php echo($_SESSION['icon']) ?>" alt="">
                    <div class="previewHeadlineWaitingRoom"> <?php echo($_SESSION['name']) ?></div>
                </div>
                <a class="timer">Noch <div id="seconds"></div> Sekunden!</a>
            </div>
            <div class="question" id="frage">
                Fragentext
            </div>

            
            <!-- Hinzugefügt class="lessonContainerItem" & class="lessonContainerItem ausgesucht"  -->
            <div id="answerBox" class="answerBox">
                <button class="quizAnswerButton" name="a1" id="antwort1_richtig" onclick="storeSelectedAnswer(this)">Antwort 1</button>
                <button class="quizAnswerButton" name="a2" id="antwort2" onclick="storeSelectedAnswer(this)">Antwort 2</button>
                <button class="quizAnswerButton" name="a3" id="antwort3" onclick="storeSelectedAnswer(this)">Antwort 3</button>
                <button class="quizAnswerButton" name="a4" id="antwort4" onclick="storeSelectedAnswer(this)">Antwort 4</button>
                <button class="quizAnswerButton" name="a4" id="antwort5" onclick="storeSelectedAnswer(this)" hidden="true">Antwort 5</button>
                
            </div>
            <!-- test -->
            <div class="radioAnwser">
                <div class="radioButtons">
                    <input type= "radio" id= "advised" name= "sure" value= "advised" checked="true">
                    <label class="previewHeadline" for="contact">Geraten</label>
                    <input type= "radio" id= "known" name= "sure" value= "known">
                    <label class="previewHeadline" for="contact">Gewusst</label>
                </div>

                <div id="sendAnswer" class="sendAnswer">
                    <button class="submButton" id="sendAnswerBtn" disabled="true" onclick="checkAnswer()">Antwort abgeben</button>
                </div>
            </div>
<!-- test ende -->
            <br>

            <p id="demo"></p>

        </div>

        <!-- Container, in dem das Ergebnis nach 3 Fragen angezeigt wird -->
        <div class="halftimeContainer" id="halftimeContainer" >
            <h2><?php echo($_SESSION['lesson']) ?> aus <?php echo($_SESSION['modul']) ?></h2>
            <h2 class="question">Zwischenergebnis: Passe ggf. falsche Antworten an!</h2>
            <h3 class="questionH3">Nutze die Ergebnisse deiner Mitspieler!</h3>
            <h4 class="timeToAnswer" >Noch <br> <div id="seconds1"></div> <br> Sekunden!</h4>
            <div class="question" id="givenQuestion1">1. Frage:</div> 
            <div id="givenAnswerBox" class="answerBox">
                <button class="quizAnswerButton" id="answer11" onclick="changeAnswerToRight(this, 1)">
                    Antwort 1
                </button>
                <button class="quizAnswerButton" id="answer12" onclick="changeAnswerToFalse(this, 1)">
                    Antwort 2
                </button>
                <button class="quizAnswerButton" id="answer13" onclick="changeAnswerToFalse(this, 1)">
                    Antwort 3
                </button>
                <button class="quizAnswerButton" id="answer14" onclick="changeAnswerToFalse(this, 1)">
                    Antwort 4
                </button>
            </div>
            <div class="answerResult">
                <a class="previewHeadline">Anzahl der richtigen Antworten: <t id="nrOfRightAnswers1">1</t></a> 
                <p class="previewHeadline">Wahl der Mitspieler:<br>Ape: Antwort 4 (geraten)<br>Eule: Antwort 1 (geraten)</p>
            </div>
            <br>
            <div class="question" id="givenQuestion2">2. Frage:</div> 
            <div id="givenAnswerBox" class="AnswerBox">
                <button class="quizAnswerButton" id="answer21" onclick="changeAnswerToRight(this, 2)">
                    Antwort 1
                </button>
                <button class="quizAnswerButton" id="answer22" onclick="changeAnswerToFalse(this, 2)">
                    Antwort 2
                </button>
                <button class="quizAnswerButton" id="answer23" onclick="changeAnswerToFalse(this, 2)">
                    Antwort 3
                </button>
                <button class="quizAnswerButton" id="answer24" onclick="changeAnswerToFalse(this, 2)">
                    Antwort 4
                </button>
            </div>
            <div class="answerResult">
                <a class="previewHeadline">Anzahl der richtigen Antworten: <t id="nrOfRightAnswers2">0</t></a>
                <p class="previewHeadline">Wahl der Mitspieler:<br>Ape: Antwort 2 (geraten)<br>Eule: Antwort 3 (geraten)</p>
            </div>
            <br>
            <div class="question" id="givenQuestion3">3. Frage:</div> 
            <div id="givenAnswerBox" class="AnswerBox">
                
                <button class="quizAnswerButton" id="answer31" onclick="changeAnswerToRight(this, 3)">
                    Antwort 1
                </button>
                <button class="quizAnswerButton" id="answer32" onclick="changeAnswerToFalse(this, 3)">
                    Antwort 2
                </button>
                <button class="quizAnswerButton" id="answer33" onclick="changeAnswerToFalse(this, 3)">
                    Antwort 3
                </button>
                <button class="quizAnswerButton" id="answer34" onclick="changeAnswerToFalse(this, 3)">
                    Antwort 4
                </button>
                </div>
                <div class="answerResult">
                <a class="previewHeadline">Anzahl der richtigen Antworten: <t id="nrOfRightAnswers3">2</t></a>
                <p class="previewHeadline">Wahl der Mitspieler:<br>Ape: Antwort 1 (geraten)<br>Eule: Antwort 1 (gewusst)</p>
            </div>
        </div>

        
        <!-- Container, in dem das Endergebnis angezeigt wird -->
        <div id="resultContainer" class="resultContainer" >
            <div id="resultBox" class="resultBox" >
                <h2 class="question">Endergebnis:</h2>
                <!-- Du hast <div id="showPoints">eine unbekannte Zahl</div> Punkte gesammelt. -->
                <br>
                <div class="question" id="givenQuestion4">1. Frage:</div> 
            <div id="givenAnswerBox" class="AnswerBox">
                <button class="quizAnswerButton" id="answer41">
                    Antwort 1
                </button>
                <button class="quizAnswerButton" id="answer42" >
                    Antwort 2
                </button>
                <button class="quizAnswerButton" id="answer43" >
                    Antwort 3
                </button>
                <button class="quizAnswerButton" id="answer44" >
                    Antwort 4
                </button>
                </div>
                <div class="answerResult">
                <p class="previewHeadline">Folgende Mitspieler hatten die Antwort richtig: Eule (geraten)</p>
            </div>
            <br>
            <div class="question" id="givenQuestion5">2. Frage:</div> 
            <div id="givenAnswerBox" class="AnswerBox">
                <button class="quizAnswerButton" id="answer51" >
                    Antwort 1
                </button>
                <button class="quizAnswerButton" id="answer52" >
                    Antwort 2
                </button>
                <button class="quizAnswerButton" id="answer53" >
                    Antwort 3
                </button>
                <button class="quizAnswerButton" id="answer54" >
                    Antwort 4
                </button>
                </div>
                <div class="answerResult">
                <p class="previewHeadline">Folgende Mitspieler hatten die Antwort richtig: Niemand</p>
            </div>
            <br>
            <div class="question" id="givenQuestion6">3. Frage:</div> 
            <div id="givenAnswerBox" class="AnswerBox">
                <button class="quizAnswerButton" id="answer61" >
                    Antwort 1
                </button>
                <button class="quizAnswerButton" id="answer62" >
                    Antwort 2
                </button>
                <button class="quizAnswerButton" id="answer63" >
                    Antwort 3
                </button>
                <button class="quizAnswerButton" id="answer64" >
                    Antwort 4
                </button>
                </div>
                <div class="answerResult">
                <p class="previewHeadline">Folgende Mitspieler hatten die Antwort richtig: Ape (geraten), Eule (gewusst)</p>
            </div>
            
            </div>
            
            <h1 class="playerPoints" >Gesamtpunktzahl aller Spieler:&nbsp;<t id="endpoints">eine unbekannte Zahl</t>&nbsp;von 27 Punkten</h1>
            
            <div id="arrowBox">
                <a class="navigationButton" href="javascript:location.reload()">Nochmal spielen</a>
                <a class="navigationButton" href="../index.php">Spiel beenden</a>
            </div>
        </div>
            
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>