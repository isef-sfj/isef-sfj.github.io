<?php
include "essentials/head.php";
?>
<body>



        
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <section class="previewHeadline">
            Bitte wähle das Modul, das du bearbeiten möchtest:
        </section>
        <br>
        <div>
            <select class="selectDropdown" id="modulSelect">
                <?php foreach($moduls as $datam) { ?>
                    <option name="modul" id="modul" value="<?php echo $datam['modul']; ?>"><?php echo $datam['modul']; ?></option>
                <?php } ?>
            </select>
        </div>
        <section id="arrowBox">
            <a href="../index.php" ><img src="../img/arrowLeft.png" alt="" class="arrow"></a>
            <div class="flexContainerEQQuestionItemButton">
                <button class="navigationButton" onClick="sendmodul()">Weiter</button>
            </div>
        </section>

</body>
</html>