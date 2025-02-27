<?php 
    $section = "GL223";
    $names = [
        "aymen",
        "skander"
    ];
    var_dump($GLOBALS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1><?php echo $section ?></h1>
    <ol>
        <?php for ($i = 0; $i < count($names); $i++) { ?>
           <li><?php echo $names[$i] ?></li>
        <?php } ?>
    </ol>
</body>
</html>