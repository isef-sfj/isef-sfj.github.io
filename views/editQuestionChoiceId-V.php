<?php
include "essentials/head.php";
?>
<body>



        
        <header id="header">
          
                <h1>ISEF-Duell</h1>
                
            
        </header>

        
        <h2>Bitte wähle eine ID aus</h2>

        
    
    
        
        
        <div >
            
            
            <select id="idSelect" >
                <?php foreach($ids as $datai) { ?>
                    <option name="id" id="id" value="<?php echo $datai['id']; ?>"><?php echo $datai['id']; ?></option>
                <?php } ?>
            </select>
           
                    

        </div>


        


        
        <div class="flexContainerEQQuestionItemButton">
            <button onClick="sendid()">Frage bearbeiten</button>
        </div>
        <br><br>
        
    

    <section id="arrowBox">
            <a href="../classes/editQuestionChoice-C.php?goal=modul" ><img src="../img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
            immer an der gleichen Stelle ist habe ich einen leeren
            Platzhalter eingefügt. JFL-->
            <div class="arrowPlaceholder"></div> 
        </section>

</body>
</html>