<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>ISEF-Quiz</title>
</head>
<body>

    <header>
          
        <h1>ISEF-Duell</h1>
        
    </header>


    <div id="headerMC">
       

        <h2>Dein Wartreraum</h2>

        <section id="player">
            <div id="playerIcon">
                <img id="playerIconFace" src=<?php echo($icon) ?> alt="">
            </div>

            <div id="playerName">
            <?php echo($name) ?>
            </div>
        </section>

    </div>


    <?php echo($id) ?><br>
    <?php echo($modul) ?>
        

        <label for="modulSelect">Wähle Dein Modul</label>

        <div >
            
            
           
        </div>

        
        <section id="arrowBox">
            <a href="../classes/nameIconChoice-C.php?goal=nameIconChoice" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
        </section>
         

</body>
</html>