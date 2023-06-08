<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Datenbankanbindung testen</title>
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

            <?php foreach($questions as $data) { ?>

                <div class="previewFieldEntry">
                    <?php echo $data['frage']; ?>
                </div>

            <?php } ?>
                
            </div>
            
        </section>

        <section id="buttonField">

            <div><a href="../classes/nameIconChoice-C.php?goal=nameIconChoice" class="mainButton">
                Neues Spiel
            </a></div>
            
            <div><a href="../classes/addQuestion-C.php" class="mainButton">
                Neue Frage erstellen
            </a></div>

            <div><a href="../classes/editQuestionChoice-C.php?goal=modul" class="mainButton">
                Fragen bearbeiten
            </a></div>
        
        </section>





</body>
</html>