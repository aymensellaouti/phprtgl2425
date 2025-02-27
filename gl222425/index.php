<?php 
    $section = 'GLRT';
    $names = [
        "aymen",
        "mohamed"
    ];

    var_dump($GLOBALS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple PHP</title>
</head>
<body>
    <h1>PHP <?php echo $section ?></h1>

    <h2>Users : </h2>
    <ol>
    <?php foreach($names as $user) {?>
        <li><?=$user ?></li>
    <?php } ?>
    </ol>
</body>
</html>