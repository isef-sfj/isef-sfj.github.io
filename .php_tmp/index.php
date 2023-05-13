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

        
         <!-- In der Quiz-Duell App stehen hier irgendwelche neuen Levels oder sowas.
            Die Seite hat so leer ausgesehen, deswegen habe ich die Vorschau-Elemente
            rein gemacht. War aber nicht so abgesprochen, kann gerne wieder weg. JFL -->

        <section id="previewHeadline">
            Die neuesten Fragen
        </section>

        <section>

            <div id="previewField">
                <div class="previewFieldEntry">
                    Hier könnten die letzten 3 (+/-) Fragen stehen, die eingegeben wurden.
                </div>

                <div class="previewFieldEntry">
                    In welchem Monat wird das Oktoberfest gefeiert?
                </div>

                <div class="previewFieldEntry">
                    Wie vermehren sich kernlose Trauben?
                </div>
            </div>
            
        </section>

        <section id="buttonField">

            <div><a href="nameIconChoice.html" class="mainButton">
                Neues Spiel
            </a></div>
            
            <div><a href="/enterQuestion.php" class="mainButton">
                Neue Frage erstellen
            </a></div>
            
            <div class="mainButton">
                Fragen bearbeiten
            </div>
        
        </section>

</body>
</html>