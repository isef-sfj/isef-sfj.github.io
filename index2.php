<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>

    <?php
        include "classes/questionclass.php";

        $testObj = new Question();
        var_dump($testObj->getQuestions(5));
    ?>
</body>
</html>