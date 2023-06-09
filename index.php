<?php session_start()?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="saveData.php" method="POST">
<p>Name:<br>
<input type="text" name="name" value="">
<p>Exit Wort:<br>
<input type="text" name="exitwort" value="">
<p><input type="Submit" value="speichern">
</form>
    
</body>
</html>