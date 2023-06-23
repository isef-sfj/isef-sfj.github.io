<?php
include "essentials/head.php";
?>
<body>


        
        <header id="header">
          
                <h1>ISEF-Duell</h1>
                
            
        </header>

        
                <h2>Frage bearbeiten</h2>

        
    
    <form action="../classes/editQuestion-C.php" method="post">
        
        
        <div class="flexContainerEQQuestion">

                <?php foreach($question as $data) { ?>

                    

                    
                    <textarea readonly class="flexContainerEQQuestionItemQuestion" name="id" id="id" >
                    <?php echo $id; ?>
                    </textarea>

                    <textarea class="flexContainerEQQuestionItemQuestion" name="frage" id="frage" >
                    <?php echo $data['frage']; ?>
                    </textarea>

                    <textarea class="flexContainerEQQuestionItemQuestion" name="antwort1_richtig" id="antwort1_richtig" >
                    <?php echo $data['antwort1_richtig']; ?>
                    </textarea>

                    <textarea class="flexContainerEQQuestionItemQuestion" name="antwort2" id="antwort2" >
                    <?php echo $data['antwort2']; ?>
                    </textarea>

                    <textarea class="flexContainerEQQuestionItemQuestion" name="antwort3" id="antwort3" >
                    <?php echo $data['antwort3']; ?>
                    </textarea>

                    <textarea  class="flexContainerEQQuestionItemQuestion" name="antwort4" id="antwort4" >
                    <?php echo $data['antwort4']; ?>
                    </textarea>

                <?php } ?>
                
           
                <input value="edit" name="goal" type="hidden" >
            

        </div>

    
        

        <div class="flexContainerEQQuestionItemButton">
            <button>Frage speichern</button>
        </div>
        <br><br>
    </form>

    <form action="../classes/editQuestion-C.php" method="post">
        <input value="delete" name="goal" type="hidden" >
        <input value=<?php echo "$id" ?> name="id" type="hidden" >
        <button>Frage löschen</button>
        </form>

    <section id="arrowBox">
            <a href="../classes/editQuestionChoice-C.php?goal=id" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
            immer an der gleichen Stelle ist habe ich einen leeren
            Platzhalter eingefügt. JFL-->
            <div class="arrowPlaceholder"></div> 
        </section>

</body>
</html>