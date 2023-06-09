<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>ISEF-Quiz</title>
</head>
<body>

    
        <!-- ich würde später die index.html als index.php speichern
        und den Header, den Player und evtl. den Footer in Dateien auslagern.
        Dann muss man nicht jede Seite bei Änderungen anfassen. JFL -->
        <header>
                <h1>ISEF-Duell</h1>
        </header>

        
        <h2>Fragen erstellen</h2>

        
    
    <form action="../classes/enterQuestion-C.php" method="post">
        
        <div class="flexContainerEQChoice">

            
            <div class="flexContainerEQChoiceItem">
            <label class="previewHeadline" for="modul">Modul eingeben:</label><br>
            <input class="insertForm" placeholder="Modul eingeben" id="modul" name="modul" type="text" required>
            </div>  
            
            
            <div class="flexContainerEQChoiceItem">
            <label class="previewHeadline" for="lektion">Lektion eingeben:</label><br>
            <input class="insertForm" placeholder="Lektion eingeben" id="lektion" name="lektion" type="text" required>
            </div>

            <!-- Muss in der richtigen Seite durch einen
            a href ersetzt werden, da sonst die Action aus
            dem action-Attribut der Form ausgelöst wird! -->
            <button class="mainButton">Neues Modul</button>
          
        </div>    
            

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
        <!-- Verschiebung in den Navigationsbereich  -->
            <!-- <input value="new" name="goal" type="hidden" >
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
        <input value="new" name="goal" type="hidden" >
        <div class="flexContainerEQQuestionItemButton">
            <button class="mainButton">Frage speichern</button>
        </div> 
    </section>

</body>
</html>