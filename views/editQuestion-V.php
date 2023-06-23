<?php
include "essentials/head.php";
?>
<body>


        
        <header id="header">
          
                <h1>ISEF-Duell</h1>
                
            
        </header>
        <!-- <section class="previewHeadline">
            Frage bearbeiten
        </section> -->
        <h2>Frage bearbeiten</h2>
        <br>
    <form action="../classes/editQuestion-C.php" method="post">
        
        
        <div class="flexContainerEQQuestion">

                <?php foreach($question as $data) { ?>

                    

                    <label class="previewHeadline" for="name">ID:</label>
                    <textarea class="insertForm" readonly class="flexContainerEQQuestionItemQuestion" name="id" id="id" >
                    <?php echo $id; ?>
                    </textarea>

                    <label class="previewHeadline" for="frage">Frage:</label>
                    <textarea class="insertForm" class="flexContainerEQQuestionItemQuestion" name="frage" id="frage" >
                    <?php echo $data['frage']; ?>
                    </textarea>

                    <label class="previewHeadline" for="antwort1_richtig">Richtige Antwort:</label>
                    <textarea class="insertForm" class="flexContainerEQQuestionItemQuestion" name="antwort1_richtig" id="antwort1_richtig" >
                    <?php echo $data['antwort1_richtig']; ?>
                    </textarea>

                    <label class="previewHeadline" for="antwort2">Erste falsche Antwort:</label>
                    <textarea class="insertForm" class="flexContainerEQQuestionItemQuestion" name="antwort2" id="antwort2" >
                    <?php echo $data['antwort2']; ?>
                    </textarea>

                    <label class="previewHeadline" for="antwort3">Zweite falsche Antwort:</label>
                    <textarea class="insertForm" class="flexContainerEQQuestionItemQuestion" name="antwort3" id="antwort3" >
                    <?php echo $data['antwort3']; ?>
                    </textarea>

                    <label class="previewHeadline" for="antwort4">Dritte falsche Antwort:</label>
                    <textarea class="insertForm" class="flexContainerEQQuestionItemQuestion" name="antwort4" id="antwort4" >
                    <?php echo $data['antwort4']; ?>
                    </textarea>

                <?php } ?>
                
           
                <input value="edit" name="goal" type="hidden" >
            

        </div>

    
        

       
        <br><br>


        <section id="arrowBox">
            <a href="../classes/editQuestionChoice-C.php?goal=modul" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <div class="flexContainerEQQuestionItemButton">
               <button class="submButton">Frage speichern</button>
            </div>
        </section>

    </form>

    <form action="../classes/editQuestion-C.php" method="post">
        <input value="delete" name="goal" type="hidden" >
        <input value=<?php echo "$id" ?> name="id" type="hidden" >
        <button class="deleteButton">Frage löschen</button>

    </form>
</body>
</html>