<?php
session_start()
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script language="javascript" type="text/javascript" src="../script/script.js"></script>
    <title>Lektionsauswahl</title>
</head>
<body>

    <header>
          
        <h1>ISEF-Duell</h1>
        
    </header>


    <div id="headerMC">

        <section id="player">
            <div id="playerIcon">
                <img id="playerIconFace" src=<?php echo($_SESSION['icon']) ?> alt="">
            </div>

            <div id="playerName">
            <?php echo($_SESSION['name']) ?>
            </div>
        </section>

    </div>
    <div class="previewHeadline">
        
     Wähle eine Lektion aus dem Modul "<?php echo($_SESSION['modul']) ?>"
        <div class="centerLessonContainer">
            <div class="lessonContainer">
            <option id="lektion" name="lektion" class="lessonContainerItem" value="alle">Alle Lektionen</option>
                <?php foreach($lessons as $datal) { ?>
                    <option id="<?php echo $datal['lektion']; ?>" onclick="saveLesson('<?php echo $datal['lektion']; ?>')" name="lektion" class="lessonContainerItem" value="<?php echo $datal['lektion']; ?>"><?php echo $datal['lektion']; ?></option>
                <?php } ?>
            </div>
        </div>

        <div>

        <br>
        <br>
        <?php echo("id: " . $_SESSION['id']); ?>
        <?php echo("name: " . $_SESSION['name']); ?>
        <?php echo("icon: " . $_SESSION['icon']); ?>
        <?php echo("modul: " . $_SESSION['modul']); ?>
        <?php echo("lesson: " . $_SESSION['lesson']); ?>
        
        <section id="arrowBox">
            <a href="nameIconChoice-C.php?goal=nameIconChoice" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- <a href="nameIconChoice-C.php?goal=waiting" >Warteraum</a> -->
            <button onclick="goWaitingroom()">Ab in den Warteraum</button>
        </section>
         

</body>
</html>