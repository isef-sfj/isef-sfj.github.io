<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>ISEF-Quiz</title>
</head>
<body>

<?php
   
    include ('dbConnection.php');

    $id = $_GET["id"];
    $query = "select * from quizfragen where id=$id limit 1";
    $datafromdb = $pdo->query($query);

?>

        
        <header id="header">
          
                <h1>ISEF-Duell</h1>
                
            
        </header>

        
                <h2>Frage bearbeiten</h2>

        
    
    <form action="dbUpdate.php" method="post">
        
        
        <div class="flexContainerEQQuestion">

                <?php foreach($datafromdb as $data) { ?>

                    

                    
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
                
           
            
            

        </div>
        
        <?php echo '<a href="dbDelete.php?id=' . $data['id'] .'">Frage löschen</a>' ?>


        <div class="flexContainerEQQuestionItemButton">
            <button>Frage speichern</button>
        </div>
        <br><br>
    </form>

    <section id="arrowBox">
            <a href="/editQuestionChoice.php" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
            immer an der gleichen Stelle ist habe ich einen leeren
            Platzhalter eingefügt. JFL-->
            <div class="arrowPlaceholder"></div> 
        </section>

</body>
</html>