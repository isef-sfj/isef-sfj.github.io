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



<table border="1" cellpadding="5" cellspacing="5" align="center">
    <tr>
        <th>id</th>
        <th>Modul</th>
        <th>Lektion</th>
        <th>Name</th>
        <th>Frage</th>
        <th>Richtige Antwort</th>
        <th>1. Falsche Antwort</th>
        <th>2. Falsche Antwort</th>
        <th>3. Falsche Antwort</th>
        <th>LÖSCHEN</th>
    </tr>

    <?php foreach($datafromdb as $data) { ?>

    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['modul']; ?></td>
        <td><?php echo $data['lektion']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['frage']; ?></td>
        <td><?php echo $data['antwort1_richtig']; ?></td>
        <td><?php echo $data['antwort2']; ?></td>
        <td><?php echo $data['antwort3']; ?></td>
        <td><?php echo $data['antwort4']; ?></td>
        <td><?php echo '<a href="/dbDelete.php?id=' . $data['id'] .'">Klick2Del</a>' ?></td>
        <!--      echo '<a href="'.$link_address.'">Link</a>'; -->


    </tr>
    <?php } ?>
</table>


</body>
</html>