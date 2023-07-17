<?php
include "essentials/head.php";
?>
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

<?php
    include "essentials/footer.php";
?>