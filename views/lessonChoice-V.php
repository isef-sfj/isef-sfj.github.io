<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Lektionsauswahl</title>
</head>
<body>

    <header>
          
        <h1>ISEF-Duell</h1>
        
    </header>


    <div id="headerMC">
       
        <!-- kann denk ich weg. FS -->
        <!-- <h2>Dein Wartreraum</h2> -->

        <section id="player">
            <div id="playerIcon">
                <img id="playerIconFace" src=<?php echo($icon) ?> alt="">
            </div>

            <div id="playerName">
            <?php echo($name) ?>
            </div>
        </section>

    </div>

    <section class="previewHeadline">
     Wähle eine Lektion aus dem Modul "<?php echo($modul) ?>"
    </section>
        <div class="centerLessonContainer">
            <div class="lessonContainer">
            <option name="lektion" class="lessonContainerItem" value="alle">Alle Lektionen</option>
                <?php foreach($lessons as $datal) { ?>
                    <option name="lektion" class="lessonContainerItem" value="<?php echo $datal['lektion']; ?>"><?php echo $datal['lektion']; ?></option>
                <?php } ?>
            </div>
        </div>
        
        <section id="arrowBox">
            <a href="nameIconChoice-C.php?goal=nameIconChoice" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
        </section>
         

</body>
</html>