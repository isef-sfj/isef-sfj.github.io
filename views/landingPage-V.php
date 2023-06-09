<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Datenbankanbindung testen</title>
</head>
<body>
        <header id="header">
                <h1>ISEF-Duell</h1>
        </header>

        <section class="previewHeadline">
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
            <div><a href="nameIconChoice-C.php?goal=nameIconChoice" class="mainButton">
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
</html>