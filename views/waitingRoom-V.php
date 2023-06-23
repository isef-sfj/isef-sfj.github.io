<?php
session_start();

include "essentials/head.php";
?>
    <body>

        <!-- ich würde später die index.html als index.php speichern
        und den Header, den Player und evtl. den Footer in Dateien auslagern.
        Dann muss man nicht jede Seite bei Änderungen anfassen. JFL -->
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <section id="previewHeadline">
            Warteraum
        </section>

        <div>
            Du wirst die Lektion <strong><?php echo($_SESSION['lesson']) ?></strong> aus dem Modul <strong><?php echo($_SESSION['modul']) ?></strong> spielen!
        </div>
        
        <section>
            
            <div id="playerField">
                <div class="playerFieldEntry">
                    <img src="<?php echo($_SESSION['icon']) ?>" alt="">
                    <br>
                    <?php echo($_SESSION['name']) ?>
                    <br>
                    <button>ready</button>
                </div>
                <div class="playerFieldEntry">
                    
                </div>
                <div class="playerFieldEntry">
                    
                </div>
                <div class="playerFieldEntry">
                    
                </div>
                
                
            </div>
            
        </section>

        

    </body>
</html>

