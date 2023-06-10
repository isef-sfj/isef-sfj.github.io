<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Quiz</title>
</head>
    <body>

        <!-- ich würde später die index.html als index.php speichern
        und den Header, den Player und evtl. den Footer in Dateien auslagern.
        Dann muss man nicht jede Seite bei Änderungen anfassen. JFL -->
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <section id="previewHeadline">
            Warteraum
        </section>

        <div>
            Du wirst die Lektion <?php $_SESSION['lesson'] ?> aus dem Modul <?php $_SESSION['modul'] ?> spielen!
        </div>
        
        <section>
            
            <div id="previewField">

                <!-- <?php //foreach($questions as $data) { ?>

                    <div class="previewFieldEntry">
                        <?php //echo $data['frage']; ?>
                    </div>

                <?php // } ?> -->
                
            </div>
            
        </section>

        <section id="buttonField">

            <div><a href="#" class="mainButton">
                Bereit zum Spielen
            </a></div>
        </section>

    </body>
</html>

