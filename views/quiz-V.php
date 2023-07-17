<?php
session_start();
include "essentials/head.php";
?>
<body>
    <header>
        <h1>ISEF-Duell</h1>
    </header>

    <!-- <h2>Let's play</h2> -->

        <!-- Container, in dem das Beantworten der Fragen läuft -->
        <div id="playContainer" class="playContainer">
            <div class="playerFieldEntry">
                <img class="previewHeadline" src="<?php echo($_SESSION['icon']) ?>" alt="">
                <div class="previewHeadline"> <?php echo($_SESSION['name']) ?></div>
                <h4>Noch <div id="seconds"></div> Sekunden!</h4>
            </div>
            <h4>Noch <div id="seconds"></div> Sekunden!</h4>
            <div class="previewHeadline" id="frage">
                Fragentext
            </div>

            
            
            <div id="answerBox" class="answerBox">
                <button class="questionButton" name="a1" id="antwort1_richtig" onclick="storeSelectedAnswer(this)">Antwort 1</button>
                <button class="questionButton" name="a2" id="antwort2" onclick="storeSelectedAnswer(this)">Antwort 2</button>
                <button class="questionButton" name="a3" id="antwort3" onclick="storeSelectedAnswer(this)">Antwort 3</button>
                <button class="questionButton" name="a4" id="antwort4" onclick="storeSelectedAnswer(this)">Antwort 4</button>
                <button name="a4" id="antwort5" onclick="storeSelectedAnswer(this)" hidden="true">Antwort 5</button>
                
            </div>
            
            <div class="radioButttons">
                <input type= "radio" id= "advised" name= "sure" value= "advised" checked="true">
                <label class="previewHeadline" for="contact">Geraten</label>
                <input type= "radio" id= "known" name= "sure" value= "known">
                <label class="previewHeadline" for="contact">Gewusst</label>
            </div>

            <div id="sendAnswer">
                <button class="submButton" id="sendAnswerBtn" onclick="checkAnswer()">Antwort abgeben</button>
            </div>

            <br>

            <p id="demo"></p>

        </div>

        <!-- Container, in dem das Ergebnis nach 3 Fragen angezeigt wird -->
        <div class="halftimeContainer" id="halftimeContainer" >
            <h2><?php echo($_SESSION['lesson']) ?> aus <?php echo($_SESSION['modul']) ?></h1>
            <h3>Zwischenergebnis</h3>
            <h4>Noch <div id="seconds1"></div> Sekunden!</h4>
            <div id="givenQuestion1">1. Frage:</div> 
            <div id="givenAnswerBox">
                <button class="questionButton" id="answer11" onclick="changeAnswerToRight(this, 1)">
                    Antwort 1
                </button>
                <button class="questionButton" id="answer12" onclick="changeAnswerToFalse(this, 1)">
                    Antwort 2
                </button>
                <button class="questionButton" id="answer13" onclick="changeAnswerToFalse(this, 1)">
                    Antwort 3
                </button>
                <button class="questionButton" id="answer14" onclick="changeAnswerToFalse(this, 1)">
                    Antwort 4
                </button>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers1">1</div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers1"></div>Ape: Antwort 4 (geraten), kEule: Antwort 1 (geraten)</h3>
            </div>
            <br>
            <div id="givenQuestion2">2. Frage:</div> 
            <div id="givenAnswerBox">
                <button class="questionButton" id="answer21" onclick="changeAnswerToRight(this, 2)">
                    Antwort 1
                </button>
                <button class="questionButton" id="answer22" onclick="changeAnswerToFalse(this, 2)">
                    Antwort 2
                </button>
                <button class="questionButton" id="answer23" onclick="changeAnswerToFalse(this, 2)">
                    Antwort 3
                </button>
                <button class="questionButton" id="answer24" onclick="changeAnswerToFalse(this, 2)">
                    Antwort 4
                </button>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers2">0</div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers2"></div>Ape: Antwort 2 (geraten), kEule: Antwort 3 (geraten)</h3>
            </div>
            <br>
            <div id="givenQuestion3">3. Frage:</div> 
            <div id="givenAnswerBox">
                <button class="questionButton" id="answer31" onclick="changeAnswerToRight(this, 3)">
                    Antwort 1
                </button>
                <button class="questionButton" id="answer32" onclick="changeAnswerToFalse(this, 3)">
                    Antwort 2
                </button>
                <button class="questionButton" id="answer33" onclick="changeAnswerToFalse(this, 3)">
                    Antwort 3
                </button>
                <button class="questionButton" id="answer34" onclick="changeAnswerToFalse(this, 3)">
                    Antwort 4
                </button>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers3">2</div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers3">Ape: Antwort 1 (geraten), kEule: Antwort 1 (gewusst)</div></h3>
            </div>
        </div>

        <!-- Container, in dem das Endergebnis angezeigt wird -->
        <div id="resultContainer" class="resultContainer" >
            <div id="resultBox" class="resultBox" >
                <h2>Zwischenergebnis:</h2>
                <h4>Noch <div id="seconds2"></div> Sekunden!</h4>    
                <!-- Du hast <div id="showPoints">eine unbekannte Zahl</div> Punkte gesammelt. -->
                <br>
                <div id="givenQuestion4">4. Frage:</div> 
            <div id="givenAnswerBox">
                <button class="questionButton" id="answer41" onclick="changeAnswerToRight(this, 4)">
                    Antwort 1
                </button>
                <button class="questionButton" id="answer42" onclick="changeAnswerToFalse(this, 4)">
                    Antwort 2
                </button>
                <button class="questionButton" id="answer43" onclick="changeAnswerToFalse(this, 4)">
                    Antwort 3
                </button>
                <button class="questionButton" id="answer44" onclick="changeAnswerToFalse(this, 4)">
                    Antwort 4
                </button>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers4">1</div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers4"></div>Ape: Antwort 4 (geraten), kEule: Antwort 1 (geraten)</h3>
            </div>
            <br>
            <div id="givenQuestion5">5. Frage:</div> 
            <div id="givenAnswerBox">
                <button class="questionButton" id="answer51" onclick="changeAnswerToRight(this, 5)">
                    Antwort 1
                </button>
                <button class="questionButton" id="answer52" onclick="changeAnswerToFalse(this, 5)">
                    Antwort 2
                </button>
                <button class="questionButton" id="answer53" onclick="changeAnswerToFalse(this, 5)">
                    Antwort 3
                </button>
                <button class="questionButton" id="answer54" onclick="changeAnswerToFalse(this, 5)">
                    Antwort 4
                </button>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers5"></div>0</h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers5"></div>Ape: Antwort 2 (geraten), kEule: Antwort 3 (geraten)</h3>
            </div>
            <br>
            <div id="givenQuestion6">6. Frage:</div> 
            <div id="givenAnswerBox">
                <button class="questionButton" id="answer61" onclick="changeAnswerToRight(this, 6)">
                    Antwort 1
                </button>
                <button class="questionButton" id="answer62" onclick="changeAnswerToFalse(this, 6)">
                    Antwort 2
                </button>
                <button class="questionButton" id="answer63" onclick="changeAnswerToFalse(this, 6)">
                    Antwort 3
                </button>
                <button class="questionButton" id="answer64" onclick="changeAnswerToFalse(this, 6)">
                    Antwort 4
                </button>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers6">2</div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers6">Ape: Antwort 1 (geraten), kEule: Antwort 1 (gewusst)</div></h3>
            </div>
            
            </div>
        </div>

        <div id="finishContainer">

            <h1>Du hast <div id="endpoints">eine unbekannte Zahl</div> Punkte erreicht!</h1>

            <a href="javascript:location.reload()">Diese Lektion nochmal spielen</a>
            <br>
            <a href="../index.php">Zurück zur Startseite</a>
        </div>
    
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>