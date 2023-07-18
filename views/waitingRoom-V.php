<?php
session_start();
include "essentials/head.php";
?>
    <body>
        <header id="header">
                <h1>BrainBattle</h1>
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
                    <img class="playerIconWaitingRoom" src="<?php echo($_SESSION['icon']) ?>" alt="">
                    <div class="previewHeadlineWaitingRoom"> <?php echo($_SESSION['name']) ?></div>
                    <button class="readyButton">ready</button>
                    <!-- <a class="readyButton" href="quiz-V.php" >play</a> -->
                </div>
                <div class="playerFieldEntry">
                    <img class="playerIconWaitingRoom" src="../img/playerIcons/affe.svg" alt="">
                    <a class="previewHeadlineWaitingRoom">Ape</a>
                    <button class="readyButton">ready</button>
                </div>
                <div class="playerFieldEntry">
                    <img class="playerIconWaitingRoom" src="../img/playerIcons/eule.svg" alt="">
                    <a class="previewHeadlineWaitingRoom">Eule</a>
                    <button class="readyButton">ready</button>
                </div>
            </section>
            <div id="playerId" hidden><?php echo ($_SESSION['id']) ?></div>
            <section id="arrowBox">
            <a href="../classes/nameIconChoice-C.php?goal=nameIconChoice" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- <button class="navigationButton">Platzhalter</button> -->
            <a class="navigationButton" href="quiz-V.php" >play</a>
        </section>
    </body>

<?php
    include "essentials/footer.php";
?>

