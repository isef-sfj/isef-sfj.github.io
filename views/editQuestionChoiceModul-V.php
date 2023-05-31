<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script language="javascript" type="text/javascript" src="../script/script.js"></script>

    
    <title>ISEF-Quiz</title>
</head>
<body>



        
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <h2>Bitte wähle ein Modul aus</h2>
        
        <div >
            
            <select id="modulSelect">
                <?php foreach($moduls as $datam) { ?>
                    <option name="modul" id="modul" value="<?php echo $datam['modul']; ?>"><?php echo $datam['modul']; ?></option>
                <?php } ?>
            </select>
           
        </div>

        
        <div class="flexContainerEQQuestionItemButton">
            <button onClick="sendmodul()">IDs für Modul anzeigen</button>
        </div>
        <br><br>
        
    

        <section id="arrowBox">
            <a href="../index3.php" ><img src="../img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
            immer an der gleichen Stelle ist habe ich einen leeren
            Platzhalter eingefügt. JFL-->
            <div class="arrowPlaceholder"></div> 
        </section>

</body>
</html>