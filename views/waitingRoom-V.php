<?php
session_start();

include "essentials/head.php";
?>
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
                <div class="playerFieldEntry">
                    <img class="previewHeadline" src="<?php echo($_SESSION['icon']) ?>" alt="">
                    <!-- Hier muss noch die Klasse previewHeadline rein  -->
                    <div class="previewHeadline"> <?php echo($_SESSION['name']) ?></div>
                    <a class="readyButton" href="quiz-V.php" >play</a>
                    <!-- <button class="readyButton">ready</button> -->
                </div>
                <div class="playerFieldEntry">
                    <img src="../img/playerFace.png" alt="">
                    <a class="previewHeadline">Spieler 2</a>
                    <button class="readyButton">ready</button>
                </div>
                <div class="playerFieldEntry">
                    <img src="../img/playerFace.png" alt="">
                    <a class="previewHeadline">Spieler 3</a>
                    <button class="readyButton">ready</button>
                </div>
                <div class="playerFieldEntry">
                    <img src="../img/playerFace.png" alt="">
                    <a class="previewHeadline">Spieler 4</a>
                    <button class="readyButton">ready</button>
                </div>
            </section>
            <section id="arrowBox">
            <a href="../classes/nameIconChoice-C.php?goal=nameIconChoice" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- <a href="nameIconChoice-C.php?goal=waiting" >Warteraum</a> -->
            <button class="navigationButton">Platzhalter</button>
        </section>
    </body>

<?php
    include "essentials/footer.php";
?>

