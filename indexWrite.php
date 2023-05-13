<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datenbankanbindung testen</title>
</head>
<body>

    <div>Das wurde bereits eingegeben:</div>

<?php

include ('dbConnection.php');


$query = "select * from quizfragen";
$datafromdb = $pdo->query($query);

?>



<table border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
    <th>id</th>
    <th>Modul</th>
    <th>Lektion</th>
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
    <td><?php echo $data['frage']; ?></td>
    <td><?php echo $data['antwort1_richtig']; ?></td>
    <td><?php echo $data['antwort2']; ?></td>
    <td><?php echo $data['antwort3']; ?></td>
    <td><?php echo $data['antwort4']; ?></td>
    <td><?php echo '<a href="dbDelete.php?id=' . $data['id'] .'">Klick2Del</a>' ?></td>


</tr>
<?php } ?>
</table>


</body>
</html>