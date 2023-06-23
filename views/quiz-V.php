<?php
include "essentials/head.php";
?>
<body>
    <header>
        <h1>ISEF-Duell</h1>
    </header>

    <h2>Let's play</h2>

    <textarea id="testAusgabe">Nix angekommen :(</textarea>
    
        <div class="playContainer">

            <div class="questionBox">
                Fragetext
            </div>
            
            <div class="answerBox">
                <div class="answerField">
                    Antwort 1
                </div>
                <div class="answerField">
                    Antwort 2
                </div>
                <div class="answerField">
                    Antwort 3
                </div>
                <div class="answerField">
                    Antwort 4
                </div>
            </div>
            
        </div>
    
    <script>play();</script>
    
</body>

<?php
    include "essentials/footer.php";
?>