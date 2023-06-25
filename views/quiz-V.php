<?php
include "essentials/head.php";
?>
<body>
    <header>
        <h1>ISEF-Duell</h1>
    </header>

    <h2>Let's play</h2>
        <div class="playContainer">

            <div id="qText">Fragentext</div>
            
            <div id="answerBox" class="answerBox">
                <button name="a1" id="a1" onclick="buttonClicked(this)">Antwort 1</button>
                <button name="a2" id="a2" onclick="buttonClicked(this)">Antwort 2</button>
                <button name="a3" id="a3" onclick="buttonClicked(this)">Antwort 3</button>
                <button name="a4" id="a4" onclick="buttonClicked(this)">Antwort 4</button>
                
            </div>
            <label for="angeklickt">Angeklickt wurde: </label>
            <div id="angeklickt">noch nichts</div>
            
        </div>
    
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>