<?php
    // ******************************
    $frase = "Dovresti assumere molta frutta, verdura, e fibra ogni giorno.";
    // ******************************
    $img = ['https://i.imgur.com/5pTeBdC.gif', 'trump gif'];
    // ******************************
?>

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
        <h3>/php-badwords/index.php?badwords=fibra</h3>
        <br>
        <p>
            <?php var_dump($frase); ?>
        </p>
        <br>
        <p>
            <?php var_dump(str_replace($_GET['badwords'], '***', $frase)); ?>
        </p>
        <br>
        <img src="<?php echo $img[0]; ?>" alt="<?php echo $img[1]; ?>">
    </body>
</html>
