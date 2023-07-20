<?php
session_start();
include "essentials/head.php";
?>
<body>
    <header id="header">
        <h1>BrainBattle</h1>
    </header>
    <div id="headerMC">
        <section class="player">
            <div class="playerIcon">
                <img class="playerIconFace" src=<?php echo($_SESSION['icon']) ?> alt="">
            </div>

            <div id="playerName" class="blueInk">
            <?php echo($_SESSION['name']) ?>
            </div>
        </section>

    </div>
    <div class="previewHeadline">
        
     Wähle eine Lektion aus dem Modul "<?php echo($_SESSION['modul']) ?>"
        <div class="centerLessonContainer">
            <div class="lessonContainer">
            <option id="alle" onclick="saveLesson('alle')" name="lektion" class="lessonContainerItem ausgesucht" value="alle">Alle Lektionen</option>
                <?php foreach($lessons as $datal) { ?>
                    <option id="<?php echo $datal['lektion']; ?>" onclick="saveLesson('<?php echo $datal['lektion']; ?>')" name="lektion" class="lessonContainerItem" value="<?php echo $datal['lektion']; ?>"><?php echo $datal['lektion']; ?></option>
                <?php } ?>
            </div>
        </div>
    </div>
        <section id="arrowBox">
            <a href="../classes/nameIconChoice-C.php?&goal=setPlayer" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- <a href="nameIconChoice-C.php?goal=waiting" >Warteraum</a> -->
            <button class="navigationButton" onclick="goWaitingroom()">Ab in den Warteraum</button>
        </section>
</body>

<?php
    include "essentials/footer.php";
?>