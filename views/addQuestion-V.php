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
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        
        <h2>Fragen erstellen</h2>

        
    
    <form action="../classes/addQuestion-C.php?" method="post">
        <!-- Studiengang -->
        <div class="flexContainerEQChoiceItem">
                <label class="previewHeadline" for="degreeCourse">Wähle deinen Studiengang:</label><br>
                <!-- <input class="insertForm" placeholder="Studiengang eingeben" id="studiengang" name="studiengang" type="text" required> -->
                <select name="degreeCourse" id="degreeCourse" class="selectDropdownAddQuestion">
                    <option value="">Studiengang</option>
                    <option value="Fach1">Informatik</option>
                    <option value="Fach2">Pädagogik</option>
                    <option value="Fach3">BWL</option>
                </select>
            </div>
        <div class="flexContainerEQChoice">
            <!-- <div class="flexContainerEQChoiceItem">
                <label class="previewHeadline" for="modul">Modul eingeben:</label><br>
                <input class="insertForm" placeholder="Modul eingeben" id="modul" name="modul" type="text" required>
            </div>  -->
            <!-- Modualauswahl -->
            <div >
                <label for="modulSelect" class="previewHeadline">Wähle Dein Modul:</label><br>
                <select id="modulSelect" class="selectDropdownAddQuestion">
                    <?php foreach($modules as $datam) { ?>
                        <option name="modul" id="modul" value="<?php echo $datam['modul']; ?>"><?php echo $datam['modul']; ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="flexContainerEQChoiceItem">
                <label class="previewHeadline" for="lektion">Lektion eingeben:</label><br>
                <input class="insertForm" placeholder="Lektion eingeben" id="lektion" name="lektion" type="text" required>
            </div>
            

            

            <!-- Muss in der richtigen Seite durch einen
            a href ersetzt werden, da sonst die Action aus
            dem action-Attribut der Form ausgelöst wird! -->
            <!-- <button class="mainButton">Neues Modul</button> -->
          
        </div>  

        <div class="flexContainerEQChoice"> 
            <button class="mainButton">Neues Modul</button>
        </div>
        <div class="flexContainerEQQuestion">

            <label class="previewHeadline" for="frage">Frage eingeben:</label>    
            <textarea class="insertForm" class="flexContainerEQQuestionItemQuestion" placeholder="Frage eingeben" name="frage" id="frage" required></textarea>
            
            <label class="previewHeadline" for="antwort1_richtig">Richtige Antwort eingeben:</label>
            <textarea class="insertForm" class="flexContainerEQQuestionItemAnswer" placeholder="RICHTIGE Antwort eingeben" name="antwort1_richtig" id="antwort1_richtig" required></textarea>
            
            <label class="previewHeadline" for="antwort2">Erste falsche Antwort eingeben:</label>
            <textarea class="insertForm" class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort2" id="antwort2" required></textarea>
            
            <label class="previewHeadline" for="antwort3">Zweite falsche Antwort eingeben:</label>
            <textarea class="insertForm" class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort3" id="antwort3" required></textarea>
            
            <label class="previewHeadline" for="antwort4">Dritte falsche Antwort eingeben:</label>
            <textarea class="insertForm" class="flexContainerEQQuestionItemAnswer" placeholder="Falsche Antwort eingeben" name="antwort4" id="antwort4" required></textarea>
            
            

        </div>
            <input value="new" name="goal" type="hidden">
        <!-- Verschiebung in den Navigationsbereich  
        <div class="flexContainerEQQuestionItemButton">
            <button class="mainButton">Frage speichern</button>
        </div> -->
        <br><br>
    

    <section id="arrowBox">
        <div class="flexContainerEQQuestionItemButton">
            <a href="/index.php" ><img src="../img/arrowLeft.png" alt="" class="arrow"></a>
            <button class="submButton">Frage speichern</button>
        </div> 
    </section>

    </form>

</body>
</html>