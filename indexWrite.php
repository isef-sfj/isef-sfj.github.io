<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datenbankanbindung testen</title>
</head>
<body>
    <h1>Daten eingeben</h1>
    
    <form action="dbWrite.php" method="post">
        
        <label for="name">Modul</label>
        <input id="modul" name="modul" type="text">
        
        <br>
        
        <label for="name">Lektion</label>
        <input id="lektion" name="lektion" type="text">
        
        <br>
        
        <label for="name">Name</label>
        <input id="name" name="name" type="text">
        
        <br>
        
        <label for="text">Frage</label>
        <textarea name="frage" id="frage" ></textarea>
        
        <br>
        
        <label for="text">Richtige Antwort</label>
        <textarea name="antwort1_richtig" id="antwort1_richtig" ></textarea>
        
        <br>
        
        <label for="text">1. falsche Antwort</label>
        <textarea name="antwort2" id="antwort2" ></textarea>
        
        <br>
        
        <label for="text">2. falsche Antwort</label>
        <textarea name="antwort3" id="antwort3" ></textarea>
        
        <br>
        
        <label for="text">3. falsche Antwort</label>
        <textarea name="antwort4" id="antwort4" ></textarea>
        
        <br>
        
        <button>Daten speichern</button>
    </form>

    <div>Das wurde bereits eingegeben:</div>

    <?php

include "dbConnection.php";


$query = "select * from quizfragen";
$datafromdb = $pdo->query($query);
$hrefStart = '<a href="';
$delLink = "/dbDelete?id=";

?>


</body>
</html>