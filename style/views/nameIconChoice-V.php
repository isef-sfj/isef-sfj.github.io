<?php
include "essentials/head.php";
?>

<body>
    <header id="header">
        <h1>BrainBattle</h1>
    </header>
    <section id="player">
        <!-- kann weg. FS -->
        <!-- <h2>Warteraum</h2> -->
        <div id="playerIcon">
            <img id="playerIconFace" src="/img/playerFace.png" alt="">
        </div>

        <div class="previewHeadline" id="showPlayerName">
            John Doe
        </div>
    </section>

    <section id="nameIconChoice">
        <div class="playerIconContainer">
            <button onClick="setPlayerIconAffe()">
                <img class="playerIcon" id="icon1" src="../img/playerIcons/affe.svg"  alt="">
            </button>
            <button onClick="setPlayerIconEule()">
                <img class="playerIcon" id="icon2" src="../img/playerIcons/eule.svg" alt="">
            </button>
            <button onClick="setPlayerIconFrosch()">
                <img class="playerIcon" id="icon3" src="../img/playerIcons/frosch.svg" alt="">
            </button>
            <button onClick="setPlayerIconKuh()">
                <img class="playerIcon" id="icon4" src="../img/playerIcons/kuh.png" alt="">
            </button>
            <div class="iconName">
                Affe
            </div>
            <div class="iconName">
                Eule
            </div>
            <div class="iconName">
                Frosch
            </div>
            <div class="iconName">
                Kuh
            </div>
        </div>
        
            <label for="playerName"></label>
            <input placeholder="Spielername eingeben" name="playerName" id="playerName" type="text" class="insertForm" onkeyup="playerNameChanged()">
            <br><br>
            <form>
                <br>
                <section class="previewHeadline">
                Wähle deinen Studiengang:
                </section>
                <br>
                <select name="degreeCourse" id="degreeCourse" class="selectDropdown">
                    <option value="">Studiengang</option>
                    <option value="Fach1">Informatik</option>
                    <option value="Fach2">Pädagogik</option>
                    <option value="Fach3">BWL</option>
                </select>
                <br>
            </form>
    </section>
    <section id="arrowBox">
        <a href="../index.php"><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
        <button class="navigationButton" onclick="setPlayer()">Modulauswahl</button>
    </section>
</body>

<?php
    include "essentials/footer.php";
?>