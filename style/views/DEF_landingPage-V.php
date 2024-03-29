<?php
include "essentials/head.php";
?>
<body>
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <section id="previewHeadline">
            Die neuesten Fragen
        </section>

        <section>
            <div id="previewField">

                <?php foreach($questions as $data) { ?>

                    <div class="previewFieldEntry">
                        <?php echo $data['frage']; ?>
                    </div>

                <?php } ?>
                
            </div>
        </section>

        <section id="buttonField">

            <div><a href="../classes/nameIconChoice-C.php?goal=nameIconChoice" class="mainButton">
                Neues Spiel
            </a></div>
            
            <div><a href="../classes/addQuestion-C.php" class="mainButton">
                Neue Frage erstellen
            </a></div>

            <div><a href="../classes/editQuestionChoice-C.php?goal=modul" class="mainButton">
                Fragen bearbeiten
            </a></div>
        
        </section>
</body>

<?php
    include "essentials/footer.php";
?>