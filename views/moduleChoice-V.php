<?php
include "essentials/head.php";
?>
<body>
    <header id="header">
        <h1>ISEF-Duell</h1>
    </header>
    <div id="headerMC">
        <section id="player">
            <div id="playerIcon">
                <img id="playerIconFace" src=<?php echo($icon) ?> alt="">
            </div>

            <div id="playerName" class="blueInk">
                <?php echo($name) ?>
            </div>

            <?php foreach($id as $data) { ?>
                <div id="id" hidden>
                        <?php echo $data['id']; ?>
                    </div>
            <?php } ?>

        </section>
    </div>

    <label for="modulSelect" class="previewHeadline" >Wähle Dein Modul</label>

    <div >
        <select id="modulSelect" class="selectDropdown">
            <?php foreach($modules as $datam) { ?>
                <option name="modul" id="modul" value="<?php echo $datam['modul']; ?>"><?php echo $datam['modul']; ?></option>
            <?php } ?>
        </select>
    </div>
        <section id="arrowBox">
            <a href="../classes/nameIconChoice-C.php?goal=nameIconChoice" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <button class="navigationButton" onclick="setIdModule()">Lektionsauswahl</button>
        </section>
</body>

<?php
    include "essentials/footer.php";
?>