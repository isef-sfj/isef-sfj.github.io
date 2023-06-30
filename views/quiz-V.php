<?php
include "essentials/head.php";
?>
<body>
    <header>
        <h1>ISEF-Duell</h1>
    </header>

    <h2>Let's play</h2>
        <div id="playContainer" class="playContainer">

            <div id="qText">
                Fragentext
            </div>
            
            <div id="answerBox" class="answerBox">
                <button name="a1" id="a1" onclick="checkAnswer(this)">Antwort 1</button>
                <button name="a2" id="a2" onclick="checkAnswer(this)">Antwort 2</button>
                <button name="a3" id="a3" onclick="checkAnswer(this)">Antwort 3</button>
                <button name="a4" id="a4" onclick="checkAnswer(this)">Antwort 4</button>
                
            </div>
           
        </div>
    
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>