<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>ISEF-Quiz</title>
</head>
<body>

    

        <!-- ich würde später die index.html als index.php speichern
        und den Header, den Player und evtl. den Footer in Dateien auslagern.
        Dann muss man nicht jede Seite bei Änderungen anfassen. JFL -->
        <header id="header">
          
                <h1>ISEF-Duell</h1>
                
            
        </header>

        
                <h2>Fragen erstellen</h2>

        
    
    <form action="dbWrite.php" method="post">
        
        <div class="flexContainerEQChoice">

            <div class="flexContainerEQChoiceItem">
            <input placeholder="Modul eingeben" id="modul" name="modul" type="text">
            </div>  
            
            <div class="flexContainerEQChoiceItem">
            <input placeholder="Lektion eingeben" id="lektion" name="lektion" type="text">
            </div>

            <!-- Muss in der richtigen Seite durch einen
            a href ersetzt werden, da sonst die Action aus
            dem action-Attribut der Form ausgelöst wird! -->
            <button>Neues Modul</button>
          
        </div>    
            

        <div class="flexContainerEQQuestion">

                
            <textarea class="flexContainerEQQuestionItemQuestion" placeholder="Frage eingeben" name="frage" id="frage" ></textarea>
            
            
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="RICHTIGE Antwort eingeben" name="antwort1_richtig" id="antwort1_richtig" ></textarea>
            
            
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort2" id="antwort2" ></textarea>
            
            
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort3" id="antwort3" ></textarea>
            
            
            <textarea class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort4" id="antwort4" ></textarea>
            
            

        </div>
        
        <div class="flexContainerEQQuestionItemButton">
            <button>Frage speichern</button>
        </div>
        <br><br>
    </form>

    <section id="arrowBox">
            <a href="/index.php" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
            immer an der gleichen Stelle ist habe ich einen leeren
            Platzhalter eingefügt. JFL-->
            <div class="arrowPlaceholder"></div> 
        </section>

</body>
</html>