<?php
session_start();
include "essentials/head.php";
?>
<body>
    <header>
        <h1>ISEF-Duell</h1>
    </header>

    <h2>Let's play</h2>

        <!-- Container, in dem das Beantworten der Fragen läuft -->
        <div id="playContainer" class="playContainer">

            <div id="frage">
                Fragentext
            </div>
            
            <div id="answerBox" class="answerBox">
                <button name="a1" id="antwort1_richtig" onclick="storeSelectedAnswer(this)">Antwort 1</button>
                <button name="a2" id="antwort2" onclick="storeSelectedAnswer(this)">Antwort 2</button>
                <button name="a3" id="antwort3" onclick="storeSelectedAnswer(this)">Antwort 3</button>
                <button name="a4" id="antwort4" onclick="storeSelectedAnswer(this)">Antwort 4</button>
                
            </div>
            
            <div class="radioButttons">
                <input type= "radio" id= "advised" name= "sure" value= "advised" checked="true">
                <label for="contact">Geraten</label>
                <input type= "radio" id= "known" name= "sure" value= "known">
                <label for="contact">Gewusst</label>
            </div>

            <div id="sendAnswer">
                <button id="sendAnswerBtn" onclick="checkAnswer()">Antwort abgeben</button>
            </div>

            <br>

            <p id="demo"></p>

        </div>

        <!-- Container, in dem das Ergebnis nach 3 Fragen angezeigt wird -->
        <div class="halftimeContainer" id="halftimeContainer">
            <h2><?php echo($_SESSION['lesson']) ?> aus <?php echo($_SESSION['modul']) ?></h1>
            <h3>Zwischenergebnis</h3>
            <div id="givenQuestion1">1. Frage:</div> 
            <div id="givenAnswerBox">
                <div id="answer11">
                    Antwort 1
                </div>
                <div id="answer12">
                    Antwort 2
                </div>
                <div id="answer13">
                    Antwort 3
                </div>
                <div id="answer14">
                    Antwort 4
                </div>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers1"></div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers1"></div>Ape: Antwort 4 (geraten), kEule: Antwort 1 (geraten)</h3>
            </div>
            <br>
            <div id="givenQuestion2">2. Frage:</div> 
            <div id="givenAnswerBox">
                <div id="answer21">
                    Antwort 1
                </div>
                <div id="answer22">
                    Antwort 2
                </div>
                <div id="answer23">
                    Antwort 3
                </div>
                <div id="answer24">
                    Antwort 4
                </div>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers2"></div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers2"></div>Ape: Antwort 2 (geraten), kEule: Antwort 3 (geraten)</h3>
            </div>
            <br>
            <div id="givenQuestion3">3. Frage:</div> 
            <div id="givenAnswerBox">
                <div id="answer31">
                    Antwort 1
                </div>
                <div id="answer32">
                    Antwort 2
                </div>
                <div id="answer33">
                    Antwort 3
                </div>
                <div id="answer34">
                    Antwort 4
                </div>
                <h4>Anzahl der richtigen Antworten: <div id="nrOfRightAnswers3"></div></h3>
                <h4>Wahl der Mitspieler: <div id="otherAnswers3">Ape: Antwort 1 (geraten), kEule: Antwort 1 (gewusst)</div></h3>
            </div>
        </div>

        <!-- Container, in dem das Endergebnis angezeigt wird -->
        <div id="resultContainer" class="resultContainer" hidden="true">
            <div id="resultBox" class="resultBox" >
                <h2>Ergebnis:</h2>    
                Du hast <div id="showPoints">eine unbekannte Zahl</div> Punkte gesammelt.
            </div>
        </div>
    
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>