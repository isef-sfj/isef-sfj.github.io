<?php
include "essentials/head.php";
?>
<body>
    <header>
        <h1>ISEF-Duell</h1>
    </header>

    <h2>Let's play</h2>
        <div id="playContainer" class="playContainer">

            <div id="frage">
                Fragentext
            </div>
            
            <div id="answerBox" class="answerBox">
                <button name="a1" id="antwort1_richtig" onclick="checkAnswer(this)">Antwort 1</button>
                <button name="a2" id="antwort2" onclick="checkAnswer(this)">Antwort 2</button>
                <button name="a3" id="antwort3" onclick="checkAnswer(this)">Antwort 3</button>
                <button name="a4" id="antwort4" onclick="checkAnswer(this)">Antwort 4</button>
                
            </div>
            
            <div class="radioButttons">
                <input type= "radio" id= "advised" name= "sure" value= "advised" checked="true">
                <label for="contact">Geraten</label>
                <input type= "radio" id= "known" name= "sure" value= "known">
                <label for="contact">Gewusst</label>
            </div>


            <br>

            <p id="demo"></p>

        </div>

        <div id="resultContainer" class="resultContainer" hidden="true">

            
            <div id="resultBox" class="resultBox" >
                
                <h2>Ergebnis:</h2>    
                Du hast <div id="showPoints">eine unbekannte Zahl</div> Punkte erspielt.
                
            </div>
           
        </div>
    
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>