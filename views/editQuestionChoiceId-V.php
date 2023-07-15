<?php
include "essentials/head.php";
?>
<body>
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <section class="previewHeadline">
            Bitte wähle die ID der Frage, die du bearbeiten möchtest:
        </section>
        <br>
        <div >
            <select class="selectDropdown" id="idSelect" >
                <?php foreach($ids as $datai) { ?>
                    <option name="id" id="id" value="<?php echo $datai['id']; ?>"><?php echo $datai['id']; ?></option>
                <?php } ?>
            </select>
        </div>
        <br><br>

        <section id="arrowBox">
            <a href="../classes/editQuestionChoice-C.php?goal=modul" ><img src="../img/arrowLeft.png" alt="" class="arrow"></a>
            <div class="flexContainerEQQuestionItemButton">
                <button class="navigationButton" onClick="sendid()">Frage bearbeiten</button>
            </div> 
        </section>
</body>

<?php
    include "essentials/footer.php";
?>