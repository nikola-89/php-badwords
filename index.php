<?php
    // ******************************
    $frase = "Dovresti assumere molta frutta, verdura, e fibra ogni giorno.";
    // ******************************
?>

<!-- http://localhost:8888/php-badwords/index.php?badwords=fibra -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="dist/app.css">
        <script src="dist/app.js" charset="utf-8"></script>
        <title>php-badwords</title>
    </head>
    <body>
        <p>
            <?php var_dump($frase); ?>
        </p>
        <br>
        <p>
            <?php echo str_replace($_GET['badwords'], '***', $frase); ?>
        </p>
    </body>
</html>
