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

        <section class="previewHeadline">
            Warteraum
        </section>

        <div class="previewHeadline">
            Du wirst die Lektion <strong><?php echo($_SESSION['lesson']) ?></strong> aus dem Modul <strong><?php echo($_SESSION['modul']) ?></strong> spielen!
        </div>
        <div class="previewHeadline">
            Deine <strong>Mitspieler</strong>:
        </div>
        
            
            <section id="playerField">
                <div class="playerFieldGrid "class="playerIcon" class="playerFieldEntry">
                    <img src="<?php echo($_SESSION['icon']) ?>" alt="">
                    <br>
                    <?php echo($_SESSION['name']) ?>
                    <br>
                    <button class="mainButton">ready</button>
                </div>
                <div playerFieldGrid class="playerIcon" class="playerFieldEntry">
                <img src="../img/playerFace.png" alt="">
                    <br>
                        Spieler 2
                    <br>
                    <button class="mainButton">ready</button>
                </div>
                <div playerFieldGrid class="playerIcon" class="playerFieldEntry">
                    <img src="../img/playerFace.png" alt="">
                    <br>
                        Spieler 3
                    <br>
                    <button class="mainButton">ready</button>
                </div>
                <div  playerFieldGrid class="playerIcon" class="playerFieldEntry">
                    <img src="../img/playerFace.png" alt="">
                    <br>
                        Spieler 4
                    <br>
                    <button class="mainButton">ready</button>
                </div>
                
                
            </section>
            

        

    </body>
</html>

