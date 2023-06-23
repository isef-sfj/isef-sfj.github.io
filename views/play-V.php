<?php
include "essentials/head.php";
?>
<body>

    
       
        <header>
                <h1>ISEF-Duell</h1>
        </header>

        
        <h2>Let's play</h2>

        
    
    <form action="../classes/enterQuestion-C.php" method="post">
        
        
            

        <div class="flexContainerEQQuestion">

            <label class="previewHeadline" for="frage">Frage eingeben:</label>    
            <textarea class="flexContainerEQQuestionItemQuestion" placeholder="Frage eingeben" name="frage" id="frage" required></textarea>
            
            <label class="previewHeadline" for="antwort1_richtig">Richtige Antwort eingeben:</label>
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="RICHTIGE Antwort eingeben" name="antwort1_richtig" id="antwort1_richtig" required></textarea>
            
            <label class="previewHeadline" for="antwort2">Erste falsche Antwort eingeben:</label>
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort2" id="antwort2" required></textarea>
            
            <label class="previewHeadline" for="antwort3">Zweite falsche Antwort eingeben:</label>
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort3" id="antwort3" required></textarea>
            
            <label class="previewHeadline" for="antwort4">Dritte falsche Antwort eingeben:</label>
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort4" id="antwort4" required></textarea>
            
            

        </div>
        
           <input value="new" name="goal" type="hidden" >
        <div class="flexContainerEQQuestionItemButton">
            <button class="mainButton">Frage speichern</button>
        </div> -->
        <br><br>
    </form>

    <section id="arrowBox">
        <a href="/index.php" ><img src="../img/arrowLeft.png" alt="" class="arrow"></a>
        <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
        immer an der gleichen Stelle ist habe ich einen leeren
        Platzhalter eingefügt. JFL-->
        <!-- <input value="new" name="goal" type="hidden" > -->
        <div class="flexContainerEQQuestionItemButton">
            <button class="mainButton">Frage speichern</button>
        </div> 
    </section>

</body>
</html>